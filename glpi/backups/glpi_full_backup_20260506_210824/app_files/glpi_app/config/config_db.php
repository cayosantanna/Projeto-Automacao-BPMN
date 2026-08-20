<?php
class DB extends DBmysql {
   public $dbhost = 'mariadb';
   public $dbuser = 'glpi_user';
   public $dbpassword = 'GlpiPass2024';
   public $dbdefault = 'glpi';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
