<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('datepicker/css/bootstrap-datepicker.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('datepicker/css/bootstrap-datepicker.min.css') ?>">


<script type="text/javascript" src="<?php echo base_url('datepicker/js/bootstrap-datepicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('datepicker/js/bootstrap-datepicker.pl.min.js'); ?>"></script>
<script src="<?php echo base_url(); ?>media/js/jquery.dataTables.min.js"></script>


<style type="text/css">
    #count_1{
        height: auto;
        margin-top:-400px;


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
    #part_8{
        margin-left: 65px;
        width:450px;
        display: inline;

    }
    #part_9{
        margin-left: 85px;
        width: 200px;
        display: inline;
    }
    #part_10{
        margin-left: 70px;
        width: 200px;
        display: inline;
    }
    #part_11{
        margin-left: 55px;
        width: 450px;
        display: inline;
    }
    #part_12{
        margin-left: 60px;
        width: 450px;
        display: inline;
    }
    #part_13{
        margin-left: 150px;
    }
    #part_13,
    #part_14,
    #part_15,
    #part_16{
        display: inline; 

    }
    #part_17{
        margin-left: 150px;
    }
    #part_17,
    #part_18,
    #part_19,
    #part_20{
        display: inline;

    }

    #part_1b{
        margin-left: 22px;
        width:200px;
        display:inline;
    }
    #part_2b{
        margin-left: 45px;
        width: 400px;
        display: inline;
    }
    #part_3b{
        margin-left: 50px;
        width: 250px;
        display: inline;
    }
    #part_4b{
        width: 100px;
        display: inline;
    }
    #part_5b{
        margin-left: 10px;
        width: 250px;
        display: inline;
    }
    #part_6b{
        margin-left: 70px;
        width: 150px;
        display: inline;
    }
    #part_7b{
        width: 150px;
        display: inline;
    }
    #part_8b{
        margin-left: 65px;
        width: 150px;
        display: inline;
    }
    #part_9b{
        width: 255px;
        display: inline;
    }
    #part_10b{
        margin-left: 55px;
        width: 200px;
        display: inline;
    }
    #part_11b{
        margin-left: 65px;
        width: 200px;
        display: inline;
    }
    #part_12b{
        margin-left: 100px;
        width: 250px;
        display: inline;
    }
    #part_13b{
        margin-left: 115px;
        width: 50px;
        display: inline;
    }
    #part_14b{
        margin-left: 210px;
        margin-top: -25px;
        width: 200px;

    }
    #part_15b{
        margin-left: 210px;
        margin-top: -25px;
        width: 250px;

    }
    #part_16b{
        margin-left: 470px;
        margin-top: -80px;


    }
    #part_17b{
        margin-left: 210px;
        margin-top: -25px;
        width: 250px;

    }
    #part_18b{
        margin-left: 470px;
        margin-top: -80px;


    }
    #part_1c,
    part_2c,
    part_3c{
        display: inline;
    }
    #part_4c,
    #part_5c,
    #part_6c{
        display: inline;
    }


</style>
<script type="text/javascript">
    $(function () {
        $("#datepicker").datepicker({
            format: 'dd/mm/yyyy',
            language: "pl",
            todayBtn: true,
            todayHighlight: true,
            autoclose: true,
            orientation: 'auto bottom',

        });
    });
    $(document).ready(function () {
        $('#example').dataTable({
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json'); ?>"
            }
        });
    });
    $(document).ready(function () {
        var table = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            $('#part_6').attr('value', data[2]);

        });


    });
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

    $(document).ready(function () {
        $('#example_1').dataTable({
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json'); ?>"
            }
        });
    });
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

    $(document).ready(function () {
        $('#example_2').dataTable({
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json'); ?>"
            }
        });
    });
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


    $(document).ready(function () {
        if (<?php echo $kontrahent ?> == 1) {
            $('#myModal').modal();
        }

    });
    $(document).ready(function () {
        $('#example_3').dataTable({
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json'); ?>"
            }
        });
    });
    $(document).ready(function () {
        $('#example_4').dataTable({
            "language": {
                "url": "<?php echo base_url('json/polish.lang.json'); ?>"
            }
        });
    });
