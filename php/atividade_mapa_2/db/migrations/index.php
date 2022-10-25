<?php
require_once("2022_09_16_create_schema.php");
require_once("2022_09_16_create_protocols_table.php");

$objMigration = new Migration();
$objMigration->slqCreateSchema();

$objCreateTable = new CreateTable();
$objCreateTable->CreateTable();

header('location: ../../index.php');