<?php

require_once 'FileUtility.php';
require_once 'Random.php';

$random = new Random();

$records = $random->generateRecords();

$filename = 'persons.csv';
$handle = fopen($filename, 'w');

$header = [
    'UUID', 
    'Title', 
    'First Name', 
    'Last Name', 
    'Street Address', 
    'Barangay', 
    'Municipality', 
    'Province', 
    'Country', 
    'Phone Number', 
    'Mobile Number',
    'Company Name', 
    'Company Website', 
    'Job Title', 
    'Favorite Color', 
    'Birthdate', 
    'Email Address', 
    'Password'
];
fputcsv($handle, $header);

foreach ($records as $record) {
    fputcsv($handle, $record);
}

fclose($handle);

echo "Data generated and saved to $filename.";

?>
