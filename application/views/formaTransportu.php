<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/sl-1.2.4/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/sl-1.2.4/datatables.min.js"></script>

<script type="text/javascript">
$(function(){
  $('#myModal').modal();  
});    
</script>
<style type="text/css">
    #count_1{
       
        height: 1200px;
        margin-top:0px;
        


    }
</style>
<div class="container" id="count_1">


<div class="modal" id="myModal" data-backdrop="static">
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
</div>