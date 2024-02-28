<!DOCTYPE html>
<html lang="fr">
@include('header')

<body>
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">HB Tech Solution</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Société informatique d'Edition de logiciels
                    </h1>
                    <p class="text-white mb-4 animated slideInRight">
                        À la recherche de solutions numériques sur mesure pour propulser votre entreprise vers de nouveaux sommets ? Ne cherchez pas plus loin !</p>
                    <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">En savoir plus</a>
                    <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Nous contacter</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/home1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Entrez votre recherce ">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/tech.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Qui sommes nous?</div>
                    <h1 class="mb-4">Nous rendons votre entreprise plus dynamique grâce à nos Solutions de Développement sur Mesure</h1>
                    <p class="mb-4">nous sommes des experts en création d'applications web et mobiles, en développement de logiciels personnalisés,
                        et en conception de solutions digitales innovantes pour répondre à vos besoins spécifiques. Que vous visiez à automatiser vos processus internes, à améliorer l'expérience utilisateur de vos clients ou à accroître votre présence en ligne, notre équipe talentueuse est prête à relever le défi.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Innovation et Agilité</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>>Équipe Talentueuse</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Engagement 24/7</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Prix Compétitifs</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">En savoir plus</a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Nos Services</div>
                    <h1 class="mb-4">Nos excellentes solutions d'ingénierie logicielle pour votre entreprise </h1>
                    <p class="mb-4">Nous offrons des services complets de développement mobile et de création de sites web, ainsi que des solutions d'infographie et bien plus encore.
                         Notre équipe talentueuse est prête à donner vie à vos idées avec créativité et expertise.</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">En savoir plus</a>
                </div>
                <div class="col-lg-7">
                  <div class="row g-4">
    <div class="col-md-6">
        <div class="row g-4">
            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon btn-square">
                        <i class="fas fa-laptop-code fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Développement Web</h5>
                    <p>Nous créons des sites web sur mesure, offrant une expérience utilisateur exceptionnelle et des fonctionnalités innovantes pour votre entreprise.</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">En savoir plus</a>
                </div>
            </div>
            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon btn-square">
                        <i class="fas fa-paint-brush fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Design Web / Infographie</h5>
                    <p>Nous créons des designs attrayants et fonctionnels qui captivent votre public et renforcent votre présence en ligne.</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 pt-md-4">
        <div class="row g-4">
            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon btn-square">
                        <i class="fas fa-mobile-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Développement d'Applications Mobiles</h5>
                    <p>Nous concevons et développons des applications mobiles intuitives et performantes pour répondre aux besoins spécifiques de votre entreprise.</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">En savoir plus</a>
                </div>
            </div>
            <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon btn-square">
                        <i class="fas fa-chart-line fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Stratégie de Marketing Digital</h5>
                    <p>Nous élaborons des stratégies de marketing digital innovantes pour renforcer votre présence en ligne, générer des leads qualifiés et augmenter vos ventes.</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
<div class="container-fluid bg-primary feature pt-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Pourquoi nous choisir?</div>
                <h1 class="text-white mb-4">Votre partenaire pour concrétiser vos projets.</h1>
                <p class="text-light mb-4">Nous comprenons vos besoins spécifiques et offrons des solutions personnalisées qui dépassent vos attentes.</p>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Innovation passionnée</span>
                </div>
                <p class="text-light mb-4"></p>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Engagement envers l'excellence</span>
                </div>
                <p class="text-light mb-4"></p>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Approche personnalisée</span>
                </div>
                <p class="text-light mb-4">Nous collaborons étroitement avec nos clients pour comprendre et répondre à leurs besoins spécifiques, offrant des solutions sur mesure.</p>
                <div class="row g-4 pt-3">
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-users fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">10</h2>
                                <p class="text-white mb-0">Nos clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-check fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">10</h2>
                                <p class="text-white mb-0">Projets réalisés</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                <img class="img-fluid" src="img/pourquoi.png" alt="">
            </div>
        </div>
    </div>
