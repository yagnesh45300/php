<?php
// Set the timezone to your local timezone
date_default_timezone_set('America/New_York');

// Get the current timestamp
$timestamp = time();

// Display the date and time in different formats
echo "Date: " . date('Y-m-d', $timestamp) . "<br>";
echo "Time: " . date('H:i:s', $timestamp) . "<br>";
echo "Date and time: " . date('Y-m-d H:i:s', $timestamp) . "<br>";
echo "Day of the week: " . date('l', $timestamp) . "<br>";
echo "Month name: " . date('F', $timestamp) . "<br>";
?>