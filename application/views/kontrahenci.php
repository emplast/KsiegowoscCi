<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<script src="<?php echo base_url(); ?>media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>media/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/jquery.dataTables.min.css">

<style type="text/css">
    #count_1{
       
        height: 1200px;
        margin-top:0px;
        font-size: 10px;


    }
    #count_2{
        margin-top: -450px;
        margin-left: 250px;
        
    }
    #span{
        color:red;
    }
    #part_1{
        width: 80px;
        margin-left: 50px;
        display: inline;
    }
    #part_2{
        width: 130px;
        margin-left: 20px;
        display: inline;
    }
    #part_3{
        width: 80px;
        margin-left: 20px;
        display: inline;

    }
    #datepicker{
        width: 200px;
        margin-left: 50px;
        display: inline;

    }
    #part_6{
        width:450px;
        margin-left:85px;
        display:inline;
    }
    #part_7{
        margin-left: 650px;
        margin-top:-60px;




    }
    #part_1b,#part_1c{
        margin-left: 22px;
        width:200px;
        display:inline;
    }
    #part_2b,#part_2c{
        margin-left: 45px;
        width: 400px;
        display: inline;
    }
    #part_3b,#part_3c{
        margin-left: 50px;
        width: 250px;
        display: inline;
    }
    #part_4b,#part_4c{
        width: 100px;
        display: inline;
    }
    #part_5b,#part_5c{
        margin-left: 10px;
        width: 250px;
        display: inline;
    }
    #part_6b,#part_6c{
        margin-left: 70px;
        width: 150px;
        display: inline;
    }
    #part_7b,#part_7c{
        width: 150px;
        display: inline;
    }
    #part_8b,#part_8c{
        margin-left: 65px;
        width: 150px;
        display: inline;
    }
    #part_9b,#part_9c{
        width: 255px;
        display: inline;
    }
    #part_10b,#part_10c{
        margin-left: 55px;
        width: 200px;
        display: inline;
    }
    #part_11b,#part_11c{
        margin-left: 65px;
        width: 200px;
        display: inline;
    }
    #part_12b,#part_12c{
        margin-left: 100px;
        width: 250px;
        display: inline;
    }
    #part_13b,#part_13c{
        margin-left: 115px;
        width: 50px;
        display: inline;
    }
    #part_14b,#part_14c{
        margin-left: 210px;
        margin-top: -25px;
        width: 200px;

    }
    #part_15b,#part_15c{
        margin-left: 210px;
        margin-top: -25px;
        width: 250px;

    }
    #part_16b,#part_16c{
        margin-left: 470px;
        margin-top: -80px;


    }
    #part_17b,#part_17c{
        margin-left: 210px;
        margin-top: -25px;
        width: 250px;

    }
    #part_18b,#part_18c{
        margin-left: 470px;
        margin-top: -80px;


    }

</style>
<script type="text/javascript">
$(document).ready(function() {
        $('#example').dataTable( {
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json');?>"
            }
        } );
    } );




   




    $(document).ready(function () {
        var table = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });


    });

    $(document).ready(function() {
        $('#example_1').dataTable( {
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json');?>"
            }
        } );
    } );

    $(document).ready(function () {
        var table = $('#example_1').DataTable();

        $('#example_1 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            $('#part_15b').attr('value', data[1]);


        });


    });
    $(document).ready(function () {
        var table = $('#example_1').DataTable();

        $('#example_1 tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });


    });

   $(document).ready(function() {
        $('#example_2').dataTable( {
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json');?>"
            }
        } );
    } );

    $(document).ready(function () {
        var table = $('#example_2').DataTable();

        $('#example_2 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            $('#part_17b').attr('value', data[1]);


        });


    });
    $(document).ready(function () {
        var table = $('#example_2').DataTable();

        $('#example_2 tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });


    });


$(document).ready(function() {
        $('#example_3').dataTable( {
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json');?>"
            }
        } );
    } );

    $(document).ready(function () {
        var table = $('#example_3').DataTable();

        $('#example_3 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            $('#part_15c').attr('value', data[1]);


        });


    });
    $(document).ready(function () {
        var table = $('#example_3').DataTable();

        $('#example_3 tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });


    });

    $(document).ready(function() {
        $('#example_4').dataTable( {
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json');?>"
            }
        } );
    } );

    $(document).ready(function () {
        var table = $('#example_4').DataTable();

        $('#example_4 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            $('#part_17c').attr('value', data[1]);


        });


    });
    $(document).ready(function () {
        var table = $('#example_4').DataTable();

        $('#example_4 tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });


    });



    $(document).ready(function () {
        var table = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            $('#myModal2').modal();
            $('#part_1c').attr('value', data[1]);
            $('#part_2c').attr('value', data[2]);
            $('#part_3c').attr('value', data[3]);
            $('#part_4c').attr('value', data[4]);
            $('#part_5c').attr('value',data[5]);
            $('#part_7c').attr('value',data[6]);
            $('#part_8c').attr('value',data[7]);
            $('#part_9c').attr('value',data[8]);
            $('#part_10c').attr('value',data[9]);
            $('#part_11c').attr('value',data[10]);
            $('#part_12c').attr('value',data[11]);
            $('#part_13c').attr('value',data[12]);
            $('#part_14c').val(data[13]);
            $('#part_15c').attr('value',data[14]);
            $('#part_17c').attr('value',data[15]);
            $('#part_6c').attr('value', data[0]);
            

        });
    });
    
