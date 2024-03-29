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
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">
				  @if(app()->getLocale()=='ar'){{trans('labels.Home')}}@endif
				@if(app()->getLocale()=='en'){{trans('labels.الصفحة الرئيسية')}}@endif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about" >
				@if(app()->getLocale()=='ar'){{ trans('labels.About Us')}}@endif
			@if(app()->getLocale()=='en'){{trans('labels.عننا')}}@endif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">@if(app()->getLocale()=='ar'){{ trans('labels.Services')}}@endif
				@if(app()->getLocale()=='en'){{trans('labels.الخدمات')}}@endif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">@if(app()->getLocale()=='ar'){{ trans('labels.Our Partners')}}@endif
				@if(app()->getLocale()=='en'){{trans('labels.شركاء النجاح')}}@endif</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#blog">@if(app()->getLocale()=='ar'){{ trans('labels.Blog')}}@endif
				@if(app()->getLocale()=='en'){{trans('labels.المدونة')}}@endif</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">@if(app()->getLocale()=='ar'){{ trans('labels.Our Vendors')}}@endif
				@if(app()->getLocale()=='en'){{trans('labels.موردينا')}}@endif</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/faq">@if(app()->getLocale()=='ar'){{ trans('labels.FAQ')}}@endif
				@if(app()->getLocale()=='en'){{trans('labels.الاسئلة الشائعة')}}@endif</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">@if(app()->getLocale()=='ar'){{ trans('labels.Contact Us')}}@endif
				@if(app()->getLocale()=='en'){{trans('labels.اتصل بنا')}}@endif</a>
            </li>
			@if(app()->getLocale()=='ar')<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="{{url('/Lang/en')}}">en</a>
			</li>@endif
				@if(app()->getLocale()=='en')<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="{{url('/Lang/ar')}}">ar</a>
				
				</li>@endif
			
			
			
          </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url('assets/uploads/b.jpg')">
		<div class="heading">
			<h1>@if(app()->getLocale()=='ar'){{ trans('labels.Welcome To Mintstint')}}@endif
				@if(app()->getLocale()=='en'){{trans('labels.مرحبا في مينت ستنت')}}@endif</h1>			
			<h3 class="cd-headline clip is-full-width">
				<span>@if(app()->getLocale()=='ar'){{ trans('labels.Get More In Less Time')}}@endif
					@if(app()->getLocale()=='en'){{trans('labels.إنجز اكتر في وقت أقل')}}@endif <br><br> @if(app()->getLocale()=='ar'){{ trans('labels.Professional tools =happy clients and more sales')}}@endif
					@if(app()->getLocale()=='en'){{trans('labels.أدوات احترافيه = عملاء سعيده ومبيعات عديده')}}@endif</span>
				<span class="cd-words-wrapper">
					<b class="is-visible"></b>
					<b>@if(app()->getLocale()=='ar'){{ trans('labels.Zoom Services')}}@endif
						@if(app()->getLocale()=='en'){{trans('labels.Zoom خدمات')}}@endif</b>
					<b>@if(app()->getLocale()=='ar'){{ trans('labels.CRM Services')}}@endif
						@if(app()->getLocale()=='en'){{trans('labels.CRM خدمات')}}@endif</b>
					<b>@if(app()->getLocale()=='ar'){{ trans('labels.Multi-Lingual Multi-Accent Voice Over Production')}}@endif
						@if(app()->getLocale()=='en'){{trans('labels.البث الصوتي متعدد اللغات')}}@endif</b>
					<b>@if(app()->getLocale()=='ar'){{ trans('labels.Designing and Creating Websites and E-Stores')}}@endif
						@if(app()->getLocale()=='en'){{trans('labels.تصميم وإنشاء المواقع والمتاجر الالكترونية')}}@endif</b>
				</span>
				<div class="btn-ber">
					<a class="get_btn hvr-bounce-to-top" href="#contact">@if(app()->getLocale()=='ar'){{ trans('labels.Contact Us')}}@endif
						@if(app()->getLocale()=='en'){{trans('labels.اتصل بنا')}}@endif</a>
						
					<a class="learn_btn hvr-bounce-to-top" href="/home" target="_blank">
						@if(app()->getLocale()=='ar'){{trans('labels.Know More')}}@endif
						@if(app()->getLocale()=='en'){{trans('labels.اعرف المزيد')}}@endif
					</a>
				</div>
			</h3>
		</div>
	</section>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">@if(app()->getLocale()=='en') <div class="message-box"> @endif
					@if(app()->getLocale()=='ar') <div class="message-box text-right">   @endif
						@if(app()->getLocale()=='en')
						<h2>About Mintstint</h2> 
						<p>Mintstint® is an Egyptian subsidiary of Mintstint Ltd in the UK and represented by BDAS Smart in Saudi Arabia, Envisaged and founded in 2020 in the eye of the COVID-19 storm. Mintstint is primarily active as a reseller partner and consultant of Zoom Unified Communications Solutions. Hence providing services of Zoom license sales, technical consulting, and customer support in the EMEA region. <br> Mintstint also has technical and engineering expertise in test equipment calibration services and is an affiliate of the Egyptian National Institute of Standards (NIS). Mintstint provides comprehensive industrial calibration services to its prestigious customers in Egypt through field visits and remote consulting. On top of that, Mintstint can facilitate a range of digital services, including but not limited to website design optimization, technical and engineering content, email marketing, audio podcasts, and voiceover production in Arabic and foreign languages. </p> @endif 
						@if(app()->getLocale()=='ar')
						<h2>عن مينت ستنت</h2>
						<p>  <br>. في السعودية BDAS Smart في المملكة المتحدة وتمثلها  Mintstint Ltd مينت ستنت هي شركة تابعة لشركة تعمل مينت ستنت بشكل اساسي كشريك موزع ومستشار لزوم ثم تقديم خدمات مبيعات ترخيص والاستشارات الفنية ودعم العملاء في منطقة اوروبا والشرق الاوسط وافريقيا</p>
						<p>تمتلك مينت ستنت ايضا خبرة فنية وهندسية في خدمات معايرة معدات الاختبار وهي احدي الشركات التابعه للمعهد  
							القومي المصري للمعايير وتقدم خدمات معايرة صناعية شاملة لعملائها المرموقين في مصر من خلال الخدمة والاستشارات<br>
						علاوة علي ذلك ويمكننا تسهيل مجموعه من الخدمات الرقمية بما في ذلك علي سبيل المثال لا الحصر تحسين تصميم مواقع الويب والمحتوي التقني والهندسي والتسويق عبر البريد الالكتروني والبودكاست الصوتي وانتاج التعليقات الصوتية باللغات العربيه والاجنبيه<br> 
					</p>
						@endif
                       

                        <a href="#contact" class="sim-btn hvr-bounce-to-top"><span>
							@if(app()->getLocale()=='ar'){{ trans('labels.Contact Us')}}@endif
							@if(app()->getLocale()=='en'){{trans('labels.اتصل بنا')}}@endif</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="assets/uploads/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>@if(app()->getLocale()=='ar'){{ trans('labels.Services')}}@endif
					@if(app()->getLocale()=='en'){{trans('labels.الخدمات')}}@endif</h3>
               
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-3">@if(app()->getLocale()=='en')   <div class="services-inner-box"> @endif
                  @if(app()->getLocale()=='ar')  <div class="services-inner-box text-right">@endif
						<div class="ser-icon">
							<!-- <i class="flaticon-seo"></i> -->
							<img src="assets/images/zoom.png" alt="zoomlogo">
						</div>
						<h2>@if(app()->getLocale()=='ar'){{ trans('labels.Zoom Services')}}@endif
							@if(app()->getLocale()=='en'){{trans('labels.Zoom خدمات')}}@endif</h2>
						<p>@if(app()->getLocale()=='en')Mintstint is the authorized Sales partner of Zoom. Our Unique  Service is ZOOM LICENCE For education , enterprise and Professional .Don’t worry about your business about the changes in Coronavirus and the emergence of mutations of the virus. Get Meetings, Phone and Chat together on any device. We’re here to help you connect,  Mintstint provides you with technical solutions to manage your brand remotely and get the best with lower price than online.@endif
							@if(app()->getLocale()=='ar')
							 مينت ستنت هو شريك المبيعات المعتمد لـ زوم. خدمتنا الفريدة هي  
							 للتعليم والمؤسسات والمهنية. لا تقلق بشأن عملك بشأن التغييرات في فيروس كورونا وظهور طفرات الفيروس. نحن هنا لمساعدتك على الاتصال ، توفر لك مينت ستنت حلولاً تقنية لإدارة علامتك التجارية عن بُعد والحصول على الأفضل بسعر أقل من الإنترنت. للتواصل والتعبير عن أفكارك حتى تتمكنوا من إنجاز المزيد معًا. نحن فخورون بأن نكون موثوقين من قبل ملايين الشركات والشركات الصغيرة والأفراد. احصل على اجتماعات وهاتف ودردشة معًا على أي جهاز@endif 	
						</p>
						<a class="sim-btn hvr-bounce-to-top" href="/zoom" target="_blank">@if(app()->getLocale()=='ar'){{ trans('labels.Know More')}}@endif
							@if(app()->getLocale()=='en'){{trans('labels.اعرف المزيد')}}@endif</a>
						
					</div>
                </div><!-- end col -->
                <div class="col-md-3">@if(app()->getLocale()=='en')
                    <div class="services-inner-box"> @endif
						@if(app()->getLocale()=='ar') <div class="services-inner-box text-right"> @endif
						<div class="ser-icon">
							<!-- <i class="flaticon-development"></i> -->
							<img src="assets/images/crm.jpg" alt="CRM">
						</div><br>
						@if(app()->getLocale()=='en')
                        
                          <h2>Cloud Customer Relationship Management (CRM)</h2>
						  <p>The system allows you to fully control the details you have created to develop your business: Move your team to a higher level of performance, Create a database for your customers, Follow-up potential customers that’s where Mintstint CRM comes in loaded with features to help you start and grow your business.</p>
						@endif

						@if(app()->getLocale()=='ar')
						<h2>نظام إدارة علاقات العملاء</h2>
						<p>أداتك الرسمية والموثقة، الأمثل في تأمين قاعدة ضخمة لبيانات العملاء وارشفة جميع عمليات التواصل والمبيعات والاستفسارات والشكاوى والتقييمات الواردة من قبل العميل والتي تبني بما يتكيف كليا مع متطلبات وفروع وخدمات المنشأة وطبيعتها. نظام يتم برمجته بشكل سحابي، فلا حاجة إلى وجود أجهزة معينة. كما أنه نظام ذكي سهل دمجه مع موقعك الالكتروني لاستقبال وحفظ طلبات التواصل بسهوله ويسر وضمان عدم فقدان بيانات أي عميل ، فضلاً عن انخفاض تكلفة إنشاؤه  </p>

						@endif
						<a class="sim-btn hvr-bounce-to-top" href="/crm" target="_blank">@if(app()->getLocale()=='ar'){{ trans('labels.Know More')}}@endif
							@if(app()->getLocale()=='en'){{trans('labels.اعرف المزيد')}}@endif</a>
					</div>
                </div><!-- end col -->
				<div class="col-md-3">@if(app()->getLocale()=='en')  <div class="services-inner-box"> @endif
                   @if(app()->getLocale()=='ar') <div class="services-inner-box text-right"> @endif
						<div class="ser-icon">
							<!-- <i class="flaticon-process"></i> -->
							<img src="assets/images/Voice-Over-Demo.jpg" alt="VoiceOver"><br>
						</div><br>
						@if(app()->getLocale()=='en')
						<h2>Multi-Lingual Multi-Accent Voice Over Production</h2>
						<p>Choose the best among a selection of the best Arab Gulf and foreign voices for use in the IVR voice message or for use in promotional videos. MintStint offers motion-based advertising video maker service. An audio recording in all different dialects and languages, with voices appropriate to the nature of the product or service.</p>
						@endif
						@if(app()->getLocale()=='ar')
						<h2>البث الصوتي متعدد اللغات</h2>
						<p> تخير الأفضل ضمن نخبة من أفضل الأصوات العربية والخليجية والاجنبية للاستخدام في الرسالة الصوتية  للاستخدام في مقاطع الفيديو الدعائية.تقدم منت ستنت خدمة صناعة مقاطع فيديو دعائية معتمدة على الحركة تشمل: كتابة النص ،تسجيل صوتي بكل اللهجات واللغات المختلفة وبأصوات تتلاءم مع طبيعة المنتج أو الخدمة، هندسة صوتية لإخراج الإعلان بطريقة إبداعية، لقطات إبداعية للإعلان تعتمد على برامج تصميم الحركة
						</p>

						@endif
						<a class="sim-btn hvr-bounce-to-top" href="/voiceover" target="_blank">@if(app()->getLocale()=='ar'){{ trans('labels.Know More')}}@endif
							@if(app()->getLocale()=='en'){{trans('labels.اعرف المزيد')}}@endif</a>
					</div>
                </div><!-- end col -->
				<div class="col-md-3">@if(app()->getLocale()=='en')   <div class="services-inner-box"> @endif
                    @if(app()->getLocale()=='ar')<div class="services-inner-box text-right"> @endif
						<div class="ser-icon">
							<!-- <i class="flaticon-discuss-issue"></i> -->
							<img src="assets/images/design.png" alt="design">
						</div>
						@if(app()->getLocale()=='en')
                         <h2>Designing and Creating Websites and E-Stores</h2>
						 <p>It has now become necessary to have an attractive and smart website design as well as a complete control panel to control and manage all the contents of the website from images, texts, videos and other website contents, as the website plays an important and essential role in providing the policies, services and products provided by the company to customers.</p>

						@endif
						@if(app()->getLocale()=='ar')
						<h2>تصميم وإنشاء المواقع والمتاجر الالكترونية</h2>
						<p>لقد أصبح الآن من الضرورى ان تمتلك تصميم موقع انترنت جذاب وذكى وأيضا لوحة تحكم كاملة للتحكم وإدارة جميع محتويات الموقع من صور ونصوص وفيديوهات وغيرها من محتويات موقع الانترنت، حيث ان موقع الانترنت يلعب دورا هاما وأساسيا فى تقديم السياسات والخدمات والمنتجات المقدمة من قبل الشركة للعملاء.لدينا من الخبرات ما يجعلنا من أفضل شركات تصميم مواقع الانترنت بتقديم خدماتنا لعدد ضخم من عملائنا وذلك ناتج من كسب ثقة عملائنا فى اداء أعمالنا بافضل الطرق وأفضل التقنيات</p>
						@endif
						
						
						<a class="sim-btn hvr-bounce-to-top" href="/design" target="_blank">@if(app()->getLocale()=='ar'){{ trans('labels.Know More')}}@endif
							@if(app()->getLocale()=='en'){{trans('labels.اعرف المزيد')}}@endif</a>
					</div>
                </div>
				
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="portfolio" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>@if(app()->getLocale()=='ar'){{ trans('labels.Our Partners')}}@endif
					@if(app()->getLocale()=='en'){{trans('labels.شركائنا')}}@endif</h3>
                
            </div><!-- end title -->
