<?php

/**
 * Created by PhpStorm.
 * User: adminkofi
 * Date: 28/01/17
 * Time: 10:53
 */

// here goes the css files


defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <meta http-equiv="content-type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css.bootstrap-responsive.min.css" rel="stylesheet">

</head>
<body>

<div id="container">

	<h1>Welcome to a Tic-Tac-Toe Game!</h1>

            <h1>Sign in to play the game</h1>

    <?php echo validation_errors();?>

    <?php echo form_open('LoginController/checkLogin');?>

    Username: <br/>
    <input type ="text" name="username" size="15" maxlength="30"/><br/>

    Password: <br/>
    <input type="password" name="password" size="15"    maxlength="30" />

    <input type="submit" value="Login" name="submit"/>

    </form>

    <p>How to play <a href="/play_tictactoe">how_to_play</a>.</p>
	</div>

</div>
        <script src="/assets/js/bootstrap.js"></script>
        <script src="/assets/js/bootstrap.js"></script>
</body>
</html>