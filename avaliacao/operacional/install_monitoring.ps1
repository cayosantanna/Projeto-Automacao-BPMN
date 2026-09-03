[CmdletBinding()]
param(
    [string]$TaskName = 'ProjetoIC-Monitoramento',
    [ValidateRange(1, 1440)][int]$IntervalMinutes = 1,
    [switch]$RunNow
)

$ErrorActionPreference = 'Stop'
$root = (Resolve-Path (Join-Path $PSScriptRoot '..\..')).Path
$python = Join-Path $root '.venv\Scripts\pythonw.exe'
$collector = Join-Path $root 'avaliacao\operacional\collector.py'
$runtime = Join-Path $root 'avaliacao\runtime\monitoring'

if (-not (Test-Path -LiteralPath $python -PathType Leaf)) {
    throw "Ambiente Python não encontrado em $python"
}

$action = New-ScheduledTaskAction `
    -Execute $python `
    -Argument ('"{0}" --runtime-dir "{1}"' -f $collector, $runtime) `
    -WorkingDirectory $root
$trigger = New-ScheduledTaskTrigger `
    -Once `
    -At ((Get-Date).AddMinutes(1)) `
    -RepetitionInterval (New-TimeSpan -Minutes $IntervalMinutes)
$settings = New-ScheduledTaskSettingsSet `
    -AllowStartIfOnBatteries `
    -DontStopIfGoingOnBatteries `
    -MultipleInstances IgnoreNew `
    -ExecutionTimeLimit (New-TimeSpan -Minutes 5) `
    -StartWhenAvailable `
    -Hidden

Register-ScheduledTask `
    -TaskName $TaskName `
    -Action $action `
    -Trigger $trigger `
    -Settings $settings `
    -Description 'Coleta técnica local oculta de SLO e drift do projeto-ic; sem confirmação semântica.' `
    -Force | Out-Null

if ($RunNow) {
    Start-ScheduledTask -TaskName $TaskName
}

$task = Get-ScheduledTask -TaskName $TaskName
[pscustomobject]@{
    TaskName = $task.TaskName
    State = $task.State
    IntervalMinutes = $IntervalMinutes
    Collector = $collector
    RuntimeDirectory = $runtime
}
