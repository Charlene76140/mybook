<?php include "layout/header/header.php"; ?>

<main>
    <section class="container my-5">
        <h2 class="my-5">Détail du livre : </h2>
        <div class="row">
            <div class="card text-center col-12 col-lg-6">
                <div class="card-header fs-4">
                    <?php echo $book->getTitle()?>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Auteur :</strong> <?php echo $book->getAuthor()?></p>
                    <p class="card-text"><strong>Date de parution :</strong><?php echo $book->getRelease_date()?></p>
                    <p class="card-text"><strong>Catégorie :</strong> <?php echo $book->getCategory()?></p>
                    <p class="card-text"><strong>Résumé :</strong> <?php echo $book->getSummary()?></p>
                    <p class="card-text"><strong>Statut :</strong> <?php echo $book->getStatus()?></p>
                </div>
                <?php if($book->getCustomer_id() == NULL) :?>
                    <div class="card-footer text-muted">
                        <form method="post" action="">
                            <input type="submit" name="supprimer" value="Supprimer le livre" class="btn bgColor my-3"/>
                        </form>
                    </div>
            </div>
                    <div class="card text-center col-12 col-lg-3">
                        <div class="card-header fs-4">Attribuer le livre</div>
                        <form method="post" action="">
                            <label for="customer_id" class="form-label my-3">Id du client</label><br />
                            <input type="text" name="customer_id" id="customer_id" class="form-control w-50 m-auto" required/><br />
                            <div class="card-text text-muted">
                                <input type="submit" value="Enregistrer" class="btn bgColor my-3"/>
                            </div>
                        </form>
                    </div>
                <?php else :?>
                    <div class="card-footer text-muted">
                        <form method="post" action="">
                            <input type="submit" name="rendre" value="Rendre le livre" class="btn bgColor my-3"/>
                        </form>
                    </div>
            </div>
                    <div class="col-12 col-lg-5">
                        <div class="card">
                            <div class="card-header">
                                <strong>Prêté à :</strong> <?php echo $customer->getFirstname();?> <?php echo $customer->getLastname();?>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Adresse : </strong><?php echo $customer->getStreet_number();?> <?php echo $customer->getStreet_address();?> <?php echo $customer->getArea_code();?> <?php echo $customer->getCity();?></li>
                                <li class="list-group-item"><strong>Numéro abonné : </strong><?php echo $customer->getPersonnal_code();?> </li>
                            </ul>
                        </div>
                    </div>
            <?php endif ; ?>
        </div>
    </section>

</main>

<?php include "layout/footer/footer.php"; ?>
