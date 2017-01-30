<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }

        body {
            background-color: #c88f94;
            margin: 260px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #e8192a;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #d0a361;
            border: 6px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 5px solid #3f48d0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 16px;
            border: 12px solid #3fd052;
            -webkit-box-shadow: 0 0 8px #d06132;
        }
        button {
            margin: 6px;
            border: 2px groove #c92dd0;
            -webkit-box-shadow: 0 0 8px #4872d0;
        }
    </style>
</head>
<body>

<div id="container">


    <?php echo form_open('LoginController/checkLogin');?>

    <h1>Welcome to a Tic-Tac-Toe Game! </h1>
    <h2>you have signed in successfully, Lets's play! </h2>


    <div id="body">
        <a href="<?php echo base_url(); ?>index.php/tictactoe/index/0">Level 0 </a> <br>
         <a href="<?php echo base_url(); ?>index.php/tictactoe/index/1">Level 1 </a> <br>
         <a href="<?php echo base_url(); ?>index.php/tictactoe/index/2">Level 2 </a> <br>
    </div>
    <button>Logout <a href="<?php echo base_url(); ?>index.php/tictactoe/index/3"></button>
    </form>

</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
    <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>