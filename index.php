<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="src/css/style.min.css">
        <title>Тестовое задание</title>
    </head>
    <body>
        <? include_once ('sgvs.php'); ?>
        <div class="observe-header"></div>
        <header class="header">
            <div class="container">
                <div class="header--logo">
                    <a href="/"><img src="./src/img/logo.png" alt="logo"></a>
                    <button class="header--burger" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <nav class="header--nav">
                    <ul>
                        <li  class="nav-links">
                            <a href="#">
                                Products
                            </a>
                            <svg width="12" height="14">
                                <use xlink:href="#arrow-down">
                            </svg>
                            <ul>
                                <li><a href="#">Some link</a></li>
                                <hr>
                                <li><a href="#">Some link</a></li>
                                <hr>
                                <li><a href="#">Some link</a></li>
                            </ul>
                        </li>
                        <li  class="nav-links">
                            <a href="#">
                                News & Events
                            </a>
                        </li>
                        <li  class="nav-links">
                            <a href="#">
                                Support
                            </a>
                        </li>
                        <li  class="nav-links">
                            <a href="#">
                                Contacts
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="header--right">
                    <a href="#">
                        Login
                    </a>
                    <a href="#">
                        Buy Now
                    </a>
                </div>
            </div>
        </header>
        <main>
            <section class="topBanner">
                <div class="container">
                    <div class="topBanner-slogan">
                        WE SOLVE <br> YOUR PROBLEMS
                    </div>
                    <div class="topBanner-descr">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec accumsan velit.
                        Ut gravida id sem id sodales. Aenean quis enim dui. Vestibulum ullamcorper vel urna quis congue.
                    </div>
                </div>
            </section>
            <section class="sectionBlue">
                <div class="container">
                    <h4>
                        Etiam ac nisl ac quam sodales scelerisque elementum quis purus.
                    </h4>
                    <div class="sectionBlue--list">
                        <div class="sectionBlue--list-card">
                            <div class="img">
                                <img src="./src/img/bl_1.png" alt="blue_1">
                            </div>
                            <div class="desrc">
                                <h5>
                                    Donec efficitur molestie
                                </h5>
                                <p>
                                    Nulla pretium nunc in nulla placerat, sit amet porttitor enim ullamcorper.
                                    Curabitur ex erat, euismod ac vestibulum vel, viverra non lorem.
                                </p>
                            </div>
                            <div class="link">
                                <a href="#">
                                    Learn More
                                </a>
                            </div>
                        </div>
                        <div class="sectionBlue--list-card">
                            <div class="img">
                                <img src="./src/img/bl_2.png" alt="blue_2">
                            </div>
                            <div class="desrc">
                                <h5>
                                    Mauris interdum venenatis
                                </h5>
                                <p>
                                    Vivamus cursus ante eu orci rutrum, vitae viverra ante dapibus. Vivamus porta molestie turpis, quis elementum nisi egestas eget.
                                </p>
                            </div>
                            <div class="link">
                                <a href="#">
                                    Learn More
                                </a>
                            </div>
                        </div>
                        <div class="sectionBlue--list-card">
                            <div class="img">
                                <img src="./src/img/bl_3.png" alt="blue_3">
                            </div>
                            <div class="desrc">
                                <h5>
                                    Cras sit amet
                                </h5>
                                <p>
                                    Fusce suscipit, ante at imperdiet vehicula, ex augue feugiat enim, sed faucibus sem tortor quis turpis.
                                    Mauris lacinia neque id augue efficitur, ut feugiat massa efficitur.
                                </p>
                            </div>
                            <div class="link">
                                <a href="#">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products">
                <div class="container">
                    <h4>
                        Etiam ac nisl ac quam sodales scelerisque elementum quis purus.
                    </h4>
                    <p>
                        Integer bibendum turpis sit amet pretium commodo. Cras justo elit, dapibus at viverra non, dapibus vitae est.
                        Morbi facilisis mi non iaculis porttitor. Phasellus a nibh a lacus dignissim pharetra. Vivamus ullamcorper finibus mauris,
                        sit amet volutpat enim sollicitudin sed.
                    </p>
                    <div class="products--list">
                        <div class="products--list-card">
                            <div class="img">
                                <img src="/src/img/gr_1.png" alt="gr_1">
                            </div>
                            <div class="desrc">
                                <h5>
                                    Proin felis eros
                                </h5>
                                <p>
                                    Iverra sed eros id, eleifend maximus tortor
                                </p>
                            </div>
                        </div>
                        <div class="products--list-card">
                            <div class="img">
                                <img src="/src/img/gr_2.png" alt="gr_2">
                            </div>
                            <div class="desrc">
                                <h5>
                                    Suspendisse potenti
                                </h5>
                                <p>
                                    Vestibulum mi risus, aliquam vitae efficitur quis
                                </p>
                            </div>
                        </div>
                        <div class="products--list-card">
                            <div class="img">
                                <img src="/src/img/gr_3.png" alt="gr_3">
                            </div>
                            <div class="desrc">
                                <h5>
                                    Fusce pretium enim
                                </h5>
                                <p>
                                    Quisque at dui nunc. Curabitur sodales, turpis at luctus suscipit, nisl leo dignissim turpis
                                </p>
                            </div>
                        </div>
                        <div class="products--list-card">
                            <div class="img">
                                <img src="/src/img/gr_4.png" alt="gr_4">
                            </div>
                            <div class="desrc">
                                <h5>
                                    Vivamus urna eros
                                </h5>
                                <p>
                                    Fusce facilisis nunc a urna lacinia, nec sagittis felis efficitur. Phasellus commodo porttitor odio
                                </p>
                            </div>
                        </div>
                        <div class="products--list-card">
                            <div class="img">
                                <img src="/src/img/gr_5.png" alt="gr_5">
                            </div>
                            <div class="desrc">
                                <h5>
                                    Maecenas congue nisi
                                </h5>
                                <p>
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vulputate
                                    <a href="#">arcu nisi</a>
                                </p>
                            </div>
                        </div>
                        <div class="products--list-card">
                            <div class="img">
                                <img src="/src/img/gr_6.png" alt="gr_6">
                            </div>
                            <div class="desrc">
                                <h5>
                                    Nullam purus velit
                                </h5>
                                <p>
                                    Praesent ac turpis sit amet ex euismod congue vitae sit amet risus
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="products-all">
                        <a href="#">View All Our Products</a>
                    </div>
                </div>
            </section>
            <section class="worldwide">
                <div class="container">
                    <h4>
                        Wordlwide recognition
                    </h4>
                    <div class="worldwide-descr">
                        <p>
                            Integer bibendum turpis sit amet pretium commodo. Cras justo elit, dapibus at viverra non, dapibus vitae est.
                        </p>
                        <br>
                        <p>
                            Fusce pretium enim sit amet elementum eleifend. Quisque at dui nunc. Curabitur sodales, turpis at luctus suscipit,
                            nisl leo dignissim turpis, quis blandit justo nulla sed nisi. Vivamus urna eros, malesuada non massa sed, vestibulum maximus dui.
                            Fusce facilisis nunc a urna lacinia, nec sagittis felis efficitur. Phasellus commodo porttitor odio, eu commodo nisi vehicula ut.
                            Maecenas congue nisi lorem, et maximus ante vestibulum eu. Vivamus non imperdiet ex.
                        </p>
                    </div>
                    <div class="worldwide-img">
                        <img src="/src/img/br_1.png" alt="br_1">
                        <img src="/src/img/br_2.png" alt="br_2">
                        <img src="/src/img/br_3.png" alt="br_3">
                        <img src="/src/img/br_4.png" alt="br_4">
                        <img src="/src/img/br_5.png" alt="br_5">
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div class="links">
                    <a href="#">PRIVACY POLICY</a>
                    <a href="#">ABOUT US</a>
                    <a href="#">SUPPORT</a>
                </div>
                <div class="socials">
                    <a href="#"><svg><use xlink:href="#svg-facebook"></use></svg></a>
                    <a href="#"><svg><use xlink:href="#svg-twitter"></use></svg></a>
                    <a href="#"><svg><use xlink:href="#svg-insta"></use></svg></a>
                </div>
                <div class="copyright">
                    Copyright © 1999 - 2019
                </div>
            </div>
        </footer>
        <script src="src/js/script.min.js"></script>
    </body>
</html>