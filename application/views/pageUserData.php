<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style type="text/css">
    #count_1{
        margin-top: -300%;
        margin-left: 400px;
    }
    #count_2{
        float: left;
    }
    .span{
        color: red;
    }
    #part_0{
        width: 100px;
        height:35px;
        margin-left: 60%;
    }
    #part_1,
    #part_2,
    #part_4,
    #part_5,
    #part_6{
        width:300px;
        margin-left: 180px;
    }
    #part_3{
        width: 200px;
        margin-left: 20px;
        display: inline;
    }
    #part_3a{
        width: 70px;
        margin-left:60px;
        display: inline;
    }
    #part_18,
    #part_19,
    #part_20,
    #part_21,
    #part_22,
    #part_25,
    #part_27,
    #part_28,
    #part_29,
    #part_30{
        width: 300px;
        margin-left: 180px;
    }
    #part_23,
    #part_24,
    #part_26
    {
        width: 100px;
        margin-left: 180px;
    }
    #part_31{
        width: 70px;
        margin-left:280px;
    }
    #part_32{
        width: 70px;
        margin-left:250px;
    }
    #part_33{
        width: 70px;
        margin-left: 320px;
    }
    #part_34{
        width: 300px;
        margin-left: 300px;
    }
    #part_35a{
        width: 60px;
        display: inline;
    }
    #part_35b{
        width: 60px;
        display: inline;
    }
    #part_35c{
        width: 260px;
        display: inline;
    }
    #part_36{
        width: 200px;
        margin-left: 180px;

    }
    #part_45,
    #part_46,
    #part_47,
    #part_48{
        width: 200px;
        margin-left: 150px;
    }
    #part_49{
        width: 100px;
        margin-left: 220px;
    }


</style>
<script type="text/javascript">
    $(function () {
        $('#part_3a').change('click', function () {
            var a = $('#part_3a').val();
            if(a==0){
                $('#img').attr('src','<?php echo base_url('jpg/flags/europeanunion.png');?>');
            }else if(a==1){
                $('#img').attr('src','<?php echo base_url('jpg/flags/at.png');?>');
            }else if(a==2){
                $('#img').attr('src','<?php echo base_url('jpg/flags/be.png');?>');
            }else if(a==3){
                $('#img').attr('src','<?php echo base_url('jpg/flags/bg.png');?>');
            }else if(a==4){
                $('#img').attr('src','<?php echo base_url('jpg/flags/cy.png');?>');
            }else if(a==5){
                $('#img').attr('src','<?php echo base_url('jpg/flags/cz.png');?>');
            }else if(a==6){
                $('#img').attr('src','<?php echo base_url('jpg/flags/de.png');?>');
            }else if(a==7){
                $('#img').attr('src','<?php echo base_url('jpg/flags/dk.png');?>');
            }else if(a==8){
                $('#img').attr('src','<?php echo base_url('jpg/flags/ee.png');?>');
            }else if(a==9){
                $('#img').attr('src','<?php echo base_url('jpg/flags/es.png');?>');
            }else if(a==10){
                $('#img').attr('src','<?php echo base_url('jpg/flags/fi.png');?>');
            }else if(a==11){
                $('#img').attr('src','<?php echo base_url('jpg/flags/fr.png');?>');
            }else if(a==12){
                $('#img').attr('src','<?php echo base_url('jpg/flags/gb.png');?>');
            }else if(a==13){
                $('#img').attr('src','<?php echo base_url('jpg/flags/hr.png');?>');
            }else if(a==14){
                $('#img').attr('src','<?php echo base_url('jpg/flags/hu.png');?>');
            }else if(a==15){
                $('#img').attr('src','<?php echo base_url('jpg/flags/ie.png');?>');
            }else if(a==16){
                $('#img').attr('src','<?php echo base_url('jpg/flags/it.png');?>');
            }else if(a==17){
                $('#img').attr('src','<?php echo base_url('jpg/flags/lt.png');?>');
            }else if(a==18){
                $('#img').attr('src','<?php echo base_url('jpg/flags/lu.png');?>');
            }else if(a==19){
                $('#img').attr('src','<?php echo base_url('jpg/flags/lv.png');?>');
            }else if(a==20){
                $('#img').attr('src','<?php echo base_url('jpg/flags/mt.png');?>');
            }else if(a==21){
                $('#img').attr('src','<?php echo base_url('jpg/flags/nl.png');?>');
            }else if(a==22){
                $('#img').attr('src','<?php echo base_url('jpg/flags/pl.png');?>');
            }else if(a==23){
                $('#img').attr('src','<?php echo base_url('jpg/flags/pt.png');?>');
            }else if(a==24){
                $('#img').attr('src','<?php echo base_url('jpg/flags/ro.png');?>');
            }else if(a==25){
                $('#img').attr('src','<?php echo base_url('jpg/flags/se.png');?>');
            }else if(a==26){
                $('#img').attr('src','<?php echo base_url('jpg/flags/si.png');?>');
            }else if(a==27){
                $('#img').attr('src','<?php echo base_url('jpg/flags/sk.png');?>');
            }           
            });

            
        


    });
