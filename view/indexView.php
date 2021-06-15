<?php include "layout/header/header.php"; ?>

<main>
  <section class="container my-5">
    <h2 class="my-3">Liste des livres : </h2>
    <div class="row">
      <div class="col-sm-9 col-md-9 col-lg-11 m-auto text-center">
        <table class="table table-striped">
          <thead>
            <tr class="px-3">
              <th scope="col">Id</th>
              <th scope="col">Titre</th>
              <th scope="col">Auteur</th>
              <th scope="col">Date de parution</th>
              <th scope="col">Catégorie</th>
              <th scope="col">Status</th>
              <th scope="col">Résumé</th>
              <th scope="col">Gérez</th>
            </tr>
          </thead> 
          <tbody>  
            <?php foreach($books as $book) :?>
              <tr>
                <th scope="row"><?php echo $book->getId()?></th>
                <td><?php echo $book->getTitle()?></td>
                <td><?php echo $book->getAuthor()?></td>
                <td><?php echo $book->getRelease_date()?></td>
                <td><?php echo $book->getCategory()?></td>
                <td><?php echo $book->getStatus()?></td>
                <td><?php echo $book->getSummary()?></td>
                <td><a href="#">Voir le livre</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody> 
        </table>
      </div>
    </div>
  </section>
</main>

<?php include "layout/footer/footer.php"; ?>