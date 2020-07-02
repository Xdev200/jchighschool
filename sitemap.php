<div class="box box-default">
    <div class="row">
        <div class="col-md-3">
            <ul class="sitemap">
                <li style=""><b>Quick Links</b></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Student's Corners</a></li>
                <li><a href="#">Gallery</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul class="sitemap">
                <li><b>Recent Posts</b></li>
                <li data-toggle="modal" data-target="#announcement"><a href="#">Announcements</a></li>
                <li data-toggle="modal" data-target="#news"><a href="#">Latest News</a></li>
                <li data-toggle="modal" data-target="#update"><a href="#">Latest Updates</a></li>
                <li ><a href="image_gallery.php">Gallery</a></li>
            </ul>
        </div>

        <div class="col-md-3">
            <ul class="sitemap">
                <li><b>Contact Us</b></li>
                <li>Phuldungri Road, Railway Flyover,</li>
                <li>Phuldungri, Ghatsila,</li>
                <li>Jharkhand - 832303.</li>
                <li>Dist - East Singhbhum.</li>
                <li>Phone - 06585-225088.</li>
            </ul>
        </div>

        <div class="col-md-3">
            <ul class="sitemap">
                <li><b>Find Us</b></li>
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                <div style='overflow:hidden;height:125px;width:220px;'>
                <div id='gmap_canvas' style='height:125px;width:220px;'></div>
                <div><small><a href="http://embedgooglemaps.com">embed google map</a></small></div>
                <div><small><a href="https://privacypolicytemplate.net">privacy policy template</a></small></div>
                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                </div>
                <script type='text/javascript'>
                function init_map(){
                    var myOptions = {zoom:10,center:new google.maps.LatLng(22.593874100000004,86.5149710585938),
                    mapTypeId: google.maps.MapTypeId.ROADMAP};
                    map = new google.maps.Map(document.getElementById('gmap_canvas'), 
                    myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(22.593874100000004,86.5149710585938)});infowindow = new google.maps.InfoWindow({content:'<strong>JC HIGH SCHOOL</strong><br>Phuldungri Road, Railway Flyover, Phuldungri, Ghatsila, Jharkhand - 832303. Dist - East Singhbhum. Phone - 06585-225088.<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </ul>
        </div>
    </div>
</div>

    <!--<div class="row">
        <div class="col-md-12">
            <div class="box box-default">
            </div>
        </div>
    </div>-->
<div class="box box-default ">
        <div class="row">
            <div class="col-md-6"  >
                <!--<div class="box box-default">-->
                    <h3><a href="www.marsstechnologies.com" class="pull-left">© 2016 Jagadish Chandra High School</a></h3>
                <!--</div>-->
            </div>

            <div class="col-md-6">
                <!--<div class="box box-default" style="text-align: center">-->
                <h3><a href="www.konnect2maddy.com" class="pull-right">Powered By konnect2maddy </a></h3>

                <!--</div>-->
            </div>
        </div>
    <br
</div> 
 

