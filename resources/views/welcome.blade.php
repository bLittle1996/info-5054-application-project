<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrap">
        <!--HEADER START-->
        @include('layouts/header')

          <!--HEROSHOT START-->
          <section id="heroShot">
            <div id="heroDesc">
              <h1>GET THE MOST<br>OUT OF YOUR VEHICLE</h1>
              <p>Simple, nice and user-friendly application of your vehicle and its history. <br>Only useful information!</p>
              <a href="#"><img class="button" src="img/appStore.png" alt="App Store Link"></a>
              <a href="#"><img class="button" src="img/googlePlay.png" alt="Google Play Link"></a>
            </div>
            <img src="img/heroImage.png" alt="Hero Image" id="heroImg">
          </section>
          <!--FEATURES START-->
          <section id="features">
            <div id="halfCircle"></div>
            <h2>PERFECT FEATURES</h2>
            <p>Only the necessities</p>
            <ul>
              <li>
                <img src="img/drivingRange.png" alt="Driving Range Graphic">
                <div>
                  <h3>DRIVING RANGE</h3>
                  <p>Keep track of your cars driving history and driving range</p>
                </div>
              </li>
              <li>
                <img src="img/maintenance.png" alt="Maintenance Graphic">
                <div>
                  <h3>MAINTENANCE</h3>
                  <p>Keep track of your cars maintenance and repair history</p>
                </div>
              </li>
              <li>
                <img src="img/expenses.png" alt="Expenses Graphic">
                <div>
                  <h3>EXPENSES</h3>
                  <p>Track your spending on gas, repairs, and more</p>
                </div>
              </li>
            </ul>
          </section>
          <!--DOWNLOAD START-->
          <section id="download">
            <div>
              <h1>HOW TO DOWNLOAD THE APP?</h1><br>
              <p>Just download the app from the Apple App Store or Google Play Store!<br>Simple, nice, and user-friendly application for you and your vehicle.</p>
            </div>
          </section>
          <!--FOOTER START-->
          @include('layouts/footer')
        </div>
    </body>
</html>