</script>
<div class="container" id="count_2">
<h4 class="text-center">Kontrahenci</h4>
    </br>
    <hr>
    </br>
</div>
<div class="container" id="count_1">

    


    <table id="example" class=" row-border stripe order-column hover " cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nazwa skrócona</th>
                <th>Nazwa pełna</th>
                <th>Adres</th>
                <th>Kod</th>
                <th>Miejscowość</th>
                <th>PESEL</th>
                <th>Bank</th>
                <th>Konto</th>
                <th>Telefon</th>
                <th>E-mail</th>
                <th>Osoba upoważniona</th>
                <th>Rabat</th>
                <th>Cena sprzedaży</th>
                <th>Forma zapłaty</th>
                <th>Forma transportu</th>
            </tr>
        </thead><?php foreach ($kontrahenci as $kontrahent) :?>
        <tr>
            
        <td><?php echo $kontrahent['PART_6'];?></td>
        <td><?php echo $kontrahent['PART_1'];?></td>
        <td><?php echo $kontrahent['PART_2'];?></td>
        <td><?php echo $kontrahent['PART_3'];?></td>
        <td><?php echo $kontrahent['PART_4'];?></td>
        <td><?php echo $kontrahent['PART_5'];?></td>
        <td><?php echo $kontrahent['PART_7'];?></td>
        <td><?php echo $kontrahent['PART_8'];?></td>
        <td><?php echo $kontrahent['PART_9'];?></td>
        <td><?php echo $kontrahent['PART_10'];?></td>
        <td><?php echo $kontrahent['PART_11'];?></td>
        <td><?php echo $kontrahent['PART_12'];?></td>
        <td><?php echo $kontrahent['PART_13'];?></td>
        <td><?php echo $kontrahent['PART_14'];?></td>
        <td><?php echo $kontrahent['PART_15'];?></td>
        <td><?php echo $kontrahent['PART_16'];?></td>
        
        </tr><?php endforeach;?>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>
    <a  data-toggle="modal" href="#myModal" class="btn btn-primary">Nowy Kontrahent</a>
</div>
<div class="container">

      <!-- MODAL NOWY KONTRAHENT -->
