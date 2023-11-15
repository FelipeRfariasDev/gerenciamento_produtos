<?php
include 'function.php';

delete($_GET["id"]);

header("location: index.php");