</script>

<div class="container" id="count_1" >
    <?php echo form_open('index.php/WprowadzanieDokMagazyn/add') ?>
    <p class="text-center">Rodzaj Dokumentu</p>
    <hr>
    </br>
    <div class="form-group">
        <p style="margin-left:150px;">Symbol
            <?php echo form_dropdown(array('id' => 'part_1', 'class' => 'form-control', 'name' => 'part_1'), array('BO', 'MM-', 'MM+', 'PW', 'PZ', 'RR', 'RZ', 'WZ'), 7); ?>
        <p style="margin-top: -45px;margin-left: 350px;">+
            <?php echo form_dropdown(array('id' => 'part_2', 'class' => 'form-control', 'name' => 'part_2'), array('Faktura', 'Paragon', 'Bez Faktury'), 0); ?>
        <p style="margin-top: -45px;margin-left:550px">Numer
            <?php echo form_input(array('id' => 'part_3', 'name' => 'part_3', 'class' => 'form-control')) ?>
            &nbsp;&nbsp; <a href="#" id="part_4" name="part_4" class="btn btn-primary" >Pierwszy wolny</a>
        </p>    
        </p>
        </p>
    </div>
    <hr>
    </br>
    <div class="form-group">
        <p style="margin-left: 150px;">Data dokumentu 
            <?php echo form_input(array('type' => 'text', 'id' => 'datepicker', 'class' => 'form-control', 'name' => 'part_5')) ?>   
        </p>
    </div>
    <div class="form-group">
        <p style="margin-left: 150px;">Kontrahent 
            <?php echo form_input(array('type' => 'text', 'id' => 'part_6', 'class' => 'form-control', 'name' => 'part_6')) ?> 
            <a data-toggle="modal" href="#myModal" class="btn btn-primary" id="part_7">Wybierz</a>
        </p>
    </div>
    <?php echo form_close() ?>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Kontrahenci</h4>
                </div><div class="container"></div>
                <div class="modal-body">

                    <table id="example" class="table table-striped table-bordered " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nazwa skrócona</th>
                                <th>Nazwa pełna</th>
                            </tr>
                        </thead><?php foreach ($kontrahenci as $dane) : ?>
                        <tr>

                                    <td><?php echo $dane['PART_6']; ?></td>
                                    <td><?php echo $dane['PART_1']; ?></td>
                                    <td><?php echo $dane['PART_2']; ?></td>

                                </tr><?php endforeach; ?>
                    </table>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <a  data-toggle="modal" href="#myModal2" class="btn btn-primary">Nowy Kontrahent</a>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Zapisz</a>
                </div>
            </div>
        </div>
    </div>

    <?php echo form_open('index.php/NewKontrahent/index') ?>
    <div class="modal" id="myModal2" data-backdrop="static">
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
                                <p>Preferowana cena sprzedaży&nbsp;&nbsp;<?php echo form_dropdown(array('id' => 'part_14b', 'name' => 'part_14b', 'class' => 'form-control'), array('Cena sprzedaży 1', 'Cena sprzedaży 2', 'Cena sprzedaży 3', 'Cena sprzedaży 4'), 0); ?></p>
                                </br><p>Domyślna forma zapłaty <?php echo form_input(array('id' => 'part_15b', 'name' => 'part_15b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <a id="part_16b" name="part_16b" data-toggle="modal" href="#myModal3"class="btn btn-default">Wybierz</a>
                                </br><p>Domyślna forma transportu <?php echo form_input(array('id' => 'part_17b', 'name' => 'part_17b', 'class' => 'form-control', 'type' => 'text')) ?></p>
                                <a id="part_18b" name="part_18b" data-toggle="modal" href="#myModal4"class="btn btn-default">Wybierz</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <?php echo form_button(array('id' => 'part_19b', 'name' => 'part_19b', 'type' => 'submit', 'content' => 'Zapisz i zamknij', 'class' => 'btn btn-danger')); ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
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
                    <h4 class="modal-title">Domyślna forma transportu</h4>
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
    <hr>
    <div class="form-group">
        <p style="margin-left:150px;">Numer Faktury<?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_8', 'name' => 'part_8', 'readonly' => 'true')); ?></p>
    </div>
    <div class="form_group">
        <p style="margin-left:150px">Data faktury<?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_9', 'name' => 'part_9', 'readonly' => 'true')); ?></p>
    </div>
    <div class="form_group">
        <p style="margin-left:150px">Termin zapłaty<?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_10', 'name' => 'part_10', 'readonly' => 'true')); ?></p>
    </div>
    <div class="form_group">
        <p style="margin-left:150px">Forma transportu<?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_11', 'name' => 'part_10', 'readonly' => 'true')); ?></p>
    </div>
    <div class="form_group">
        <p style="margin-left:150px">Forma płatności<?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_12', 'name' => 'part_10', 'readonly' => 'true')); ?></p>
    </div>
    </br>
    <hr>
    </br>

    <table id="example_3" class="table table-striped table-bordered " cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Lp</th>
                <th>Mag</th>
                <th>Index</th>
                <th>Nazwa towaru/usługi</th>
                <th>Cena Netto</th>
                <th>Rabat</th>
                <th>Cena z rabatem Netto</th>
                <th>VAT</th>
                <th>Ilość</th>
                <th>JM</th>
                <th>Wartość</th>



            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    </br>
    <hr>
    </br>
    <div class="form-group">
        <a data-toggle="modal" href="#myModal5" class=" btn btn-primary" id="part_13">Dodaj&nbsp&nbsp&nbsp</a>&nbsp;&nbsp
        <a href="#" class="btn btn-primary" id="part_14">Zmień&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;
        <a href="#" class=" btn btn-primary" id="part_15">Usuń&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;
        <a href="#" class="btn btn-primary" id="part_16">Uwagi&nbsp;&nbsp;&nbsp;</a>
    </div>
    </br>
    <div class="form-group">
        <a href="#" class=" btn btn-primary" id="part_17">Fakturuj</a>&nbsp;&nbsp;
        <a href="#" class="btn btn-primary" id="part_18">Ksieguj&nbsp;</a>&nbsp;&nbsp;
        <a href="#" class=" btn btn-primary" id="part_19">Zakończ&nbsp;</a>&nbsp;&nbsp;
        <a href="#" class="btn btn-primary" id="part_20">Anuluj&nbsp;&nbsp;</a>
    </div>
    <div class="modal" id="myModal5" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Wybierz towar</h4>
                </div>
                <div class="modal-body">
                    <table id="example_4" class="table table-striped table-bordered " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Indeks</th>
                                <th>Nazwa towaru/usługi</th>
                                <th>JM</th>
                                <th>Cena Netto</th>
                                <th>VAT</th>
                                <th>Cena Brutto</th>
                                <th>Zarezerwowane</th>
                                <th>Stan</th>

                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table> 
                    <div class="modal-footer">
                        <div class="form-group">
                            <a href="#" id="part_1c" data-dismiss="modal" class="btn btn-danger">Wybierz&nbsp;&nbsp;&nbsp;</a>
                            <a href="#" id="part_2c" class="btn btn-primary">Nowy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="#" id="part_3c" class="btn btn-primary">Edytuj&nbsp;&nbsp;&nbsp;&nbsp;</a>

                        </div>
                        </br>
                        <div class="form-group">
                            <a href="#" id="part_4c" data-dismiss="modal" class="btn btn-primary">Rezerwacje</a>
                            <a href="#" id="part_5c" class="btn btn-primary">Magazyn&nbsp;&nbsp;&nbsp;</a>
                            <a href="#" id="part_6c" class="btn btn-primary">Anuluj&nbsp;&nbsp;&nbsp;&nbsp;</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>   

