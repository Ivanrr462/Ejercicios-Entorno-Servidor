<?php
$conn = new PDO("mysql:host=db;dbname=dwes;charset=utf8", "root", "usuario1");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);