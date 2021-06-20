<?php include "layout/header/header.php"; ?>

<main>
    <section class="container my-5">
        <h2 class="my-5">Liste des utilisateurs : </h2>
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-11 m-auto text-center">
                <table class="table table-striped">
                    <thead>
                        <tr class="px-3">
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Numéro personnel</th>
                        <th scope="col">Gérez</th>
                        </tr>
                    </thead> 
                    <tbody>  
                        <?php foreach($customers as $customer) :?>
                        <tr>
                            <th scope="row"><?php echo $customer->getId()?></th>
                            <td><?php echo $customer->getLastname()?></td>
                            <td><?php echo $customer->getFirstname()?></td>
                            <td><?php echo $customer->getStreet_number();?> <?php echo $customer->getStreet_address();?> <?php echo $customer->getArea_code();?> <?php echo $customer->getCity()?></td>
                            <td><?php echo $customer->getPersonnal_code()?></td>
                            <td><a class="btn bgColor" href="customer.php?id=<?php echo $customer->getId()?>">Voir l'utilisateur</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody> 
                </table>
            </div>
        </div>
    </section>
</main>
<?php include "layout/footer/footer.php"; ?>
