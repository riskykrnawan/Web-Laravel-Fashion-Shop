<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NIKKY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    @vite("resources/css/app.css")
  </head>
  <body class="bg-light">
    @include('components.navbar')
    @yield('content_home')
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
      // Product Quantity
      $('.quantity button').on('click', function () {
          var button = $(this);
          var oldValue = button.parent().parent().find('input').val();
          if (button.hasClass('btn-plus')) {
              var newVal = parseFloat(oldValue) + 1;
          } else {
              if (oldValue > 0) {
                  var newVal = parseFloat(oldValue) - 1;
              } else {
                  newVal = 0;
              }
          }
          button.parent().parent().find('input').val(newVal);
      });
    </script>
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
    <script>
      redirectTo = (url) => {
        document.location.href = url;
      }
    </script>
  </body>
</html>