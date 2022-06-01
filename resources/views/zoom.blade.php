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
                <a class="nav-link js-scroll-trigger active" href="#meetings">Zoom Meetings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#phone">Zoom Phone</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#chat">Zoom Chat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#rooms">Zoom Rooms</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#webinar">Zoom Webinar</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#events">Zoom Events</a>

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
			<h1>@if(session('lang')=='ar'){{ trans('labels.Zoom Services')}}@endif
                @if(session('lang')=='en'){{trans('labels.Zoom خدمات')}}@endif</h1>			
			<h3 class="cd-headline clip is-full-width">
				<span>@if(session('lang')=='en') Mintstint is the authorized Sales partner of Zoom @endif
                    @if(session('lang')=='ar')Zoom هو شريك المبيعات المعتمد لـ Mintstint @endif
              <br><br>@if(session('lang')=='en'){{trans('labels.ابق على اتصال مع عملائك بطريقة احترافية والمزيد')}}@endif
                @if(session('lang')=='ar'){{trans('labels.Stay connected with your clients in a professional way and more')}}@endif</span>
				<span class="cd-words-wrapper">
					<b class="is-visible"></b>
					<b>Zoom Meetings</b>
					<b>Zoom Phone</b>
					<b>Zoom Chat</b>
					<b>Zoom Rooms</b>
                    <b>Zoom Events & Webinars</b>
                    <b>Zoom App MarketPlace</b>
                    <b>OnZoom</b>
                    <b>Zoom For Home</b>
                    <b>Developer Platform APIs & SDKs</b>
				</span>
			</h3>
            
		</div>
	</section>

    <div class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='ar') <h2 class="text-right"> {{ trans('labels.Zoom Services')}}</h2>@endif
							@if(session('lang')=='en') {{trans('labels.Zoom خدمات')}}@endif</h2>
                        <p>@if(session('lang')=='en') Mintstint is the authorized Sales partner of Zoom. Our Unique  Service is ZOOM LICENCE For education , enterprise and Professional .Don’t worry about your business about the changes in Coronavirus and the emergence of mutations of the virus. Get Meetings, Phone and Chat together on any device. We’re here to help you connect,  Mintstint provides you with technical solutions to manage your brand remotely and get the best with lower price than online. communicate, and express your ideas so you can get more done together. We’re proud to be trusted by millions of enterprises, small businesses, and individuals.<br> Get Meetings, Phone and Chat together on any device:-<br>1- Move from a chat or a phone call to a meeting with a single click.<br>2-Enjoy industry leading usability with top-rated video and audio quality.<br>3-Apps are available for Windows, MacOS and Linux as well as for iOS and Android OS.<br> @endif 
							@if(session('lang')=='ar') <p class="text-right">  مينت ستنت هي الشريك المعتمد لزوم.خدماتنا الفريدة للتعليم والمؤسسات المهنية لا تقلق بشأن عملك بشأن التغيرات في فيرس كورونا وظهور طفرات الفيرس.<br> نحن هنا لمساعدتك علي الاتصال حيث توفر مينت ستنت حلولا تقنية لادارة علامتك التجارية عن بعد والحصول علي الافضل بسعر اقل من الانترنت.للتواصل والتعبير عن أفكارك حتي تتمكنو من انجازالمزيد معا .نحن فخورون بأن نكون موثوقين من قبل ملايين الشركات والافراد<br> احصل على اجتماعات وهاتف ودردشة معًا على أي جهاز.<br> الانتقال من دردشة أو مكالمة هاتفية إلى اجتماع بنقرة واحدة. <br>استمتع بقابلية الاستخدام الرائدة في الصناعة مع جودة الفيديو والصوت الأعلى تصنيفًا.<br>
                        Android OS و IOS وكذلك لنظامي التشغيل Linux و MacOS و windows التطبيقات متاحة لانظمة </p>@endif</p>
                       
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
    <div id="meetings" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="message-box text-right"> @endif  
                        @if(session('lang')=='en') <div class="message-box">@endif                     
                        <h2>@if(session('lang')=='en')Zoom Meetings @endif
                        @if(session('lang')=='ar') <h2 class="text-right">Zoom Meetings</h2> @endif</h2>
                        <h3>
                            @if(session('lang')=='ar'){{trans('labels.CONFIDENTLY WORK FROM HOME')}}@endif
                        @if(session('lang')=='en'){{trans('labels.العمل بثقة من المنزل')}}@endif</h3>
                        <p>@if(session('lang')=='en'){{trans('labels.ميزات جديدة لمساعدتك على العمل من المنزل والاستمتاع بذلك')}}@endif @if(session('lang')=='ar'){{trans('labels.New features to help you work from home and have fun doing it:')}}@endif <br>

                             @if(session('lang')=='en'){{trans('labels.صوت واضح مع قمع متقدم للضوضاء في الخلفية')}}@endif
                            @if(session('lang')=='ar'){{trans('labels.Clear audio with advanced background noise suppression')}}@endif <br>
                             @if(session('lang')=='en'){{trans('labels.مشاركة الشرائح كخلفية افتراضية خاصة بك')}}@endif 
                            @if(session('lang')=='ar'){{trans('labels.Share slides as your virtual background')}}@endif<br>
                             @if(session('lang')=='en'){{trans('labels.تمتع بكاميرا جاهزة مع لمسة قابلة للتعديل لمظهرك')}}@endif
                            @if(session('lang')=='ar'){{trans('labels.Feel camera ready with adjustable touch up Your appearance')}}@endif <br>
                             @if(session('lang')=='ar'){{trans('labels.Look well lit in any situation by adjusting advanced lighting')}}@endif @if(session('lang')=='en'){{trans('labels.تبدو مضاءة جيدًا في أي موقف من خلال ضبط الإضاءة المتقدمة')}}@endif<br>
                             @if(session('lang')=='en'){{trans('labels.المزيد من التفاعلات التي تظهر مشاعرك')}}@endif 
                            @if(session('lang')=='ar'){{trans('labels.More reactions to let your feelings show')}}@endif <br>
                            @if(session('lang')=='ar'){{trans('labels.Filters to bring some fun into your day')}}@endif 
                            @if(session('lang')=='en'){{trans('labels.مرشحات لإضفاء بعض المرح في يومك')}}@endif <br>
                             @if(session('lang')=='ar'){{trans('labels.Try Immersive View to make meetings more engaging')}}@endif @if(session('lang')=='en'){{trans('labels.جرّب العرض الشامل لجعل الاجتماعات أكثر تفاعلاً وجاذبية')}}@endif </p>
                      
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/Zoom-meeting-1.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row">
                <div class="col-md-6">@if(session('lang')=='en')  <div class="message-box">@endif
                   @if(session('lang')=='ar') <div class="message-box text-right">  @endif                      
                       
                        <h3>@if(session('lang')=='en') MODERNIZE YOUR MEETING SOLUTION </h3><br> Zoom Meetings for desktop and mobile provide the tools to make every meeting a great one <br>1- Focus on your meeting – click record to leave the note taking to Zoom’s auto-generated, searchable transcripts. <br>2- Share and play videos with full audio and video transmit without uploading the content. <br>3- Feel meeting ready with virtual backgrounds, touch up my appearance and lighting controls.@endif 
                            @if(session('lang')=='ar') <h3>قم بتحديث اداة الاجتماع الخاص بك</h3> توفر لسطح المكتب والجوال الادوات اللازمة لجعل كل اجتماع اجتماعا رائعا <br> ركز على اجتماعك – انقر فوق “تسجيل” لترك تدوين الملاحظات لنصوص التي يتم إنشاؤها تلقائيًا والقابلة للبحث. <br> شارك وقم بتشغيل مقاطع الفيديو مع نقل الصوت والفيديو بالكامل دون تحميل المحتوى.<br>أشعر بالاستعداد للاجتماع مع الخلفيات الافتراضية، ولمس مظهرك وعناصر التحكم في الإضاءة.
                            @endif


                           </p>
                      
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/zoom-meeting2.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="phone" class="section wb">
        <div class="container">
            <div class="row">@if(session('lang')=='en') <div class="col-md-6"> @endif
               @if(session('lang')=='ar') <div class="col-md-6 text-right">@endif
                    <div class="message-box"> @if(session('lang')=='en')                       
                        <h2>Zoom Phone</h2><p>Zoom Phone is a feature-rich cloud phone system for businesses of all sizes.
                        </p>
                            <strong>Simple and intuitive:</strong> Empower your end users to make phone calls with the same ease and familiarity as Zoom video meetings.<br><strong>Scalable and Trusted Communications:</strong> Global Coverage,Secure Communications, Trusted Architecture, Provider Flexibility, BYOC (Bring Your Own Carrier).<br><strong> for your evolving needs:</strong>Get Meetings, Phone and Chat together on any device.<br>1. Zoom Phone has a track record of rapid innovation, capitalizing on the established global infrastructure and audio quality of Zoom.<br>2. With hundreds of features, and more added every month, you can count on Zoom Phone to meet your business requirements.<br> 3. Zoom Phone tightly integrates with top business applications, contact center partners, and hardware providers to ensure communications can occur in context.<br>4. Leverage Zoom Phone's robust set of APIs to create customized business solutions that let you make and receive phone calls right within your workflow.<br>@endif
                            @if(session('lang')=='ar')
                            <h2>Zoom Phone</h2><p>هو نظام هاتف سحابي غني بالميزات للشركات من جميع الأحجام</p>
                            بسيطة وبديهية: مكّن المستخدمين النهائيين لديك من إجراء مكالمات هاتفية بنفس السهولة والألفة التي تتمتع بها اجتماعات <br>
                            اتصالات قابلة للتطوير وموثوق بها: التغطية العالمية ، والاتصالات الآمنة ، والبنية الموثوقة ، ومرونة المزود والناقل الخاص بك<br> مبتكرة لاحتياجاتك المتطورة: احصل على الاجتماعات والهاتف والدردشة معًا على أي جهاز. <br><br>     يتمتع بسجل حافل من الابتكار السريع ، مستفيدًا من البنية التحتية العالمية الراسخة وجودة الصوت .<br> مع مئات الميزات والمزيد المضاف كل شهر ، يمكنك الاعتماد على  لتلبية متطلبات عملك. <br> يتكامل  بإحكام مع أفضل تطبيقات الأعمال وشركاء مراكز الاتصال وموفري الأجهزة لضمان حدوث الاتصالات في السياق. <br> استفد من مجموعة واجهات برمجة التطبيقات القوية في  لإنشاء حلول أعمال مخصصة تتيح لك إجراء مكالمات هاتفية واستقبالها في إطار سير عملك.
                            @endif
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/zoomphone.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><br><br><br><br><br><br>
            <div class="row">
                <div class="col-md-6"> @if(session('lang')=='en') <div class="message-box">  @endif
                   @if(session('lang')=='ar') <div class="message-box text-right"> @endif   
                       @if(session('lang')=='en')               
                        <h2>A THOUGHTFUL APPROACH TO MOBILE MEETINGS </h2>
                           <p> Today’s professionals need to be able to work and video conference wherever they are. Zoom Meetings for mobile provides the same great experience that you’d expect from the desktop client and more.<br><br>
                            1. Turn on Virtual Backgrounds and select the image of your choice (iPhone 8+ required).<br><br>
                            2. Share your screen and co-annotate.<br><br>
                            3. Use Safe Driving Mode or Apple Carplay (iPhone only).<br><br><p>
                                @endif 
                            @if(session('lang')=='ar')
                            <h2>نهج مدروس للاجتماعات بالهاتف </h2>
                            <p>يحتاج المحترفون اليوم إلى أن يكونوا قادرين على العمل وعقد المؤتمرات عبر الفيديو أينما كانوا. يوفر  للجوال نفس التجربة الرائعة التي تتوقعها من عميل سطح المكتب والمزيد. <br><br>
                                (+iPhone 8) قم بتشغيل الخلفيات الافتراضية وحدد الصورة التي تختارها <br>
                                شارك شاشتك وأضف تعليقًا توضيحيًا مشتركًا <br>
                                (iPhone فقط) Apple Carplay استخدم وضع القيادة الآمنة أو
                            </p>

                            @endif
                            
                           
                      
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/zoomphone2.gif" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="chat" class="section wb">
        <div class="container">
            <div class="row"> @if(session('lang')=='en') <div class="col-md-6"> @endif
               @if(session('lang')=='ar') <div class="col-md-6 text-right"> @endif
                    <div class="message-box">                        
                        <h2>Zoom Chat</h2>
                        @if(session('lang')=='en')
                        <p>Communicate Instantly On Zoom Chat<br><br>
                            Integrated persistent messaging streamlines workspace collaboration across the desktop and mobile clients.<br>
                            
                            1. Instantly start a meeting
                            or phone call.<br>
                            2. Share files and search content in public or private groups.<br>
                            3. Connect external users while keeping information safe.<br></p>
                            @endif
                        @if(session('lang')=='ar')
                        <p>Zoom Chat تواصل على الفور على  <br><br> تعمل الرسائل المستمرة المتكاملة على تبسيط التعاون في مساحة العمل عبر عملاء سطح المكتب والأجهزة المحمولة.<br> ابدأ اجتماعًا أو مكالمة هاتفية على الفور.<br>
                            مشاركة الملفات والبحث في المحتوى في مجموعات عامة أو خاصة.<br> ربط المستخدمين الخارجيين مع الحفاظ على المعلومات آمنة. </p>
                        @endif
                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/zoomchat.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="rooms" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">@if(session('lang')=='en') <div class="message-box">  @endif
                  @if(session('lang')=='ar')  <div class="message-box text-right"> @endif                        
                    @if(session('lang')=='en') <h2>Zoom Rooms</h2>
                        <p>Conference rooms that make it easy to run or join video meetings with a tap of a button. The modern workspaces for hybrid teams, Zoom Rooms bring HD video collaboration into any space – in the office, in the classroom, or at home – and enable in-person and remote participants to interact in real time. Simple to start a meeting, book a room, and share content, Zoom Rooms are the conference room experience you’ve always wanted.</p>
                        <h3>Zoom Rooms Features</h3>
                        <p>1.<strong>Smart Gallery:</strong>Smart Gallery feature leverages AI to take a single-camera view of multiple people in a Zoom Room, and send up to three unique video streams to better display the in-room participants to remote attendees. Remote Attendees get an improved face-to-face experience and interaction with Zoom Rooms participants.<br><br>2.<strong>Workspace Reservation:</strong>Workspace Reservation is an innovative solution that enables your teams to reserve flexible workspaces. This can be an open desk, personalized Zoom device or Zoom phone.This easy to use and manage solution will modernize your workspaces.<br><br>3.<strong>Kiosk Mode Virtual Receptionist:</strong>With Zoom Rooms Kiosk mode, engage face to face with a virtual receptionist anywhere an in-person receptionist could be – office, hotel, lobby, or other location. Brand the display and customize the message to match the environment and purpose.<br><br>4.<strong>Control Zoom Rooms From Your Mobile Device or Laptop:</strong>Now, you can start, stop and control Zoom Rooms meetings from your personal mobile devices. No need to touch the in-room shared controller. Use your iPhone, Android, or laptop to easily pair to your local Zoom Room.<br><br>5.<strong>Schedualing Display With people Counting:</strong>Scheduling Display software is included with all Zoom Rooms and simplifies the room booking experience. See how many people are in the room, whether a meeting is taking place, when the next meetings are, or quickly reserve the room.<br><br>6.<strong>Enhanced Voice Commands For Zoom Rooms:</strong>Voice Commands for Zoom Rooms has been upgraded, offering an expanded set of commands and support on additional hardware platforms. Now there are even more ways to control your Zoom Rooms meeting without touching the shared room controller.<br><br>7.<strong>Digital Signage,Included:</strong>Did you know that when you purchase any Zoom Rooms license, you get unlimited Digital Signage capabilities included at no additional cost? Share announcements and information in the form of images, videos, and URLs across any display on your network.</p>@endif 
                        @if(session('lang')=='ar') <h2>Zoom Rooms</h2>
                        <p>غرف اجتماعات تسهل تشغيل اجتماعات الفيديو أو الانضمام إليها بضغطة زر. مساحات العمل الحديثة للفرق المختلطة ، توفر  تعاونًا بالفيديو عالي الدقة في أي مساحة – في المكتب أو في الفصل الدراسي أو في المنزل – وتمكين المشاركين شخصيًا وعن بُعد من التفاعل في الوقت الفعلي. من السهل بدء اجتماع وحجز غرفة ومشاركة المحتوى ، فإن هي تجربة غرفة المؤتمرات التي لطالما أردتها <br><br></p>
                        <h3>
                             Zoom Rooms مميزات  </h3>
                             <p><strong>تحكم من جهازك المحمول أو الكمبيوتر المحمول</strong><br> الآن ، يمكنك بدء اجتماعات الغرف وإيقافها والتحكم فيها من أجهزتك المحمولة الشخصية. لا داعي للمس وحدة التحكم المشتركة داخل الغرفة ، استخدم جهاز المحمول للإقران بسهولة بغرف التكبير المحلية الخاصة بك  <br>
                            <strong>موظف استقبال افتراضي</strong> <br>  Kiosk باستخدام وضع 
                           انخرط وجهًا لوجه مع موظف استقبال افتراضي في أي مكان يمكن أن يكون فيه موظف استقبال شخصيًا – مكتب أو فندق أو ردهة أو موقع آخر. قم بتمييز الشاشة وتخصيص الرسالة لتلائم البيئة والغرض <br>
                        <strong>حجز مساحة العمل </strong><br>يُعد حدز مساحة العمل حلاً مبتكرًا يمكّن فرقك من حجز مساحات عمل مرنة. يمكن أن يكون هذا مكتبًا مفتوحًا أو جهاز  شخصيًا أو هاتف . هذا الحل سهل الاستخدام والإدارة سيعمل على تحديث مساحات العمل الخاصة بك <br> 
                    <strong>المعرض الذكي </strong><br>تستفيد ميزة المعرض الذكي من الذكاء الاصطناعي لأخذ عرض الكاميرا الفردية لعدة أشخاص في غرفة التكبير ، وإرسال ما يصل إلى ثلاثة تدفقات فيديو فريدة لعرض المشاركين داخل الغرفة بشكل أفضل على 
                                 الحاضرين عن بُعد. يحصل الحاضرون عن بُعد على تجربة محسّنة وجهًا لوجه وتفاعل مع المشاركين <br>
                                <strong>الإشارات الرقمية ، متضمنة  </strong><br>هل تعلم أنه عند شرائك أي ترخيص  ، ستحصل على إمكانات غير محدودة للافتات الرقمية دون أي تكلفة إضافية؟ مشاركة الإعلانات والمعلومات في شكل صور ومقاطع فيديو وعناوين عبر أي عرض على شبكتك <br>
                            <strong>أوامر صوتية محسنة لغرف التكبير </strong><br>
                            تمت ترقية الأوامر الصوتية ، مما يوفر مجموعة موسعة من الأوامر والدعم على منصات أجهزة إضافية. يوجد الآن المزيد من الطرق للتحكم في اجتماع الخاص بك دون لمس وحدة التحكم في الغرفة المشتركة<br>
                        <strong>عرض جدول الاعمال مع عدد من  الأشخاص </strong> <br>يتم تضمين برنامج عرض الجدولة مع جميع غرف زوم ويبسط تجربة حجز الغرفة. تعرف على عدد الأشخاص الموجودين في الغرفة ، سواء كان اجتماع ما ، أو موعد الاجتماعات التالية ، أو احجز القاعة بسرعة </p>

                        @endif
                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/zoomroom.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="webinar" class="section wb">
        <div class="container">
            <div class="row">@if(session('lang')=='en') <div class="col-md-6">@endif
                @if(session('lang')=='ar')<div class="col-md-6 text-right"> @endif
                    <div class="message-box">   @if(session('lang')=='en')                     
                        <h2>Zoom Webinar</h2>
                        <p><strong>Connect in A more Personal Way:</strong>Stop hiding behind content and put your authentic self-front and center. Connect with both internal and external audiences by sharing live HD video.<br><br><strong>Present With Confidence:</strong>Leverage virtual backgrounds, studio effects and background noise suppression to look and sound your best no matter where you are presenting. Control the experience to minimize audience interruptions.<br><br><strong>Scale To massively large audiences:</strong>Reliably and securely scale to 50,000 people in your live video webinar. Grow your external audience by live streaming your event on YouTube Live, Facebook Live and other custom streaming services.</p> @endif
                        @if(session('lang')=='ar')
                        <h2>Zoom Webinar</h2>
                        <p><strong>تواصل بطريقة أكثر خصوصية</strong><br>توقف عن الاختباء خلف المحتوى وضع نفسك في المقدمة وفي المنتصف. تواصل مع الجماهير الداخلية والخارجية من خلال مشاركة فيديو مباشر عالي الدقة<br>
                            <strong>التقديم بثقة</strong><br> استفد من الخلفيات الافتراضية وتأثيرات الاستوديو وقمع ضوضاء الخلفية للحصول على أفضل مظهر وصوت بغض النظر عن مكان التقديم. تحكم في التجربة لتقليل مقاطعات الجمهور<br>
                        <strong>توسيع نطاق الجماهير الكبيرة على نطاق واسع</strong><br>يمكنك التوسع بشكل موثوق وآمن إلى 50000 شخص في ندوتك عبر الفيديو المباشر على الويب. قم بزيادة جمهورك الخارجي من خلال البث المباشر لحدثك على  يوتيوب وفيس بوك مباشر وخدمات البث المخصصة الأخرى</p>
                        
                        @endif

                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/zoomwebinar.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-md-6"> @if(session('lang')=='en') <div class="message-box"> @endif
                   @if(session('lang')=='ar') <div class="message-box text-right">@endif                        
                    @if(session('lang')=='en')<h3>Zoom Webinar Features:</h3>
                        <p><strong>Promote Your Brand:</strong><br>1.Customize your webinar registration page and reminder emails.<br>2.Promote your social share buttons.<br>
                            3.Build your own post-webinar landing page.<br>
                            4.Brand the live streaming video watermark.<br><br><strong>Interact and Engage with your audience:</strong><br>1.Support in-session chat.<br>2.Answer and moderate Q&A throughout the session.<br>3.Allow attendees to raise hand and respond to polls.<br>4.Promote attendees to panelists who can share audio and video.<br>5.Gather attendee feedback with an automatic post-webinar survey.<br><br><strong>Build Your Business:</strong><br>1.Collect contact information from registrants.<br>2.Push webinar contacts as leads into your CRM.<br>3.Nurture attendees with marketing automation integrations.<br>4.Monetize your webinars through paid registration.<br><br><strong>Track and measure success:</strong><br>1.Report on webinar attendance.<br>2.Measure audience engagement.<br>3.Analyze Q&A as well as results to audience polls and surveys.<br>4.Easily export all data into a csv file.<br><br></p>
                            @endif
                            @if(session('lang')=='ar')
                            <h3>احصل على المزيد من منصة ويبنار الخاصة بك </h3>
                            <p><strong>تتبع وقياس النجاح</strong><br>تقرير عن حضور الندوة عبر الإنترنت <br>قياس تفاعل الجمهور <br> تحليل الأسئلة والأجوبة بالإضافة إلى نتائج استطلاعات الرأي
                                 <br>سهوله عمل تقرير كل البيانات في ملف اكسيل <br><br>
                                <strong>ابنى عملك </strong><br>جمع معلومات الاتصال من المسجلين<br>اجمع جهات اتصال الندوة عبر الويب كعملاء محتملين إلى نظام العلاقات العامة الخاص بك <br>رعاية الحضور من خلال تكامل أتمتة التسويق<br>استثمر ندواتك عبر الإنترنت من خلال التسجيل المدفوع <br><br>
                            <strong>تفاعل وتفاعل مع جمهورك</strong><br>دعم الدردشة في الجلسة <br>قم بالإجابة والإشراف على الأسئلة والأجوبة طوال الجلسة <br>السماح للحاضرين برفع اليد والرد على استطلاعات الرأي <br>
                            قم بترقية الحاضرين إلى أعضاء اللجنة الذين يمكنهم مشاركة الصوت والفيديو<br>اجمع ملاحظات الحضور من خلال استطلاع تلقائي بعد ندوة الويب <br><br><strong>روّج لعلامتك التجارية</strong> <br>
                            قم بتخصيص صفحة التسجيل في الندوة عبر الإنترنت ورسائل التذكير بالبريد الإلكتروني <br>
                            تعزيز أزرار المشاركة الاجتماعية الخاصة بك <br>قم ببناء الصفحة المقصودة للندوة الخاصة بك <br>
                            قم بتمييز العلامة المائية لفيديو البث المباشر </p>


                            @endif
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        <img src="assets/uploads/zoomwebinar2.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="events" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6"> @if(session('lang')=='en')   <div class="message-box">  @endif
                   @if(session('lang')=='ar') <div class="message-box text-right"> @endif    
                    @if(session('lang')=='en')        
                        <h2>Zoom Events</h2>
                        <p><strong>Build Your Own Event Hubs:</strong>Invite your attendees to the Expo Floor where they can explore your virtual venue and join subject-matter specific booths to hear from experts or network with other attendees in a more intimate setting. Booths can be used for sponsors, topic specific networking, product demonstrations and much more!<br><br>
                            <strong>Manage Ticketing and registration With ease:</strong>Host different types of virtual events with customizable registration and built-in ticketing options. Set the number of free and paid tickets available per event. Support group purchases, gifts, and donations.<br><br><strong>Host a varierty of events:</strong>Set up public or private events, or on-demand. Schedule your events to be single-session, multi-session, or concurrent session, Single day or multiday, with the ability to post recordings after the event.<br><br><strong>Faster Connections:</strong>Give your attendance the chance to network with each other as well as event sponsers with the ability to easily exchange contact info, chat and initiate meetings with other attendances in the event lobby.<br><br><strong>Decide with data:</strong>Track event registration, attendance, ticket sales, revenue,and more. Zoom Events help you understand your event performance and improve your virtual events. </p>
                            @endif
                            @if(session('lang')=='ar') 
                            <h2>Zoom Events</h2>
                            <p><strong>تقرير البيانات </strong><br>تتبع تسجيل الأحداث والحضور ومبيعات التذاكر والإيرادات والمزيد. تحتوي   على تحليلات لمساعدتك على فهم أداء الحدث وتحسين الأحداث الافتراضية الخاصة بك <br>
                            <strong>تعزيز الاتصالات </strong> <br>امنح الحاضرين فرصة للتواصل مع بعضهم البعض بالإضافة إلى رعاة الحدث مع القدرة على تبادل معلومات الاتصال بسهولة والدردشة وبدء الاجتماعات مع بعضهم البعض في ردهة الحدث <br><strong>استضف مجموعة متنوعة من الأحداث  </strong><br>قم بإعداد أحداث عامة أو خاصة مجانية أو مدفوعة أو مباشرة أو عند الطلب. قم بجدولة الأحداث الخاصة بك لتكون جلسة فردية أو متعددة الجلسات أو جلسة متزامنة ، ليوم واحد أو عدة أيام ، مع إمكانية نشر التسجيلات بعد الحدث<br>
                        <strong>إدارة التذاكر والتسجيل بكل سهولة</strong> <br>استضف أنواعًا مختلفة من الأحداث الافتراضية مع إمكانية التسجيل القابلة للتخصيص وخيارات التذاكر المضمنة. حدد عدد التذاكر المجانية والمدفوعة المتاحة لكل حدث. دعم المشتريات الجماعية والهدايا والتبرعات <br><strong>بناء محاور الحدث الخاصة بك </strong><br>
                        قم بدعوة الحاضرين  حيث يمكنهم استكشاف المكان الافتراضي الخاص بك والانضمام   خاصة بالموضوع للاستماع إلى الخبراء أو التواصل مع الحاضرين الآخرين في مكان أكثر حميمية. يمكن استخدامها  للجهات الراعية ، والتواصل مع موضوع معين ، وعروض المنتج والمزيد!</p>

                            @endif

                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="center-box-pro wow fadeIn">
                        {{-- <img src="assets/uploads/event.mp4" alt="" class="img-fluid img-rounded"> --}}
                        <video width="600" height="500" controls autoplay>
                            <source src="assets/uploads/event.mp4" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                          Your browser does not support the video tag.
                          </video>
                          
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