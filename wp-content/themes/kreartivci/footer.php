   <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ) ?>/js/pjax.js"></script>
   <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ) ?>/js/lightbox.min.js"></script>
   <?php if ( is_single() && 'artikli' == get_post_type() ):  ?>
      <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ) ?>/js/owl.carousel.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function () {
          $("#owl").owlCarousel({
            items:1,
            autoPlay:true,
            navigation:true,
            lazyLoad:true
          });
        });
      </script>
   <?php endif; ?>

   <?php if(is_page('Kontakt')): ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3CQteBIWJG_jENp1tO_2cGv32GbmPrYg&callback=initMap"
    async defer></script>
    <script>
      function initMap(){
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 43.85547, lng: 18.40809},
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
          position: {lat: 43.85547, lng: 18.40809},
          map: map,
          title: 'kreartivci.ba'
        });
      }
    </script>
   <?php endif ?>

   <?php if(is_page('Udruzenje')): ?>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3CQteBIWJG_jENp1tO_2cGv32GbmPrYg&callback=initMap"
      async defer></script>
      <script>
        function initMap(){
          var mapDiv = document.getElementById('contact-map');
          var map = new google.maps.Map(mapDiv, {
            center: {lat: 43.86454, lng: 18.44421},
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          var marker = new google.maps.Marker({
            position: {lat: 43.86454, lng: 18.44421},
            map: map,
            title: 'kreartivci.ba'
          });
        }
      </script>

    <?php endif ?>

	<?php wp_footer(); ?>
</body>
</html>
