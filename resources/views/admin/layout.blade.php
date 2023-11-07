<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NIKKY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    @vite("resources/css/app.css")
  </head>
  <body>
    @yield('content_admin')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <script>
      var colorChoices = {};

      $(document).ready(function() {
        $('input[type="radio"]').change(function() {
          $('label').removeClass('bg-warning');
          
          $(this).next('label').addClass('bg-warning');
          
          const sizeActive = $('input[type="radio"]:checked').val();
          const colorChoicesBySize = colorChoices[sizeActive] || [];
          
          colorChoicesBySize.forEach((colorId) => {
            $(`#color_${colorId}`).next('label').addClass('bg-warning');
          });

          // Perbarui warna yang dipilih saat beralih ukuran
          $('input[type="checkbox"]').each(function() {
            const colorValue = $(this).val();
            if (colorChoicesBySize.includes(colorValue)) {
              $(this).next('label').addClass('bg-warning');
              $(this).prop('checked', true);
            } else {
              $(this).next('label').removeClass('bg-warning');
              $(this).prop('checked', false);
            }
          });

          if ($(this).hasClass('checked')) {
            $(this).removeClass('checked');
          } else {
            $(this).addClass('checked');
          }
        });
        
        $('input[type="checkbox"]').change(function() {
          const colorValue = $(this).val();
          const sizeValue = $('input[type="radio"]:checked').val();

          if (sizeValue) {
            if (!colorChoices[sizeValue]) {
              colorChoices[sizeValue] = [];
            }

            if ($(this).is(':checked')) {
              if (!colorChoices[sizeValue].includes(colorValue)) {
                colorChoices[sizeValue].push(colorValue);
              }
              $(this).next('label').addClass('bg-warning');
              
              createInputForColor(sizeValue, colorValue)
            } else {
              const indexToRemove = colorChoices[sizeValue].indexOf(colorValue);
              if (indexToRemove !== -1) {
                colorChoices[sizeValue].splice(indexToRemove, 1);
              }
              $(this).next('label').removeClass('bg-warning');

              removeInputForColor(sizeValue, colorValue);
            }
          } else {
            failedAddColorAlert();
          }

          console.log(colorChoices);
        });
      });

      function createInputForColor(size, color) {
        const rowDiv = $(`<div id="${size + color}" class="row my-3"></div>`);

        const leftColDiv = $('<div class="col-sm-3 col-md-2"></div>');
        leftColDiv.append('<p>Size & Color</p>');
        leftColDiv.append(`<span class="px-3 py-2 border bg-white me-1">${size.toUpperCase()}</span>`);
        leftColDiv.append(`<span class="px-3 py-2 border bg-white">${color[0].toUpperCase() + color.substring(1)}</span>`);

        const middle1ColDiv = $('<div class="col-sm-3 col-md-4"></div>');
        middle1ColDiv.append('<label for="photo" class="form-label">Photo (Optional)</label>');
        middle1ColDiv.append('<input type="file" class="form-control" id="photo" name="photo[]" placeholder="Product photo">');
        
        const middle2ColDiv = $('<div class="col-sm-3 col-md-3"></div>');
        middle2ColDiv.append('<label for="stock" class="form-label">Stock</label>');
        middle2ColDiv.append('<input type="number" class="form-control" id="stock" name="stock[]" placeholder="Stock" required aria-required="true">');

        const rightColDiv = $('<div class="col-sm-3 col-md-3"></div>');
        rightColDiv.append('<label for="price" class="form-label">Price</label>');
        rightColDiv.append('<input type="number" class="form-control" id="price" name="price[]" placeholder="Price" required aria-required="true">');

        rowDiv.append(leftColDiv);
        rowDiv.append(middle1ColDiv);
        rowDiv.append(middle2ColDiv);
        rowDiv.append(rightColDiv);

        $('#container').append(rowDiv);
      }
      // Fungsi untuk menghapus input sesuai dengan warna
      function removeInputForColor(size, color) {
        $(`#${size + color}`).remove();
      }
    </script>

    <script>
      const pathname = window.location.pathname;
      switch(pathname) {
        case '/admin/dashboard':
          $('#dashboard').removeClass('text-light');
          $('#dashboard').addClass('text-warning');
          $('#dashboard_icon').removeClass('text-light');
          $('#dashboard_icon').addClass('text-warning');
          break;
          case '/admin/users':
          $('#users').removeClass('text-light');
          $('#users').addClass('text-warning');
          $('#users_icon').removeClass('text-light');
          $('#users_icon').addClass('text-warning');
          break;
        case '/admin/orders':
          $('#orders').removeClass('text-light');
          $('#orders').addClass('text-warning');
          $('#orders_icon').removeClass('text-light');
          $('#orders_icon').addClass('text-warning');
          break;
        default:
          break;
        }
        if (pathname.substring(0, 15) === '/admin/products') {
            $('#products').removeClass('text-light');
            $('#products').addClass('text-warning');
            $('#products_icon').removeClass('text-light');
            $('#products_icon').addClass('text-warning');
        }
    </script>

    <script>
      const alert = (url) => {
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#28a745',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, change it!'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Success!',
              'The order status is changed.',
              'success'
            ).then((result) => {
              window.location.href = url;
            })
          }
        });
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

      const failedAddColorAlert = () => {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Can\'t choose the color before choosing the size',
        });
      };
    </script>
    <script>
      /* globals Chart:false, feather:false */
      (() => {
        'use strict'

        feather.replace({ 'aria-hidden': 'true' })

        // Graphs
        const ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
        const myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: [
              'Sunday',
              'Monday',
              'Tuesday',
              'Wednesday',
              'Thursday',
              'Friday',
              'Saturday'
            ],
            datasets: [{
              data: [
                15339,
                18345,
                19483,
                21003,
                23489,
                24092,
                29034
              ],
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: '#007bff',
              borderWidth: 4,
              pointBackgroundColor: '#007bff'
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: false
                }
              }]
            },
            legend: {
              display: false
            }
          }
        })
      })()
    </script>
    <script>
      
    </script>
    <script>
      redirectTo = (url) => {
        document.location.href = url;
      }
    </script>
  </body>
</html>