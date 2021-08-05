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
                <a class="navbar-brand" href="./">A-Medicall</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Encuesta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Estadísticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/backgroud-medical.jpg">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Nos interesa tu opinion</h1>
                            <p>Queremos conocer la calidad del servicio de las compañias que
                                ofrecen Seguros de Gastos
                                Médicos</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Responder encuesta</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/backgroud-medical.jpg">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Te ofrecemos estadísticas</h1>
                            <p>Te damos información en tiempo real de la experiencia que han tenido los usuarios de
                                seguros </p>
                            <p><a class="btn btn-lg btn-primary" href="#">Ver Estadísticas</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </svg>

                    <h2>Anónimo</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is
                        the first column.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </svg>

                    <h2>Rapido</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the
                        second column.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </svg>

                    <h2>Analiza</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="featurette">
                <form class="needs-validation" action="save_and_send.php" method="post">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Nombre Completo" value="" name="name" required>
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
                            <label for="phone" class="form-label">Telefono Celular <span class="text-muted">(Opcional)</span></label>
                            <input type="text" class="form-control" id="phone" placeholder="55XXXXXXXX" name="phone">
                            <div class="invalid-feedback">
                                Por favor ingresa un número de celular valido a 10 digitos
                            </div>
                        </div>

                    </div>

                    <hr class="my-4">
                    <label for="message" class="form-label">Mensaje: </label>
                    <textarea class="form-control" id="message" rows="3" placeholder="¿En que te podemos ayudar?" required name="message"></textarea>

                    <hr class="my-4">


                    <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar Mensaje</button>
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