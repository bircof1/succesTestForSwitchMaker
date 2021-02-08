<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  @yield('css')
  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets2/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('assets2/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('assets2/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets2/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('assets2/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets2/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('assets2/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="{{ asset('assets2/stylesheet" href="css/owl.carousel.css') }}" type="text/css">
  <link href="{{ asset('assets2/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('assets2/css/fullcalendar.css') }}">
  <link href="{{ asset('assets2/css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets2/css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ asset('assets2/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">

@include('bioProduct/niceAdmin/dashord/header')
@include('bioProduct/niceAdmin/dashord/aside')



        <!--overview start-->
      @yield('dasboard')
        <script src="{{asset('jquery.js')}}"></script>
        @include('flashy::message')
        @yield('extra-js')

    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{ asset('assets2/js/jquery.js') }}"></script>
  <script src="{{ asset('assets2/js/jquery-ui-1.10.4.min.js') }}"></script>
  <script src="{{ asset('assets2/js/jquery-1.8.3.min.js') }}"></script>
  <script type="{{ asset('assets2/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('assets2/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('assets2/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ asset('assets2/assets/jquery-knob/js/jquery.knob.js') }}"></script>
  <script src="{{ asset('assets2/js/jquery.sparkline.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets2/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
  <script src="{{ asset('assets2/js/owl.carousel.js') }}"></script>
  <!-- jQuery full calendar -->
  <script src="{{ asset('assets2/js/fullcalendar.min.js') }}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('assets2/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
    <!--script for this page only-->
    <script src="{{ asset('assets2/js/calendar-custom.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.rateit.min.js') }}"></script>
    <!-- custom select -->
    <script src="{{ asset('assets2/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('assets2/assets/chart-master/Chart.js') }}"></script>

    <!--custome script for all page-->
    <script src="{{ asset('assets2/js/scripts.js') }}"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('assets2/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('assets2/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets2/js/xcharts.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('assets2/js/gdp-data.js') }}"></script>
    <script src="{{ asset('assets2/js/morris.min.js') }}"></script>
    <script src="{{ asset('assets2/js/sparklines.js') }}"></script>
    <script src="{{ asset('assets2/js/charts.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.slimscroll.min.js') }}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
