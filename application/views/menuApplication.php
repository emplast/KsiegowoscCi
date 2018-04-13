<style type="text/css">
    .menu-left-panel{
    margin-top: -25px;
    padding: 0;
    float: left;
    width:180px;
    height: auto;
    background-color:#282828;
}
.img_logo{
    margin-top: -15px;
    margin-left: 80px;
    padding: 0;
    float: left;
    width: 180px;

}
#btn{
    margin-top: 80px;
    padding: 0;
    float: left;
    width: 180px;
    height: 100%;
    background-color: #262626;

}
#menu1,#menu2,#menu3,#menu4 {
    margin-top: 0;
    padding: 0;
    float: top;
    background-color: #262626;
    width: 180px;
    height: 100px;

}
h5{
    font-size: 15px;
    color: #ccc;
}
h5:hover{
    color: white;
}
#dropdown-menu,
#dropdown-menu_1,
#dropdown-menu_2,
#dropdown-menu_3,
#dropdown-menu_4,
#dropdown-menu_5,
#dropdown-menu_6,
#dropdown-menu_7,
#dropdown-menu_8,
#dropdown-menu_9,
#dropdown-menu_10,
#dropdown-menu_11,
#dropdown-menu_12,
#dropdown-menu_13,
#dropdown-menu_14,
#dropdown-menu_15,
#dropdown-menu_16,
#dropdown-menu_17,
#dropdown-menu_18,
#dropdown-menu_19,
#dropdown-menu_20,
#dropdown-menu_21,
#dropdown-menu_22,
#dropdown-menu_23,
#dropdown-menu_24,
#dropdown-menu_25,
#dropdown-menu_26{
    margin: 0;
    padding: 0;
    top:25%;
    left: 100%;
    float: left;
    background-color:#282828;

}

h6{
    font-size: 15px;
    color: #ccc;
}
h6:hover{
    color: black;
}

.test{
    margin: 0;
    padding: 0;
    float: left;
    top: 0;
    right: 100%;
    background-color: #282828;


}

.caret {

    color: #ccc;
    text-align: right;
}
.container{
    margin-left: 250px;
    padding: 0;




}
</style>
<script type="text/javascript" src="<?php echo base_url('dist/js/menuJava.js')?>"></script>

