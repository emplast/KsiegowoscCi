<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('dist/js/jquery.plugin.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('dist/js/jquery.realperson.js'); ?>"></script>
<style type="text/css">
    #login,
    #haslo,
    #imie,
    #nazwisko,
    #email,
    #telKomorkowy
    {
        width: 300px;
        margin-left: 110px;

    }
    #defaultReal{
        width: 150px;
        margin-left: 260px;
        margin-top: -45px;
    }
    #cont_1{
        margin-top: 50px;
        margin-left:150px;
    }
    .realperson-challenge {
        display: block;
        color: #000;
    }
    .realperson-text {
        font-family: "Courier New",monospace !important;
        font-size: 6px;
        font-weight: bold;
        letter-spacing: -1px;
        line-height: 3px;
    }
    .realperson-regen {
        padding-top: 4px;
        font-size: 12px;
        text-align: center;
        cursor: pointer;
    }
    .realperson-disabled {
        opacity: 0.5;
        filter: Alpha(Opacity=50);
    }
    .realperson-disabled .realperson-regen {
        cursor: default;
    }
</style>
<script>
    $(function () {
        $('#defaultReal').realperson();
        $('#defaultReal').realperson('option', {length: 4, includeNumbers: false,hashName:'realHash',regenerate:'Niewyrażnie'});
       
    });
      
</script>

<div class="container">
    <?php echo form_open('index.php/NewUser/add', array('id' => 'form_1')) ?>
    <div class="caption" id="cont_1">
        </br>
        <p style="color:red" ><?php echo $alert ?></p>
        </br>
        <ul class="nav">
            <li><p class="pull-left">Login:</p><?php echo form_input(array('name' => 'part_1', 'id' => 'login', 'type' => 'text', 'class' => 'form-control ', 'placeholder' => 'Login')) ?></li><?php echo form_error('part_1', '<div style="color:red">', '</div>'); ?>
            </br><li><p class="pull-left">Hasło:</p><?php echo form_password(array('name' => 'part_2', 'id' => 'haslo', 'type' => 'text', 'class' => 'form-control ', 'placeholder' => 'Hasło')) ?></li><?php echo form_error('part_2', '<div style="color:red">', '</div>'); ?>
            </br><li><p class="pull-left">Imie:</p><?php echo form_input(array('name' => 'part_3', 'id' => 'imie', 'type' => 'text', 'class' => 'form-control ', 'placeholder' => 'Imie')) ?></li><?php echo form_error('part_3', '<div style="color:red">', '</div>'); ?>
            </br><li><p class="pull-left">Nazwisko:</p><?php echo form_input(array('name' => 'part_4', 'id' => 'nazwisko', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nazwisko')) ?></li><?php echo form_error('part_4', '<div style="color:red">', '</div>'); ?>
            </br><li><p class="pull-left">E-mail:</p><?php echo form_input(array('name' => 'part_5', 'id' => 'email', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'E-mail')) ?></li><?php echo form_error('part_5', '<div style="color:red">', '</div>'); ?>
            </br><li><p class="pull-left">Tel komórkowy:</p><?php echo form_input(array('name' => 'part_6', 'id' => 'telKomorkowy', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Tel Komórkowy')) ?></li><?php echo form_error('part_6', '<div style="color:red">', '</div>'); ?>
            </br><li><?php echo form_input(array('name' => 'defaultReal', 'id' => 'defaultReal', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nie jestem robotem')) ?></li><?php echo form_error('defaultReal', '<div style="color:red">', '</div>'); ?>
            
            
        </ul>

    </div>
    <div class="container text-center">
        </br>
        </br>
        <?php echo form_input(array('name' => 'part_7', 'type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Zapisz')); ?>
    </div>
</div>