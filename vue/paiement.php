<!-- pres 1 -->
<div class="container-fluid">



    <!-- pres 2 -->
    <div class="row" style="background:black;">

        <div class="col-12" style="margin-top:90px;">
            <center>

                <h2 style="color:#FFFFFF;">VOTRE RESERVATION</h2>
            </center>
            </br>

        </div>



        <div class="col-6" style="background:black;margin-left:30px;">
            <a class="btn btn btn-dark" href="coordonnes">Retourner au calendrier de réservation</a>
        </div>
    </div>

    <div class="row" style="background:black;">

        <div class="col-6 justify-content-center" style="margin-left:40px;">

            </br>
            </br>
            <h4 style="color:#FFFFFF;">Enregistrer un moyen de paiement :</h4>
            </br>

            <input type="checkbox" id="cartepaye" name="cartepaye" style="transform: scale(2);margin-right:20px;" onclick="ouvrir_box('box');">
            <img src="images/grpcarte.png">
            </br>
            </br>
            <input type="checkbox" id="paypol" name="paypol" onclick="toggle_text();" style="transform: scale(2);margin-right:20px;" onclick="">
            <img src="images/imgpaypol.png">
            </br>
            </br>




            <input type="checkbox" id="payeesp" name="payeesp" style="transform: scale(2);margin-right:20px;"><label style="color:#FFFFFF;font-size: 2em;" onclick="ouvrir_box('box');">Paiement sur place</label>


        </div>

        <div class="col-4" style="background:black;margin-left:30px;">
            </br>

            <div class="col-12" style="background:white;border-radius: 30px;">
                </br></br>

                <h5 style="margin-left:10px;">Récapitulatif de votre commande :</h5>
                </br>
                <h4 style="margin-left:20px;">ZOMBIELAND</h4>
                </br>
                <div class="row">
                    <div class="col-6" style="margin-left:10px;">
                        <h5>20/11/2021, à 14h30</h5>
                    </div>
                    <div class="col-5" style="margin-left:10px;">
                        <h4> 4 Joueurs</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6" style="margin-left:10px;">
                        <h5>Prix total à payer :</h5>
                    </div>
                    <div class="col-5" style="margin-left:10px;">
                        <h4> 112,00 €</h4>
                    </div>
                </div>
            </div>


        </div>


    </div>
    <div>

        <div id="box">
            <div class="row">
                <div id="titre-box">
                    <div class="col-12" style="background:black;">
                        </br>
                        <h4 style="color:#FFFFFF">Coordonnée bancaire :</h4>

                        <h5 style="color:#FFFFFF">Nom du titulaire de la carte*</h5>
                        <input type="nomcarte" class="form-control" id="inputnomcarte" placeholder="Nom Prénom ">
                        <h5 style="color:#FFFFFF">Numero de la carte*</h5>
                        <input type="nomcarte" class="form-control" id="inputnomcarte" placeholder="0343 **** **** ****">

                        <div class="row">
                            <div class="col-6">
                                <h5 style="color:#FFFFFF">Date d'expiration*</h5>
                                <input type="expiration" class="form-control" id="inputexpiration">
                            </div>
                            <div class="col-6">
                                <h5 style="color:#FFFFFF">CVC/CVV*</h5>
                                <input type="CVC" class="form-control" id="inputCVC">
                            </div>
                        </div>
                        </br>
                        </br> </br>
                        </br>

                    </div>
                </div>

            </div>


        </div>








        <script type="text/javascript">
            function ouvrir_box(id) {

                var divelement = document.getElementById(id);

                if (divelement.style.display == 'block')
                    divelement.style.display = 'none';
                else
                    divelement.style.display = 'block';
            }

            function fermer_box(id) {

                var divelement = document.getElementById(id);

                if (divelement.style.display == 'block')
                    divelement.style.display = 'none';
                else
                    divelement.style.display = 'block';
            }
        </script>
    </div>
</div>