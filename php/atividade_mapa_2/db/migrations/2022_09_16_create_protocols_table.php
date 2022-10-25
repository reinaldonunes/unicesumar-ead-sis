<?php

class CreateTable
{
    public function CreateTable()
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=mapa_reinaldo", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $slqCreateTable = "CREATE TABLE protocols(
                id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                protocol_code int(11) NOT NULL,
                requester varchar(255) NOT NULL,
                description text NOT NULL,
                email varchar(255) NOT NULL,
                year year(4) NOT NULL,
                status tinyint(4) NOT NULL,
                created_at date NOT NULL
            )";
            $stmt = $pdo->prepare($slqCreateTable);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}