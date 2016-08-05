<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header>
    <a href="<?=APP_ROOT?>"><img src="<?=APP_ROOT?>/content/images/site-logo.png"></a>
    <a href="<?=APP_ROOT?>/">Home</a>
	<?php if ($this->isLoggedIn) { ?>
	<a href="<?=APP_ROOT?>/posts">Posts</a>
	<a href="<?=APP_ROOT?>/posts/create">Create Post</a>
	<a href="<?=APP_ROOT?>/users">Users</a>
	<?php } else { ?>
	<a href="<?=APP_ROOT?>/users/login">Login</a>
	<a href="<?=APP_ROOT?>/users/register">Register</a>
    <?php } ?>
    <?php if($this->isLoggedIn) { ?>
        <div class="buttonLogOut">
            <a href="<?=APP_ROOT?>/users/logout"><button class="buttonStyle" type="button">Logout</button></a>
        </div>
        <div class="greeting">
           Welcome, <b><?= htmlspecialchars($_SESSION['username']); ?></b>
        </div>
    <?php } ?>

</header>


<?php include_once "messages.php" ?>