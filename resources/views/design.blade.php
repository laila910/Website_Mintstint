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
			<h1>@if(session('lang')=='en')Designing and Creating Websites and E-stores @endif
            @if(session('lang')=='ar')تصميم وانشاء المواقع والمتاجر الالكترونية
           @endif</h1>			
			<h3 class="cd-headline clip is-full-width">
				
			</h3>
		</div>
	</section>

    <div class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/zoomdesign.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='en')Designing and Creating Websites and E-stores @endif
                        @if(session('lang')=='ar') تصميم وانشاء المواقع والمتاجر الالكترونية @endif</h2>
                        <p>@if(session('lang')=='en')It has now become necessary to have an attractive and smart website design as well as a complete control panel to control and manage all the contents of the website from images, texts, videos and other website contents, as the website plays an important and essential role in providing the policies, services and products provided by the company to customers.<br><br> We are distinguished by providing web design and web development with the best designs and techniques, which makes your website smart, easy and attractive to your customers with a very easy control panel to control the contents of the site and professional site management, which makes your customers benefit from the work you offer through your website.<br><br> We have experience, which makes us one of the best web design companies by providing our services to a large number of our customers, as a result of gaining the confidence of our customers in performing our work in the best ways and the best technologies.<br><br> We offer the required diversity of website designs and website development, whether it is a diversity in design, in the way of display, or colors, or even in the development of programming languages for websites and the permanent excellence of each client separately so that your website is completely different from any other company, which gives a character Smart and personalized for your website. @endif @if(session('lang')=='ar')<p class="text-right">لقد أصبح الآن من الضرورى ان تمتلك تصميم موقع انترنت جذاب وذكى وأيضا لوحة تحكم كاملة للتحكم وإدارة جميع محتويات الموقع من صور ونصوص وفيديوهات وغيرها من محتويات موقع الانترنت، حيث ان موقع الانترنت يلعب دورا هاما وأساسيا فى تقديم السياسات والخدمات والمنتجات المقدمة من قبل الشركة للعملاء <br> نتميز بتقديم تصميم مواقع الانترنت وتطوير مواقع الانترنت بأفضل التصاميم والتقنيات مما يجعل موقع الانترنت الخاص بك ذو طابع ذكى وسهل وجذاب لعملائك مع لوحة تحكم سهلة جدا للتحكم فى محتويات الموقع وادارة الموقع الاحترافية مما يجعل عملائك يستفيدون بما تقدمه من أعمال عبر موقع الانترنت الخاص بك. <br> لدينا من الخبرات ما يجعلنا من أفضل شركات تصميم مواقع الانترنت بتقديم خدماتنا لعدد ضخم من عملائنا وذلك ناتج من كسب ثقة عملائنا فى اداء أعمالنا بافضل الطرق وأفضل التقنيات. <br>
                             نقدم التنوع المطلوب من تصميمات مواقع الانترنت وتطوير مواقع الانترنت سواء كان تنوع فى التصميم أو فى طريقة العرض أو الألوان أو حتى فى تطوير لغات البرمجة الخاصة بالمواقع والتميز الدائم لكل عميل على حدة بحيث يكون موقع الانترنت الخاص بك مختلف تمام عن اى شركة اخرى مما يعطى طابع ذكي وخاص لموقعك الإلكترونى. </p> @endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                
            </div><!-- end row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='en')Design Your Online Store @endif
                        @if(session('lang')=='ar')  
                        لماذا تحتاج لتصميم متجرك الإلكتروني؟@endif</h2>
                        <p>@if(session('lang')=='en') The best solution to increase your sales and profits through e-commerce and online selling is to design your e-store, and the e-store design includes all the means and tools that help you display your company’s products and start the sales process.<br>Mintstint is the best e-store design and creation company, where we offer you a professional integrated store that provides you with unique and innovative solutions that make you manage the sales process with complete ease that helps increase sales traffic.<br>You can display thousands of products in your store while ensuring the efficiency of the online store’s work and the speed of browsing, which makes it easier for companies, institutions and factories to manage inventory, link to the company’s system, and receive and manage incoming requests.@endif 
                        @if(session('lang')=='ar')<p class="text-right">الحل الافضل لزيادة مبيعاتك وأرباحك من خلال التجارة الالكترونية والبيع من خلال الإنترنت هو تصميم متجرك الالكتروني، ويشمل تصميم المتجر الإلكتروني كل الوسائل والادوات التي تساعدك لعرض منتجات شركتك وبدأ عملية البيع.<br>وتعد شركة مينت ستنت أفضل شركة تصميم وإنشاء المتاجر الإلكترونية حيث نقدم لك متجر متكامل احترافي يوفر لك حلول فريدة ومبتكرة تجعلك تدير عملية البيع بسهولة تامة التي تساعد على زيادة حركة البيع. <br>يمكنك عرض ألاف المنتجات فى متجرك مع ضمان كفاءة عمل المتجر الإلكتروني وسرعة التصفح والتى تسهل للشركات والمؤسسات والمصانع إدارة المخزون والربط بنظام الشركة وإستقبال وإدارة الطلبات الواردة.</p>  @endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/design1.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                
            </div><!-- end row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='en')The Importance of designing your online Store @endif
                        @if(session('lang')=='ar')اهمية تصميم متجرك الالكتروني
                        @endif</h2>
                        <p>@if(session('lang')=='en')If your goal is to work in the field of e-commerce, then you have certainly witnessed many advantages of the online store, as it easily offers services and thousands of products in an interesting way.<br>And with the increase of distinguished programming companies specialized in creating electronic stores. E-stores are working to attract the largest number of target customers, regardless of country borders.<br>Where customers can view hundreds of products at any time without the need to travel. Because online stores operate 24 hours a day. It also saves time, money and effort. With the ease of comparing products and services and choosing the best.@endif
                        @if(session('lang')=='ar')<p class="text-right"> إذا كان هدفك العمل في مجال التجارة الالكترونية فبالتأكيد شهدت العديد من مميزات المتجر الالكتروني فهي تقدم بسهولة عرض الخدمات وآلاف المنتجات بطريقة مشوقة.<br>ومع زيادة شركات البرمجة المتميزة المتخصصة في إنشاء المتاجر الالكترونية. فالمتاجر الالكترونية تعمل على جذب أكبر عدد من العملاء المستهدفين دون اعتبار لحدود الدول. <br> حيث يمكن للعملاء مشاهدة المئات من المنتجات في أي وقت دون الحاجة للسفر. لان المتاجر الالكترونية تعمل على مدار 24 ساعة. كما توفير الوقت والمال والمجهود. مع سهولة المقارنة بين المنتجات والخدمات واختيار الافضل. </p> @endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/design2.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                
            </div><!-- end row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='en')How To manage Online Stores @endif
                        @If(session('lang')=='ar') كيفية ادارة المتاجر الالكترونية
                        @endif</h2>
                        <p>@if(session('lang')=='en')1.Providing products, goods or services.<br>2.Add products, photos, and set prices.<br>3.Determine ways to collect payments in the store.<br>4.Bringing the best products from the best suppliers.<br>5.Handling storage, shipping, delivery and returns issues.<br>6.Follow-up and customer support via phone – e-mail – chat.<br>7.Managing customer service staff.@endif 
                        @if(session('lang')=='ar')<p class="text-right"> توفير المنتجات او السلع او الخدمات.<br> إضافة المنتجات والصور وتحديد الأسعار.<br> تحديد طرق تحصيل المدفوعات في المتجر.<br> جلب أفضل المنتجات من أفضل الموردين. <br> معالجة قضايا التخزين والشحن والتوصيل والمرتجعات.<br>متابعة ودعم العملاء عبر الهاتف – الايميل-الشات.<br> إدارة موظفي خدمة العملاء. </p>@endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/design3.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                
            </div><!-- end row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='en')The Most Important Features of the online Store @endif
                        @If(session('lang')=='ar') أهم مميزات المتجر الالكتروني
                        @endif</h2>
                       
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                
            </div><!-- end row -->
            <div class="row">
               
                <div class="col-md-3">
                    <div class="message-box">                        
                        <h3>@if(session('lang')=='en') Professional Control Panel @endif
                        @if(session('lang')=='ar')<h3 class="text-right"> لوحة تحكم إحترافية
                        </h3>@endif</h3>
                        <p>@if(session('lang')=='en')Help You manage and control the online store. add products. follow up orders,and view reports.@endif 
                        @if(session('lang')=='ar')<p class="text-right"> تساعدك على ادارة والتحكم فى المتجر الالكترونى واضافة المنتجات ومتابعة الطلبات وعرض التقارير.</p> @endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/1.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
               
                <div class="col-md-3">
                    <div class="message-box">                        
                        <h3>@if(session('lang')=='en')Responsive Design @endif
                            @if(session('lang')=='ar')<h3 class="text-right">تصميم متجاوب
                            </h3> @endif</h3>
                        <p> @if(session('lang')=='en')Attractive and professional Responsive Web Design compatible and responsive with all different devices. @endif
                            @if(session('lang')=='ar')<p class="text-right"> تصميم جذاب واحترافي متجاوب ومتوافق مع كافة الاجهزة المختلفة</p>@endif
                        </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/2.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
              

                
            </div><!-- end row -->
            <div class="row">
               
                <div class="col-md-3">
                    <div class="message-box">                        
                        <h3>@if(session('lang')=='en')Strong Protection @endif 
                            @if(session('lang')=='ar')<h3 class="text-right"> 
                                حماية قوية </h3> @endif</h3>
                        <p>@if(session('lang')=='en')Fully Secure Your Online Store for Data and Protection from Hacking.@endif
                            @if(session('lang')=='ar')<p class="text-right"> تأمين متجرك الإلكتروني بشكل كامل للداتا وحماية من الاختراق.</p> @endif
                       </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/3.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
               
                <div class="col-md-3">
                    <div class="message-box">                        
                        <h3>@if(session('lang')=='en')Marketing Basket @endif
                            @if(session('lang')=='ar')<h3 class="text-right"> سلة التسويق
                            </h3>@endif </h3>
                        <p>@if(session('lang')=='en')The shopping Cart System(shopping cart) allows the visitor to add products to buy later.@endif @if(session('lang')=='ar')<p class="text-right"> نظام سلة التسوق (عربة التسوق) تتيح للزائر اضافة المنتجات للشراء لاحقا. </p>@endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/4.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
              

                
            </div><!-- end row -->
            <div class="row">
               
                <div class="col-md-3">
                    <div class="message-box">                        
                        <h3>@if(session('lang')=='en')Offering System @endif 
                            @if(session('lang')=='ar')<h3 class="text-right">نظام العروض
                            </h3>@endif</h3>
                        <p>@if(session('lang')=='en')Add Discounts and offers on products for a limited time. in addition to coupons.@endif @if(session('lang')=='ar')<p class="text-right">اضافة خصومات وعروض على المنتجات لفترة محدودة بالإضافة للكوبونات.</p> @endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/5.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
               
                <div class="col-md-3">
                    <div class="message-box">                        
                        <h3>@if(session('lang')=='en')A system For Tracking Orders. Shipping and Returning Products.@endif 
                            @if(session('lang')=='ar')<h3 class="text-right"> نظام متابعة الطلبات والشحن وإرجاع المنتجات 
                                @endif</h3></h3>
                        <p>@if(session('lang')=='en')Number of sales, total value of orders, numbser of customers. number of ready orders, orders under processing, number of received and canceled orders.@endif 
                            @if(session('lang')=='ar')<p class="text-right"> عدد المبيعات وإجمالي قيمة الطلبات وعدد العملاء وعدد الطلبات الجاهزة والطلبات تحت التجهيز وعدد الطلبات المستلمة والملغاة ..

                            </p> @endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/6.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
              

                
            </div><!-- end row -->
            <div class="row">
               
                <div class="col-md-3">
                    <div class="message-box">                        
                        <h3>@if(session('lang')=='en')General Settings @endif
                            @if(session('lang')=='ar')<h3 class="text-right"> إعدادات عامة
                            </h3>@endif</h3>
                        <p>@if(session('lang')=='en')An account for each customer that allows him to add and purchase orders, follow up on their arrival and return, and communicate with the site.@endif 
                            @if(session('lang')=='ar')<p class="text-right"> حساب لكل عميل يتيح له اضافة الطلبات وشراءها ومتابعة وصولها وارجاعها والتواصل مع الموقع.

                            </p> @endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/7.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
               
                <div class="col-md-3">
                    <div class="message-box">                        
                        <h3>@if(session('lang')=='en')Customer Service @endif 
                            @if(session('lang')=='ar')<h3 class="text-right"> خدمة العملاء
                            </h3> @endif</h3>
                        <p>@if(session('lang')=='en') The chat and technical support system works to follow up on solving problems for your customers (Live Chat).@endif 
                            @if(session('lang')=='ar')<p class="text-right"> نظام الشات والدعم الفني يعمل على متابعة حل المشكلات ( Live Chat ) لعملائك  </p>@endif</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="left-box-pro wow fadeIn">
                        <img src="assets/uploads/8.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
              

                
            </div><!-- end row -->
            <div class="row">
               
                <div class="col-md-12">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='en')Technical Details of The Online Store @endif
                            @if(session('lang')=='ar')<h2 class="text-right"> التفاصيل الفنية للمتجر الالكتروني
                            </h2> @endif
                        </h2>
                        <p>
                            @if(session('lang')=='en')<ul>
                                <li>1.Attractive and Professional Responsive Web Design, Compatible and responsive with all computers and mobile devices.</li>
                                <li>2.Add your social networking sites to the store.</li>
                                <li>3.The Most Important Pages within the online stores (home-store-brands-special offers-blog-contact us).</li>
                                <li>4.Add an infinite number of products with all product details, including product name,pictures,price,quantity,display Date and discounts.</li>
                                <li>5.The Posibility of adding more than one main or sub-section or more than one sub-section and then the products.</li>
                                <li>6.The User can search for products and add the desired products to buy them later.</li>
                                <li>7.Add discounts and offers on products for a limited time, in addition to coupons</li>
                                <li>8.Extract invoices or send them via e-mail.</li>
                                <li>9.Strong and complete protection of online store files and comprehensive encryption of passwords and user information.</li>
                                <li>10.The possibility of controlling members and managers and giving powers to each of them.
                                </li>
                                <li>11.The control panel helps you to modify all the features and features of the entire store easily.
                                </li>
                                <li>12.Send messages to all subscribers per site or a specific category by mail.
                                </li>
                                <li>13.Adding the shipping cost automatically to the purchase invoice according to the country and weight or number of the store control panel.
                                </li>
                                <li>14.Orders, shipping and product returns system.
                                </li>
                                <li>15.Site pages are compatible with search engines and SEO and store site map for quick archiving.
                                </li>
                                <li>16.Direct chat system with customers within the site (Live Chat).
                                </li>
                                <li>17.Comprehensive statistics and reports within the control panel, the most important products, orders, sales, invoices, and the most requested or purchased products.
                                </li>
                                <li>18.The ability to support several languages, several currencies, and specify the default currency for the store.
                                </li></ul>
                            @endif
                            @if(session('lang')=='ar') 
                            <ul class="text-right">
                                <li>تصميم جذاب واحترافي ومتوافق ومتجاوب مع كافة الاجهزة الكمبيوتر والموبايلات</li>
                                <li>اضافة مواقع التواصل الاجتماعي الخاصة بك على المتجر.
                                </li>
                                <li>أهم الصفحات داخل المتجر الإلكتروني (الرئيسية – المتجر – ماركات – عروض مميزة – المدونة – اتصل بنا).
                                </li>
                                <li> اضافة عدد لانهائى من المنتجات بكافة تفاصيل المنتج يحتوي على اسم المنتج والصور والسعر والكمية وتاريخ عرضه والخصومات .
                                </li>
                                <li>إمكانية اضافة أكتر من قسم رئيسى أو فرعى أو اكتر من قسم فرعى ثانوى ثم المنتجات.
                                </li>
                                <li>يمكن للمستخدم البحث عن المنتجات واضافة المنتجات المرغوبة لشرائها لاحقا .
                                </li>
                                <li> اضافة خصومات وعروض على المنتجات لفترة محدودة بالاضافة للكوبونات.
                                </li>
                                <li>استخراج الفواتير أو إرسالها عبر البريد الإلكتروني.
                                </li>
                                <li>حماية قوية وكاملة لملفات المتاجر الإلكترونية وتشفير شامل لكلمات المرور ومعلومات المستخدمين.
                                </li>
                                <li>إمكانية التحكم في الاعضاء والمديرين واعطاء صلاحيات لكل منهم.
                                </li>
                                <li>لوحة التحكم تساعدك في التعديل في كل خصائص ومميزات المتجر بالكامل بسهولة.
                                </li>
                                <li>إرسال رسائل لجميع لكل مشتركين الموقع أو فئة معينة عن طريق البريد.
                                </li>
                                <li>إضافة تكلفة الشحن أتوماتيكي لفاتورة الشراء علي حسب البلد والوزن او العدد من لوحة تحكم المتجر.
                                </li>
                                <li> نظام الطلبات والشحن وارجاع المنتجات.
                                </li>
                                <li>صفحات الموقع متوافقه مع محركات البحث وخريطة موقع للمتجر للارشفه السريعه</li>
                                <li> نظام المحادثة المباشر مع العملاء داخل الموقع.
                                </li>
                                <li>احصائيات وتقارير شاملة داخل لوحة التحكم أهم المنتجات والطلبات والمبيعات والفواتير وأكثر المنتجات طلبا أو شراء.
                                </li>
                                <li>إمكانية دعم عدة لغات وعدة عملات وتحديد العملة الافتراضية للمتجر.
                                </li>

                            </ul>

                            @endif
                        
                           
                        </p>
                    </div><!-- end messagebox -->
                </div><!-- end col --> 
            </div><!-- end row -->
            <div class="row">
               
                <div class="col-md-12">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='en')The Most Popular And WideSpread Online Stores @endif
                        @if(session('lang')=='ar') <h2 class="text-right">المتاجر الإلكترونية الاكثر رواجآ وإنتشارآ
                        </h2> @endif</h2>
                        <p>@if(session('lang')=='en')
                            <ul>
                                <li>1.Tourist website design.
                                </li>
                                <li>2.Website design for a real estate company.</li>
                                <li>3.Online store design for women’s clothing.
                                </li>
                                <li>4.Clothing store design.
                                </li>
                                <li>5.Website design for a car showroom.
                                </li>
                                <li>6.Website design for a contracting company.
                                </li>
                           </ul>
                           @endif
                           @if(session('lang')=='ar')
                           <ul class="text-right">
                               <li>تصميم موقع سياحي.
                            </li>
                            <li>تصميم موقع لشركة عقارات.
                            </li>
                            <li>تصميم متجر إلكتروني لبيع ملابس نسائية.
                            </li>
                            <li>تصميم متجر ملابس.
                            </li>
                            <li>تصميم موقع لمعرض سيارات.
                            </li>
                            <li>تصميم موقع إلكتروني لشركة مقاولات.
                            </li>

                           </ul>
                           @endif
                        </p>
                    </div><!-- end messagebox -->
                </div><!-- end col --> 
            </div><!-- end row -->
            <div class="row">
               
                <div class="col-md-12">
                    <div class="message-box">                        
                        <h2>@if(session('lang')=='en') How Much Are The Online Store Prices?@endif 
                        @if(session('lang')=='ar') <h2 class="text-right">كم أسعار المتجر الإلكتروني؟
                        </h2> @endif</h2>
                        <p> @if(session('lang')=='en') 
                            The prices of  E-stores vary according to the field of the online store, the type of programming, and the specifications and features of the store, as they differ from one e-store programming company to another.
                        @endif
                        @if(session('lang')=='ar') <p class="text-right">تختلف أسعار المتاجر الإلكترونية حسب مجال المتجر الإلكتروني ونوع البرمجة ومواصفات ومميزات المتجر فهي تختلف من شركة برمجة متاجر إالكترونية لاخرى.

                        </p> @endif
                        </p>
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