</div>

    <!-- Feature End -->


    <!-- Case Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">NOS PROJETS RÉCENTS</div>
                <h2 class="mb-4">Quelques projets phares développés par Tech Solution.</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-6.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Application mobile</small>
                            <h5 class="lh-base text-white mb-3">D-Academy est une application de E-learning de gestion des cours et quizz
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-5.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Machine learning</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-4.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Application web</small>
                            <h5 class="lh-base text-white mb-3">Hotel Premuim(PR) est une application web modulabe de gestion de services hoteliers
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case End -->


    <!-- FAQs Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">FAQ populaires</div>
                <h1 class="mb-4">Questions fréquemment posées</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Comment créer un site internet ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                   Nous proposons un processus de développement web complet, de la conception à la mise en ligne, en utilisant les technologies les plus récentes pour garantir un site web moderne et fonctionnel.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Combien de temps faudra-t-il pour obtenir un nouveau site Web ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                   Le délai de création d'un nouveau site web dépend de divers facteurs, notamment la complexité du projet, les fonctionnalités requises et la disponibilité des ressources. Nous travaillons efficacement pour livrer votre site dans les délais convenus.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Créez-vous uniquement des sites Web HTML ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Non, nous utilisons une variété de technologies et de plateformes pour répondre aux besoins spécifiques de nos clients, y compris les sites web dynamiques, les applications web & Mobiles et les solutions e-commerce.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Mon site Web sera-t-il adapté aux mobiles ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                   Absolument. Nous concevons et développons des sites web entièrement réactifs, garantissant une expérience utilisateur optimale sur tous les appareils, y compris les smartphones et les tablettes.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Allez-vous maintenir mon site pour moi ?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                   Oui, nous proposons des services de maintenance et de support pour assurer le bon fonctionnement continu de votre site web, y compris les mises à jour de contenu, les correctifs de sécurité et les améliorations fonctionnelles.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Je suis sur un budget strict. Avez-vous des options à faible coût ?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                   Nous comprenons l'importance de respecter les contraintes budgétaires. Nous proposons des solutions adaptées à différents budgets, en optimisant les ressources disponibles pour offrir la meilleure valeur à nos clients.
                                </div>
                            </div>
                        </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Est-il possible de personnaliser entièrement le design de mon site web ?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Oui, nous offrons des services de conception web personnalisés pour répondre aux besoins spécifiques de nos clients. Nous travaillons en étroite collaboration avec vous pour comprendre vos préférences en matière de design et créer un site web unique qui reflète l'identité de votre entreprise.
                            </div>
                        </div>
                    </div>

                      <div class="accordion-item wow fadeIn" data-wow-delay="0.9s">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Proposez-vous des solutions d'hébergement pour les sites web que vous créez ?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Oui, nous offrons des services d'hébergement web pour nos clients. Nous proposons différentes options d'hébergement adaptées à vos besoins, allant des serveurs partagés aux solutions d'hébergement dédiées, garantissant ainsi la performance et la disponibilité de votre site web.
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Notre Team</div>
                    <h1 class="mb-4">Rencontrez les membres de notre équipe expérimentés</h1>
                    <p class="mb-4">Notre équipe est composée de professionnels expérimentés dans le domaine de l'ingénierie logicielle. Nous sommes passionnés par la création de solutions innovantes pour répondre aux besoins de nos clients. Avec notre expertise et notre engagement envers l'excellence, nous sommes prêts à relever tous les défis pour garantir le succès de votre projet.</p>

                    <a class="btn btn-primary rounded-pill px-4" href="">En savoir plus</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/bertrand.jpg" alt="">
                                        <h5 class="mb-0">Bertrand ANANI</h5>
                                        <small>Founder & CEO</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/irene.jpg" alt="">
                                        <h5 class="mb-0">Irène FIABOE </h5>
                                        <small>Executive Manager</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/wonder.jpg" alt="">
                                        <h5 class="mb-0">Wonder NOMEGNON</h5>
                                        <small>Co Founder</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/dan.jpg" alt="">
                                        <h5 class="mb-0">Daniel AMEGAN-ATSYON</h5>
                                        <small>Co Founder</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/manasse.jpg" alt="">
                                        <h5 class="mb-0">manassé ADANKPO</h5>
                                        <small>Project Manager</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Témoignage</div>
                    <h1 class="mb-4">Ce que disent nos clients !</h1>
                  <p class="mb-4">Nos clients sont notre priorité absolue. Voici ce qu'ils disent à propos de notre travail :</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">En savoir plus</a>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Très satisfait du service fourni par HB Tech Solution. Leur expertise et dévouement ont été cruciaux pour notre projet.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-8.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mme LARIS</h5>
                                    <span>DG Winner-expertise</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">La collaboration avec HB Tech Solution pour notre application web et mobile a été très fructueuse. Leur expertise technique et leur engagement ont été essentiels pour concrétiser nos idées.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-7.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mr AKUETE</h5>
                                    <span>DG GAGNON Microfinance</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Nous sommes extrêmement satisfaits de la collaboration avec HB Tech Solution pour notre stratégie de communication digitale. Leur expertise dans ce domaine et leur engagement ont grandement contribué à atteindre nos objectifs de manière efficace.</p>

                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-9.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mme Genevieve Rose</h5>
                                    <span>DG Light Mode fashion</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/newsletter.png" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                    <h1 class="text-white mb-4">Restez informé en vous abonnant à notre newsletter</h1>
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Entrez votre adresse e-mail" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                    <small class="text-white-50">Recevez les dernières mises à jour et actualités directement dans votre boîte de réception.</small>
                </div>

            </div>
        </div>
    </div>
    <!-- Newsletter End -->

</body>
@include('footer')

</html>
