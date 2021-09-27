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
                <h1>Si tiene seguro: ¿Cuanto pagas mensaulmente por tu seguro?</h1>
                <h1>Si no tiene seguro: ¿Cuanto estarías dispuesto a pagar por un seguro?</h1>
                <form class="needs-validation" action="save_and_send.php" method="post">
                    <div class="row g-3 mb-5">
                        <div class="col-sm-12">
                            <label for="name" class="form-label">Pesos MX</label>
                            <select class="form-control">
                                <option>Seleccionar</option>
                                <option>De 500 a 1000</option>
                                <option>De 1000 a 2000</option>
                                <option>De 2000 a 5000</option>
                                <option>De 5000 a 0000</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingresa un nombre valido.
                            </div>
                        </div>

                    </div>


                    <a class="w-100 btn btn-primary btn-lg " type="submit" href="statistics.php">Finalizar</a>
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