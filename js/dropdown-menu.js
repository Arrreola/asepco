<!-- Menu Scripts -->

<script>
    var windowWidth = $(window).width();
    if(windowWidth < 768){
        $("#dropdown-menu-button").click(function () {
            $("#dropdown-menu").fadeToggle();
      });
    }
</script>


<script>
    var windowWidth = $(window).width();
    if(windowWidth < 768){
      $("section").click(function () {
          $("#dropdown-menu").fadeOut();
      });
    }
</script>

<script>
    var windowWidth = $(window).width();
    if(windowWidth < 768){
        $(".index-navbar-breadcrumb").click(function () {
            $("#dropdown-menu").fadeOut();
        });
    }
</script>

<script>
    var windowWidth = $(window).width();
    if(windowWidth < 768){
        $(".index-navbar-breadcrumb").click(function () {
            $("#dropdown-menu").fadeOut();
        });
    }
</script>
