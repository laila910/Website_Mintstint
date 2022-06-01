
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Mintstint</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
	<script src="assets/js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="assets/images/logo.png" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/">  @if(session('lang')=='ar'){{trans('labels.Home')}}@endif
				@if(session('lang')=='en'){{trans('labels.الصفحة الرئيسية')}}@endif</a></a>
            </li>
            @if(session('lang')=='ar')<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="{{url('/Lang/en')}}">en</a>
			</li>
              @if(session('lang')=='en')<li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{url('/Lang/ar')}}">ar</a>
            
            </li>@endif
          </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url('assets/uploads/b.jpg')">
		<div class="heading">
			<h1>@if(session('lang')=='ar'){{ trans('labels.Multi-Lingual Multi-Accent Voice Over Production')}}@endif
                @if(session('lang')=='en'){{trans('labels.البث الصوتي متعدد اللغات')}}@endif</h1>			
			<h3 class="cd-headline clip is-full-width">
				
			</h3>
		</div>
	</section>

    <div class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/voiceover.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='ar'){{ trans('labels.Multi-Lingual Multi-Accent Voice Over Production')}}@endif
                            @if(session('lang')=='en'){{trans('labels.البث الصوتي متعدد اللغات')}}@endif</h2>
                        <p>@if(session('lang')=='ar'){{trans('labels.Choose the best among a selection of the best Arab Gulf and foreign voices for use in the IVR voice message or for use in promotional videos. MintStint offers motion-based advertising video maker service. An audio recording in all different dialects and languages, with voices appropriate to the nature of the product or service.')}}@endif
							@if(session('lang')=='en'){{trans('labels.تخير الأفضل ضمن نخبة من أفضل الأصوات العربية والخليجية والاجنبية للاستخدام في الرسالة الصوتية IVR او للاستخدام في مقاطع الفيديو الدعائية.تقدم منت ستنت خدمة صناعة مقاطع فيديو دعائية معتمدة على الحركة تشمل: كتابة النص ،تسجيل صوتي بكل اللهجات واللغات المختلفة وبأصوات تتلاءم مع طبيعة المنتج أو الخدمة، هندسة صوتية لإخراج الإعلان بطريقة إبداعية، لقطات إبداعية للإعلان تعتمد على برامج تصميم الحركة.')}}@endif <br>@if(session('lang')=='ar'){{trans('labels.Sound engineering for creative advertising')}}@endif @if(session('lang')=='en'){{trans('labels.هندسة صوتية لإخراج الإعلان بطريقة إبداعية')}}@endif <br>@if(session('lang')=='ar'){{trans('labels.Sound engineering for creative advertising')}}@endif @if(session('lang')=='en'){{trans('labels.لقطات إبداعية للإعلان تعتمد على برامج تصميم الحركة')}}@endif @if(session('lang')=='ar'){{trans('labels.Creative clips for advertising based on motion design software')}}@endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                
            </div><!-- end row -->
            
           
           
          
            
        

            
        </div><!-- end container -->
     
        
    </div><!-- end section -->























       
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
				
				<div class="footer-left">
					<a href="#"><img src="assets/images/logo.png" alt="" /></a>
				    <div>
					    <h1 style="color:white;">Company Location:</h1>
					    <h3 style="color:azure;">Main Office: Marsa Matrouh, Egypt</h3>
					    <h3 style="color:azure;">Branch Office: Giza, Egypt</h3>
					    <h1 style="color:white;">Working Hours:</h1>
					    <h3 style="color:azure;">Sunday - Thursday : 09:00 AM - 05:00 PM</h3>
						<p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">Mintstint</a> Design By : 
							<a href="#">Our Developer Team</a></p>
				   </div>
				</div>
				<div class="footer-right">
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6907.60503193607!2d31.204!3d30.042522999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584132c780343d%3A0xceeb5ac9d88cf5ed!2s45%20Kambez%2C%20Ad%20Doqi%2C%20Dokki%2C%20Giza%20Governorate%203751214!5e0!3m2!1sen!2seg!4v1653488833286!5m2!1sen!2seg" width="300" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					

				</div>
                <div class="footer-center">
					<div>
						<h1 style="color:white;">Contact Us</h1>
						<h3 style="color:azure;">info@mintstint.com</h3>
						<h3 style="color:azure;">00201068362663 | 00201033881032</h3>
						<ul class="social">
							<li><a href="https://www.facebook.com/mintstintappcom/" class="fa fa-facebook"></a></li>
							<li><a href="https://twitter.com/mintstintappcom" class="fa fa-twitter"></a></li>
							<li><a href="https://www.linkedin.com/company/mintstintappcom" class="fa fa-linkedin"></a></li>
							<li><a href="https://www.instagram.com/accounts/login/?next=/mintstintappcom/" class="fa fa-instagram"></a></li>
							<li><a href="https://www.youtube.com/channel/UCZUVp440SvXu-28_dgXu6QA" class="fa fa-youtube"></a></li>
						</ul>
						
					</div>
                </div>
				
				
            </div>
			
		
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="assets/js/all.js"></script>
	<!-- Camera Slider -->
	<script src="assets/js/jquery.mobile.customized.min.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script> 
	<script src="assets/js/parallaxie.js"></script>
	<script src="assets/js/headline.js"></script>
	<!-- Contact form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.vide.js"></script>

</body>
</html>