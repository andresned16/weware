<!DOCTYPE html>
<!--Desarrollado por Andrés Felipe Pérez Otálora-->
<?php include_once "includes/functions.php"; ?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1"/>           
        <title>Weware landing</title>
        <link rel="icon" href="<?= $path ?>images/icon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="<?= $path; ?>css/style.css" rel="stylesheet"> 
        <script>
            var path = '<?= $path ?>';
            var pathGA = '<?= $pathGA ?>';
            var test = '<?= $test ?>';
        </script>         
    </head>
    <body>

        <div id="container"> 
            <section id="homepage" data-role="page" class="selected">
                <div class="content">
                    <!--Barra de navegaciòn-->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="<?= $path ?>images/logo.png" alt="" width="" height="24">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Comunity</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Blog</a>
                                    </li>

                                </ul>
                                <button class="btn btn-outline-success" type="submit">Get early access</button>
                            </div>
                        </div>
                    </nav>
                    <!--Primera imagen-->
                    <div class="image1">
                        <picture>
                            <source media="(max-width: 799px)" srcset="<?= $path ?>images/image1mobile.png">
                            <source  media="(min-width: 800px)" srcset="<?= $path ?>images/image1desktop.png">
                            <img class="image1" src="<?= $path ?>images/image1desktop.png" alt="">
                        </picture>
                    </div>
                    <p class="text1"><b>Weware means:</b> Easy to find knowledge, content and process. Announcements, team engagement, recognition and profiles. &#128080;</p>
                    <!--Caja de email-->
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Your email address" aria-label="Search">
                        <button class="btn btn-outline-success botonenvio" type="submit">Get early access</button>
                    </form>
                    <!--Segunda imagen-->
                    <div class="image2">
                        <picture>
                            <source media="(max-width: 799px)" srcset="<?= $path ?>images/image2mobile.png">
                            <source  media="(min-width: 800px)" srcset="<?= $path ?>images/image2desktop.png">
                            <img class="image2" src="<?= $path ?>images/image2desktop.png" alt="">
                        </picture>
                    </div>
                    <div class="barratextos">
                        <p class="arrow">-></p>
                        <p class="text2">Add topics, such as Design, Marketing, HR to organize your updates into groups.</p>   
                        <p class="arrow">-></p>
                        <p class="text2">Activate leaderboards for some friendly competition!</p>   
                        <p class="arrow">-></p>
                        <p class="text2" style="margin-bottom: 15%">Add an update or some news for your team</p>   
                    </div>
                    <!--QUINTA SECCIÓN-->
                    <h1 class="text3">Distributed teams brought together</h1> 
                    <div class="barralogos">
                        <img class="logos" src="<?= $path ?>images/logo1.png" alt="">
                        <img class="logos" src="<?= $path ?>images/logo2.png" alt="">
                        <img class="logos" src="<?= $path ?>images/logo3.png" alt="">
                        <img class="logos" src="<?= $path ?>images/logo4.png" alt="">
                        <img class="logos" src="<?= $path ?>images/logo5.png" alt="">
                        <img class="logos" src="<?= $path ?>images/logo6.png" alt="">
                    </div>
                    <!--SEXTA SECCIÓN-->
                    <h1 class="text3">Engage your remote team</h1> 
                    <p class="text1">Remote work is challenging when knowledge is spread across slack, emails, documents and spreadsheets. It is especially challenging when trying to find information and engage with your remote team.</p>
                    <p class="text1" style="margin-top: 2%;"><b>Weware solves all that.</b>Create your team directory with profiles, share company announcements, create knowledge wiki where you share important information and processes. Best of all, weware is also a place to engage and recognize effort.</p>
                    <div class="image3">
                        <picture>
                            <source media="(max-width: 799px)" srcset="<?= $path ?>images/image3mobile.png">
                            <source  media="(min-width: 800px)" srcset="<?= $path ?>images/image3desktop.png">
                            <img class="image3" src="<?= $path ?>images/image3desktop.png" alt="">
                            <h2 class="text3 pasosmobile">Announcements</h2> 
                            <p class="text1 pasosmobile">Your entire team in one place, with Engage your team with company wide announcements that entice engagement. The team homepage reveals everything going on with your team.</p>
                        </picture>
                        <picture class="pasosmobile">
                            <source media="(max-width: 799px)" srcset="<?= $path ?>images/image4mobile.png">
                            <source  media="(min-width: 800px)" style="display:none">
                            <img class="image3" src="<?= $path ?>images/image4mobile.png" alt="">
                            <h2 class="text3">Wiki</h2> 
                            <p class="text1">Create and share knowledge with your team. Whether it be company processes, presentations, content your team has created, anything! Find anything directly from Slack too.</p>
                        </picture>
                        <picture class="pasosmobile">
                            <source media="(max-width: 799px)" srcset="<?= $path ?>images/image5mobile.png">
                            <source  media="(min-width: 800px)" style="display:none">
                            <img class="image3" src="<?= $path ?>images/image5mobile.png" alt="">
                            <h2 class="text3">Team directory</h2> 
                            <p class="text1">Your entire team in one place, with profile information, history, notes and more. You no longer need a clunky separate HR app.</p>
                        </picture>
                        <picture class="pasosmobile">
                            <source media="(max-width: 799px)" srcset="<?= $path ?>images/image6mobile.png">
                            <source  media="(min-width: 800px)" style="display:none">
                            <img class="image3" src="<?= $path ?>images/image6mobile.png" alt="">
                            <h2 class="text3">Recognition</h2> 
                            <p class="text1">Anyone can thank, recognize co workers for their effort. The activity feeds reveal all the great things happening on your team.</p>
                        </picture>

                        <!--SEPTIMA SECCIÓN-->
                        <p class="text4">“We've had less confusion with task responsibilities and deadlines, which has increased productivity and efficiency.”</p>
                        <div class="barralogos" style="width:37%">
                            <img style="float:left; margin-left: 20%" src="<?= $path ?>images/iconface.png" alt="">
                            <p class="textname">John Doe, Qrvey.</p>
                        </div>
                        <!--OCTAVA SECCIÓN-->
                    </div>
                    <div class="image4">
                        <picture>
                            <source media="(max-width: 799px)" srcset="<?= $path ?>images/imagecont1mobile.png">
                            <source  media="(min-width: 800px)" srcset="<?= $path ?>images/imagecont1desktop.png">
                            <img class="image4" src="<?= $path ?>images/imagecont1desktop.png" alt="">
                            <form class="d-flex boxemail">
                                <input class="form-control me-2 boxemailtext" type="search" placeholder="Your email address" aria-label="Search">
                                <button class="btn btn-outline-success botonenvio" type="submit">Get early access</button>
                            </form>
                        </picture>
                    </div>

                    <!--NOVENA SECCIÓN-->
                    <h1 class="text3">FAQ</h1> 
                    <div class="accordion desplegable" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lorem ipsum dolor sit amet?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien. Scelerisque habitant felis sit mi. Justo gravida leo non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem ipsum dolor sit amet?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien. Scelerisque habitant felis sit mi. Justo gravida leo non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien. Scelerisque habitant felis sit mi. Justo gravida leo non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien. Scelerisque habitant felis sit mi. Justo gravida leo non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien. Scelerisque habitant felis sit mi. Justo gravida leo non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien. Scelerisque habitant felis sit mi. Justo gravida leo non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien. Scelerisque habitant felis sit mi. Justo gravida leo non bibendum accumsan lacus justo venenatis morbi aliquet quisque sapien.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--DECIMA SECCIÓN-->
                    <h3 class="text5">Sign up for product updates:</h3> 
                    <form class="d-flex productsupdate">
                        <p class="text6">Ullamcorper orci, eu venenatis ac euismod vel purus tortor rhoncus mauri.</p>
                        <input class="form-control me-2 navbar2" type="search" placeholder="Your email address" aria-label="Search">
                        <button class="btn btn-outline-success botonenvio" type="submit">Suscribe</button>
                    </form>
                    <div class="line"></div>
                    <!--ONCEAVA SECCIÓN-->
                    <div class="footer">
                        <div class="secciones">
                            <h6 class="text7">Social media</h6>
                            <p class="greenline">__</p>
                            <a class="nav-link text8" href="#">Discord</a>
                            <a class="nav-link text8" href="#">Twitter</a>
                            <a class="nav-link text8" href="#">Instagram</a>
                        </div>
                        <div class="secciones">
                            <h6 class="text7">Company</h6>
                            <p class="greenline">__</p>
                            <a class="nav-link text8" href="#">Community</a>
                            <a class="nav-link text8" href="#">Blog</a>
                        </div>
                        <div class="secciones">
                            <h6 class="text7">Resources</h6>
                            <p class="greenline">__</p>
                            <a class="nav-link text8" href="#">Contact Us</a>
                        </div>
                        <div class="secciones versiontext">
                            <img class="logofinal" src="<?= $path ?>images/logo.png" alt="">
                            <a class="nav-link text8 text8edited" href="#">Ullamcorper orci, venenatis ac euismod vel purus tortor rhoncu.</a>
                        </div>

                    </div>

                </div>          
               
            </section>      

        </div>
        <script type="text/javascript" src="<?= $path; ?>js/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?= $path; ?>js/script.js"></script>

    </body>
</html>

