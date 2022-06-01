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

 {{-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                          
                                <img src="assets/uploads/crm.jpg" class="d-block w-100" alt="...">
                            </div>
            
                            <div class="carousel-item">
                                   <img src="assets/uploads/voiceover.png" class="d-block w-100" alt="...">
                            </div>
                                
                            <div class="carousel-item">
                          <img src="assets/uploads/zoomcover.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                          <img src="assets/uploads/zoomdesign.jpg" class="d-block w-100" alt="">
                            </div>
                        </div> --}}
    
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
          <ul class="navbar-nav  ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger active" href="#zoom">
                    @if(session('lang')=='ar'){{trans('labels.Zoom')}}@endif 
                    @if(session('lang')=='en'){{trans('labels.زوم')}}@endif</a>
              </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#crm">@if(session('lang')=='ar'){{trans('labels.CRM')}}@endif 
                    @if(session('lang')=='en'){{trans('labels.إدارة علاقات العملاء')}}@endif</a>
              </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#voiceover">@if(session('lang')=='ar'){{trans('labels.Voice Over')}}@endif 
                    @if(session('lang')=='en'){{trans('labels.البث الصوتي')}}@endif </a>
              </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#design">
                    @if(session('lang')=='ar'){{trans('labels.Design Websites')}}@endif 
                    @if(session('lang')=='en'){{trans('labels.تصميم المواقع')}}@endif</a>
              </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/">@if(session('lang')=='ar'){{trans('labels.Home')}}@endif
				@if(session('lang')=='en'){{trans('labels.الصفحة الرئيسية')}}@endif</a>
            </li>
          
          </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url('assets/uploads/b.jpg')">
		<div class="heading">
			<h1>@if(session('lang')=='ar'){{trans('labels.Our Services')}}@endif 
            @if(session('lang')=='en'){{trans("labels.خدماتنا")}}@endif </h1>			
			<h3 class="cd-headline clip is-full-width">
			</h3>
		</div>
	</section>

    <div id="zoom" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='ar'){{ trans('labels.Zoom Services')}}@endif
                            @if(session('lang')=='en'){{trans('labels.Zoom خدمات')}}@endif</h2>
                        <p>@if(session('lang')=='ar'){{trans('labels.Mintstint is the authorized Sales partner of Zoom. Our Unique  Service is ZOOM LICENCE For education , enterprise and Professional .Don’t worry about your business about the changes in Coronavirus and the emergence of mutations of the virus. Get Meetings, Phone and Chat together on any device. We’re here to help you connect,  Mintstint provides you with technical solutions to manage your brand remotely and get the best with lower price than online.	')}}@endif
							@if(session('lang')=='en'){{trans('labels.مينت ستنت هو شريك المبيعات المعتمد لـ Zoom. خدمتنا الفريدة هي ZOOM LICENSE للتعليم والمؤسسات والمهنية. لا تقلق بشأن عملك بشأن التغييرات في فيروس كورونا وظهور طفرات الفيروس. نحن هنا لمساعدتك على الاتصال ، توفر لك مينت ستنت حلولاً تقنية لإدارة علامتك التجارية عن بُعد والحصول على الأفضل بسعر أقل من الإنترنت. للتواصل والتعبير عن أفكارك حتى تتمكنوا من إنجاز المزيد معًا. نحن فخورون بأن نكون موثوقين من قبل ملايين الشركات والشركات الصغيرة والأفراد. احصل على اجتماعات وهاتف ودردشة معًا على أي جهاز.')}}@endif
                            @if(session('lang')=='en'){{trans('labels.للتواصل والتعبير عن أفكارك حتى تتمكنوا من إنجاز المزيد معًا. نحن فخورون بأن نكون موثوقين من قبل ملايين الشركات والشركات الصغيرة والأفراد.')}}@endif  
                            @if(session('lang')=='ar'){{trans('labels.communicate, and express your ideas so you can get more done together. We’re proud to be trusted by millions of enterprises, small businesses, and individuals. Get Meetings, Phone and Chat together on any device.')}}@endif</p>
                        <a href="/zoom" class="sim-btn hvr-bounce-to-top"><span>@if(session('lang')=='ar'){{trans('labels.Know More')}}@endif
                            @if(session('lang')=='en'){{trans('labels.اعرف المزيد')}}@endif</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/zoom-services.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="crm" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>@if(app()->getLocale()=='ar'){{ trans('labels.Services')}}@endif
                            @if(app()->getLocale()=='en'){{trans('labels.الخدمات')}}@endif
                            @if(session('lang')=='ar'){{trans('labels.CRM')}}@endif 
                            @if(session('lang')=='en'){{trans('labels.إدارة علاقات العملاء')}}@endif</h2>
                        <p>@if(session('lang')=='ar'){{trans('labels.The system allows you to fully control the details you have created to develop your business: Move your team to a higher level of performance, Create a database for your customers, Follow-up potential customers that’s where Mintstint CRM comes in loaded with features to help you start and grow your business.')}}@endif 
                            @if(session('lang')=='en'){{trans('labels.أداتك الرسمية والموثقة، الأمثل في تأمين قاعدة ضخمة لبيانات العملاء وارشفة جميع عمليات التواصل والمبيعات والاستفسارات والشكاوى والتقييمات الواردة من قبل العميل والتي تبني بما يتكيف كليا مع متطلبات وفروع وخدمات المنشأة وطبيعتها. نظام يتم برمجته بشكل سحابي، فلا حاجة إلى وجود أجهزة معينة. كما أنه نظام ذكي سهل دمجه مع موقعك الالكتروني لاستقبال وحفظ طلبات التواصل بسهوله ويسر وضمان عدم فقدان بيانات أي عميل ، فضلاً عن انخفاض تكلفة إنشاؤه.')}}@endif
                       
                            @if(session('lang')=='en'){{trans('labels.يسهل على جميع أفراد فريق العمل التواصل فيما يخص مراحل المشروع منذ تدشينه مروراً بمراحله المختلفة وحتى الانتهاء منه. يساعد المسئولين التنفيذيين على التعرف على كل جوانب العمل ومراحل المشاريع مما يسهل عملية التسويق وزيادة المبيعات.  نظام مهم جداً لأي فريق عمل خاصة تلك الشركات التي أجبرتها ظروف الحجر الصحي على العمل من خلال شبكة الانترنت.')}}@endif
                            @if(session('lang')=='ar'){{trans('labels.It is easy for all members of the work team to communicate about the stages of the project from its inception through its various stages to its completion. Helps executives learn about all aspects of the business and project phases, facilitating the marketing process and increasing sales. A very important system for any work team, especially those companies that have been forced by quarantine conditions to work through the Internet.')}}@endif

                            </p>
                        <a href="/crm" class="sim-btn hvr-bounce-to-top"><span>@if(session('lang')=='ar'){{trans('labels.Know More')}}@endif
                            @if(session('lang')=='en'){{trans('labels.اعرف المزيد')}}@endif</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/crm.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="voiceover" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='ar'){{ trans('labels.Multi-Lingual Multi-Accent Voice Over Production')}}@endif
                            @if(session('lang')=='en'){{trans('labels.البث الصوتي متعدد اللغات')}}@endif</h2>
                        <p>@if(session('lang')=='ar'){{trans('labels.Choose the best among a selection of the best Arab Gulf and foreign voices for use in the IVR voice message or for use in promotional videos. MintStint offers motion-based advertising video maker service. An audio recording in all different dialects and languages, with voices appropriate to the nature of the product or service.')}}@endif
							@if(session('lang')=='en'){{trans('labels.تخير الأفضل ضمن نخبة من أفضل الأصوات العربية والخليجية والاجنبية للاستخدام في الرسالة الصوتية IVR او للاستخدام في مقاطع الفيديو الدعائية.تقدم منت ستنت خدمة صناعة مقاطع فيديو دعائية معتمدة على الحركة تشمل: كتابة النص ،تسجيل صوتي بكل اللهجات واللغات المختلفة وبأصوات تتلاءم مع طبيعة المنتج أو الخدمة، هندسة صوتية لإخراج الإعلان بطريقة إبداعية، لقطات إبداعية للإعلان تعتمد على برامج تصميم الحركة.')}}@endif <br>
                            @if(session('lang')=='en'){{trans('labels.هندسة صوتية لإخراج الإعلان بطريقة إبداعية.')}}@endif
                            @if(session('lang')=='ar'){{trans('labels.Sound engineering for creative advertising.')}}@endif<br>
                            @if(session('lang')=='en'){{trans('labels.لقطات إبداعية للإعلان تعتمد على برامج تصميم الحركة.')}}@endif
                            @if(session('lang')=='ar'){{trans('labels.Creative clips for advertising based on motion design software.')}}@endif<br></p>
                        <a href="/voiceover" class="sim-btn hvr-bounce-to-top"><span>@if(session('lang')=='ar'){{trans('labels.Know More')}}@endif
                            @if(session('lang')=='en'){{trans('labels.اعرف المزيد')}}@endif</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/voiceover.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="design" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='ar'){{ trans('labels.Designing and Creating Websites and E-Stores')}}@endif
                            @if(session('lang')=='en'){{trans('labels.تصميم وإنشاء المواقع والمتاجر الالكترونية')}}@endif</h2>
                        <p>@if(session('lang')=='ar'){{trans('labels.It has now become necessary to have an attractive and smart website design as well as a complete control panel to control and manage all the contents of the website from images, texts, videos and other website contents, as the website plays an important and essential role in providing the policies, services and products provided by the company to customers.')}}@endif
							@if(session('lang')=='en'){{trans('labels.لقد أصبح الآن من الضرورى ان تمتلك تصميم موقع انترنت جذاب وذكى وأيضا لوحة تحكم كاملة للتحكم وإدارة جميع محتويات الموقع من صور ونصوص وفيديوهات وغيرها من محتويات موقع الانترنت، حيث ان موقع الانترنت يلعب دورا هاما وأساسيا فى تقديم السياسات والخدمات والمنتجات المقدمة من قبل الشركة للعملاء.لدينا من الخبرات ما يجعلنا من أفضل شركات تصميم مواقع الانترنت بتقديم خدماتنا لعدد ضخم من عملائنا وذلك ناتج من كسب ثقة عملائنا فى اداء أعمالنا بافضل الطرق وأفضل التقنيات.')}}@endif
                            @if(session('lang')=='en'){{trans('labels.نتميز بتقديم تصميم مواقع الويب وتطوير المواقع بأفضل التصميمات والتقنيات مما يجعل موقع الويب الخاص بك ذكيًا وسهلاً وجذابًا لعملائك بلوحة تحكم سهلة للغاية للتحكم في محتويات الموقع وإدارة احترافية للموقع مما يجعل موقعك يستفيد العملاء من العمل الذي تقدمه من خلال موقع الويب الخاص بك. لدينا خبرة تجعلنا من أفضل شركات تصميم المواقع من خلال تقديم خدماتنا لعدد كبير من عملائنا نتيجة اكتساب ثقة عملائنا في أداء عملنا بأفضل الطرق وأفضل التقنيات.')}}@endif
                            @if(session('lang')=='ar'){{trans('labels.We are distinguished by providing web design and web development with the best designs and techniques, which makes your website smart, easy and attractive to your customers with a very easy control panel to control the contents of the site and professional site management, which makes your customers benefit from the work you offer through your website. We have experience, which makes us one of the best web design companies by providing our services to a large number of our customers, as a result of gaining the confidence of our customers in performing our work in the best ways and the best technologies.')}}@endif
                           </p>
                        <a href="/design" class="sim-btn hvr-bounce-to-top"><span>@if(session('lang')=='ar'){{trans('labels.Know More')}}@endif
                            @if(session('lang')=='en'){{trans('labels.اعرف المزيد')}}@endif</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/zoomdesign.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
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