param(
    [Parameter(Mandatory = $true)]
    [string]$Saida,
    [switch]$Resume,
    [switch]$SkipXai
)

$ErrorActionPreference = 'Stop'
$root = (Resolve-Path (Join-Path $PSScriptRoot '..\..')).Path
$output = [System.IO.Path]::GetFullPath((Join-Path $root $Saida))
[System.IO.Directory]::CreateDirectory($output) | Out-Null
$pidPath = Join-Path $output 'execucao.pid'
$metadataPath = Join-Path $output 'execucao_lancamento.json'

$env:OMP_NUM_THREADS = '4'
$env:MKL_NUM_THREADS = '4'
$env:OPENBLAS_NUM_THREADS = '4'
$env:NUMEXPR_NUM_THREADS = '4'

$arguments = @(
    (Join-Path $root 'avaliacao\scripts\selecionar_modelos_supervisionados.py'),
    '--saida',
    $output
)
if ($Resume) {
    $arguments += '--resume'
}
if ($SkipXai) {
    $arguments += '--skip-xai'
}

$stdout = Join-Path $output 'execucao.stdout.log'
$stderr = Join-Path $output 'execucao.stderr.log'
$PID | Set-Content -LiteralPath $pidPath -Encoding ascii
@{
    schema = 'projeto-ic-lancamento-selecao-v1'
    started_at = [DateTimeOffset]::Now.ToString('o')
    launcher_pid = $PID
    output = $output
    resume = [bool]$Resume
    skip_xai = [bool]$SkipXai
    thread_limits = 4
} | ConvertTo-Json | Set-Content -LiteralPath $metadataPath -Encoding utf8
try {
    & python @arguments 1> $stdout 2> $stderr
    $exitCode = $LASTEXITCODE
    $metadata = Get-Content -LiteralPath $metadataPath -Raw | ConvertFrom-Json
    $metadata | Add-Member -NotePropertyName finished_at -NotePropertyValue ([DateTimeOffset]::Now.ToString('o'))
    $metadata | Add-Member -NotePropertyName exit_code -NotePropertyValue $exitCode
    $metadata | ConvertTo-Json | Set-Content -LiteralPath $metadataPath -Encoding utf8
    exit $exitCode
}
finally {
    Remove-Item -LiteralPath $pidPath -Force -ErrorAction SilentlyContinue
}
