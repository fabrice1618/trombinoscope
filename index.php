<?php
require_once("view.php");
require_once("database.php");

$bdd = null;
openDatabase();

echo view( html_alert(), ["toto"] );

closeDatabase();
