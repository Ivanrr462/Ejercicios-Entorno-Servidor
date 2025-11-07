<?php
$conn = new PDO("mysql:host=db;dbname=dwes;charset=utf8", "root", "root");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);