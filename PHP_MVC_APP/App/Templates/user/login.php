<h1>Login</h1>

<?php if (isset($_SESSION['after_reg'])): ?>
<font color="green">Congratulations, <?= $_SESSION['after_reg'] ?>. Login in our platform</font>
<?php endif; ?>
<?php unset($_SESSION['after_reg']) ?>

<form method="post">
    Username: <input required type="text" name="username"><br>
    Password: <input required type="text" name="password"><br>
    <input type="submit" value="Login Now!" name="login">
</form>