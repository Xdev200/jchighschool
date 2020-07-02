<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.film_roll.js"></script>
    <script>
        (function() {
        jQuery(function() {
        this.film_rolls || (this.film_rolls = []);
        this.film_rolls['slider2'] = new FilmRoll({
        container: '#slider2',
        height: 410,
        });
        return true;
        });
        }).call(this);
    </script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="row">
        <div class="col-md-6" id="latest-pic">
            <!--<div class="box box-default" style="margin:15%">-->
                <h2>Latest Photos</h2>
            <!--</div>-->
        </div>
    </div>
    <div class="box box-default" id="slider2-box">
        <div id='slider2'>
            <div><a href='#'><img src="images/1.jpg"></a></div>
            <div><a href='#'><img src="images/1.jpg"></a></div>
            <div><a href='#'><img src="images/1.jpg"></a></div>
            <div><a href='#'><img src="images/1.jpg"></a></div>
            <div><a href='#'><img src="images/1.jpg"></a></div>
        </div>
    </div>
      <hr>
  </body>
</html>
