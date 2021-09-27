<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
    <title>Resultados</title>
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
                <?php include "includes/menu.php" ?>
            </div>
        </nav>
    </header>

    <main>

        <div class="container marketing mt-5">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-6">
                    <div id="pie-sex"></div>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is
                        the first column.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-6">
                    <div id="pie-age"></div>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is
                        the first column.</p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-12">
                    <div id="line-time"></div>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('pie-sex', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Resultado de esta encuesta por sexo'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Sexo',
                colorByPoint: true,
                data: [{
                    name: 'Hombre',
                    y: 60.00,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Mujer',
                    y: 40.00
                }]
            }]
        });
        Highcharts.chart('pie-age', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Resultado de esta encuesta por edad'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Edad',
                colorByPoint: true,
                data: [{
                    name: 'de 18-30',
                    y: 30.00,
                    sliced: true,
                    selected: true
                }, {
                    name: 'de 30-50',
                    y: 40.00
                }, {
                    name: 'de 50-70',
                    y: 40.00
                }]
            }]
        });
        Highcharts.chart('line-time', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Linea del tiempo por sexo de los encuestados'
            },
            subtitle: {
                text: 'Fuente: Esta encuesta'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                ]
            },
            yAxis: {
                title: {
                    text: 'Temperature'
                },
                labels: {
                    formatter: function() {
                        return this.value + '°';
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: 'Hombres',
                marker: {
                    symbol: 'square'
                },
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
                    y: 26.5,
                    marker: {
                        symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
                    }
                }, 23.3, 18.3, 13.9, 9.6]

            }, {
                name: 'Mujeres',
                marker: {
                    symbol: 'diamond'
                },
                data: [{
                    y: 3.9,
                    marker: {
                        symbol: 'url(https://www.highcharts.com/samples/graphics/snow.png)'
                    }
                }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
    </script>
</body>

</html>