<?php echo form_open('index.php/Kontrahenci/addNewKontrahent');?>
    <div class="modal" id="myModal" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Nowy Kontrahent</h4>
                </div>
                <div class="modal-body">
                    
                    <p>Nazwa skrócona&nbsp&nbsp;<span id="span">*</span>&nbsp<?php echo form_input(array('id' => 'part_1b', 'name' => 'part_1b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                    
                    <p>Nazwa pełna&nbsp;&nbsp;<span id="span">*</span>&nbsp;<?php echo form_input(array('id' => 'part_2b', 'name' => 'part_2b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                    </br>
                    </br>
                    <div id="exTab1"class="tab-content" >
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#1a" data-toggle="tab">Dane podstawowe</a></li>
                            <li><a href="#2a" data-toggle="tab">Dane dotyczące sprzedaży</a></li>
                        </ul>
                        <div class="tab-content clearfix"> 
                            <div class="tab-pane active " id="1a">
                                </br>
                                <p>Adres&nbsp;&nbsp;<span id="span">*</span>&nbsp;<?php echo form_input(array('id' => 'part_3b', 'name' => 'part_3b', 'class' => 'form-control', 'type' => 'text')) ?>
                                    &nbsp;&nbsp;Kod&nbsp&nbsp;<?php echo form_input(array('id' => 'part_4b', 'name' => 'part_4b', 'class' => 'form-control', 'type' => 'text')) ?>
                                </p>
                                <p>Miejscowość&nbsp;&nbsp;<span id="span">*</span>&nbsp;<?php echo form_input(array('id' => 'part_5b', 'name' => 'part_5b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <p>NIP&nbsp;&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_6b', 'name' => 'part_6b', 'class' => 'form-control', 'type' => 'text')) ?>
                                    &nbsp;&nbsp;PESEL&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_7b', 'name' => 'part_7b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <p>Bank&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_8b', 'name' => 'part_8b', 'class' => 'form-control', 'type' => 'text')) ?>
                                    &nbsp;&nbsp;Konto&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_9b', 'name' => 'part_9b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <p>Telefon&nbsp;<?php echo form_input(array('id' => 'part_10b', 'name' => 'part_10b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <p>E-mail<?php echo form_input(array('id' => 'part_11b', 'name' => 'part_11b', 'class' => 'form-control', 'type' => 'text')) ?></p>

                            </div>
                            <div class="tab-pane " id="2a">
                                </br>
                                <p>Osoba upoważniona</br>
                                    do odbioru faktur<?php echo form_input(array('id' => 'part_12b', 'name' => 'part_12b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <p>Udzielony rabat</br>
                                    przy sprzedaży<?php echo form_input(array('id' => 'part_13b', 'name' => 'part_13b', 'class' => 'form-control', 'type' => 'text')) ?>
                                    &nbsp;&nbsp;%</p></br>
                                <p>Preferowana cena sprzedaży&nbsp;&nbsp;<?php echo form_dropdown(array('id' => 'part_14b', 'name' => 'part_14b', 'class' => 'form-control'), array(' ','Cena sprzedaży 1', 'Cena sprzedaży 2', 'Cena sprzedaży 3', 'Cena sprzedaży 4'), 0); ?></p>
                                </br><p>Domyślna forma zapłaty <?php echo form_input(array('id' => 'part_15b', 'name' => 'part_15b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <a id="part_16b" name="part_16b" data-toggle="modal" href="#myModal3"class="btn btn-default">Wybierz</a>
                                </br><p>Domyślna forma transportu <?php echo form_input(array('id' => 'part_17b', 'name' => 'part_17b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <a id="part_18b" name="part_18b" data-toggle="modal" href="#myModal4"class="btn btn-default">Wybierz</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <?php echo form_button(array('id'=>'part_19b','type'=>'submit','class'=>'btn btn-danger','content'=>'Zapisz zamknij'))?>
                </div>
            </div>
        </div>
    </div>
<?php echo form_close();?>
    
    <!-- MODAL EDYCJA KONTRAHENTA-->
    
    
    
  <?php echo form_open('index.php/Kontrahenci/editKontrahent') ?> 
    <div class="modal" id="myModal2" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Edycja Kontrahenta</h4>
                </div>
                <div class="modal-body">
                    
                    <p>Nazwa skrócona&nbsp&nbsp;<span id="span">*</span>&nbsp<?php echo form_input(array('id' => 'part_1c', 'name' => 'part_1c', 'class' => 'form-control', 'type' => 'text')) ?></p>

                    <p>Nazwa pełna&nbsp;&nbsp;<span id="span">*</span>&nbsp;<?php echo form_input(array('id' => 'part_2c', 'name' => 'part_2c', 'class' => 'form-control', 'type' => 'text')) ?></p>
                    </br>
                    </br>
                    <div id="exTab2"class="tab-content" >
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#3a" data-toggle="tab">Dane podstawowe</a></li>
                            <li><a href="#4a" data-toggle="tab">Dane dotyczące sprzedaży</a></li>
                        </ul>
                        <div class="tab-content clearfix"> 
                            <div class="tab-pane active " id="3a">
                                </br>
                                <p>Adres&nbsp;&nbsp;<span id="span">*</span>&nbsp;<?php echo form_input(array('id' => 'part_3c', 'name' => 'part_3c', 'class' => 'form-control', 'type' => 'text')) ?>
                                    &nbsp;&nbsp;Kod&nbsp&nbsp;<?php echo form_input(array('id' => 'part_4c', 'name' => 'part_4c', 'class' => 'form-control', 'type' => 'text')) ?>
                                </p>
                                <p>Miejscowość&nbsp;&nbsp;<span id="span">*</span>&nbsp;<?php echo form_input(array('id' => 'part_5c', 'name' => 'part_5c', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <p>NIP&nbsp;&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_6c', 'name' => 'part_6c', 'class' => 'form-control', 'type' => 'text')) ?>
                                    &nbsp;&nbsp;PESEL&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_7c', 'name' => 'part_7c', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <p>Bank&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_8c', 'name' => 'part_8c', 'class' => 'form-control', 'type' => 'text')) ?>
                                    &nbsp;&nbsp;Konto&nbsp;&nbsp;<?php echo form_input(array('id' => 'part_9c', 'name' => 'part_9c', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <p>Telefon&nbsp;<?php echo form_input(array('id' => 'part_10c', 'name' => 'part_10c', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <p>E-mail<?php echo form_input(array('id' => 'part_11c', 'name' => 'part_11c', 'class' => 'form-control', 'type' => 'text')) ?></p>

                            </div>
                            <div class="tab-pane " id="4a">
                                </br>
                                <p>Osoba upoważniona</br>
                                    do odbioru faktur<?php echo form_input(array('id' => 'part_12c', 'name' => 'part_12c', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <p>Udzielony rabat</br>
                                    przy sprzedaży<?php echo form_input(array('id' => 'part_13c', 'name' => 'part_13c', 'class' => 'form-control', 'type' => 'text')) ?>
                                    &nbsp;&nbsp;%</p></br>
                                <p>Preferowana cena sprzedaży&nbsp;&nbsp;<?php echo form_dropdown(array('id' => 'part_14c', 'name' => 'part_14c', 'class' => 'form-control'), array(' ','Cena sprzedaży 1', 'Cena sprzedaży 2', 'Cena sprzedaży 3', 'Cena sprzedaży 4'),0); ?></p>
                                </br><p>Domyślna forma zapłaty <?php echo form_input(array('id' => 'part_15c', 'name' => 'part_15c', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <a id="part_16c" name="part_16c" data-toggle="modal" href="#myModal5"class="btn btn-default">Wybierz</a>
                                </br><p>Domyślna forma transportu <?php echo form_input(array('id' => 'part_17c', 'name' => 'part_17c', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <a id="part_18c" name="part_18c" data-toggle="modal" href="#myModal6"class="btn btn-default">Wybierz</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <?php echo form_button(array('id'=>'part_19c','name'=>'part_19c','class'=>'btn btn-danger','content'=>'Edytuj','type'=>'submit'))?>       </div>
            </div>
        </div>
    </div>
    <?php echo form_close();?>
    <!-- KONIEC MODAL EDYCJA KONTRAHENTA-->
    
    <div class="modal" id="myModal3" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Domyślna forma płatności</h4>
                </div><div class="container"></div>
                <div class="modal-body">
                    <table id="example_1" class="table table-striped table-bordered " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Lp</th>
                                <th>Rodzaj płatności</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Gotówka</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Przelew 3 dni</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Przelew 7 dni</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Przelew 14 dni</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Przelew 21 dni</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Przelew 30 dni</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Przelew 45 dni</td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Zapisz i zamknij</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal4" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Domyślna forma płatności</h4>
                </div><div class="container"></div>
                <div class="modal-body">
                    <table id="example_2" class="table table-striped table-bordered " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Lp</th>
                                <th>Rodzaj transportu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dostawcy</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kurier</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Paczka</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>List</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Zamawiającego</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Odbiór osobisty</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Pozostałe</td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Zapisz i zamknij</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- MODAL DATATABLE EDYCJA KONTRAHENTA -->
    
    <div class="modal" id="myModal5" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Domyślna forma płatności</h4>
                </div><div class="container"></div>
                <div class="modal-body">
                    <table id="example_3" class="table table-striped table-bordered " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Lp</th>
                                <th>Rodzaj płatności</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Gotówka</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Przelew 3 dni</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Przelew 7 dni</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Przelew 14 dni</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Przelew 21 dni</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Przelew 30 dni</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Przelew 45 dni</td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Zapisz i zamknij</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal6" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Domyślna forma płatności</h4>
                </div><div class="container"></div>
                <div class="modal-body">
                    <table id="example_4" class="table table-striped table-bordered " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Lp</th>
                                <th>Rodzaj transportu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dostawcy</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kurier</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Paczka</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>List</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Zamawiającego</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Odbiór osobisty</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Pozostałe</td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Zapisz i zamknij</a>
                </div>
            </div>
        </div>
    </div>
</div>
