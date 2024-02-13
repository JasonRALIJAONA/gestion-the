<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Index</title>
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">DI-T</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">LOGIN</h1>
                        <form class="form-horizontal" action="../traitements/traite-login-user.php" method="post" style="margin-top: 50px;">
                            <div class="form-group row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-right">E-Mail</label>
                                <div class="col-sm-8 col-lg-7">
                                    <input type="text" name="email" placeholder="E-Mail" class="form-control" value="Bob@gmail.com">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-right">Mot de passe</label>
                                <div class="col-sm-8 col-lg-7">
                                    <input type="password" name="mdp" placeholder="Mot de passe" class="form-control" value="bob01">
                                </div>
                            </div>
                            <?php if (isset($_GET['error'])) { ?>
                                <p style="color:red"><?php echo($_GET['error']); ?></p>
                            <?php } ?>
                            <p style="margin-top: 20px;"><a href="login-temp-admin.php">Se connecter en tant qu'administrateur?</a></p>
                            <div class="form-group row">
                                <div class="col-sm-12 col-lg-8 offset-sm-4 offset-lg-2">
                                    <button style="margin-top: 20px;" type="submit" class="btn btn-primary">Se connecter</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
    </div>
</header>


        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Le meilleur du thé dans le marché</h2>
                        <p class="text-white-50">
                            Découvrez le thé comme vous ne l'avez jamais vu auparavant. Bienvenue chez DI-T où chaque tasse raconte une histoire.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="../assets/img/fondLogin.jpg" alt="..." />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="../assets/img/image-3.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Shoreline</h4>
                            <p class="text-black-50 mb-0">Offre une expérience unique pour les amateurs de thé. Nos produits sont soigneusement sélectionnés et disponibles pour tous les projets - même les délices commerciaux!</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="../assets/img/image-1.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Misty</h4>
                                    <p class="mb-0 text-white-50">Dans le monde féerique de Di-T, chaque image raconte une histoire en harmonie avec nos descriptions enchanteresses. Explorez nos produits et laissez-vous transporter par la magie du thé.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="../assets/img/image-2.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Mountains</h4>
                                    <p class="mb-0 text-white-50">Découvrez les sommets de saveurs offerts par DI-T, où chaque projet est accompagné d'une description immersive. Plongez dans notre univers et laissez-vous emporter par l'expérience, que ce soit sur votre ordinateur ou votre appareil mobile!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Rakotoarimanana Nathan</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">ETU002485</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Ralijaona Andriniaina Jason</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">ETU002529</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Andriambelomisandratra Onitsoa Elisa</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">ETU002382</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; DI-T 2024 </div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
