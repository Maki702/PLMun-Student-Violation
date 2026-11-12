
<?php

require_once "config/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $student_number = trim($_POST["student_number"]);
    $pin = $_POST["pin"];

    if (empty($student_number) || empty($pin)) {

        $message = "Please fill in all fields.";

    } else {

        // Hash the PIN.
        $hashed_password = password_hash($pin, PASSWORD_DEFAULT);

        // Insert the account.
        $sql = "INSERT INTO student_users (student_number, password)
                VALUES (?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $student_number, $hashed_password);

        if ($stmt->execute()) {
            $message = "Student account created successfully!";
        } else {
            if ($stmt->errno === 1062) {
                $message = "Student number already exists.";
            } else {
                $message = "Error creating account.";
            }
        }

        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Student Account</title>
</head>

<body>

    <h2>Create Student Account</h2>

    <p><?php echo htmlspecialchars($message); ?></p>

    <form method="POST">

        <label>Student Number</label>
        <input type="text" name="student_number" required>

        <br><br>

        <label>PIN Number</label>
        <input type="password" name="pin" required>

        <br><br>

        <button type="submit">Create Account</button>

    </form>

</body>
</html>