<!-- 			
			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-center">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".gal_a">Web Development</button>
						<button data-filter=".gal_b">Creative Design</button>
						<button data-filter=".gal_c">Graphic Design</button>
					</div>
				</div>
			</div> -->
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="assets/uploads/saudiElectricityCompany.jpg" class="img-fluid mx-auto d-block" alt="Image">
						<div class="img-overlay">
							<a href="assets/uploads/saudiElectricityCompany.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="assets/uploads/marsenergo.jpg" class="img-fluid mx-auto d-block" alt="Image">
						<div class="img-overlay">
							<a href="assets/uploads/marsenergo.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="assets/uploads/keyTime.jpg" class="img-fluid mx-auto d-block" alt="Image">
						<div class="img-overlay">
							<a href="assets/uploads/keyTime.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="assets/uploads/bdas.jpg" class="img-fluid mx-auto d-block" alt="Image">
						<div class="img-overlay">
							<a href="assets/uploads/bdas.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="assets/uploads/Wanna Talk Group.jpeg" class="img-fluid mx-auto d-block" alt="Image">
						<div class="img-overlay">
							<a href="assets/uploads/Wanna Talk Group.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="assets/uploads/opc.jpg" class="img-fluid mx-auto d-block" alt="Image">
						<div class="img-overlay">
							<a href="assets/uploads/opc.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	
	<div id="blog" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>@if(app()->getLocale()=='ar'){{ trans('labels.Blog')}}@endif
					@if(app()->getLocale()=='en'){{trans('labels.المدونة')}}@endif</h3>
               
            </div><!-- end title -->
			
			<div class="row">
				<div class="col-md-4 col-sm-6 col-lg-4">@if(app()->getLocale()=='en') <div class="post-box"> @endif
					@if(app()->getLocale()=='ar')<div class="post-box text-right">@endif
						@if(app()->getLocale()=='ar')
						<div class="post-thumb">
							<br>
							<h2 style="color:#1F4D4D; font-weight:bold; text-align:center">Video Conference <br>اعتمد تقنية مؤتمرات الفيديو في اعمالك</h2>
							<h3 style="font-weight:bolder; color:black; text-align:center;">واستمتع باتصالات صوتية و مرئية احترافية من <br>خلال اجهزة الفيديو كونفرنس لدي 
								</h3>
						<img src="assets/uploads/videoC.jpeg" class="img-fluid" alt="post-img" />
							<div class="date text-right">
								<span>01</span>
								<span>June</span>
								<span>2022</span>
							</div>
						</div>
						<div class="post-info text-right">
							<h2 style="font-weight: bold;">
								</h2>
							{{-- <ul>
                                <li>by admin</li>
                                <li>Apr 06, 2022</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul> 
							--}}

							<h3 style="font-weight: bold; "><li> كاميرات عالية الجودة مدعومة بالذكاء الاصطناعي • </li>
							<li>اجتماعات صوت وصورة بشكل مبسط • </li>
						    <li> USB امكانية التوصيل والتشغيل عبر • </li>
						<li>نظام متوافق مع منصات مؤتمرات الفيديو السائدة • </li></h3>
						</div>
						@endif
						@if(app()->getLocale()=='en')
						<div class="post-thumb">
							<br>
							<h3 style="color:#1F4D4D; font-weight:bolder; text-align:center">Video Conference <br>Adopt video conferencing <br>technology in your business</h3>
							<h6 style="font-weight:bolder; color:black; text-align:center;">Enjoy professional audio and video communications through video conferencing devices
								</h6>
						<img src="assets/uploads/videoC.jpeg" class="img-fluid" alt="post-img" />
						
							<div class="date text-right">
								<span>01</span>
								<span>June</span>
								<span>2022</span>
							</div>
						</div>
						<div class="post-info text-right">
							<h2 style="font-weight: bold;">
								</h2>
							{{-- <ul>
                                <li>by admin</li>
                                <li>Apr 06, 2022</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul> 
							--}}

							<h3 style="font-weight:500; text-align:left; color:black; "><br> <br><li>• High quality cameras powered by artificial intelligence.</li>
							<li>• Simplified video and audio meetings.</li>
						    <li>• Plug-and-play capability via USB.</li>
						<li>• Compatible with mainstream video conferencing platforms.</li></h3>
						</div>
						@endif

					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">@if(app()->getLocale()=='en') <div class="post-box"> @endif
					@if(app()->getLocale()=='ar')<div class="post-box text-right">@endif
						@if(app()->getLocale()=='ar')
						<div class="post-thumb">
							<br>
							<h2 style="color:#1F4D4D; font-weight:bold; text-align:center">CRM <br>عندك مؤسسة او شركة او مصنع</h2>
							<h3 style="font-weight:bolder; color:black; text-align:center;">يبقي انت محتاج نظام ادارة علاقات  <br> العملاء هيساعدك في ادارة اعمالك لدي
								</h3>
							{{-- <h2 style="text-align:center; color:#57AE77; font-weight:500;">Mintstint</h2>
							<h3 style="text-align:center; color:#BB4F4F; font-weight:bold;">اطلب الاستشارة الان</h3> --}}
							<img src="assets/uploads/crm2.jpeg" class="img-fluid" alt="post-img" />
						<img src="assets/uploads/crmpost.jpg" class="img-fluid" alt="post-img" />
						<br>
						<br>
							<div class="date text-right">
								<span>01</span>
								<span>June</span>
								<span>2022</span>
							</div>
						</div>
						<div class="post-info text-right">
							
							{{-- <ul>
                                <li>by admin</li>
                                <li>Apr 06, 2022</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul> 
							--}}
                             
							<h3 style="font-weight: bold; text-align:right; ">
								
								<li>هتابع وتقيم فريق المبيعات لديك • </li>
							<li>هتعرف مصادر عملاؤك • </li>
						    <li>هتقدر تتابع العملاء والتاريخ الكامل لعملائك • </li>
							<li>هتقدر تضيف اكتر من منتج او خدمة • </li>
						<li>هتقدر تعرف المناطق المستهلكه للخدمه الي بتقدمها • </li>
					</h3>
						</div>
						@endif
						@if(app()->getLocale()=='en')
						<div class="post-thumb">
							<br>
							<h3 style="color:#1F4D4D; font-weight:bolder; text-align:center">CRM<br>Do you have an organization, <br>company or factory?</h3>
							<h6 style="font-weight:bolder; color:black; text-align:center;">Enjoy professional audio and video communications through video conferencing devices
								</h6>
								<img src="assets/uploads/crm2.jpeg" class="img-fluid" alt="post-img" />
						<img src="assets/uploads/crmpost.jpg" class="img-fluid" alt="post-img" />
						<br> <br> 
							<div class="date text-right">
								<span>01</span>
								<span>June</span>
								<span>2022</span>
							</div>
						</div>
						<div class="post-info text-right">
							<h2 style="font-weight: bold;">
								</h2>
							{{-- <ul>
                                <li>by admin</li>
                                <li>Apr 06, 2022</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul> 
							--}}

							<h3 style="font-weight:500;text-align:left; color:black; ">
								<li>• Follow and evaluate your sales team.</li>
							<li>• Get to know your customers' sources.</li>
						    <li>• track clients and the complete history of your clients.</li>
						<li>• add more than one product or service.</li>
					<li>• Know the consumer areas of the service you provide.</li></h3>
						</div>
						@endif

					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">@if(app()->getLocale()=='en') <div class="post-box"> @endif
					@if(app()->getLocale()=='ar')<div class="post-box text-right">@endif
						@if(app()->getLocale()=='ar')
						<div class="post-thumb">
							<br>
							<h2 style="color:#1F4D4D; font-weight:bold; text-align:center">Miniature Circuit Breaker <br></h2>
							<h3 style="font-weight:bolder; color:black; text-align:center;">معدات الاحتبار</h3>
							{{-- <h2 style="text-align:center; color:#57AE77; font-weight:500;">Mintstint</h2>
							<h3 style="text-align:center; color:#BB4F4F; font-weight:bold;">اطلب الاستشارة الان</h3> --}}
							<img src="assets/uploads/crm2.jpeg" class="img-fluid" alt="post-img" />
						<img src="assets/uploads/cba.jpg" class="img-fluid" alt="post-img" />
					
					
							<div class="date text-right">
								<span>01</span>
								<span>June</span>
								<span>2022</span>
							</div>
						</div>
						<div class="post-info text-right">
							
							{{-- <ul>
                                <li>by admin</li>
                                <li>Apr 06, 2022</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul> 
							--}}
                             
							<h3 style="font-weight:bold; text-align:right; ">
								
							<li>حقن تيار عالي الجودة ومراقبة الرحلة لخصائص التيار الزائد والاختبار الحراري لقواطع الدائرة</li>
							<li>يتيح اختبارالكشف عن الانحرافات في الخصائص ومراقبة الجودة لهذه الأجهزة للشركات</li>
						    
					</h3>
						</div>
						@endif
						@if(app()->getLocale()=='en')
						<div class="post-thumb">
							<br>
							<h3 style="color:#1F4D4D; font-weight:bolder; text-align:center">Miniature Circuit Breaker<br>Test Equipment</h3>
							{{-- <h6 style="font-weight:bolder; color:black; text-align:center;">
								</h6> --}}
								<img src="assets/uploads/crm2.jpeg" class="img-fluid" alt="post-img" />
						<img src="assets/uploads/cba.jpg" class="img-fluid" alt="post-img" />
						
							<div class="date text-right">
								<span>01</span>
								<span>June</span>
								<span>2022</span>
							</div>
						</div>
						<div class="post-info text-right">
							
							{{-- <ul>
                                <li>by admin</li>
                                <li>Apr 06, 2022</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul> 
							--}}

							<h3 style="font-weight:500;text-align:left; color:black; ">
								<li>• High-quality current injection and trip monitoring for overcurrent characteristic and thermal testing of thermal magnetic circuit breakers.</li>
							<li>• The testing of MCB’s enables the detection of the deviations in the characteristics and the quality control of these devices for the companies which manufactures or sells them. </li>
						   </h3>
						</div>
						@endif

					</div>
				</div>
			
			
			</div>
			
		</div>
	</div>
	
	<div id="team" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<h3>@if(app()->getLocale()=='ar'){{ trans('labels.Our Vendors')}}@endif
					@if(app()->getLocale()=='en'){{trans('labels.موردينا')}}@endif</h3>
			</div><!-- end title -->
		
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="assets/uploads/zoom.png">
						</div>
						<div class="team-content">
							<h3 class="title">Zoom</h3>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="assets/uploads/ht.png">
						</div>
						<div class="team-content">
							<h3 class="title">HT Instruments</h3>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="assets/uploads/Schneider electric.png">
						</div>
						<div class="team-content">
							<h3 class="title">Schneider electric</h3>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="assets/uploads/eatechnology.png">
						</div>
						<div class="team-content">
							<h3 class="title">EA Technology</h3>
							<!-- <span class="post">Web Developer</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="assets/uploads/siemens.png">
						</div>
						<div class="team-content">
							<h3 class="title">Siemens</h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="assets/uploads/smc.png">
						</div>
						<div class="team-content">
							<h3 class="title">SMC</h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="assets/uploads/poly.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Poly</h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="assets/uploads/Logitech.png">
						</div>
						<div class="team-content">
							<h3 class="title">Logitech</h3>
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- FAQ Section -->
	
	{{-- <div id="pricing" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <!-- <h3>Pricing</h3> -->
            </div><!-- end title -->
			
			<div class="row">
              
            </div>
			
		</div>
	</div> --}}
	<!-- FAQ End -->

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>@if(app()->getLocale()=='ar'){{ trans('labels.Contact Us')}}@endif
					@if(app()->getLocale()=='en'){{trans('labels.اتصل بنا')}}@endif</h3>
                
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
						<!-- id="contactform" -->
                        <form  id="__vtigerWebForm" name="Contact Us" action="https://crm.mintstint.co.uk/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" novalidate="novalidate">
							<input type="hidden" name="__vtrftk" value="sid:9a9000b848379e1539eb3aa7e0a46cf5bf719576,1636753548"><input type="hidden" name="publicid" value="7a692501bc81dd7169ad72ce81125b1d"><input type="hidden" name="urlencodeenable" value="1"><input type="hidden" name="name" value="Contact Us">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" name="lastname" value="" type="text" placeholder="Your Name" required="required" data-label="" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" name="email" value="" data-label="" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" name="mobile" value="" data-label="" type="tel" placeholder="Your Mobile Number" required="required" data-validation-required-message="Please enter your Mobile number.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="company"  name="company" value="" data-label="" type="text" placeholder="Your Company" required="required" data-validation-required-message="Please enter your company.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<select name="cf_853" class="form-control" id="service" size="1" data-label="label:%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D8%A9+%D8%A7%D9%84%D9%85%D8%B7%D9%84%D9%88%D8%A8%D8%A9" required="required">
											<option value="">Select Value</option>
											<option value="نظام إدارة علاقات العملاء CRM">نظام إدارة علاقات العملاء CRM</option>
											<option value="لنكد إن Lead generation">لنكد إن Lead generation</option>
											<option value="تسجيل رسالة صوتية Voice Recording">تسجيل رسالة صوتية Voice Recording</option>
											<option value="التسويق للغير Marketing Solutions">التسويق للغير Marketing Solutions</option>
											<option value="إدارة المحتوي Content Writing">إدارة المحتوي Content Writing</option>
											<option value="Web SEO">Web SEO</option>
											<option value="Zoom meeting">Zoom meeting</option>
											<option value="Zoom webinar">Zoom webinar</option>
											<option value="Zoom room">Zoom room</option>
											<option value="Zoom education">Zoom education</option>
											<option value="Other خدمات اخري">Other خدمات اخري</option>
											<option value="VoiceOver">VoiceOver</option></select>

									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" name="description" required="required" placeholder="Your Message" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn hvr-bounce-to-top" type="submit" value="Submit">Send Message</button>
								</div>
							</div>
						</form>
                    </div>
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
					<iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6907.60503193607!2d31.204!3d30.042522999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584132c780343d%3A0xceeb5ac9d88cf5ed!2s45%20Kambez%2C%20Ad%20Doqi%2C%20Dokki%2C%20Giza%20Governorate%203751214!5e0!3m2!1sen!2seg!4v1653488833286!5m2!1sen!2seg" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
				
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