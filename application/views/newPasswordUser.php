<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style type="text/css">
    #count_1{
        height:200px;
    }
</style>
<div class="col-lg-4 col-lg-offset-4">
    <h2>Resetowanie Hasła</h2>
    <p>Proszę podać adres e-mail na który zostanie wysłany link z możliwością zmiany hasła do serwisu</p>
    <?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'index.php/NewPassword/password', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array(
          'name'=>'part_1', 
          'id'=> 'part_1', 
          'placeholder'=>'E-mail:', 
          'class'=>'form-control', 
          'value'=> set_value('email'))); ?>
      <?php echo form_error('part_1','<div style="color:red">', '</div>'); ?>
    </div>
    <?php echo form_submit(array('value'=>'Wyślij', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>    
</div>
<div class="container" id="count_1">
    
</div>
