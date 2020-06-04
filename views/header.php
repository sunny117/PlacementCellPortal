<!DOCTYPE html>
<html>
    <head>
        <title>Placement Cell Portal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="jquery-3.4.1/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="block-logo" class="block-block-content block-logo">
                    <div class="body">
                        <a href="/"><img src="../../../public/images/logo.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="topnav">
            <a id="login" href="../views/login.php" class="<?php if($page=="login"){?>active<?php }?>">Login</a>
            <a id="contact" href="../views/contact.php" class="<?php if($page=="contact"){?>active<?php }?>">Contact</a>
            <a id="about" href="../views/about.php" class="<?php if($page=="about"){?>active<?php }?>">About</a>
            <a id="student" href="../views/student.php" class="<?php if($page=="student"){?>active<?php }?>">Student</a>
            <a id="company" href="../views/company.php" class="<?php if($page=="company"){?>active<?php }?>">Company</a>
            <a id="index" href="../index.php" class="<?php if($page=="index"){?>active<?php }?>">Home</a>
        </div>

        <style type="text/css">
            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .block-logo {
                clear: both;
                margin-top: 5px;
                padding: 0 5%;
            }

            .block-logo a img {
                width: 680px;
            }
            .topnav {
                overflow: hidden;
                background-color: #f7a600;
            }
            
            .topnav a {
                float: right;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            
            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }
            
            .topnav a.active {
                background-color: gray;
                color: white;
            }
        </style>
    </body>
</html>