</script>

<div class="container"id="count_1">
    <?php echo form_open('index.php/PageUser/index') ?>
    <div id="exTab1"class="tab-content" >

        <ul class="nav nav-pills">
            <li class="active"><a href="#1a" data-toggle="tab">Dane podstawowe</a></li>
            <li><a href="#2a" data-toggle="tab">Adres siedziby</a></li>
            <li><a href="#3a" data-toggle="tab">Dane Magazynu</a></li>
            <li><a href="#4a" data-toggle="tab">Rozliczenia Amortyzacji</a></li>
        </ul>


        <!-- Menu Dane Podstawowe-->  

        <div class="tab-content clearfix"> 
            <div class="tab-pane active " id="1a">
                <h3>Dane ogólne</h3>
                <hr></br>
                <ul class="nav">
                    <span class="span">*</span>
                    <li> <p class="pull-left"> Nazwa skrócona firmy</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_1', 'value' => $part_1, 'name' => 'part_1', 'class' => 'form-control ')); ?>  
                    </li>
                    </br>
                    </br>

                    <span class="span">*</span>
                    <li> <p class="pull-left"> Nazwa pełna firmy</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_2', 'value' => $part_2, 'name' => 'part_2', 'class' => 'form-control')); ?>  
                    </li>
                    </br>
                    </br>
                    <span class="span">*</span>
                    <li><p class="pull-left">NIP</p>
                        <img id="img"  src="<?php echo base_url('jpg/flags/'.$flags.'') ?>" width="30px"height="20px"style="margin-left:70px;margin-top: -20px;"/>
                        <?php
                        echo form_dropdown(array('name' => 'part_3a', 'id' => 'part_3a', 'class' => 'form-control'), array(' ',
                            'AT',
                            'BE',
                            'BG',
                            'CY',
                            'CZ',
                            'DE',
                            'DK',
                            'EE',
                            'ES',
                            'FI',
                            'FR',
                            'GR',
                            'HR',
                            'HU',
                            'IE',
                            'IT',
                            'LT',
                            'LU',
                            'LV',
                            'MT',
                            'NL',
                            'PL',
                            'PT',
                            'RO',
                            'SE',
                            'SI',
                            'SK'), $part_3a)
                        ?>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_3', 'value' => $part_3, 'name' => 'part_3', 'class' => 'form-control')); ?>  
                    </li>
                    </br>
                    </br>
                    <span class="span">*</span>
                    <li> <p class="pull-left"> Urząd Skarbowy</p>
<?php echo form_dropdown(array('name' => 'part_4', 'id' => 'part_4', 'class' => 'form-control'), $urzedy, $part_4); ?>
                    </li>
                    </br>
                    </br>
                    <li>
                        </br>
                        <p class="pull-left">Nazwa Banku</p>
<?php echo form_input(array('type' => 'text', 'id' => 'part_5', 'value' => $part_5, 'name' => 'part_5', 'class' => 'form-control')); ?>
                    </li></br>
                    </br></br>
                    <li>

                        <p class="pull-left">Numer Konta</p>
<?php echo form_input(array('type' => 'text', 'id' => 'part_6', 'value' => $part_6, 'name' => 'part_6', 'class' => 'form-control')); ?> 
                    </li>
                    </br>
                    </br>
                    <h3>Rozliczenie VAT</h3>
                    <hr>

                    <span class="span">*</span><p>Ewidencja VAT</p>
<?php echo form_checkbox(array('id' => 'part_7', 'name' => 'part_7', 'checked' => $part_7, 'value' => 1)); ?>

                    <p>Rozliczenie kwartalne VAT</p>

                    I Kwartał&nbsp;&nbsp;
                    <?php echo form_checkbox(array('id' => 'part_8', 'name' => 'part_8', 'checked' => $part_8, 'value' => 1)); ?>
                    II Kwartał&nbsp;&nbsp;
                    <?php echo form_checkbox(array('id' => 'part_9', 'name' => 'part_9', 'checked' => $part_9, 'value' => 1)); ?>
                    III Kwartał&nbsp;&nbsp;
                    <?php echo form_checkbox(array('id' => 'part_10', 'name' => 'part_10', 'checked' => $part_10, 'value' => 1)); ?>
                    IV Kwartał&nbsp;&nbsp;
