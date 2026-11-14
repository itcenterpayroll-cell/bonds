<?php
try {
    $db = new PDO('sqlite:' . __DIR__ . '/database.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "CREATE TABLE IF NOT EXISTS prize_bonds (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        Denomination TEXT,
        DrawDate TEXT,
        BondNo TEXT,
        Series TEXT,
        DrawNo TEXT,
        Prize TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
    $db->exec($query);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>