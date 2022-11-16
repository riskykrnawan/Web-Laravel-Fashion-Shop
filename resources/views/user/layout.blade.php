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
    
    @vite("resources/css/app.css")
  </head>
  <body class="bg-light">
    @yield('content.user')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script> 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
      // Product Quantity
      $('.quantity button').on('click', function (e) {
          // e.preventDefault();
          var button = $(this);
          var oldValue = button.parent().parent().find('input').val();
          if (button.hasClass('btn-plus')) {
              var newVal = parseFloat(oldValue) + 1;
          } else if (button.hasClass('btn-minus')) {
              var newVal = parseFloat(oldValue) - 1;
          }
        }
          button.parent().parent().find('input').val(newVal);
      );
      
      
      
    </script>
    <script>
      const cartAlert = () => {
        Swal.fire({
          icon: 'success',
          title: 'Yeay, success add product to cart!',
          showConfirmButton: false,
          timer: 1500
        })
      };
      const createAlert = () => {
        Swal.fire({
          icon: 'success',
          title: 'Your work has been saved',
          showConfirmButton: false,
          timer: 1500
        })
      };
      const deleteAlert = (url) => {
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#28a745',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            ).then((result) => {
              window.location.href = url;
            })
          }
        });
      };

      const failedAlert = () => {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Can\'t delete items that have been purchased before',
        });
      };
    </script>
    <script>
      redirectTo = (url) => {
        document.location.href = url;
      }
    </script>
    <script>
      /* globals Chart:false, feather:false */
      (() => {
        'use strict'
        feather.replace({ 'aria-hidden': 'true' })
      })()
    </script>
  </body>
</html>