<?php echo form_checkbox(array('id' => 'part_11', 'name' => 'part_11', 'checked' => $part_11, 'value' => 1)); ?>

                    </br>
                    </br>
                    <h3>Sposób rozliczenia podatku od dochodów</h3>
                    <hr>

                    <span class="span">*</span><p>Podatkowa Książka Przychodów i Rozchodów</p>
<?php echo form_checkbox(array('id' => 'part_12', 'name' => 'part_12', 'checked' => $part_12, 'value' => 1)); ?>


                    <span class="span">*</span> <p>Ewidencja Przychodów</p>
<?php echo form_checkbox(array('id' => 'part_13', 'name' => 'part_13', 'checked' => $part_13, 'value' => 1)); ?>

                    <p>Kwartalne rozliczenie Ewidencji Przychodów</p>

                    I Kwartał&nbsp;&nbsp;
                    <?php echo form_checkbox(array('id' => 'part_14', 'name' => 'part_14', 'checked' => $part_14, 'value' => 1)); ?>
                    II Kwartał&nbsp;&nbsp;
                    <?php echo form_checkbox(array('id' => 'part_15', 'name' => 'part_15', 'checked' => $part_15, 'value' => 1)); ?>
                    III Kwartał&nbsp;&nbsp;
                    <?php echo form_checkbox(array('id' => 'part_16', 'name' => 'part_16', 'checked' => $part_16, 'value' => 1)); ?>
                    IV Kwartał&nbsp;&nbsp;
<?php echo form_checkbox(array('id' => 'part_17', 'name' => 'part_17', 'checked' => $part_17, 'value' => 1)); ?>

                </ul>
            </div>


            <div class="tab-pane" id="2a">
                </br>
                <h3>Adres siedziby</h3>
                <hr>
                <ul class="nav">
                    <span class="span">*</span>
                    <li><p class="pull-left">Kraj</p>
<?php echo form_input(array('type' => 'text', 'id' => 'part_18', 'value' => $part_18, 'name' => 'part_18', 'class' => 'form-control')); ?> 
                    </li></br>
                    <span class="span">*</span>
                    <li><p class="pull-left">Województwo</p>
                        <?php
                        echo form_dropdown(array('name' => 'part_19', 'id' => 'part_19', 'class' => 'form-control')
                                , array('Województwo',
                            'Dolnośląskie',
                            'Kujawsko-pomorskie',
                            'Lubelskie',
                            'Lubuskie',
                            'Łódzkie',
                            'Małopolskie',
                            'Mazowieckie',
                            'Opolskie',
                            'Podkarpadzkie',
                            'Podlaskie',
                            'Pomorskie',
                            'Śląskie',
                            'Świętokszyskie',
                            'Warmińsko-mazurskie',
                            'Wielkopolskie',
                            'Zachodniopomorskie'), $part_19);
                        ?>
                    </li>
                    <span class="span">*</span>
                    <li><p class="pull-left">Powiat</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_20', 'value' => $part_20, 'name' => 'part_20', 'class' => 'form-control')); ?>  
                    </li></br>
                    <span class="span">*</span>
                    <li><p class="pull-left">Gmina</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_21', 'value' => $part_21, 'name' => 'part_21', 'class' => 'form-control')); ?>   
                    </li></br>
                    <li><p class="pull-left">
                            Ulica&nbsp;&nbsp;</p>
<?php echo form_input(array('type' => 'text', 'id' => 'part_22', 'value' => $part_22, 'name' => 'part_22', 'class' => 'form-control')); ?> 
                    </li></br>
                    <li><p class="pull-left">Numer domu</p>
<?php echo form_input(array('type' => 'text', 'id' => 'part_23', 'value' => $part_23, 'name' => 'part_23', 'class' => 'form-control')); ?> 
                    </li>               
                    </br><li><p class="pull-left">Numer lokalu&nbsp;&nbsp;</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_24', 'value' => $part_24, 'name' => 'part_24', 'class' => 'form-control')); ?> 
                    </li>
                    </br>
                    <li>
                        <p class="pull-left"> Miejscowość&nbsp;&nbsp;</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_25', 'value' => $part_25, 'name' => 'part_25', 'class' => 'form-control')); ?>
                    </li></br>
                    <li>
                        <p class="pull-left">  Kod pocztowy&nbsp;&nbsp;</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_26', 'value' => $part_26, 'name' => 'part_26', 'class' => 'form-control')); ?>
                    </li>
                    </br>
                    <li>
                        <p class="pull-left">Poczta</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_27', 'value' => $part_27, 'name' => 'part_27', 'class' => 'form-control')); ?>
                    </li>
                    </br>
                    <li>
                        <p class="pull-left">Nr tel/fax</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_28', 'value' => $part_28, 'name' => 'part_28', 'class' => 'form-control')); ?> 
                    </li>
                    </br>
                    <li>
                        <p class="pull-left">Nr tel kom</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_29', 'value' => $part_29, 'name' => 'part_29', 'class' => 'form-control')); ?>
                    </li>
                    </br>
                    <li>
                        <p class="pull-left">Adres E-mial:</p>
