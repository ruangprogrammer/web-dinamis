<!DOCTYPE html>
<html>
<head>
    <title>Creating Dynamic Web Pages With PHP</title>
    <!-- menghubungkan dengan file css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- menghubungkan dengan file jquery -->
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
    <header>
        <h1 class="judul">WWW.RUANGPROGRAMMER.COM</h1>
        <h3 class="deskripsi">Creating Dynamic Web Pages With PHP</h3>
    </header>

    <div class="menu">
        <ul>
            <li><a href="index.php?page=home">HOME</a></li>
            <li><a href="index.php?page=about">ABOUT</a></li>
            <li><a href="index.php?page=contact-me">CONTACT ME</a></li>
        </ul>
    </div>

    <div class="badan">


        <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include "app/home.php";
                    break;
                case 'about':
                    include "app/about.php";
                    break;
                case 'contact-me':
                    include "app/contact-me.php";
                    break;
                default:
                    echo "<center><h3>--ERROR 404--</h3></center>";
                    break;
            }
        }else{
            include "app/home.php";
        }

        ?>

    </div>
</div>
</body>
</html>