<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Allow only logged-in students.
if (
    !isset($_SESSION["student_number"]) ||
    !isset($_SESSION["role"]) ||
    $_SESSION["role"] !== "student"
) {
    header("Location: ../main/index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Violation System | PLMun</title>

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/records.css">
    <link rel="stylesheet" href="../css/description.css">
    <link rel="stylesheet" href="../css/community-service.css">
</head>

<body>

    <div class="header-wrapper">

        <!-- HEADER -->
        <header class="main-header">

            <div class="header-content">

                <img src="../images/PLMUN LOGO.png"
                    alt="PLMun Logo"
                    class="PLMun-Logo">

                <div class="header-text">
                    <h2>Student Violation System</h2>
                    <p>Pamantasan ng Lungsod ng Muntinlupa</p>
                </div>

            </div>

            <!-- HAMBURGER MENU -->
            <button class="menu-toggle" id="menuToggle"
                aria-label="Open navigation menu"
                aria-expanded="false"
                aria-controls="navbar">

                <span></span>
                <span></span>
                <span></span>

            </button>

        </header>