<?php echo form_input(array('type' => 'text', 'id' => 'part_30', 'value' => $part_30, 'name' => 'part_30', 'class' => 'form-control')); ?>  
                    </li></br>
            </div>
            <div class="tab-pane" id="3a">
                </br>
                </br>
                <h3>Informacje ogólne</h3>
                <hr>
                <ul class="nav"> 
                    <li>
                        <p class="pull-left">Cena za jednostkę miary z dokładnością</p>
                        <?php echo form_input(array('type' => 'number', 'id' => 'part_31', 'value' => $part_31, 'min' => 0, 'max' => 2, 'name' => 'part_31', 'class' => 'form-control')); ?> 
                        <p style="margin-left:360px;;margin-top: -35px;">po przecinku</p>
                    </li></br>
                    <li>
                        <p class="pull-left">Jednostki miary z dokładnościa do</p>
                        <?php echo form_input(array('type' => 'number', 'id' => 'part_32', 'value' => $part_32, 'min' => 0, 'max' => 2, 'name' => 'part_32', 'class' => 'form-control')); ?>
                        <p style="margin-left:350px;margin-top: -35px;"> po przecinku</p>
                    </li></br>
                    <li>
                        <p class="pull-left">Jednostki miar przy produkcji z dokładnością do</p>
                        <?php echo form_input(array('type' => 'number', 'id' => 'part_33', 'value' => $part_33, 'min' => 0, 'max' => 2, 'name' => 'part_33', 'class' => 'form-control')); ?>
                        <p style="margin-left:400px;margin-top: -35px">po przecinku</p>
                    </li></br>
                    <p class="pull-left"> Preferowana numeracja</p>
                    <li>
<?php
echo form_dropdown(array('id' => 'part_34', 'name' => 'part_34', 'class' => 'form-control'), array('Wspólna dla całego roku ',
    'Odrębna dla każdego miesiąca'), $part_34)
?>
                    </li></br>
                    <li>
                        <p class ="pull-left"> Wspólna numeracja faktur i faktur korygujących w ciągu miesiąca/roku</p>&nbsp;&nbsp;
<?php echo form_checkbox(array('name' => 'part_35', 'id' => 'part_35', 'checked' => $part_35, 'value' => 1)); ?>
                    </li></br>
                    <li>
                        <div class="form-group">
                            <p class="pull-left">Magazyn domyślny
                                <?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_35a', 'name' => 'part_35a', 'value' => $part_35a)); ?>
                                &nbsp;&nbsp;<p class="pull-left">/
                                &nbsp;&nbsp;<?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_35b', 'name' => 'part_35b', 'value' => $part_35b)) ?>
                                &nbsp;&nbsp;<p class="pull-left">Nazwa
                                &nbsp;&nbsp;<?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_35c', 'name' => 'part_35c', 'value' => $part_35c)) ?> 
                            </p></p></p>


                        </div>  

                    </li></br>

                    </br>
                    </br>
                    <?php echo form_error('part_35a', '<div style="color:red">', '</div>'); ?>
                    <h3>Wydruki magazynu</h3>
                    <hr>
                    </br>
                    <li>
                        <p class="pull-left"> Wielkość czcionki</p>
<?php
echo form_dropdown(array('id' => 'part_36', 'name' => 'part_36', 'class' => 'form-control'), array('Mała ',
    'Średnia',
    'Duża'), $part_36)
?>
                    </li></br>
                    <li>
                        <p class="pull-left"> W fakturze przed nazwą drukuj indeks</p>&nbsp;&nbsp;
<?php echo form_checkbox(array('name' => 'part_37', 'id' => 'part_37', 'checked' => $part_37, 'value' => 1)); ?>
                    </li></br>
                    <li>
                        <p class="pull-left"> Wydrukuj informaji o podstawie WZ na fakturze</p>&nbsp;&nbsp;
