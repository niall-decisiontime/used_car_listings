<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Niall's Used Cars</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- STYLES -->

    <style {csp-style-nonce}>
      * {
        transition: background-color 300ms ease, color 300ms ease;
      }
      *:focus {
        background-color: rgba(221, 72, 20, .2);
        outline: none;
      }
      html, body {
        color: rgba(33, 37, 41, 1);
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
        font-size: 16px;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
      }
      header {
        background-color: rgba(247, 248, 249, 1);
        padding: .4rem 0 0;
      }
      .menu {
        padding: .4rem 2rem;
      }
      header ul {
        border-bottom: 1px solid rgba(242, 242, 242, 1);
        list-style-type: none;
        margin: 0;
        overflow: hidden;
        padding: 0;
        text-align: right;
      }
      header li {
        display: inline-block;
      }
      header li a {
        border-radius: 5px;
        color: rgba(0, 0, 0, .5);
        display: block;
        height: 44px;
        text-decoration: none;
      }
      header li.menu-item a {
        border-radius: 5px;
        margin: 5px 0;
        height: 38px;
        line-height: 36px;
        padding: .4rem .65rem;
        text-align: center;
      }
      header li.menu-item a:hover,
      header li.menu-item a:focus {
        background-color: rgba(221, 72, 20, .2);
        color: rgba(221, 72, 20, 1);
      }
      header .logo {
        float: left;
        height: 44px;
        padding: .4rem .5rem;
      }
      header .menu-toggle {
        display: none;
        float: right;
        font-size: 2rem;
        font-weight: bold;
      }
      header .menu-toggle button {
        background-color: rgba(221, 72, 20, .6);
        border: none;
        border-radius: 3px;
        color: rgba(255, 255, 255, 1);
        cursor: pointer;
        font: inherit;
        font-size: 1.3rem;
        height: 36px;
        padding: 0;
        margin: 11px 0;
        overflow: visible;
        width: 40px;
      }
      header .menu-toggle button:hover,
      header .menu-toggle button:focus {
        background-color: rgba(221, 72, 20, .8);
        color: rgba(255, 255, 255, .8);
      }
      header .heroe {
        margin: 0 auto;
        max-width: 1100px;
        padding: 1rem 1.75rem 1.75rem 1.75rem;
      }
      header .heroe h1 {
        font-size: 2.5rem;
        font-weight: 500;
      }
      header .heroe h2 {
        font-size: 1.5rem;
        font-weight: 300;
      }
      section {
        margin: 0 auto;
        max-width: 1100px;
        padding: 2.5rem 1.75rem 3.5rem 1.75rem;
      }
      section h1 {
        margin-bottom: 2.5rem;
      }
      section h2 {
        font-size: 120%;
        line-height: 2.5rem;
        padding-top: 1.5rem;
      }
      section pre {
        background-color: rgba(247, 248, 249, 1);
        border: 1px solid rgba(242, 242, 242, 1);
        display: block;
        font-size: .9rem;
        margin: 2rem 0;
        padding: 1rem 1.5rem;
        white-space: pre-wrap;
        word-break: break-all;
      }
      section code {
        display: block;
      }
      section a {
        color: rgba(221, 72, 20, 1);
      }
      section svg {
        margin-bottom: -5px;
        margin-right: 5px;
        width: 25px;
      }
      .further {
        background-color: rgba(247, 248, 249, 1);
        border-bottom: 1px solid rgba(242, 242, 242, 1);
        border-top: 1px solid rgba(242, 242, 242, 1);
      }
      .further h2:first-of-type {
        padding-top: 0;
      }
      footer {
        background-color: rgba(221, 72, 20, .8);
        text-align: center;
      }
      footer .environment {
        color: rgba(255, 255, 255, 1);
        padding: 2rem 1.75rem;
      }
      footer .copyrights {
        background-color: rgba(62, 62, 62, 1);
        color: rgba(200, 200, 200, 1);
        padding: .25rem 1.75rem;
      }
    </style>
  </head>
  <body>

  <!-- HEADER: MENU + HEROE SECTION -->
  <header>

    <div class="heroe">

      <h1>Welcome to Niall's used Cars! <small> - powered by codeigniter 4</small></h1>

      <h2>The small framework with powerful features</h2>

    </div>

  </header>

  <!-- CONTENT -->

  <section>

    <h1>Please see a list of our current cars below:</h1>
    
    <table class="table">
    <thead>
      <tr>
        <th scope="col">Make</th>
        <th scope="col">Model</th>
        <th scope="col">Year</th>
        <th scope="col">Mileage</th>
        <th scope="col">Reg</th>
        <th scope="col">Price</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($all_listed_cars as $car): ?>
      <tr id="<?php echo $car->id;?>">
        <th scope="row"><?php echo htmlspecialchars($car->make);?></th>
        <td><?php echo htmlspecialchars($car->model);?></td>
        <td><?php echo htmlspecialchars($car->year);?></td>
        <td><?php echo htmlspecialchars($car->mileage);?></td>
        <td><?php echo htmlspecialchars($car->reg);?></td>
        <td>£<?php echo htmlspecialchars( ($car->price) ? $car->price : 0 );?></td>
        <td><button onclick="check_listing_cost(<?php echo htmlspecialchars($car->price);?>, '<?php echo htmlspecialchars($car->reg);?>')" type="button" class="btn btn-primary btn-sm">Check Listing Fee</button></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  </section>


  <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
  <footer>
    <div class="environment">
      <p>Page rendered in {elapsed_time} seconds</p>
    </div>

    <div class="copyrights">
      <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
        open source licence.</p>
    </div>

  </footer>

  <!-- SCRIPTS -->

  <script>

    function toggleMenu() {
      var menuItems = document.getElementsByClassName('menu-item');
      for (var i = 0; i < menuItems.length; i++) {
        var menuItem = menuItems[i];
        menuItem.classList.toggle("hidden");
      }
    }

    function check_listing_cost(car_price, car_reg) {
      $.ajax({
      type : "POST",
      url : 'costing_API',
      dataType : "json",
      data: { 
        car_price: car_price,
        car_reg: car_reg
      }
      }).done(function(response) {
          let message = (response.msg) ? response.msg : "The fee to list this car is: "+response.listing_fee;
          if (response.status == 200) {
            alert(message);
          } else {
            alert("An error has occurred");
          }
        }).fail(function(jqXHR, textStatus, errorThrown) {
          let error_status = jqXHR.status;
          let error_message = jqXHR.responseJSON.messages.error;
          alert('ERROR: ' + error_status + ': '+ error_message);
      }); 
    }
  </script>

  <!-- -->

  </body>
  </html>
