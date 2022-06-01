
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
              <a class="nav-link js-scroll-trigger" href="/"> @if(session('lang')=='ar'){{trans('labels.Home')}}@endif
				@if(session('lang')=='en'){{trans('labels.الصفحة الرئيسية')}}@endif</a>
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
			<h1><a class="nav-link js-scroll-trigger text-white" href="/faq">
                @if(session('lang')=='ar'){{ trans('labels.FAQ')}}@endif
				@if(session('lang')=='en'){{trans('labels.الاسئلة الشائعة')}}@endif</h1>			
			<h3 class="cd-headline clip is-full-width">
				
			</h3>
		</div>
	</section>

    <div class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/faq.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message-box">                        
                        <details>
                            <summary>@if(session('lang')=='ar'){{trans('labels.What is Mintstint Core Business?')}}@endif
                            @if(session('lang')=='en'){{trans('labels.ما هو موقع منت ستنت؟')}}@endif</summary>
                            <p>@if(session('lang')=='en'){{trans('labels.منت ستنت هي وكالة إعلانات متخصصة في حلول التسويق بين الشركات من خلال منصة لينكد إن بالاضافة لمنصات التواصل الاجتماعي الاخري وكل ما يتعلق بالاعلانات الممولة يعمل فريق الموقع على تطوير علامتك التجارية ويقوم بتقديم خدمات وأفكار غير محدودة لمساعدة شركتك في الوصول إلى أعلى مستوى من الانتشار والنجاح والتميز')}}@endif @if(session('lang')=='ar'){{trans('labels.Mintstint is a digital advertising agency specializing in B2B marketing solutions through LinkedIn, in addition to other social media platforms and everything related to funded ads. The site team works to develop your brand and provides unlimited services and ideas to help your company reach the highest level of popularity, success and excellence.')}}@endif</p>
                          </details>
                          <details>
                            <summary>@if(session('lang')=='en'){{trans('labels.ما هي الخدمات التي يقدمها موقع منت ستنت؟')}}@endif @if(session('lang')=='ar'){{trans('labels.What Are The services provided By Mintstint?')}}@endif</summary>
                            <p>@if(session('lang')=='en'){{trans('labels.من خلال موقع منت ستنت يمكنك الحصول علي جميع خدمات التسويق الالكتروني التالية:-إدارة نشر صفحات التواصل الاجتماعي علي الصفحة وزيادة عدد المتابعين وجدولة المحتوي للنشر.وكل ما يتعلق بخدمة العملاء من الرد علي التعليقات او رسائل الصفحه.كل ما يتعلق بإنشاء حساب وادارته علي مواقع التواصل الاجتماعي التالية :-فيس بوك-انستجرام- لينكد ان-تويتر- بينترست وكل استراتيجات الحملات الرقمية وخدمات المحتوي الابداعي وكتابه المقالات للمواقع والمدونات.وكتابة شكل اعلان لمواقع التواصل الاجتماعي.تصميمات مميزة وانشاء قصصا قصيرة لمنصه انستجرام وانشاء قصص قصيرة لمنصه فيس بوك.التسويق عبر البريد الالكتروني في كتابة الرسائل الاخبارية. استقطاب اكبر عدد من المشتركين في خدمة البريد الالكتروني وحملات اعلانيه ممولة بالبريد الالكتروني. خدمات التصميم الجرافيكي يمكن للفريق المسئول عن التصميمات الجرافيكيةوانشاء صور ابداعيه مبتكرة لمنصات الوسائط الاجتماعيه التالية:- مقاطع فيديو قصيرة')}}@endif @if(session('lang')=='ar'){{trans('labels.Through Mintstint website, you can obtain all of the following e-marketing services: – Managing social media pages Posting on the page. Increase the number of followers. Advance scheduling of content to be published. Everything related to customer service from a response to comments or page messages. Everything related to creating and managing an account on the following social media sites: – (LinkedIn – Facebook – Instagram – Twitter – Pinterest) Digital campaign strategies. Creative content services. Writing articles for websites and blogs. Writing ad format for social networking sites. Distinctive designs. Create short stories for the Instagram platform. Create short stories for the Facebook platform. Email Marketing Writing newsletters. Attracting the largest number of subscribers to the e-mail service. Email funded advertising campaigns. Graphic design services The team in charge of graphic designs can create innovative creative images for the following social media platforms: – Facebook Twitter LinkedIn Pinterest Instagram You tube Short video clips. Sponsored campaigns for LinkedIn-Facebook-Google platforms.')}}@endif </p>

                          </details>
                          <details> <summary>
                              @if(session('lang')=='en'){{trans('labels.متي احصل علي الخدمة التي قمت باختيارها من ضمن خدمات موقع منت ستنت؟')}}@endif @if(session('lang')=='ar'){{trans('labels.When Will I receive The service(s) that I have Chosen from among the services listed on the website?')}}@endif </summary>
                            <p>@if(session('lang')=='en'){{trans('labels.يتم الاتفاق بين موقع منت ستنت والعميل على الخدمات التي يود الحصول عليها، وبمجرد أن تتم عملية الدفع يقوم فريق العمل بتنفيذ ما تم الاتفاق عليه من خدمات يحصل عليها العميل بموجب ميعاد يتم تحديده بين الطرفين قبل البدء في التنفيذ.')}}@endif @if(session('lang')=='ar'){{trans('labels.An agreement is made between the Mintstint website and the customer on the services that he would like to obtain, and once the payment process is completed, the work team will implement the services that have been agreed upon that the customer will receive according to a date to be determined between the two parties before starting the implementation.')}}@endif</p></details>
                            <details>
                                <summary>@if(session('lang')=='en'){{trans('labels.هل من الممكن التعديل علي العمل بعد تسليمه بشكل نهائي؟')}}@endif @if(session('lang')=='ar'){{trans('labels.Is It Possible to amend the work after its final delivery?')}}@endif</summary>
                                <p>@if(session('lang')=='en'){{trans('labels.التعديل على أي خدمة تم تنفيذها يتم في حالة إذا لم يتم إخراج الخدمة بالشكل الذي تم الاتفاق عليه، أي حدوث خطأ ما أثناء التنفيذ. ومسموح بهذا التعديل خلال أسبوع من تاريخ التسليم النهائي للخدمة. ولكن في حالة إذا تم التسليم بشكل نهائي وبموافقة من العميل على الشكل أو المحتوى النهائي للخدمة لا يمكن إجراء أي تعديلات.')}}@endif 
                                @if(session('lang')=='ar'){{trans('labels.The amendment to any service that has been implemented is carried out in the event that the service is not output in the manner agreed upon, that is, an error occurs during implementation. This modification is allowed within one week from the date of the final delivery of the service. But in the event that the delivery is final and with the approval of the customer on the final form or content of the service, no modifications can be made.')}}@endif</p>
                            </details>
                            <details>
                                <summary>@if(session('lang')=='ar'){{trans('labels.What is the format in which files and designs are sent to the client?')}}@endif @if(session('lang')=='en'){{trans('labels.ما الصيغه التي يتم ارسال الملفات والتصاميم بها الي العميل ؟')}}@endif</summary>
                                <p>@if(session('lang')=='ar'){{trans('labels.The written files are sent in PDF format, and the work team alone is responsible for modifying them if required. As for the images and designs, they are sent in PNG format, and the customer is not entitled to obtain them in PSD format, except in the case that the design is one of the designs of a commercial identity such as a logo or the like.')}}@endif @if(session('lang')=='en'){{trans('labels.الملفات الكتابية يتم ارسالها بصيغة بي دي اف وفريق العمل وحده هو المسئول عن التعديل فيهااذا تطلب الامر ذلك.اما الصور والتصاميم يتم ارسالها علي هيئة صور ولا يحق للعميل الحصول عليها بالصيغه الاصلية الا في حالة ان يكون التصميم احد تصاميم الهوية الرقمية مثل الشعار او ما شابه.')}}@endif</p>
                            </details>
                            <details>
                                <summary>@if(session('lang')=='en'){{trans('labels.هل من الممكن استرداد النقود التي قمت بدفعها للحصول علي خدمة ما من موقع منت ستنت؟')}}@endif
                                    @if(session('lang')=='ar'){{trans('labels.Is It Possible to reimburse the money that I paid for a service from The Mintstint website?')}}@endif</summary>
                                <p>@if(session('lang')=='en'){{trans('labels.لا يمكن استرداد المبالغ التي تم دفعها لموقع منت ستنت طالما تم تنفيذ الخدمة التي اتفق عليها العميل مع الموقع، ولكن في حالة لم يتم تنفيذ طلبك نتيجة تقصير من فريق العمل أو تأخير لم يتم تبليغك به مسبقاً كان لك الحق في استرداد المبلغ.')}}@endif
                                @if(session('lang')=='ar'){{trans('labels.The amounts paid to the Mintstint website cannot be refunded as long as the service agreed upon by the customer with the site has been implemented, but in the event that your request has not been executed as a result of the failure of the work team or a delay that was not notified to you in advance, you have the right to recover the amount')}}@endif</p>
                            </details>
                            <details>
                                <summary>@if(session('lang')=='en'){{trans('labels.ماذا يحدث في حاله عدم تواصل العميل مع فريق العمل خلال مدة تنفيض الخدمات لمدة تصل الي ثلاث اسابيع متتالية؟')}}@endif @if(session('lang')=='ar'){{trans('labels.What happens if the client does not communicate with the work team during the period of implementation of services for a period of up to three consecutive weeks?')}}@endif </summary>
                                <p>@if(session('lang')=='en'){{trans('labels.في حالة عدم تواصل العميل مع فريق عمل منت ستنت أثناء تنفيذ الخدمة التي تم الاتفاق عليها، سوف يقوم موقع منت ستنت بتعليق الخدمة أو المشروع الذي تم الاتفاق عليه. وفي هذه الحالة يحق للعميل استرجاع المبلغ المدفوع بعد خصم نسبة يحددها الموقع.')}}@endif @if(session('lang')=='ar'){{trans('labels.In the event that the customer does not communicate with the Mintstint team during the implementation of the service that has been agreed upon, the Mintstint website will suspend the service or project that has been agreed upon. In this case, the customer has the right to recover the amount paid after deducting a percentage determined by the site.')}}@endif</p>
                            </details>
                            <details>
                                <summary>@if(session('lang')=='en'){{trans('labels.ما هي طرق الدفع المسموح بها في موقع منت ستنت؟')}}@endif @if(session('lang')=='ar'){{trans('labels.What are the available payment Methods?')}}@endif</summary>
                                <p>@if(session('lang')=='ar'){{trans('labels.Mintstint web services guarantee you payment methods with the highest degree of security for safe financial transactions through the payment methods recognized, whether locally or internationally. These methods include the following: – Visa Master card. Mada extent PayPal Apple pay STC Pay Bank transfer.')}}@endif
                                @if(session('lang')=='en'){{trans('labels.يضمن لك موقع منت ستنت طرق دفع على أعلى درجة من الأمان من أجل تعاملات مالية آمنة من خلال الدفع بالطرق المتعارف عليها سواء محلياً أو عالمياً. تشمل هذه الطرق الآتي: – التحويل البنكي.')}}@endif</p>
                            </details>
                            <details><summary>@if(session('lang')=='en'){{trans('labels.ما هي طرق التواصل مع فريق عمل موقع منت ستنت؟')}}@endif @if(session('lang')=='ar'){{trans('labels.What are the methods of communicating with the mintstint team?')}}@endif </summary>
                            <p>@if(session('lang')=='en'){{trans('labels.يستقبل فريق عمل موقع منت ستنت استفساراتكم ويتواصل مع عملاءه من خلال البريد الإلكتروني')}}@endif @if(session('lang')=='ar'){{trans('labels.The Mintstint website team receives your inquiries and communicates with its customers through general assistance email info@mintstint.com or via WhatsApp 201068362663+')}}<br>
                                info@mintstint.com <Br> +201068362663 او الواتساب@endif 
                               
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