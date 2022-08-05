<?php

require('config.php');

date_default_timezone_set("America/Bogota");


$mysqldump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
$backup_file = '"C:\AppServ\www\mock\php\basedatos\backups\"'.$dbname. "-".date("Y-m-d-H-i-s"). ".sql";

system("$mysqldump --no-defaults -u $username -p$password $dbname > $backup_file");

?>