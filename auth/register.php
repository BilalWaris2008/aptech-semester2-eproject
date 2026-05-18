<?php
include("../includes/config.php");
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Full Name Validation
    if (empty($fullname)) {
        $errors['fullname'] = "Full name is required.";
    }

    // Email Validation
    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    // Password Validation
    if (empty($password)) {
        $errors['password'] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors['password'] = "Password must be at least 6 characters.";
    }

    // Confirm Password Validation
    if (empty($confirm_password)) {
        $errors['confirm_password'] = "Confirm your password.";
    } elseif ($password !== $confirm_password) {
        $errors['confirm_password'] = "Passwords do not match.";
    }

    // Insert User

    if (empty($errors)) {

        // Check Email Already Exists

        $check_email = mysqli_query(
            $connection,
            "SELECT * FROM users WHERE email='$email'"
        );

        if (mysqli_num_rows($check_email) > 0) {

            $errors['email'] = "Email already exists.";
        } else {

            // Hash Password
            $hashed_password = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            // Insert Query
            $insert_query = mysqli_query(
                $connection,
                "INSERT INTO users(
                fullname,
                email,
                password
            )

            VALUES(
                '$fullname',
                '$email',
                '$hashed_password'
            )"

            );

            if ($insert_query) {
                $success = "Registration Successful!";
            } else {
                $errors['email'] = "Something went wrong.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sound Group Register</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./account.css">


</head>

<body>

    <div class="register-container">

        <div class="register-card">

            <div class="logo">
                <h1>SOUND GROUP</h1>
                <h2>Create Account</h2>
            </div>

            <?php if ($success): ?>
                <div class="success-msg">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>

            <form method="POST">

                <!-- Full Name -->
                <div class="mb-3">
                    <label class="form-label">Full Name</label>

                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </span>

                        <input type="text"
                            name="fullname"
                            class="form-control"
                            placeholder="Enter your full name"
                            value="<?php echo isset($fullname) ? htmlspecialchars($fullname) : ''; ?>">
                    </div>

                    <?php if (isset($errors['fullname'])): ?>
                        <div class="error-text">
                            <?php echo $errors['fullname']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Email</label>

                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-envelope"></i>
                        </span>

                        <input type="email"
                            name="email"
                            class="form-control"
                            placeholder="Enter your email"
                            value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                    </div>

                    <?php if (isset($errors['email'])): ?>
                        <div class="error-text">
                            <?php echo $errors['email']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label">Password</label>

                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-lock"></i>
                        </span>

                        <input type="password"
                            name="password"
                            class="form-control"
                            placeholder="Enter password">
                    </div>

                    <?php if (isset($errors['password'])): ?>
                        <div class="error-text">
                            <?php echo $errors['password']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>

                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-key"></i>
                        </span>

                        <input type="password"
                            name="confirm_password"
                            class="form-control"
                            placeholder="Confirm password">
                    </div>

                    <?php if (isset($errors['confirm_password'])): ?>
                        <div class="error-text">
                            <?php echo $errors['confirm_password']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn-register">
                    Register
                </button>

            </form>

            <!-- Static Login Line -->
            <div class="login-line">
                If you already have an account
                <a href="login.php">Go to Login</a>
            </div>

        </div>

    </div>

</body>

</html>