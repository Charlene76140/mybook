<?php include "layout/header/header.php"; ?>

    <main>
        <section class="container my-5">
            <h2 class="my-3">Ajouter un livre : </h2>
            <div class="row">
                <div class="col-sm-9 col-md-6 col-lg-5 card">
                    <form method="post" action="" class="my-4">
                        <p>
                            <label for="title" class="form-label">Titre du livre</label><br />
                            <input type="text" name="title" id="title" class="form-control " required/>
                        </p>
                        <p>
                            <label for="author" class="form-label">Auteur</label><br />
                            <input type="text" name="author" id="author" class="form-control " required/>
                        </p>
                        <p>
                            <label for="release_date" class="form-label">Date de parution</label><br />
                            <input type="date" name="release_date" id="release_date" class="form-control " required/>
                        </p>
                        <p>
                            <label for="category" class="form-label">Catégorie </label><br />
                            <select name="category" id="account_type" class="form-select ">
                                <option value="Roman">Roman</option>
                                <option value="Thrillers">Thrillers</option>
                                <option value="Nouvel">Nouvel</option>
                                <option value="SF/Fantasy">SF/Fantasy</option>
                            </select>
                        </p>
                        <p>
                            <label for="status" class="form-label">Statut </label><br />
                            <select name="status" id="status" class="form-select ">
                                <option value="disponible">disponible</option>
                                <option value="indisponible">indisponible</option>
                            </select>
                        </p>
                        <p>
                            <label for="summary" class="form-label">Résumé</label><br />
                            <textarea type="text" name="summary" id="summary" class="form-control " ></textarea>
                        </p>
                        <input type="submit" value="Envoyer" class="btn bgColor"/>
                    </form>
                </div>
            </div>
        </section>
    </main>

<?php include "layout/footer/footer.php"; ?>