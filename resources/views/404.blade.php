<!DOCTYPE html>
<html lang="en">

<body>
    @include('header')


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight"></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">{{ GoogleTranslate::trans("Acceuil", request()->session()->get('lang') ?? 'fr') }}</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">{{ GoogleTranslate::trans("Pages", request()->session()->get('lang') ?? 'fr') }}</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ GoogleTranslate::trans("Erreur 404", request()->session()->get('lang') ?? 'fr') }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;">
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
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- 404 Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">{{ GoogleTranslate::trans("Page not found", request()->session()->get('lang') ?? 'fr') }}</h1>
                    <p class="mb-4">{{ GoogleTranslate::trans("We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?", request()->session()->get('lang') ?? 'fr') }} </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">{{ GoogleTranslate::trans("Reourner a l'acceuil", request()->session()->get('lang') ?? 'fr') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        

    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/newsletter.png" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                    <h1 class="text-white mb-4">{{ GoogleTranslate::trans("Inscrivez vous a notre newslettre", request()->session()->get('lang') ?? 'fr') }} </h1>
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                    <small class="text-white-50"></small>
                </div>
            </div>
        </div>
    </div>
    
</body>
@include('footer')

</html>