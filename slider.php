<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
    <link rel="stylesheet" href="css/bjqs.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jq_2.2.4.js"></script>
    <script src="js/bjqs-1.3.js"></script>
  </head>
  
  <body>
      <div id="banner-fade">
          <div class="box box-default" style="border:4px #ffffff solid;">
        <ul class="bjqs box" id="slider-img">
            <li><img src="images/1.jpg" title="some title"></li>
            <li><img src="images/2.jpg" title="some title"></li>
            <li><img src="images/3.jpg" title="some title"></li>
        </ul>
          </div>
      </div>
      <br><br><br>
      <hr>
      <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 400,
            width       : 1080,
            responsive  : true
          });

        });
      </script>
  </body>
</html>