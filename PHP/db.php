<?php

try {
    $pdo = new PDO('sqlite:contacts.db'); // SQLite file
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Error handling

    // Create table if not exists
    $pdo->exec("CREATE TABLE IF NOT EXISTS contacts (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone TEXT,
        image TEXT
    );");

    return $pdo; // kung ini-include mo 'to sa ibang PHP files
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    return null;
}
