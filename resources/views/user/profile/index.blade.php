@extends('user.products.layout')

@section('content.user')
  <body>
  <script>
      const wishlistAlertFailed = () => {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'You must login to add an item to wishlist!',
        });
      };
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // code...
        var elems = document.querySelectorAll(".placeholder");
  
        [].forEach.call(elems, function(el) {
            el.classList.remove("placeholder");
            el.classList.remove("placeholder-glow");
        });
      });
    </script>
    <script>
      function showHide(id) {
        var x = document.getElementById(id);
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

    <div class="container-fluid">
      <div class="row">
        @include('user.components.sidebar')
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="pt-2 pb-2 mb-3 border-bottom"></div>
            <div class="container text-justify py-0">
              <h2 class="text-uppercase fs-5 text-secondary">Shopping History</h2>
              <hr width="70px">
              
              <div class="row justify-content-sm-center mb-5">
                @include('components.card')
                <!-- <div class="w-100 text-end mt-3 mb-3 mr-2">
                  <a href="/products" class="text-secondary">Lihat selengkapnya...</a>
                </div> -->
              </div>
            </div>
        </main>
      </div>
    </div>
@endsection