<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $parentGuardian = $_POST["parentGuardian"];
    $printName = $_POST["printName"];
    $date = $_POST["date"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $zipCode = $_POST["zipCode"];
    $cellPhone = $_POST["cellPhone"];
    $workPhone = $_POST["workPhone"];
    $childPhone = $_POST["childPhone"];
    $parentEmail = $_POST["parentEmail"];
    $childEmail = $_POST["childEmail"];

    $to = "abigaillee@ucwv.edu";
    $subject = "Form Submission from CTOC Website";
    $message = "Name: $name\n";
    $message .= "Parent or Guardian: $parentGuardian\n";
    $message .= "Print Name: $printName\n";

    mail($to, $subject, $message);

    // Redirect the user to a thank you page or back to the form page
    header("Location: thank_you.html");
    exit();
}
?>
