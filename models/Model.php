<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=e_learning",'root','');
    } catch (EXCEPTION $e) {
        echo $e->getMessage();
    }