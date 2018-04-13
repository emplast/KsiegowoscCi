<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>


<style type="text/css">
    label { display: inline-block; width: 20%; }
    .realperson-challenge { display: inline-block;height: 25px;}

    #cont_1{
        margin-top: 50px;

    }
    
</style>

<div class="col-lg-4 col-lg-offset-4">
    <?php echo form_open('index.php/Login/loginUser', array('id' => 'form_1')) ?>
    <div class="caption" id="cont_1">
        <ul class="nav">
            <li><p class="pull-left">Login:&nbsp;&nbsp;&nbsp;</p><?php echo form_input(array('name' => 'part_1', 'id' => 'login', 'type' => 'text', 'class' => 'form-control ', 'placeholder' => 'Login')) ?></li>
            </br><li><p class="pull-left">Hasło:&nbsp;&nbsp;&nbsp;</p><?php echo form_password(array('name' => 'part_2', 'id' => 'haslo', 'type' => 'text', 'class' => 'form-control ', 'placeholder' => 'Hasło')) ?></li>
            </br><li><a class="pull-left" href="<?php echo base_url('index.php/NewUser/index'); ?>">Nowy użytkownik</a><a class="pull-right" href="<?php echo base_url('index.php/NewPassword/index'); ?>">Zapomniałem hasła</a></li>
           
        </ul>
    </div>
    </br>
    <?php echo form_input(array('name' => 'part_7', 'id' => 'button_1', 'type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Zaloguj')); ?>

</form>

</div>
<div class="container" id="count_1">
    </br>
    </br>
    </br>
</div>
