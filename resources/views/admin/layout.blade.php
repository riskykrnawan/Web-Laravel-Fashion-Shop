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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
      const pathname = window.location.pathname;
      switch(pathname) {
        case '/admin/dashboard':
          $('#dashboard').removeClass('text-light');
          $('#dashboard').addClass('text-warning');
          $('#dashboard_icon').removeClass('text-light');
          $('#dashboard_icon').addClass('text-warning');
          break;
        case '/admin/products':
          $('#products').removeClass('text-light');
          $('#products').addClass('text-warning');
          $('#products_icon').removeClass('text-light');
          $('#products_icon').addClass('text-warning');
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