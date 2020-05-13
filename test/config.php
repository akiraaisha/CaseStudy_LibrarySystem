<html>
<?php
#define('db_servername', "julian.fufufu.moe");
define('db_servername', "127.0.0.1");
define('db_username', "root");
define('db_password', "4153108");
define('db_database', "test");

$db_conn = mysqli_connect(db_servername, db_username, db_password, db_database);

if (!$db_conn) {
    die("Connection Failed: ".mysqli_connect_error());
}else {
    echo "<!--Connected Successfully to user '".db_username."'"."-->";
}
?>