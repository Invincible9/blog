<?php $this->title = 'Login'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<form method="post">

    <div>Username: <input type="text" name="username"></div>
    <div>Password: <input type="password" name="password"></div>
    <div><input type="submit" value="Login"></div>

</form>