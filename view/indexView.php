<?php include "layout/header/header.php"; ?>

<main>
  <section class="container my-5">
    <h2>Liste des livres : </h2>
    <div class="row">
      <table class="col-10 col-md-9 col-lg-7 my-4">
        <thead>
          <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Date de parution</th>
            <th>Catégory</th>
            <th>Résumé</th>
            <th>Status</th>
            <th>Gérez</th>
          </tr>
        </thead> 
        <tbody>  
            <tr>
                <td class="indicateurs"></td>
                <td class="value"></td>
                <td class="variation"></td>
                <td class="indicateurs"></td>
                <td class="value"></td>
                <td class="variation"></td>
                <td class="variation"></td>
            </tr>
        </tbody> 
      </table>
    </div>
  </section>
</main>

<?php include "layout/footer/footer.php"; ?>