
<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$error = "";

// Placeholder student account.
$studentNumber = "20260000";
$studentPIN = "1234";

// Redirect if already logged in.
if (
    isset($_SESSION["student_number"]) &&
    isset($_SESSION["role"]) &&
    $_SESSION["role"] === "student"
) {
    header("Location: ../main/home.php");
    exit();
}

// Process student login.
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $enteredStudentNumber = trim($_POST["username"] ?? "");
    $enteredPIN = $_POST["password"] ?? "";

    if (
        $enteredStudentNumber === $studentNumber &&
        $enteredPIN === $studentPIN
    ) {

        session_regenerate_id(true);

        $_SESSION["student_number"] = $studentNumber;
        $_SESSION["role"] = "student";

        header("Location: ../main/home.php");
        exit();

    } else {

        $error = "Invalid Student Number or PIN.";

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Login | PLMun Violation System</title>

    <link rel="stylesheet" href="../css/login.css">

</head>

<body>

    <main class="login-page">

        <div class="login-card">

            <div class="login-header">

                <img src="../images/PLMUN LOGO.png" alt="PLMun Logo">

                <h1>PLMun Violation System</h1>

                <p>Fill out the Form to Login</p>

            </div>

            <?php if (!empty($error)): ?>

                <p class="login-error">
                    <?php echo htmlspecialchars($error); ?>
                </p>

            <?php endif; ?>

            <form action="" method="POST">

                <div class="form-group">

                    <label for="username">Student Number</label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your Student Number"
                        required>

                </div>

                <div class="form-group">

                    <label for="password">Pin Number</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your Pin"
                        required>

                </div>

                <button type="submit">Sign In</button>

            </form>

        </div>

    </main>

    <button id="backToTop" title="Back to Top">
        ↑
    </button>

<script src="../js/top-toggle.js"></script>

</body>

</html>
