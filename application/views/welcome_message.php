<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Witamy na stronie autorskiego programy Księgowość Emsoft</title>
        <link rel="shortcut icon" href="<?php echo base_url('jpg/logo/EmSoftLogo_32_32.ico');?>" />
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
         <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css');?>">
        <script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery-3.2.1.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"></script>
	<style type="text/css">
            
            #count_1{
                margin-top: 100px;
            }
	
	</style>
</head>
<body>

    <header>
      <nav id="nav_bar" class="navbar navbar-inverse fixed-top" role="navigation">
        <div class=" container" id="count">
            <h6> <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav pull-left">
                       <li>< <a href="<?php echo base_url('index.php/Application/index');?>"><img src="<?php echo base_url('jpg/logo/EmSoftLogo_29_32.png');?>" alt="EmSoft.net.pl" width="32px" height="32px"/>&nbsp;Księgowość Emsoft</a></li>
                    </ul>              
                     <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">O programie</a></li>
                        <li><a href="#">O NAS</a></li> 
                        <li><a href="<?php echo base_url('index.php/Login/index');?>">Księgowość Emsoft</a></li>
                        <li><a href="#">KONTAKT</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="<?php echo base_url('index.php/Login/index')?>">Zaloguj</a></li>
                        <li><a href="#">Zalogowany:</a></li>
                        <li><a href="#"><?php echo $login?></a></li>
                        <li><a href="<?php echo base_url('index.php/LogOut/index');?>">Wyloguj</a></li>
                   </ul>
                </div></h6><!--/.nav-collapse -->
             </div>
        </nav>
</header>
    
    <div class="container text-center" id="count_1">
        <h1>Witamy na stronie</br> autorskiego programu Księgowość Emsoft</h1>
    <h4>Witryna w trakcie realizacji</h4>
    <img src="<?php echo base_url('jpg/remont.jpg');?>"
    </div>
</div>
<div class="container text-center" id="footer">
    <hr>
    <p>© &nbsp; <?php echo date('Y');?> by EmSoft.net.pl.&nbsp;Wszelkie prawa zastrzeżone</p>
    
</div>
</body>
</html>