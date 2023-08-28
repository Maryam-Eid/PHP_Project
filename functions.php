<?php

use database\DBController;

require ('database\DBController.php');
require ('database\Product.php');

$db = new DBController();

$product = new \database\Product($db);

