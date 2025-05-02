<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GEM STONE MERCHANDISE</title>
  <link rel="stylesheet" href="../css/register.css">
  <link rel="icon" href="../icons/register_icon.ico" type="image/x-icon">
</head>
<body>
  <div class="register-container">
    <h2>Create an Account!</h2>
    <form action="../backend/register.php" method="POST" onsubmit="return validateForm()">
      <div class="form-row">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="text" name="contact_number" placeholder="Phone Number" required>
      </div>
      <input type="email" id="email" name="email" placeholder="Email Address" required>
      <div class="form-row">
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="password" id="repeat-password" name="repeat_password" placeholder="Repeat Password" required>
      </div>
      <button type="submit">Register Account</button>
    </form>
    <hr>
    <p class="login-link"><a href="../index.php">Already have one? Login!</a></p>
  </div>

  <script>
    function validateForm() {
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const repeatPassword = document.getElementById('repeat-password').value;

      // Validate email domain
      const validDomains = ['@gmail.com', '@yahoo.com', '@outlook.com'];
      const isValidEmail = validDomains.some(domain => email.endsWith(domain));

      if (!isValidEmail) {
        alert('Invalid email address! Please use a valid email ending with @gmail.com, @yahoo.com, or @outlook.com only.');
        return false;
      }

      // Validate password match
      if (password !== repeatPassword) {
        alert('Passwords do not match!');
        return false;
      }

      return true;
    }
  </script>
</body>
</html>
