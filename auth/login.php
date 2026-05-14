<?php
// login.php
include("../includes/config.php");
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Email Validation
    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    // Password Validation
    if (empty($password)) {
        $errors['password'] = "Password is required.";
    }

    // Demo Success
    if (empty($errors)) {
        $success = "Login Successful!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Style Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="./account.css">

</head>
<body>

<div class="login-container">

    <div class="login-card">

        <div class="logo">
            <i class="fa-brands fa-spotify"></i>
            <h2>Welcome Back</h2>
        </div>

        <?php if($success): ?>
            <div class="success-msg">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>

        <form method="POST">

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

                <?php if(isset($errors['email'])): ?>
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
                           placeholder="Enter your password">

                </div>

                <?php if(isset($errors['password'])): ?>
                    <div class="error-text">
                        <?php echo $errors['password']; ?>
                    </div>
                <?php endif; ?>

            </div>

            <button type="submit" class="btn-login">
                Login
            </button>

        </form>

        <!-- Static Line -->
        <div class="register-line">
            Don't have an account?
            <a href="register.php">Create Account</a>
        </div>

    </div>

</div>

</body>
</html>