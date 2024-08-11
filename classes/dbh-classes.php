<?php

// This is a class that will open a database connection
// We can refer to this without creating an instance
class DatabaseHandler {
    
    protected function connect() {
        try {
            $jsonFilePath = 'C:\Projects\private\HeisenbergWebsite-2.0\db.json';

            // Read the JSON file contents into a string
            $jsonString = file_get_contents($jsonFilePath);

            if ($jsonString === false) {
                die('Error reading the JSON file.');
            }

            // Decode the JSON data into a PHP array
            $jsonData = json_decode($jsonString, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                die('Error decoding the JSON data: ' . json_last_error_msg());
            }

            // Extract username and password from the JSON data
            $username = $jsonData['username'];
            $password = $jsonData['password'];
            $dbName = $jsonData['dbName'];
            
            // Runs connection
            $databaseHandler = new PDO(
            "mysql:host=localhost;dbname=$dbName",
            $username, $password);

            // returns database connection once method is called
            return $databaseHandler;

        }  catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br>";
            // kills connection
            die();
        }
    }
}