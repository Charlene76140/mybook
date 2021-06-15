<?php include "layout/header/header.php"; ?>

<main>
  <section>
    <h2>Liste des livres : </h2>
    <div>
      <table>
        <thead>
          <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Date de parution</th>
            <th>Catégorie</th>
            <th>Status</th>
            <th>Résumé</th>
            <th>Gérez</th>
          </tr>
        </thead> 
        <tbody>  
          <?php foreach($books as $book) :?>
            <tr>
                <td><?php echo $book->getTitle()?>. du texte en plus</td>
                <td><?php echo $book->getAuthor()?></td>
                <td><?php echo $book->getRelease_date()?></td>
                <td><?php echo $book->getCategory()?></td>
                <td><?php echo $book->getStatus()?> . tu texte encore en plus</td>
                <td><?php echo $book->getSummary()?></td>
                <!-- <td><a href="#">Voir le livre</a></td> -->
                <td>Voir</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody> 
      </table>
    </div>
  </section>
</main>

<?php include "layout/footer/footer.php"; ?>