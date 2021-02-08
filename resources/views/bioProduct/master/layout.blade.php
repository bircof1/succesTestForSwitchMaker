<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="{{ asset('style.css') }}" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.ico') }}">
    @yield('css')
  </head>
  <body>
    <div class="container mt-5">
      <div id="gototop"> </div>
      @include('bioProduct.master.header')
        @yield('content')
        <script src="{{asset('jquery.js')}}"></script>
        @include('flashy::message')
        @yield('extra-js')
        @include('bioProduct.master.footer')
    </div><!-- /container -->

    <div class="copyright">
    <div class="container">
      <p class="pull-right">
        <a href="#"><img src="assets/img/maestro.png" alt="payment"></a>
        <a href="#"><img src="assets/img/mc.png" alt="payment"></a>
        <a href="#"><img src="assets/img/pp.png" alt="payment"></a>
        <a href="#"><img src="assets/img/visa.png" alt="payment"></a>
        <a href="#"><img src="assets/img/disc.png" alt="payment"></a>
      </p>
      <span>Copyright &copy; 2013<br> bootstrap ecommerce shopping template</span>
    </div>
    </div>
    <a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.easing-1.3.min.js"></script>
        <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
        <script src="assets/js/shop.js"></script>
      </body>
    </html>