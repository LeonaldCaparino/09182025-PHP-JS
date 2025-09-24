<?php

if (isset($_GET["name"])) {
    $contactsFile = 'contacts.json';
    $contacts = file_exists($contactsFile) 
        ? json_decode(file_get_contents($contactsFile), true) 
        : [];

    // Remove the contact by name
    $contacts = array_filter($contacts, function ($c) {
        return $c["name"] !== $_GET["name"];
    });

    // Reindex array to avoid gaps
    $contacts = array_values($contacts);

    file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));
    echo "Contact Deleted";
}