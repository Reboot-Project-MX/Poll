<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
    <title>A-Medicall Encuesta de aseguradoras</title>
    <link rel="canonical" href="https://www.rebootproject.mx">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">Bienvenida a encuesta</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php include "includes/menu.php" ?>
            </div>
        </nav>
    </header>

    <main>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing mt-5">

            <div class="featurette mb-3">
                <form class="needs-validation" action="save_and_send.php" method="post">
                    <div class="row g-3 mb-5">
                        <div class="col-sm-12">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Nombre Completo" value="" name="name" minlength="10" required>
                            <div class="invalid-feedback">
                                Ingresa un nombre valido.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                            <div class="invalid-feedback">
                                Ingresa un email valido.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="phone" class="form-label">Fecha de nacimiento</label>
                            <input type="text" class="form-control" id="phone" placeholder="YYYY/MM/AA" name="phone" minlength="10" maxlength="10" pattern="[0-9]{10}">
                            <div class="invalid-feedback">
                                Por favor ingresa un número de celular valido a 10 digitos
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="phone" class="form-label">Tiens una poliza de seguros vigente</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                            </div>
                        </div>

                    </div>


                    <a class="w-100 btn btn-primary btn-lg " type="submit" href="poll_second.php">Enviar Mensaje</a>
                </form>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="styles.css" rel="stylesheet">
</body>

</html>