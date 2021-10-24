<div class="modal-body">
                            <!-- formulaire d'enregistrement client -->
                            <form action="controller/tableclient.php" method="POST" enctype="multipart/form-data">
                            <?php
                                $eid=$_GET['editid'];
                                $ret=mysqli_query($con,"select * from client where 	idclient ='$eid'");
                                while ($row=mysqli_fetch_array($ret)) {
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="example-text-input"
                                                placeholder="cni" name="cni">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="example-text-input"
                                                placeholder="prénom" name="prenom">
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="example-text-input"
                                                placeholder="nom" name="nom">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="example-text-input"
                                                placeholder="prénom" name="prenom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input class="form-control" type="date" value="2018-11-23"
                                                    id="example-date-input" name="dateN">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input class="form-control" placeholder="Lieu de naiss" type="text"
                                                    id="example-text-input" name="naissL">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" id="example-tel-input"
                                                placeholder="téléphone" value="+225" name="telephone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="email" value="@example.com"
                                                id="example-email-input" placeholder="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="example-text-input"
                                                placeholder="profession" name="profession">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="file" class="form-control" id="example-text-input"
                                                name="photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="example-text-input"
                                                placeholder="sexe" name="sexe">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="file" class="form-control" id="example-text-input"
                                                placeholder="signature" name="signature">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn bg-gradient-secondary"
                                        data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn bg-gradient-primary"
                                        name="enregistreClient">Enregister</button>
                                </div>
                            </form>
                          