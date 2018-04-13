<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header>
      <nav id="nav_bar" class="navbar navbar-inverse fixed-top" role="navigation">
        <div class=" container" id="count">
            <h6> <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav pull-left">
                       <li ><a href="<?php echo base_url('index.php/Welcome/index');?>"><img src="<?php echo base_url('jpg/logo/EmSoftLogo_29_32.png');?>" alt="EmSoft.net.pl" width="32px" height="32px"/>&nbsp;Księgowość Emsoft</a></li>
                    </ul>              
                     <ul class="nav navbar-nav">
                        <li ><a href="#">Home</a></li>
                        <li ><a href="#">O programie</a></li>
                        <li ><a href="#">O NAS</a></li> 
                        <li ><a href="<?php echo base_url('index.php/Login/index');?>">Księgowość Emsoft</a></li>
                        <li ><a href="#">KONTAKT</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="<?php echo base_url('index.php/Login/index');?>">Zaloguj</a></li>
                        <li><a href="#">Zalogowany:</a></li>
                        <li><a href="#"><?php echo $login;?></a></li>
                        <li><a href="<?php echo base_url('index.php/LogOut/index');?>">Wyloguj</a></li>
                   </ul>
                </div></h6><!--/.nav-collapse -->
             </div>
        </nav>
</header>