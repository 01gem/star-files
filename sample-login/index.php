<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GEM STONE MERCHANDISE</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="icons/register_icon.ico" type="image/x-icon">
  <style>
    .register-link {
      margin-top: 15px;
      font-size: 14px;
    }

    .register-link a {
      color: #007bff;
      text-decoration: none;
    }

    .register-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="backend/login.php" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Log In</button>
    </form>
    <div class="register-link">
      <p><a href="php/add-user.php">Create an Account!</a></p>
    </div>
  </div>
</body>
</html>
