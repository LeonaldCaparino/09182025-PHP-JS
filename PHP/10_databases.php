<?php

if (isset($_GET["id"])) {
    $contactsFile = 'contacts.json';
    $contacts = file_exists($contactsFile) ? json_decode(file_get_contents
    ($contactsFile), true) : [] ;

    // Remove the contact by id
    $contacts = array_filter($contacts, fn($c) => $c["id"] !== (int) $_GET["id"]);

    file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));

    // Fetch the contact's i,age name before deleting
    $stmt = $pdo->prepare("SELECT image FROM contacts WHERE id =id");
    $stmt->execute(['id' => $contactId]);

    echo"Contact Deleted";
}