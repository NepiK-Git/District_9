<img width="100%" height="65%" src="images/yeux.png" />


<!-- pres 1 -->
<div class="container-fluid">

    <div>
        <div class="position-absolute bottom-0 top-50 start-50 translate-middle-x">
            <center>
                <div class="position_relative">
                    <h1 style="color:#FFFFFF;margin-top:-290px;">Mon profil</h1>
                </div>
            </center>

            <div class="container" style="background:white;border-radius: 10px;margin-top:250px;
">

                <div class="row">

                    <div>

                        <div class="col">
                            <?php
     echo "".$_SESSION['pseudo']."<br>" ; ?>
                            </br>
                        </div>
                        <div class="col">
                            <?php
     echo "".$_SESSION['firstName']." ".$_SESSION['lastName']."<br>" ; ?>
                            </br>
                        </div>
                        <div class="col">
                            <?php
     echo "".$_SESSION['email']." <br>";
     
?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <?php
     echo "".$_SESSION['datenaiss']."" ; ?>
                        </div>
                        <div class="col">
                            <?php
     echo "".$_SESSION['telephone']."" ; ?>
                        </div>

                    </div>
                    <center>


                    </center>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-6" style="background:black;">
                <div style="margin-left:50px;">
                    <h4 style="color:#FFFFFF">Coordonnée bancaire :</h4>
                    <img src="images/pbimg.png">
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
            <div class="col-6" style="background:black;">

                <center>
                    <div class="row" style="background:black; margin-top:60px;">
                        <div class="col-12">
                            </br>
                            </br>
                            <center>
                                <button type="submit" name="reserver" class="btn btn-warning">Ajouter un compte PayPal</button>
                            </center>
                        </div>
                        <div style="margin-top:60px;">
                            <img src="images/pbimg.png" onclick="window.location.href = 'lienPayPal';">
                        </div>
                    </div>
                </center>
            </div>




            <div class="row" style="background:black;margin-left:0px;">
                <center>

                    <button type="submit" name="modifier" class="btn btn-warning">Modifer</button>
                    </br></br>
                </center>
            </div>
            <div class="row" style="background:black;">
                <div style="background:black;margin-left:24px;">
                    <h3 style="color:#FFFFFF">Mes parties à venir :</h3>



                    <div class="col-6">
                        <center>
                            <div style="background:white;border-radius:33px" ;>
                                </br>
                                <div class="col-12">
                                    <img style="margin-right:340px;" src="images/Zombie.png">
                                    <h3 style="margin-top:-50px;margin-right:100px;">Zombieland</h3>
                                </div>
                                </br>
                                <div style=" align-self:right;">
                                    <div class="col-12">
                                        <img src="images/calend.png">
                                        <h5>20 / 12 / 2021</h5>
                                    </div>
                                    <div class="col-12">
                                        <img src="images/joueur.png">
                                        <h5>4 joueurs </h5>
                                    </div>
                                    </br>
                                </div>
                            </div>

                        </center>
                    </div>

                    <center>
                        </br>
                        </br>
                        <button type="submit" class="btn btn-default1">Afficher plus</button>

                    </center>
                    </br>
                    </br>
                </div>
                <div style="background:black;margin-left:24px;">
                    <h3 style="color:#FFFFFF">Mes Anciennes parties :</h3>
                    <div class="row">

                        <div class="col-6">
                            <center>

                                <div style="background:white;border-radius:33px" ;>
                                    </br>
                                    <div class="col-12">
                                        <img style="margin-right:340px;" src="images/Zombie.png">
                                        <h3 style="margin-top:-50px;margin-right:100px;">Zombieland</h3>
                                    </div>
                                    </br>
                                    <div style=" align-self:right;">
                                        <div class="col-12">
                                            <img src="images/calend.png">
                                            <h5>20 / 10 / 2019</h5>
                                        </div>
                                        <div class="col-12">
                                            <img src="images/joueur.png">
                                            <h5>5 joueurs </h5>
                                        </div>
                                        </br>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <div class="col-6">
                            <center>
                                <div style="background:white;border-radius:33px" ;>
                                    </br>
                                    <div class="col-12">
                                        <img style="margin-right:340px;" src="images/fuse.png">
                                        <h3 style="margin-top:-50px;margin-right:100px;">Terra for Mars</h3>
                                    </div>
                                    </br>
                                    <div style=" align-self:right;">
                                        <div class="col-12">
                                            <img src="images/calend.png">
                                            <h5>15 / 06 / 2020</h5>
                                        </div>
                                        <div class="col-12">
                                            <img src="images/joueur.png">
                                            <h5>6 joueurs </h5>
                                        </div>
                                        </br>
                                    </div>
                                </div>
                            </center>
                        </div>

                    </div>
                    <center>
                        </br>
                        </br>
                        <button type="submit" class="btn btn-default1">Afficher plus</button>

                    </center>
                </div>
                <div style="background:black;margin-left:24px;">
                    <h3 style="color:#FFFFFF">Mes ancien coéquipiers :</h3>
                    <div class="row">
                        <div class="col-6">
                            <center>
                                <div style="background:white;border-radius:33px" ;>
                                    </br>
                                    <div class="col-12">
                                        <img style="margin-right:450px;"  width="12%" height="12%" src="images/ProfilPetit3.png">
                                        <h3 style="margin-top:-50px;margin-right:100px;">Julie Mesnard</h3>
                                        <img style="margin-right:-380px;"  width="12%" height="12%" src="images/avis.png">
                                         <h5 style="margin-right:450px;">23 ans</h5>
                                    </div>
                                    </br>
                                    <div style=" align-self:right;">
                                        
                                        <div class="col-12">
                                            
                                            <button type="submit" class="btn btn-default">Noter</button>
                                        </div>
                                        </br>
                                          <div class="col-12">
                                            
                                            <button type="submit" class="btn btn-default">Commenter</button>
                                        </div>
                                        
                                                                                

                                        </br>
                                    </div>
                                </div>

                            </center>
                        </div>
