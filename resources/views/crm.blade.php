
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
			</li>@endif
              @if(session('lang')=='en')<li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{url('/Lang/ar')}}">ar</a>
            
            </li>@endif
          </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url('assets/uploads/b.jpg')">
		<div class="heading">
			<h1>@if(session('lang')=='ar'){{trans('labels.Cloud Customer Relationship Management (CRM)')}}@endif 
                @if(session('lang')=='en'){{trans('labels.نظام إدارة علاقات العملاء')}}@endif</h1>			
			<h3 class="cd-headline clip is-full-width">
				<span>@if(session('lang')=='en')Real-time Overview.@endif 
                    @if(session('lang')=='ar')كن علي اطلاع دائم باداء شركتك بأسهل الطرق من خلال انظمة السي ار ام المميزة لدينا@endif<br><br>
                    @if(session('lang')=='en')Easily Review your performance & next activities<br><br>
                    Track Leads, Close Opportunities and get accurate forecasts.@endif 
                @if(session('lang')=='ar')تابع عملاؤك المحتملين وانشئ فرص جديده واحصل علي تنبؤات دقيقه @endif</span>
			</h3>
		</div>
	</section>

    <div class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/crm.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">@if(session('lang')=='en')
                    <div class="message-box">        @endif
                        @if(session('lang')=='ar')  <div class="message-box text-right"> @endif  
                            
                            @if(session('lang')=='en') 
                            <h2>CRM Services</h2>
                            <p>The system allows you to fully control the details you have created to develop your business: Move your team to a higher level of performance, Create a database for your customers, Follow-up potential customers that’s where Mintstint CRM comes in loaded with features to help you start and grow your business.<br>Helps you to create a clear database for your customers with a full link to SMS and email:<br>
                                1.Full support for the Arabic language<br>2.Support for all phones and tablets through Mintstint CRM App<br>3.Easy to upgrade and add new updates.<br>4.Using CRM can improve your lead records rate by 500%.<br>
                            </p>
                            
                            @endif
                            @if(session('lang')=='ar')
                            <h2> CRM خدماتنا</h2>
                            <p>                        اداتك الرسمية والموثقة، الأمثل في تأمين قاعدة ضخمة لبيانات العملاء وارشفة جميع عمليات التواصل والمبيعات والاستفسارات والشكاوى والتقييمات الواردة من قبل العميل والتي تبني بما يتكيف كليا مع متطلبات وفروع وخدمات المنشأة وطبيعتها<br>نظام يتم برمجته بشكل سحابي، فلا حاجة إلى وجود أجهزة معينة. كما أنه نظام ذكي سهل دمجه مع موقعك الالكتروني لاستقبال وحفظ طلبات التواصل بسهوله ويسر وضمان عدم فقدان بيانات أي عميل ، فضلاً عن انخفاض تكلفة إنشاؤه.يساعد فريق المبيعات علي متابعة الطلبات المختلفة واخر التحديثات الخاصة بكل عميل وحفظها للتعامل معها في الوقت الحاضر او مستقبلا مما يرفع من أداء الفريق وزيادة فرص المبيعات لمنشئتك.يسهل على جميع أفراد فريق العمل التواصل فيما يخص مراحل المشروع منذ تدشينه مروراً بمراحله المختلفة وحتى الانتهاء منه. يساعد المسئولين التنفيذيين على التعرف على كل جوانب العمل ومراحل المشاريع مما يسهل عملية التسويق وزيادة المبيعات. نظام مهم جداً لأي فريق عمل خاصة تلك الشركات التي أجبرتها ظروف الحجر الصحي على العمل من خلال شبكة الانترنت.
                            </p>

                            @endif
                        

                         </div><!-- end messagebox -->
                </div><!-- end col -->

                
            </div><!-- end row -->
            <div class="row">
                <div class="message-box"> 
                    <h3>@if(session('lang')=='en')CRM System include many systems helps you to develop your business like:@endif</h3>
                </div>
            </div><br>
            <div class="row">
                <div class="message-box"> @if(session('lang')=='en')
                    <h4>1. Marketing System</h4><br>
                    <h5>Marketing Campaigns:</h5>
                    <p>The system allows you to create marketing campaigns following it through reports. </p>
                    <h5>Leads:</h5>
                    <p>It can identify new and registered customers.as well as showing their data, observations or previous requests.</p>@endif
                </div>
            </div>
            <div class="row">
                <div class="message-box">@if(session('lang')=='en')
                    <h4>2. Sales System</h4>
                    <p>The system allows you to add your business products and services as well as creating quotes and send them directly to customers. </p>@endif
                </div>
            </div>
            <div class="row">
                <div class="message-box">@if(session('lang')=='en')
                    <h4>3. Store System</h4>
                    <p>Managing stored items in codes , location for easily reach as well as incoming and outcoming products according to availabilty, quantities and vendors to facilate inventory It adds more to your wharehouse work as you can easily add products , services and send purchase orders to your clients.</p>@endif
                </div>

            </div>
            <div class="row">
                <div class="message-box">@if(session('lang')=='en')
                    <h4>4. Support System</h4>
                    <p>Support cards are linked directly to contacts; here customer complaints and suggestions are saved for easy handling ; you can easily create support ticket cards or the system do it automaticlly , notify your customer with a SMS with your senderID. </p>@endif
                </div>

            </div>
            <div class="row">
                <div class="message-box">@if(session('lang')=='en')
                    <h4>5. Short Message Service SMS</h4>
                    <P>By Using Short Message Service SMS you can send notifying SMS and track tickets with your own Sender ID. </P>@endif
                </div>
            </div>
            @if(session('lang')=='ar')
            <div class="row text-right">
                <div class="message-box">
                    <h2>مميزات العمل باستخدام نظام إدارة علاقات العملاء</h2>
                    <p><ul>
                        <li> تحسين أداء أقسام خدمة العملاء، والتسويق، والمبيعات داخل الشركة• 
                        </li>
                        <li>المساعدة في إطلاق حملات تسويقية ناجحة من خلال ما يتم جمعه من بيانات عن العملاء• 
                        </li>
                        <li> التواصل بشكل أفضل مع العميل وبالتالي معرفة رغباته واحتياجاته وأنماط الشراء لديه• 
                        </li>
                        <li> الترابط بين الإدارات المختلفة داخل الشركة الواحدة مما يسهل مسار العمل ويساعد في تحسين أداء الشركة•  بوجه عام
                        </li>
                        
                    </ul></p>
                </div>

            </div>
            @endif

            
        </div><!-- end container -->
     
        
    </div><!-- end section -->
    <div id="services" class="section lb">@if(session('lang')=='en')

    <div class="container">
        <div class="section-title text-center">
            <h3>CRM Tools</h3>
           
        </div>
        <div class="row">
            <div class="col-md-6"> 
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </div>
                    <h2> Hide and show fields</h2>
                    <p>This feature enables you to hide and show some fields
                        Based on certain choices, for example, if you had a group
                        Fields to be filled in if the customer’s request is a complaint
                        All fields not related to the complaint will disappear
                        Automatically, which makes it easier for the work team to deal with
                        orders faster.</p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <h2>Internal Email System</h2>
                    <p>It is an email system that keeps you away from all other programs such as Outlook, through which you can send and receive emails, save
                        Customer data directly on the system and many of the
                        Other features.</p><br><br>

                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-book" aria-hidden="true"></i>
                    </div>
                    <h2>Reports</h2>
                    <p>You can create an infinite number of reports in a very easy way with
                        The possibility of linking reports and creating them automatically every 24 hours, for example.</p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <h2>Email Forms</h2>
                    <p>You can create ready-made forms for emails to make it easier for me
                        The work team is the process of communicating with customers and even with management.</p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div>
                    <h2>Full Control Of The Powers</h2>
                    <p>The system contains an entire section for users
                        And groups and powers from which you can create
                        Certain powers of the work team and you can control the smallest
                        Details even with regard to the field for itself in terms of
                        The ability to modify certain fields or view certain fields
                        Just and so.</p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                    </div>
                    <h2>Web Forms</h2>
                    <p>It allows you to open a channel to communicate with others through the website And they are model that are designed on the system and then are done Put it on any website or any link you want so that when you fill it out This form will transfer the form data to the system directly.</p><br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                    </div>
                    <h2>Filter Feature</h2>
                    <p>This feature allows the possibility of dividing customers or dividing
                        Support tickets for several categories, for example, all open tickets
                        It is added in a filter and closed tickets are added
                        In another filter, which facilitates the search process.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                    </div>
                    <h2>Connect With SMS</h2>
                    <p>The ability to send short messages, either automatically or manually.</p><br><br><br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <h2>Contacts</h2>
                    <p>Through it, customer data is saved and filled in, including names and numbers Phones and any other information.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                    </div>
                    <h2>Dashboard</h2>
                    <p>It is a divided screen that shows you the latest customers and orders
                        And others with the ability to specify what you want to be displayed.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-ticket" aria-hidden="true"></i>
                    </div>
                    <h2>Technical Support Tickets</h2>
                    <p>With it, customer requests are saved from complaints, suggestions and any requests Others are directly related to contacts.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                    <h2>Calendar</h2>
                    <p>Meeting schedule and to-do list with the ability to remind you of an appointment Via text messages or emails.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-file" aria-hidden="true"></i>
                    </div>
                    <h2>The Documents</h2>
                    <p>Storing all files that are uploaded to the system with the ability to
                        Easily divided and managed.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-recycle" aria-hidden="true"></i>
                    </div>
                    <h2>Recycle Bin</h2>
                    <p>Store deleted files from the system and no one can
                        Permanently deletes it from the system, and no one has the authority to do so.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                    </div>
                    <h2>Information Bank</h2>
                    <p>It creates your own FAQ system
                        It is easy for employees, work team, and even new ones
                        Know all about how to deal with customer requests.</p><br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-signal" aria-hidden="true"></i>
                    </div>
                    <h2>Workflow</h2>
                    <p>Through it, all the automatic processes that you do not need are created To human intervention such as sending SMS text messages And emails, follow-up requests and reminders, and many more.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <h2>Link With Email</h2>
                    <p>You can send an unlimited number of emails to all customers
                        And even circulated among the work team.</p>
                </div>
            </div>
        </div>

    </div>@endif
    </div>
    <div id="services" class="section lb">@if(session('lang')=='ar')

        <div class="container">
            <div class="section-title text-center">
                <h3>الادوات الخاصة بنظام ادارة علاقات العملاء</h3>
               
            </div>
            <div class="row">
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </div>
                        <h2>إخفاء وإظهار الحقول</h2>
                        <p>تمــكنك هــذه الخــاصيه من اخفاء بعض الحقول واظهارها
                            بنـــاء على اخـــتيارات معينه فمثلا لو كان لديك مـــجموعه
                            حقول يتم تعبئتها في حال كان طلب العميل هو شكوى
                            فـــان جــميع الــحقول الــغير مــتعلقه بالشكوى ستختفي
                            تــلقائيا مــما يــسهل علــى فــريق الــعمل الــتعامل مـــع
                            الطلبات بشكل اسرع.</p>
    
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <h2>نظام البريد الإلكتروني الداخلي</h2>
                        <p>وهو نظام بريد الكتروني يغنيك عن جميع البرامج الاخرى مثل
                            اوتلــوك فمن خلاله تستطــيع ارسال واستقبال الايميلات حفظ
                            بيـــانات العــــميل بشـــكل مــباشر على النظام والعــــديد من
                            المميزات الاخرى.</p><br><br>
    
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                        <h2>التقارير</h2>
                        <p>يمكنك انشاء عدد لا نهائي من التقارير بطريقه سهله جدا مع
                            امــكانيه ربط الــتقارير وانشــائها تلــقائيا كــل 24 ســاعه مـــثلآ</p>
    
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <h2>نماذج البريد الإلكتروني</h2>
                        <p>يمكن يمكنك إنشاء نماذج جاهزه للايميلات تسهل على
                            فريق العمل عمليه التواصل مع العملاء و حتى مع الاداره.</p>
    
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </div>
                        <h2>التحكم الكامل بالصلاحيات</h2>
                        <p>يحتوي النظام على قسم كامل خاص بالمستخدمين
                            والمجموعات والصلاحيات من خلالها يمكنك انشاء
                            صلاحيات معينه لفريق العمل ويمكنك التحكم باصغر
                            الــتفاصيل حتى بمـا يتعلق بالــحقل لــنفسه من ناحـيه
                            امكانيه تعديل حقول معينه او مشاهده حقول معينه
                            فقط وهكذا.</p>
    
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                        </div>
                        <h2>نماذج الويب</h2>
                        <p>يتيح لك فتح قناه تواصل بخري من خلال الموقع الالكترونى
                            و هــي عباره عن نماذج يتــم تصميمها على النظام ثم يتم
                            وضعها على اي موقع او اي رابط ترغب بها بحيث عند تعبئه
                            هذا النموذج سيتم نقل بيانات النموذج الى النظام مباشره.</p><br>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-filter" aria-hidden="true"></i>
                        </div>
                        <h2>خاصية الفلترة</h2>
                        <p>تـتيح هذه الخاصيه امـكانيه تقسيم العملاء او تقسيم
                            تذاكـر الدعم لعده فئات فمثلا جميع التذاكر المفتوحه
                            يتم اضافتها فى فلتر والتذاكر المغلقه تتم اضـــافتها
                            فى فلتر اخر مما يسهل عمليه البحث</p>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </div>
                        <h2>الربط مع الرسائل النصية القصيرة
                        </h2>
                        <p> امكانيه ارسال رسائل قصيره سواء بشكل تلقائي او يدوي.

                        </p><br><br><br>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <h2>جهات الاتصال</h2>
                        <p>ومــن خـــلاله يتم حفظ وتعبئه بـــيانات العملاء من اسماء و ارقام
                            و هواتف و اي معلومات اخرى.</p>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                        </div>
                        <h2>لوحة المعلومات
                        </h2>
                        <p>عباره عن شاشه مقسمه تعرض لك احدث العملاء والطلبات
                            وغيرها مع امكانيه تحديد ما ترغب ان يتم عرض بها.</p>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                        </div>
                        <h2>تذاكر الدعم الفني</h2>
                        <p>وبه يتم حفظ طلبات العملاء من شكاوى واقتراحات و اي طلبات
                            اخرى وتكون مرتبطه مباشره بجهات الاتصال.</p>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <h2>التقويم</h2>
                        <p>جدول الاجتماعات و قائمه المهام مع امكانيه التذكير بموعد ما
                            عن طريق رسائل نصيه او ايميلات.</p>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-file" aria-hidden="true"></i>
                        </div>
                        <h2>المستندات</h2>
                        <p>تخزين جميع الملفات التي يتم رفعها على النظام مع امكانيه
                            تقسيمها وإدارتها بسهوله.</p>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-recycle" aria-hidden="true"></i>
                        </div>
                        <h2>سلة المحذوفات</h2>
                        <p>تـخزين الملفات المحذوفه من النظام ولا يستطيع احد ان
                            يحــذفها نهائيا من النظام لا من يملك الصلاحيات لذلك.</p>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </div>
                        <h2>بنك المعلومات</h2>
                        <p>ويتم من خلاله انشاء نظام الأسئلة الشائعة الخاص بك مما
                            يسهل على الموظفين وفريق العمل وحتى المستجد منهم
                            معرفه جميع ما يتعلق ب كيفيه التعامل مع طلبات العملاء.</p><br>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-signal" aria-hidden="true"></i>
                        </div>
                        <h2>الورك فلو
                        </h2>
                        <p>من خلاله يتم انشاء جميع العمليات التلقائية التي لا تحتاج
                            الى تدخل بشرى مثل ارسال الرسائل النصية القصيرة
                            والايميلات ومتابعه الطلبات والتذكير بها وغيره الكثير.</p>
                    </div>
                </div>
                <div class="col-md-6">@if(session('lang')=='ar')
                    <div class="services-inner-box text-right">@endif
                        <div class="ser-icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <h2>الربط مع البريد الالكتروني</h2>
                        <p>يمكنك من ارسال عدد لا نهائي من الايميلات لجميع العملاء
                            وحتى تداولها بين فريق العمل.</p>
                    </div>
                </div>
            </div>
    
        </div>@endif
        </div>
























    
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