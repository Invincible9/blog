<?php $this->title = 'Register New User'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>


<form method="post">

    <div>Username: <input type="text" name="username"></div>
    <div>Password: <input type="password" name="password"></div>
    <div>Password Confirm: <input type="password" name="password_confirm"></div>
    <div>Full Name: <input type="text" name="full_name"></div>
    <div><input type="submit" value="Register"></div>
</form>