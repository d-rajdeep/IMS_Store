<?php
session_start();
include 'inc/dbcon.php';

if (isset($_SESSION['IS_LOGIN']) && $_SESSION['IS_LOGIN'] === 'yes') {
    redirect('index.php');
}
$msg = '';

if (isset($_POST['submit'])) {
    $username = mres($con, $_POST['username']);
    $password = mres($con, $_POST['password']);

    $sql = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['NAME'] = $row['username'];
        $_SESSION['GODOWN1'] = 'godown1';
        $_SESSION['IS_LOGIN'] = 'yes';
        redirect('index.php');
    } else {
        $msg = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            background: #ffffff;
            padding: 2rem;
        }

        .login-card .form-control {
            border-radius: 10px;
        }

        .login-card .btn-primary {
            border-radius: 10px;
        }

        .login-title {
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .form-error {
            color: #dc3545;
            font-size: 0.9rem;
        }

        .go-back {
            font-size: 0.85rem;
            display: block;
            margin-bottom: 1rem;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <h4 class="text-center login-title">Admin Login</h4>
        <!-- <a class="go-back" href="../"><i class="fas fa-arrow-left"></i> Back to Main Menu</a> -->

        <?php if ($msg != ''): ?>
            <div class="alert alert-danger py-1 text-center" role="alert">
                <?= $msg ?>
            </div>
        <?php endif; ?>

        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
