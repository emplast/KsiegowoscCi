<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/sl-1.2.4/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/sl-1.2.4/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>bootstrap/js/jquery.cookie.js"></script>
<style type="text/css">
    #count_1{
        height: 700px;

    }
    #part_1b{
        width: 80px;
        display: inline;
    }
    #part_2b{
        width: 80px;
        display: inline;
    }
    #part_3b{
        width: 350px;
        display: inline;
        margin-left:15px;

    }
    #part_4b{
        width: 220px;
        margin-left:65px;
        display: inline;
    }

</style>
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').dataTable({

            "select": {style: "single"}
            //"language": { url: "<?php echo base_url('json/polish.lang.json'); ?>"}






        });


    });

    $(document).ready(function () {
        $('#myModal').modal();

    });
    $(function () {
        $('#part_5b').on('click', function () {
            $('#part_0b').submit();
        });
    });
    $(function () {
         var date = new Date();
         var minutes = 1;
         date.setTime(date.getTime() + (minutes * 20 * 1000));
        
        $('#part_1a').on('click', function () {


            $('#part_101').attr('value', 1);
            $.cookie('part_101', 1,{expires: date});
            $.cookie('part_107', $('#part_104').val(),{expires: date});
            $.cookie('part_106', $('#part_103').val(),{expires: date});
            $.cookie('part_105', $('#part_102').val(),{expires: date});
            $('#part_0a').submit();
        });
    });
    $(function () {
        var date = new Date();
        var minutes = 1;
        date.setTime(date.getTime() + (minutes * 20 * 1000));

        $('#part_3a').on('click', function () {
            $.cookie('part_100', 1, {expires: date});
            $.cookie('part_102', $('#part_102').val(), {expires: date});
            $.cookie('part_103', $('#part_103').val(), {expires: date});
            $('#part_0a').submit();
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

    $(function () {
        var table = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            var str = data[0];
            var res = str.split('/');

            $('#part_102').attr('value', res[0]);
            $('#part_103').attr('value', res[1]);
            $('#part_104').attr('value', data[1]);

        });

    });

    $(function () {


        var table = $('#example').DataTable();
        for (var i = 0; i < table.row().data().length; i++) {
            var data = table.row(i).data();
            var str = data[0];
            var res = str.split('/');
            if ('<?php echo $part_104 ?>' == res[0] & '<?php echo $part_105 ?>' == res[1]) {
                table.row(i).select();

            }
        }

    });
</script>

<div class="container" id="count_1">


    <?php echo form_open('index.php/Magazyny/work', array('id' => "part_0a")); ?>
    <div class="modal" id="myModal" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Magazyny</h4>
                </div>
                <div class="modal-body">
                    <table id="example" class="table table-striped table-bordered " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Numer</th>
                                <th>Opis</th>
                                <th>Rodzaj</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dane as $value): ?>
                            <tr>
                                    <td><?php echo $value['PART_1'] . '/' . $value['PART_2']; ?></td>
                                    <td><?php echo $value['PART_3']; ?></td>
                                    <td><?php
                                        switch ($value['PART_4']) {
                                            case 0:
                                                echo 'Towary';

                                                break;
                                            case 1:
                                                echo 'Usługi';

                                                break;
                                            case 2:
                                                echo 'Towary Usługi';

                                                break;
                                        };
                                        ?></td>
                                    </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table> 
                    <div class="modal-footer">
                        <div class="form-group">
                            <a href="#" id="part_1a" data-dismiss="modal" class="btn btn-danger">Wybierz&nbsp;&nbsp;&nbsp;</a>
                            <a data-toggle="modal" href="#myModal1" id="part_2a" class="btn btn-primary">Nowy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="#" id="part_3a" data-dismiss="modal" class="btn btn-primary">Usuń&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
    <?php echo form_open('index.php/Magazyny/add', array('id' => "part_0b")); ?>
    <div class="modal" id="myModal1" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Dodawanie nowego magazynu</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <p style="display:inline;">Numer&nbsp;&nbsp;
                            <?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_1b', 'name' => 'part_1b')); ?>&nbsp;&nbsp;
                        <p style="display:inline;">/&nbsp;&nbsp;<?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_2b', 'name' => 'part_2b')); ?></p></p>
                    </div>
                    <p>Opis&nbsp;&nbsp;<?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'id' => 'part_3b', 'name' => 'part_3b')); ?></p>
                    <div class="form-group">
                        <p style="display:inline">Rodzaj magazynu
                            <?php
                            echo form_dropdown(array('id' => 'part_4b', 'name' => 'part_4b', 'class' => 'form-control'), array('Towary',
                                'Usługi',
                                'Towary Usługi'), 2);
                            ?></p>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <a href="#" id="part_5b" data-dismiss="modal" class="btn btn-danger ">Zapisz</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php form_close(); ?>
    <?php echo form_input(array('id' => 'part_100', 'name' => 'part_100', 'type' => 'hidden', 'value' => 0)) ?>
    <?php echo form_input(array('id' => 'part_101', 'name' => 'part_101', 'type' => 'hidden', 'value' => 0)) ?>
    <?php echo form_input(array('id' => 'part_102', 'name' => 'part_102', 'type' => 'hidden', 'value' => 0)) ?>
    <?php echo form_input(array('id' => 'part_103', 'name' => 'part_103', 'type' => 'hidden', 'value' => 0)) ?>
    <?php echo form_input(array('id' => 'part_104', 'name' => 'part_104', 'type' => 'hidden', 'value' => 0)) ?>



</div>