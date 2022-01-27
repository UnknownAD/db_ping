<?php
$dbs=  new pdo("pgsql: host=localhost,dbname=postgres", "postgres","*******");
$exec = $dbs->prepare("SELECT * FROM MSG WHERE TRUE");
$exec->execute();
$rows=$exec->fetchAll();
foreach($rows as $row){  echo "<h>".$row["username"].":".$row["msg"]."</h><br>" ;


}
?>
