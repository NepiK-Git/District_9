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

            </br>
            <a class="btn btn btn-dark" href="reserver">Retourner au calendrier de réservation</a>
            </br> </br> </br>
            <h3 style="color:#FFFFFF;">ZOMBIELAND</h3>
            </br>
            <h4 style="color:#FFFFFF;">Vos Coordonnées</h4>
            </br></br>

            <div class="form-group">
                <form>
                    <div class="row form-group" style="background:black;margin-left:30px;">
                        <form method="post" action="">

                            <div class="mb-3 form-group col-6">
                                <label style="color:#FFFFFF;">Prénom</label>
                                </br>
                                <input type="text" name="firstName" autocomplete="off" class="form-control" value="<?php if (isset($_POST['firstName'])) { echo $_POST['firstName']; } ?>" required>
                            </div>
                            <div class="mb-3 form-group col-6">
                                <label style="color:#FFFFFF;">Nom</label></br>
                                <input type="text" name="lastName" autocomplete="off" class="form-control" value="<?php if (isset($_POST['lastName'])) { echo $_POST['lastName']; } ?>" required>
                            </div>
                            <div class="mb-3 form-group col-6">
                                <label style="color:#FFFFFF;">Téléphone</label>
                                </br>
                                <input type="text" name="telephone" autocomplete="off" class="form-control" value="<?php if (isset($_POST['telephone'])) { echo $_POST['telephone']; } ?>" required>
                            </div>
                            <div class="mb-3 form-group col-6">
                                <label style="color:#FFFFFF;">Adresse Email</label></br>
                                <input type="email" name="email" autocomplete="off" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,6}$" class="form-control" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; } ?>" required>
                            </div>

                            <div class="mb-3 form-group col-12">
                                <label style="color:#FFFFFF;">Commentaire</label></br>
                                <input style="height: 100px;" type="commentaire" name="commentaire" autocomplete="off" class="form-control" value="<?php if (isset($_POST['commentaire'])) { echo $_POST['commentaire']; } ?>">
                            </div>

                            <div class="col-12" style="margin-left:50px;">

                                <div>
                                    <input type="checkbox" id="newsletters" name="newsletters">
                                    <label style="color:#FFFFFF;" for="newsletters">Je suis une entreprise

                                    </label>
                                </div>


                                <div>
                                    <input type="checkbox" id="cdt" name="cdt" checked>
                                    <label style="color:#FFFFFF;" for="cdt">
                                    </label><label style="color:#FFFFFF;" for="cdt"> Envoyer les imformations aux participants
                                    </label>
                                </div>

                            </div>

                            </br>
                            <div style="background:black;margin-left:30px;">
                                <h3 style="color:#FFFFFF;">ZOMBIELAND</h3>
                                </br>
                                <h6 style="color:#FFFFFF;">Date : 29/11/2021 à 14h40</h6>
                                </br></br>
                            </div>

                            <div>
                                <input type="checkbox" id="cdt" name="cdt" checked>
                                <label style="color:#FFFFFF;" for="cdt">
                                </label><label style="color:#FFFFFF;" for="cdt"> Envoyer les imformations aux participants
                                </label>

                            </div>
                            <div>
                                </br>
                                <p style="color:#FFFFFF;">Vous voulez impliquer tous vos coéquipiers ? Renseignez leur email afin qu’ils
                                    reçoivent tous les informations nécessaires la veille de leur venue :</p>
                            </div>
                            <div class="mb-3 form-group col-6">
                                <label style="color:#FFFFFF;">Adresse Email 1</label></br>
                                <input type="email1" name="email1" autocomplete="off" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,6}$" class="form-control" value="<?php if (isset($_POST['email1'])) { echo $_POST['email1']; } ?>">
                            </div>
                            <div class="mb-3 form-group col-6">
                                <label style="color:#FFFFFF;">Adresse Email 2</label></br>
                                <input type="email2" name="email2" autocomplete="off" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,6}$" class="form-control" value="<?php if (isset($_POST['email2'])) { echo $_POST['email2']; } ?>">
                            </div>
                            <div class="mb-3 form-group col-6">
                                <label style="color:#FFFFFF;">Adresse Email 3</label></br>
                                <input type="email3" name="email3" autocomplete="off" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,6}$" class="form-control" value="<?php if (isset($_POST['email3'])) { echo $_POST['email3']; } ?>">
                            </div>
                            <div class="mb-3 form-group col-6">
                                <label style="color:#FFFFFF;">Adresse Email 4</label></br>
                                <input type="email4" name="email4" autocomplete="off" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,6}$" class="form-control" value="<?php if (isset($_POST['email4'])) { echo $_POST['email4']; } ?>">
                            </div>
                            <div class="mb-3 form-group col-6">
                                <label style="color:#FFFFFF;">Adresse Email 5</label></br>
                                <input type="email5" name="email5" autocomplete="off" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,6}$" class="form-control" value="<?php if (isset($_POST['email5'])) { echo $_POST['email5']; } ?>">
                            </div>
                            <p style="color:#FFFFFF;">En cas d’annulation d’une session de la part du Client, aucun remboursement
                                ne sera effectué conformément à l’article L 221-28 du Code de la
                                Consommation. Un client ayant acheté un bon cadeau par internet peut faire
                                exercer son droit de rétractation jusqu’à 14 jours après l’achat, si le bon
                                cadeau n’a pas été utilisé.
                            </p>
                            <p style="color:#FFFFFF;">
                                Conformément à l’ordonnance n°2015-1033 du 20 août 2015 et au décret
                                d’application n°2015-1382 du 30 octobre 2015, tout différent ou litige dit de
                                consommation, sous réserve de l’article L 152-2 du Code de la Consommation,
                                peut faire l’objet d’un règlement amiable par médiation auprès du MTV.Travel -
                                Médiation Tourisme et Voyage.</p>

                    </div>
                    </br></br>
            </div>
        </div>
        <div class="col-5" style="background:black;margin-left:30px;">
            </br>

            <div class="col-12" style="background:white;">
                </br></br>
                <div style="border-bottom:2px dashed black;">
                    <h4 style="margin-left:10px;">Récapitulatif de votre commande :</h4>
                    </br>

                </div>


                </br>
                <div style="border-bottom:2px dashed black;">
                    <h2 style="margin-left:10px;">ZOMBIELAND</h2>

                </div>




                <div class="col-12" style="background:white;">
                    </br>
                    <div class="row" style="margin-left:20px;">
                        </br>

                        <div class="col-4" style="margin-left:10px;">
                            <h5>20/11/2021, à 14h30</h5>
                        </div>
                        <div class="col-4" style="margin-left:180px;">
                            <h4> 4 Joueurs</h4>
                        </div>
                        </br>
                    </div>
                    <div style="border-bottom:2px dashed black;">

                    </div>
                    </br>
                    <div class="row" style="margin-left:20px;">
                        </br>

                        <div class="col-4" style="margin-left:10px;">
                            <h5>Prix de la Partie</h5>
                        </div>

                        <div class="col-4" style="margin-left:180px;">
                            <h4> 112,00 €</h4>
                        </div>

                    </div>
                    </br>
                    <div style="border-bottom:2px dashed black;">
                    </div>
                    </br>
                    <div class="row" style="margin-left:30px;">
                        <div class="mb-3 form-group col-8">

                            <input style="width:330px;" type="code" name="code" autocomplete="off" placeholder="Ajouter mon code promo" class="form-control" value="<?php if (isset($_POST['code'])) { echo $_POST['code']; } ?>">

                        </div>
                        <div class="mb-3 form-group col-4" style="margin-left:0px;">
                            <button type="submit" name="appliquer" class="btn btn-warning">Appliquer</button>
                        </div>
                    </div>
                    <div style="border-bottom:2px dashed black;">
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-4" style="margin-left:10px;">
                        <h5 style="margin-left:10px;">Prix total à payer :</h5>
                    </div>
                    <div class="col-4" style="margin-left:200px;">
                        <h4> 112,00 €</h4>
                    </div>
                </div>
                </br>




                </br>
                <div class="row" style="margin-left:30px;">
                    <div class="col-1">
                        </br></br>
                        <input type="checkbox" id="newsletters" name="newsletters">
                    </div>
                    <div class="col-10">
                        <label for="newsletters">J’accepte les conditions générales de ventes et j’ai bien
                            pris conscience qu’il s’agit d’une activité sur réservation
                            non modifiable et non annulable à moins de sept jours
                            de la réservation. J’ai compris que la participation à
                            l’activité d’Escape Game est conditionnée à la
                            présentation d’un pass sanitaire valide sous forme de
                            QR Code.

                        </label>
                    </div>
                    <div class="col-4" style="margin-left:220px;">
                        </br>
                        </br>
                        </br>
                       
<a class="btn btn-warning" href="paiement" style="border-radius: 20px;">Payer la commande</a>
                        </br>

                    </div>

                </div>

                </br>
                </br>
            </div>
            </br></br>
        </div>

    </div>
</div>
</div>