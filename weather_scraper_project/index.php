<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Weather Scraper</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <style>

      html,body{
        height: 100%;
      }

      .container {
        background-image: url('background.jpg');
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        padding-top: 100px;
      }

      .center {
        text-align: center;
      }

      .white {
        color: white;
      }

      p {
        padding-top: 15px;
        padding-bottom: 15px;
      }

      button {
        margin-top: 20px;
      }

    </style>

  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class='center'>Weather Predictor</h1>
          <p class='lead center'>Enter your city to get your weather forecast</p>
          <form class='center'>
            <div class="form-group">
              <input type="text" class='form-control' name='city' id='city' placeholder='Eg. London, Paris, San Francisco...'>
            </div>
            <button class='btn btn-success btn-lg'>Find Your Weather</button>
          </form>

        </div>
      </div>
    </div>




  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  </body>

</html>