<div class="col-6">
                            <center>
                                <div style="background:white;border-radius:33px" ;>
                                    </br>
                                    <div class="col-12">
                                        <img style="margin-right:450px;"  width="11%" height="11%" src="images/ProfilPetit2.png">
                                        <h3 style="margin-top:-50px;margin-right:100px;">Lucas Touchaud</h3>
                                        <img style="margin-right:-380px;"  width="12%" height="12%" src="images/avis.png">
                                         <h5 style="margin-right:450px;">26 ans</h5>
                                    </div>
                                    </br>
                                    <div style=" align-self:right;">
                                        
                                        <div class="col-12">
                                            
                                            <button type="submit" class="btn btn-default">Noter</button>
                                        </div>
                                        </br>
                                          <div class="col-12">
                                            
                                            <button type="submit" class="btn btn-default">Commenter</button>
                                        </div>
                                        </br>
                                    </div>
                                </div>

                            </center>
                            
                        </div>


                    </div>
                     </br>
 </br><center>
                        <button type="submit" class="btn btn-default1">Afficher plus</button>
                        </center>
                </div>
                
                
                <div style="background:black;margin-left:24px;">
                    <h3 style="color:#FFFFFF">Mon avis District :</h3>
                    <div class="row">
 <center>
                        <div class="col-8">
                           </br></br>
                               <img   src="images/donnerA.png">
                            </br></br></br></br>
                        </div>
                  </center>      

                    </div>
                </div>
                <div style="background:black;margin-left:24px;">
                    <h3 style="color:#FFFFFF">Fidélité District 9 :</h3>
                    <div class="row">

                     
                            <center>
                                </br></br>
                                 </br>>
                                  <img   src="images/Groupe 311.png">
                                  </br></br></br>
                            </center>
                         </br>

                    </div>
                </div>

            </div>

            </br>
            
            <div class="col-12" style="background:black;">
            <center>
            </br></br>
            <a class="btn btn-default" href="deconnexion">Deconnexion</a>
            </br></br></br>
            </center>
            </div>
            
            </br>

        </div>
    </div>

</div>