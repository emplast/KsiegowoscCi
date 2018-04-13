<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style type="text/css">
    #count_1{
        height: 300px;
    }
</style>
<div class="col-lg-4 col-lg-offset-4">
    <h2>Zmiana Hasła</h2>
    <h5>Witaj <span>&nbsp;<?php echo $imie; ?>&nbsp;</span></br>wpisz dwa razy nowe hasło i potwierdz dokonanie zmian</h5>     
    <?php
    $fattr = array('class' => 'form-signin');
    echo form_open(site_url() . 'index.php/ResetPassword/reset', $fattr);
    ?>
    <div class="form-group">
        <?php echo form_password(array('name' => 'part_1', 'id' => 'part_1', 'placeholder' => 'Hasło', 'class' => 'form-control')); ?>
<?php echo form_error('part_1','<div style="color:red">', '</div>'); ?>
    </div>
    <div class="form-group">
        <?php echo form_password(array('name' => 'part_2', 'id' => 'part_2', 'placeholder' => 'Powtórz Hasło', 'class' => 'form-control')); ?>
<?php echo form_error('part_2','<div style="color:red">', '</div>'); ?>
    </div>

    <?php echo form_submit(array('value' => 'Zmiana hasła', 'class' => 'btn btn-lg btn-primary btn-block')); ?>
<?php echo form_close(); ?>

</div>
<div class="container"id="count_1">
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
</div>