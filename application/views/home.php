<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen"
    </head>
<body>

<div id="container">
        <?php echo form_open('LoginController/checkLogin');?>

    <h1>Welcome to a Tic-Tac-Toe Game! </h1>
    <h2>you have signed in successfully, Lets's play! </h2>


    <br id="body">
        <a href="<?php echo base_url(); ?>index.php/tictactoe/index/0">Level 0 </a> </br>
         <a href="<?php echo base_url(); ?>index.php/tictactoe/index/1">Level 1 </a> </br>
         <a href="<?php echo base_url(); ?>index.php/tictactoe/index/2">Level 2 </a> </br>
    </div>
    <button>Logout <a href="<?php echo base_url(); ?>index.php/tictactoe/index/3"></button>
    </form>
</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
    <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>


<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/bootstrap.js"></script>

</body>
</html>