<?php echo form_checkbox(array('name' => 'part_38', 'id' => 'part_38', 'checked' => $part_38, 'value' => 1)); ?>
                    </li></br>
                    <li>
                        <p class="pull-left">Na dokumentach WZ drukuj cenę</p>&nbsp;&nbsp;
<?php echo form_checkbox(array('name' => 'part_39', 'id' => 'part_39', 'checked' => $part_39, 'value' => 1)); ?>
                    </li></br>
                    <li>
                        <p class="pull-left">Na fakturach drukuj cenę Netto Brutto</p>&nbsp;&nbsp;
<?php echo form_checkbox(array('name' => 'part_40', 'id' => 'part_40', 'checked' => $part_40, 'value' => 1)); ?>
                    </li></br>
                    <li>
                        <p class="pull-left"> Na fakturach drukuj informację o udzielonym rabacie</p>&nbsp;&nbsp;
<?php echo form_checkbox(array('name' => 'part_41', 'id' => 'part_41', 'checked' => $part_41, 'value' => 1)); ?>
                    </li></br>
                    </br>
                    <h3>Informacje o sprzedaży</h3>
                    </br>
                    <hr>
                    </br>
                    <li>
                        <p class="pull-left">Sprzedawaj w cenach Brutto</p>&nbsp;&nbsp;
<?php echo form_checkbox(array('name' => 'part_42', 'id' => 'part_42', 'checked' => $part_42, 'value' => 1)); ?>
                    </li></br>
                    <li>
                        <p class="pull-left">Ustal Cenę Sprzedaży 1 według narzutu</p>&nbsp;&nbsp;
<?php echo form_checkbox(array('name' => 'part_43', 'id' => 'part_43', 'checked' => $part_43, 'value' => 1)); ?>
                    </li></br>
                    <li>
                        <p class="pull-left">Ustalaj ceny sprzedaży poniżej według podanej marży</p>&nbsp;&nbsp;
<?php echo form_checkbox(array('name' => 'part_44', 'id' => 'part_44', 'checked' => $part_44, 'value' => 1)); ?>
                    </li></br>
                    <li>
                        <p class="pull-left">Cena Sprzedaży 1</p>
<?php echo form_input(array('type' => 'text', 'id' => 'part_45', 'value' => $part_45, 'name' => 'part_45', 'class' => 'form-control')); ?>  
                    </li></br>
                    <li>
                        <p class="pull-left">Cena Sprzedaży 2</p>
<?php echo form_input(array('type' => 'text', 'id' => 'part_46', 'value' => $part_46, 'name' => 'part_46', 'class' => 'form-control')); ?>  
                    </li></br>
                    <li>
                        <p class="pull-left">Cena Sprzedaży 3</p>
<?php echo form_input(array('type' => 'text', 'id' => 'part_47', 'value' => $part_47, 'name' => 'part_47', 'class' => 'form-control')); ?>  
                    </li></br>
                    <li>
                        <p class="pull-left">Cena Sprzedaży 4</p>
                        <?php echo form_input(array('type' => 'text', 'id' => 'part_48', 'value' => $part_48, 'name' => 'part_48', 'class' => 'form-control')); ?> 
                    </li></br>
                    <h3>Inne</h3>
                    <hr>
                    </br>
                    <li>
                        <p class="pull-left">Trzeci symbol numeru faktury</p>
<?php echo form_input(array('type' => 'text', 'id' => 'part_49', 'value' => $part_49, 'name' => 'part_49', 'class' => 'form-control')); ?>  
                    </li></br>
                    <li>
                        <p class="pull-left">Stopka Faktury</p>&nbsp;&nbsp;
<?php echo form_textarea(array('name' => 'part_50', 'id' => 'part_50', 'rows' => 5, 'value' => $part_50)); ?>  
                    </li></br>
                </ul>
            </div>
            <div class="tab-pane" id="4a">
                </br>
                </br>

                <h3>Środki Trwałe</h3>
                </br>
                </br>
                </br>
                </br>

                <ul class="nav">
                    <li>
                        <p class="pull-left">Środki Trwałe uporządkowane według Numeru Inwentarzowego</p>&nbsp;&nbsp;
<?php echo form_checkbox(array('name' => 'part_51', 'id' => 'part_44', 'checked' => $part_51, 'value' => 1)); ?>
                    </li>
                </ul>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
            </div>
        </div>
    </div>
    </br>
    </br>
    </br>

<?php echo form_input(array('name' => 'part_0', 'id' => 'part_0', 'type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Zapisz')); ?>
</form>
</div>
<div class="container" id="count_2">

</div>

