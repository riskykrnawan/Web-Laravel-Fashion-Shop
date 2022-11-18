@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection






















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection














@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection
















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection

















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection











@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection












@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection

@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection

@extends('user.layout')
@section('content.user')
  <main class="container">
    <form action="/update" method="post" enctype="multipart/form-data" onsubmit="createAlert()">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $user->id }}">
      <div class="mb-3">
        <img src="{{ $user->photo }}" alt="photo-user" width="100px">
        <input type="hidden" class="form-control" id="oldPhoto" value="{{ $user->photo }}" name="oldPhoto" placeholder="Old Photo">
      </div>
      
      <div class="mb-3">
        <label for="newPhoto" class="form-label">Photo</label>
        <input type="file" class="form-control" id="newPhoto" name="newPhoto" placeholder="New Photo">
      </div>

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" value="{{ $user->username }}" name="username" placeholder="Username" disabled aria-disabled="true">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name" placeholder="Name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input class="form-control" type="email" id="email" name="email" placeholder="Email" rows="3" value="{{ $user->email }}"/>
      </div>
      <div class="mb-3">
        <label for="Address" class="form-label">Address</label>
        <textarea class="form-control" id="Address" name="address" placeholder="Address" rows="3"> {{ $user->address }} </textarea>
      </div>
      <div class="mb-3">
        <label for="email_verified_at" class="form-label">Email Verified at</label>
        <input class="form-control" id="email_verified_at" type="text" placeholder="-" value="{{ $user->email_verified_at }}" aria-label="Disabled input email_verified_at" disabled>
      </div>
      <input type="hidden" name="password" value="{{ $user->password }}">
      <div class="mb-3">
        <label for="new_password" class="form-label">New Password <small>(ignore if not change password)</small></label>
        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password">
      </div>
      <div class="mb-3">
        <label for="confirm_new_password" class="form-label">Confirm New Password</label>
        <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="Confirm New Password">
      </div>
      <button type="submit" class="mb-5 btn btn-success float-end">Submit</button>
    </form>
  </main>
@endsection

@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection






















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection














@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection
















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection

@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection






















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection














@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection
















@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection


@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection

@extends('layouts.global')
@section('content_home')
    <!-- Shop Detail Start -->
    <div class="container pb-5 mt-lg-4">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="swiper mySwiper placeholder-glow bg-white">
                    <div class="swiper-wrapper" role="button">
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="swiper-slide m-auto">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="col-lg-7 h-auto">
                <div class="h-100 bg-white p-4">
                    <h3>{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-warning mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1 ms-1">({{ $item->sold }}) Reviews</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp{{ number_format($item->price,2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $item->description }}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" class="me-1 custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input me-1" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <form action="/carts/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-light border-0 text-center" name="quantity" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-warning rounded-0 btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <!-- <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"></i> Add To Wishlist</button> -->
                        </div>
                    </form>
                    <form action="/wishlists/add" method="POST" onsubmit="cartAlert()">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        
                            <button type="submit" class="btn btn-warning ms-3 px-3 rounded-0"><i class="fa fa-heart mr-1"> Add To Wishlist</i></button>
                        </div>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col">
                <div class="bg-white p-xl-5">
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                          <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information</button>
                          <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active py-4 px-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="tab-pane fade py-4 px-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-xl-4 px-xl-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1 review for {{ $item->name }}</h6>
                                    <div class="media mb-4">
                                        <img src="/storage/images/person-dummy.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0 mt-3 float-end">
                                            <input type="submit" value="Leave Your Review" class="btn btn-warning rounded-0 px-3">
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container py-5">
        <h2 class="text-uppercase fs-5 text-secondary">You May Also Like</h2>
        <hr width="70px">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">
                    <div class="product-item bg-white">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="w-100 h-100" src="{{ $item->photo }}" alt="Image">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate text-black" href="">{{ mb_strimwidth($item->name, 0, 26, "...") }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp{{ number_format($item->price,2, ',', '.') }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star text-warning mr-1"></small>
                                <small class="fa fa-star-half text-warning mr-1"></small>
                                <small>({{ $item->sold }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection

