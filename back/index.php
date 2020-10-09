<?php
// ici on met le code php
session_start();
include "../functions/functions.php";
include "../functions/sql.php";
if(!$_COOKIE["accesAdmin20200727"]){
    header("location: ../index.php");
    exit();
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Admin Médiathèque</title>
        <?php include "./includes/admin-bootstrap.php"; ?>
    </head>
    <body class="container">
        <?php include "./includes/admin-menu.php"; ?>
        <section class="row">
            <article class="col-lg-6">
                <?php echo listMediaBack(); ?>
            </article>
            <article class="col-lg-6">
                <?php echo listAuteurBack(); ?>
            </article>
        </section>
        <!-- Modal edit media -->
        <div class="modal fade" id="editMedia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group row">
                                <label for="titre" class="col-lg-4">Titre :</label>
                                <input type="text" class="form-control col-lg-8" name="titre" id="titre" value=""
                                       placeholder="Renseignez le titre du média" required />
                            </div>
                            <div class="form-group row">
                                <label for="resume" class="col-lg-4">Résumé :</label>
                                <textarea class="form-control" name="resume" id="resume" placeholder="Résumé du média"></textarea>
                            </div>
                            <input type="hidden" name="idMedia" id="idMedia" value="" />
                            <input type="hidden" name="idUtilisateur" id="idUtilisateur" value="" />

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal edit auteur -->
        <div class="modal fade" id="editAuteur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
