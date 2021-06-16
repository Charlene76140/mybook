<?php include "layout/header/header.php"; ?>

<main>
    <section class="container my-5">
        <h2 class="my-3">Détail du livre : </h2>
        <div class="row">
            <div class="card text-center col-6">
                <div class="card-header fs-3">
                    <?php echo $book->getTitle()?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Auteur : <?php echo $book->getAuthor()?></h5>
                    <p class="card-text">Date de parution : <?php echo $book->getRelease_date()?></p>
                    <p class="card-text">Catégorie : <?php echo $book->getCategory()?></p>
                    
                </div>
                <div class="card-footer text-muted">
                    <a href="#" class="btn btn-primary">Supprimer le livre</a>
                    <?php if(!$book->getCustomer_id()) :?>
                    <a href="#" class="btn btn-primary">Attribuer le livre</a>
                    <?php else :?>
                    <a href="#" class="btn btn-primary">Rendre le livre</a>
                    <?php endif ; ?>
                </div>
            </div>
            <?php if($book->getCustomer_id()) :?>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Prêté à :</strong> <?php echo $customer->getFirstname();?> <?php echo $customer->getLastname();?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Adresse : </strong><?php echo $customer->getStreet_number();?> <?php echo $customer->getStreet_address();?> <?php echo $customer->getArea_code();?> <?php echo $customer->getCity();?></li>
                        <li class="list-group-item"><strong>Numéro : </strong><?php echo $customer->getPersonnal_code();?> </li>
                    </ul>
                </div>
            </div>
            <?php endif ; ?>
        </div>
    </section>

</main>

<?php include "layout/footer/footer.php"; ?>