<div class="menu-left-panel  ">
            <div class="btn-group" id="btn">
                <div class="img_logo">
                    <img src="<?php echo base_url('jpg/logo/EmSoftLogo_29_32.png')?>"/>

                </div>
                
                <div class="dropdown">
                    <button id="menu1" class="btn  btn-lg dropdown-toggle  " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5>Menu</h5><span class="caret"></span> 
                    </button>
                    <ul class="dropdown-menu"id="dropdown-menu">
                        <li role="presentation" >
                            <a class="test" href="#"><h6>Księgi</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu "id="dropdown-menu_4">
                                <li role="presentation" ><a href="#"tabindex="-1" ><h6>Wprowadzanie dokumentów księgowych</h6></a></li>
                                <li role="presentation"><a href="#"tabindex="-1"><h6>Dokumenty zaksiegowane</h6></a></li>
                                <li role="presentation"><a href="#"tabindex="-1"><h6>Ewidencja najmu</h6></a></li>
                                <li role="presentation"><a href="#"tabindex="-1"><h6>Ewidencja przychodu</h6></a></li>
                                <li role="presentation">
                                    <a href="#"tabindex="-1"  class="test_1" ><h6>Ewidencja pojazdów</h6><span class="caret"></span></a>
                                    <ul class="dropdown-menu "id="dropdown-menu_5">
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Ewidencja przebiegu</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Koszty pojazdów</h6></a></li>
                                        <li role="presentation">
                                            <a href="#"tabindex="-1" class="test_2"><h6>Kartoteki</h6><span class="caret"></span></a>
                                            <ul class="dropdown-menu "id="dropdown-menu_6">
                                                <li ><a href="#"><h6>Cele wyjazdów pojazdem prywatnym</h6></a></li>
                                                <li ><a href="#"><h6>Opisy tras</h6></a></li>
                                                <li ><a href="#"><h6>Pojazdy prywtne</h6></a></li>
                                                <li ><a href="#"><h6>Stawka za km przebiegu</h6></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li role="presentation"><a href="#"tabindex="-1"><h6>Ewidencja sprzedaży</h6></a></li>
                                <li role="presentation"><a href="#"tabindex="-1"><h6>Ewidencja wyposażenia</h6></a></li>
                                <li role="presentation">
                                    <a href="#"tabindex="-1"class="test_3"><h6>Kartoteki</h6><span class="caret"></span></a>
                                    <ul class="dropdown-menu" id="dropdown-menu_7"><
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Konta księgowe</h6></a></li>
                                        <li role="presentation"><a href="<?php echo base_url('index.php/Kontrahenci/index')?>"tabindex="-1"><h6>Kontrahenci</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Opisy zdarzeń gospodarczych</h6></a></li>
                                    </ul>
                                </li>

                                <li role="presentation"><a href="#"tabindex="-1"><h6>Podatkowa Księga Przychodów i Rozchodów</h6></a></li>
                                <li role="presentation"><a href="#"tabindex="-1"><h6>Zamówienia</h6></a></li>
                                <li role="presentation"><a href="#"tabindex="-1"><h6>Rejestry VAT</h6></a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a href="#"tabindex="-1"><h6>Import dokumentów</h6></a></li>
                            </ul>
                        </li>
                        <!-- koniec Księgi-->

                        <li role="presentation">
                            <a href="#"class="test_4"><h6>Magazyn</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu "id="dropdown-menu_24">
                                <li role="presentation">
                                    <a href="#"tabindex="-1"class="test_5"><h6>Dokumenty</h6><span class="caret"></span></a>
                                    <ul class="dropdown-menu "id="dropdown-menu_8">
                                        <li role="presentation"><a href="<?php echo base_url('index.php/WprowadzanieDokMagazyn/index');?>"tabindex="-1"><h6>Wprowadzanie dokumentów magazynowych</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Wystawianie Faktur</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Łączenie WZ w jedną Fakturę</h6></a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Faktura z dokumentów magazynowych</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Paragon z dokumentu magazynowego</h6></a></li>                        
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Dokumenty korygujące</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Zapłaty za Faktury</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Zestawienie dokumentów magazynowych</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Zestawienie Faktur</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Zestwienie Paragonów</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Zestawienie przesunięć magazynowych</h6></a></li>
                                    </ul>
                                </li>


                                <li role="presentation">
                                    <a href="#"tabindex="-1" class="test_6"><h6>Kartoteki</h6><span class="caret"></span></a>
                                    <ul class="dropdown-menu" id="dropdown-menu_9">
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Formy zapłaty</h6></a></li>
                                        <li role="presentation"><a href="<?php echo base_url('index.php/FormaTransportu/index') ?>"tabindex="-1"><h6>Formy transportu</h6></a></li>
                                        <li role="presentation"><a href="#"tabindex="-1"><h6>Jednostki miary</h6></a></li>
                                        <li role="presentation"><a href="<?php echo base_url('index.php/Kontrahenci/index')?>"tabindex="-1"><h6>Kontrahenci</h6></a></li>
                                        <li role="presentation"><a href="<?php echo base_url('index.php/Magazyny/index') ?>"tabindex="-1"><h6>Magazyny</h6></a></li>
                                    </ul>
                                </li>                                                                    


                                <li role="presentation">
                                    <a href="#"class="test_7"><h6>Towary</h6><span class="caret"></span></a>
                                    <ul class="dropdown-menu" id="dropdown-menu_10">
                                        <li role="presentation"><a href="#"><h6>Arkusz Inwentaryzacyjny</h6></a></li>
                                        <li role="presentation"><a href="#"><h6>Cennik idywidualny</h6></a></li>
                                        <li role="presentation"><a href="#"><h6>Kartoteki towarów</h6></a></li>
                                        <li role="presentation"><a href="#"><h6>Stany magazynowe</h6></a></li>
                                        <li role="presentation"><a href="#"><h6>Spis z natury</h6></a></li>
                                    </ul>
                                </li>


                                <li role="presentation">
                                    <a href="#"class="test_8"><h6>Produkcja</h6><span class="caret"></span></a>
                                    <ul class="dropdown-menu" id="dropdown-menu_11">
                                        <li role="presentation"><a href="#"><h6>Wprowadzanie produkcji</h6></a></li>
                                        <li role="presentation"><a href="#"><h6>Normy produkcji</h6></a></li>
                                        <li role="presentation"><a href="#"><h6>Zestawienie produkcji</h6></a></li>
                                    </ul>
                                </li>


                                <li role="presentation">
                                    <a href="#"class="test_9"><h6>Raporty</h6><span class="caret"></span></a>
                                    <ul class="dropdown-menu" id="dropdown-menu_12">
                                        <li role="presentation"><a href="#"><h6>Zestawienie obrotu towarami</h6></a></li>
                                        <li role="presentation"><a href="#"><h6>Zestawienie sprzedaży</h6></a></li>
                                        <li role="presentation"><a href="#"><h6>Zestawienie towarów trudno zbywalnych</h6></a></li>
                                    </ul>
                                </li>


                                <li role="presentation">
                                    <a href="#"class="test_10"><h6>Zamowienia</h6><span class="caret"></span></a>
                                    <ul class="dropdown-menu" id="dropdown-menu_13">
                                        <li role="presentation"><a href="#"><h6>Wprowadzanie nowego zamówienia</h6></a></li>
                                        <li role="presentation"><a href="#"><h6>Zestawienie zamowień</h6></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <!-- koniec Magazyn -->
                        <li role="presentation">
                            <a href="#"class="test_11"><h6>Formularze podatkowe</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown-menu_14">
                                <li role="presentation"><a href="#"><h6>VAT-7</h6></a></li>
                                <li role="presentation"><a href="#"><h6>PIT-5</h6></a></li>
                                <li role="presentation"><a href="#"><h6>PIT-11</h6></a></li>
                                <li role="presentation"><a href="#"><h6>PIT-37</h6></a></li>
                            </ul>
                        </li>
                        <!-- koniec Formularze podatkowe-->
                        <li role="presentation"><a href="#"class="test_12"><h6>Oferty</h6></a></li>
                        <li role="presentation">
                            <a href="#"class="test_13"><h6>Przelewy</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown-menu_15">
                                <li role="presentation"><a href="#"><h6>Przelewy i wypłaty</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Przelewy do US</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Przelewy do ZUS</h6></a></li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a href="#"class="test_14"><h6>Środki trwałe</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu"id="dropdown-menu_16">
                                <li role="presentation"><a href="#"><h6>Bilans otwarcia na następny rok</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Naliczenie miesięcznych odpisów amortyzacji</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Kartoteka Środków Trawałych</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Ewidencja Środków Trwałych orza roczna tabela odliczeń</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Historia środka trwałego</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Plan amortyzacji</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Zestawienie miesięcznej amortyzaji</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Dokumenty Środka Trawałego</h6></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Koniec MENU -->
                <div class="dropdown">
                    <button id="menu2"class="btn  btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5>Inne</h5><span class="caret"></span>  
                    </button>
                    <ul class="dropdown-menu "id="dropdown-menu_1"role="menu"aria-labelledby="menu2">
                        <li role="presentation" >
                            <a href="#"tabindex="-1"class="test_15"><h6>Firma</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown-menu_17">
                                <li role="presentation"><a href="<?php echo base_url('index.php/PageUser/index');?>"><h6>Dane firmy</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Stawki podatkowe</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Logo</h6></a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a href="#"><h6>Wspólnicy</h6></a></li>
                            </ul>
                        </li>
                        <!--konec Firma-->
                        <li role="presentation"><a href="#"class="test_16"><h6>Inwentaryzacja</h6></a></li>
                        <li role="presentation">
                            <a href="#"class="test_17"><h6>Zarzadzanie danymi</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown-menu_18">
                                <li role="presentation"><a href="#"><h6>Załóż nowy rok księgowy</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Przenoszenie kartotek</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Przenoszenie dnych z magazynu</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Usuwanie danych</h6></a></li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a href="#"class="test_18"><h6>Zmień;Dodaj</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown-menu_19">
                                <li role="presentation"><a href="#"><h6>Zmień rok ksiegowy</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Zmień miesiąc księgowy</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Zmień sposób numeracji</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Zmień domyślny magazyn</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Zmień Firmę</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Dodaj użytkownika</h6></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Konec INNE-->
                <div class="dropdown">
                    <button id="menu3"class="btn  btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5>Narzędzia</h5><span class="caret"></span> 
                    </button>
                    <ul class="dropdown-menu "id="dropdown-menu_2"role="menu"aria-labelledby="menu3">
                        <li role="presentation">
                            <a href="#"class="test_19"><h6>Archiwizacja</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu"id="dropdown-menu_20">
                                <li role="presentation"><a href="#"><h6>Kopia bezpieczeństwa</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Przywracanie kopii bezpieczeństwa</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Opcje tworzenia kopii bezpieczeństwa</h6></a></li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a href="#"class="test_20"><h6>Narzędzia diagnostyczne</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown-menu_21">
                                <li role="presentation"><a href="#"><h6>Indeksowanie baz danych</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Naprawianie baz danych</h6></a></li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a href="#"class="test_21"><h6>Dodatki</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown-menu_22">
                                <li role="presentation"><a href="#"><h6>Kalkulator</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Skróty klawiszowe</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Tabela średnich kursów walut NBP</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Zaawansowane opcje programu</h6></a></li>
                            </ul>
                        </li>
                        <li role="presentation"><a href="#"class="test_21"><h6>Urządzenia fiskalne</h6></a></li>
                        <li role="presentation">
                            <a href="#"class="test_22"><h6>Ustawiena wydruków</h6><span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown-menu_23">
                                <li role="presentation"><a href="#"><h6>Opcje wydruków</h6></a></li>
                                <li role="presentation"><a href="#"><h6>Kalibracja nadruku</h6></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Koniec NARZĘDZIA -->
                <div class="dropdown">
                    <button id="menu4" class="btn  btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5>Pomoc</h5><span class="caret"></span> 
                    </button>
                    <ul class="dropdown-menu "id="dropdown-menu_3" role="menu"aria-labelledby="menu4">
                        <li role="presentation"><a href="#"class="test_23"><h6>Pomoc programu</h6></a></li>
                        <li role="presentation"><a href="#"class="test_24"><h6>Pomoc techniczna programu</h6></a></li>
                        <li role="presentation"><a href="#"class="test_25"><h6>O programie</h6></a></li>
                        <li role="presentation"><a href="#"class="test_26"><h6>Licencja</h6></a></li>
                    </ul>
                </div>
           