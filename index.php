<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>Titre de la page</title>

    <script src="https://kit.fontawesome.com/0c87a70838.js"></script>

    <!--CUSTOM CSS-->

    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    </head>

    <body>

    <!-- NAVBAR -->

        <nav>
            <div class="navbar">
                <div class="container">
                    <img src="img/logo.png" alt=""/>
                    <a href="#accueil">Accueil</a>
                    <a href="#bienvenue">qui somme-nous ?</a>
                    <a href="#service">nos services</a>
                    <a href="#methode">nos méthode</a>
                    <a href="login/login.php">Connexion</a>
                </div>
            </div>
        </nav>

    <!-- SECTION 1 -->

        <section class="sec1" id="accueil">
            <div class="container">
                <div class="left"> 
                    <h1>mystic shop</h1>
                    <p>
                    Mystic Shop est un magasin virtuel de vente de composants informatiques et de différentes fournitures en rapport avec le monde numérique.
                    Vous pourrez faire monter directement vos composants ou votre Pc.
                    </p>
                    <a href="#bienvenue"><button>Découvrir</button></a>
                </div>
                <div class="right">
                    <img src="img/porte.png" alt=""/>
                </div>
            </div>
        </section>

    <!-- SECTION 2 -->

        <div id="bienvenue" style="position: relative; top: -40px;"></div>
        <section class="sec2">
            <div class="container">
                <div class="big-card">
                    <div class="left">
                        <img src="img/fondrie.png" alt="">
                    </div>

                    <div class="right">
                        <h4>bienvenue dans</h4>
                        <h1>Le mystic shop</h1>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Donec sed lorem quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Vestibulum dapibus mauris aliquam nisi facilisis laoreet sit amet eu dolor. Nulla vitae turpis iaculis, rhoncus dolor vitae, lobortis sapien.
                        </p>
                    </div>
                    <a href="#service" class="arrow"></a>
                </div>
            </div>
        </section>

    <!-- SECTION 3 -->

        <div id="service" style="position: relative; top: 300px;"></div>
        <section class="sec3">
                <img src="svg/pique-down.svg" class="pique_down"/>
                <div class="title">
                    <h4>nos</h4>
                    <h1>services de forgerons</h1>
                </div>
            <div class="container">
                <div class="left">
                    <div class="top">
                        <h2>demande personnalisée</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec sed lorem quam. Orci varius natoque penatibus.
                        </p>
                    </div>
                    <div class="bottom">
                        <h2>demande personnalisée</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec sed lorem quam. Orci varius natoque penatibus.
                        </p>
                    </div>
                </div>
                <div class="mid">
                    <img src="img/tour.png" alt="">
                </div>
                    <div class="right">
                        <div class="top">
                            <h2>demande personnalisée</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec sed lorem quam. Orci varius natoque penatibus.
                            </p>
                        </div>
                        <div class="bottom">
                            <h2>demande personnalisée</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec sed lorem quam. Orci varius natoque penatibus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                <img src="svg/pique-up.svg" class="pique_up"/>
        </section>

    <!-- SECTION 4 -->

        <section class="sec4" id="methode">
            <div class="center">
                <div class="title">
                    <h4>nos</h4>
                    <h1>méthodes</h1>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="top">
                        <img src="img/lava.png" alt="">
                    </div>

                    <div class="bottom">
                        <h4>un</h4>
                        <h1>savoir-faire</h1>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec sed lorem quam. Orci varius natoque penatibus.
                        </div>
                    </div>
                                
                </div>

                <div class="card">
                    <div class="top">
                        <img src="img/rock.png" alt="">
                    </div>

                    <div class="bottom">
                        <h4>un</h4>
                        <h1>savoir-faire</h1>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec sed lorem quam. Orci varius natoque penatibus.
                        </div>
                    </div>
                                
                </div>
                
                <div class="card">
                    <div class="top">
                        <img src="img/volcan.png" alt="">
                    </div>

                    <div class="bottom">
                        <h4>un</h4>
                        <h1>savoir-faire</h1>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec sed lorem quam. Orci varius natoque penatibus.
                        </div>
                    </div>
                                
                </div>

            </div>
        </section>

        <footer>
            <div class="container">
                <div class="left">
                    <h1>
                    menu
                    </h1>
                    <a href="#accueil">accueil</a>
                    <a href="#bienvenue">qui somme nous ?</a>
                    <a href="#service">Nos services</a>
                    <a href="#methode">Nos méthodes</a>
                </div>
                <div class="right">
                    <h1>
                    A propos de nous
                    </h1>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec sed lorem quam. Orci varius natoque penatibus.
                    </p>
                </div>
            </div>

        </footer>
    </body>
</html>