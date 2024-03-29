<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#2B2B35">
    <!-- favicon  -->
    <link rel="shortcut icon" href="{{ asset('./img/thumbnail.ico') }}" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('./css/plugins/bootstrap.min.css') }}">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{ asset('./css/plugins/font-awesome.min.css') }}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('./css/plugins/swiper.min.css') }}">
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{ asset('./css/plugins/fancybox.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">

    <title>Arter</title>

</head>

<body class="antialiased">
    <!-- app -->
    <div class="art-app">

        <!-- mobile top bar -->
        <div class="art-mobile-top-bar"></div>

        <!-- app wrapper -->
        <div class="art-app-wrapper">

            <!-- app container end -->
            <div class="art-app-container">

                <!-- info bar -->
                <div class="art-info-bar">

                    <!-- menu bar frame -->
                    <div class="art-info-bar-frame">

                        <!-- info bar header -->
                        <div class="art-info-bar-header">
                            <!-- info bar button -->
                            <a class="art-info-bar-btn" href="#.">
                                <!-- icon -->
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <!-- info bar button end -->
                        </div>
                        <!-- info bar header end -->

                        <!-- info bar header -->
                        <div class="art-header">
                            <!-- avatar -->
                            <div class="art-avatar">
                                <a data-fancybox="avatar" href="img/face-1.jpg" class="art-avatar-curtain">
                                    <img src="img/face-1.jpg" alt="avatar">
                                    <i class="fas fa-expand"></i>
                                </a>
                                <!-- available -->
                                <div class="art-lamp-light">
                                    <!-- add class 'art-not-available' if not available-->
                                    <div class="art-available-lamp"></div>
                                </div>
                            </div>
                            <!-- avatar end -->
                            <!-- name -->
                            <h5 class="art-name mb-10"><a href="/home.html">Gitonga Mwaura</a></h5>
                            <!-- post -->
                            <div class="art-sm-text">Senior Software Engineer <br>7+ Years </div>
                        </div>
                        <!-- info bar header end -->

                        <!-- scroll frame -->
                        <div id="scrollbar2" class="art-scroll-frame">

                            <!-- info bar about -->
                            <div class="art-table p-15-15">
                                <!-- about text -->
                                <ul>
                                    <!-- country -->
                                    <li>
                                        <h6>Residence:</h6><span>Kenya</span>
                                    </li>
                                    <!-- city -->
                                    <li>
                                        <h6>City:</h6><span>Nairobi</span>
                                    </li>
                                    <!-- age -->
                                    <li>
                                        <h6>Coffee:</h6><span>Yes</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- info bar about end -->

                            <!-- divider -->
                            <div class="art-ls-divider"></div>

                            <!-- language skills -->
                            <div class="art-lang-skills p-30-15">

                                <!-- skill -->
                                <div class="art-lang-skills-item">
                                    <div id="circleprog1" class="art-cirkle-progress"></div>
                                    <!-- title -->
                                    <h6>Swahili</h6>
                                </div>
                                <!-- skill end -->

                                <!-- skill -->
                                <div class="art-lang-skills-item">
                                    <div id="circleprog2" class="art-cirkle-progress"></div>
                                    <!-- title -->
                                    <h6>English</h6>
                                </div>
                                <!-- skill end -->

                                <!-- skill -->
                                <div class="art-lang-skills-item">
                                    <div id="circleprog3" class="art-cirkle-progress"></div>
                                    <!-- title -->
                                    <h6>French</h6>
                                </div>
                                <!-- skill end -->

                            </div>
                            <!-- language skills end -->

                            <!-- divider -->
                            <div class="art-ls-divider"></div>

                            <!-- Backend skills -->
                            <div class="art-hard-skills p-30-15">

                                <!-- skill -->
                                <div class="art-hard-skills-item">
                                    <div class="art-skill-heading">
                                        <!-- title -->
                                        <h6>PHP</h6>
                                    </div>
                                    <!-- progressbar frame -->
                                    <div class="art-line-progress">
                                        <!-- progressbar -->
                                        <div id="lineprog1"></div>
                                    </div>
                                    <!-- progressbar frame end -->
                                </div>
                                <!-- skill end -->

                                <!-- skill -->
                                <div class="art-hard-skills-item">
                                    <div class="art-skill-heading">
                                        <!-- title -->
                                        <h6>Python</h6>
                                    </div>
                                    <!-- progressbar frame -->
                                    <div class="art-line-progress">
                                        <!-- progressbar -->
                                        <div id="lineprog2"></div>
                                    </div>
                                    <!-- progressbar frame end -->
                                </div>
                                <!-- skill end -->

                                <!-- skill -->
                                <div class="art-hard-skills-item">
                                    <div class="art-skill-heading">
                                        <!-- title -->
                                        <h6>Node Js</h6>
                                    </div>
                                    <!-- progressbar frame -->
                                    <div class="art-line-progress">
                                        <!-- progressbar -->
                                        <div id="lineprog3"></div>
                                    </div>
                                    <!-- progressbar frame end -->
                                </div>
                                <!-- skill end -->

                                <!-- skill -->
                                <div class="art-hard-skills-item">
                                    <div class="art-skill-heading">
                                        <!-- title -->
                                        <h6>PHP</h6>
                                    </div>
                                    <!-- progressbar frame -->
                                    <div class="art-line-progress">
                                        <!-- progressbar -->
                                        <div id="lineprog4"></div>
                                    </div>
                                    <!-- progressbar frame end -->
                                </div>
                                <!-- skill end -->

                                <!-- skill -->
                                <div class="art-hard-skills-item">
                                    <div class="art-skill-heading">
                                        <!-- title -->
                                        <h6>Wordpress</h6>
                                    </div>
                                    <!-- progressbar frame -->
                                    <div class="art-line-progress">
                                        <!-- progressbar -->
                                        <div id="lineprog5"></div>
                                    </div>
                                    <!-- progressbar frame end -->
                                </div>
                                <!-- skill end -->

                            </div>
                            <!-- language skills end -->

                            <!-- divider -->
                            <div class="art-ls-divider"></div>

                            <!-- Frontend skills -->
                            
                            <!-- divider -->
                            <div class="art-ls-divider"></div>

                            <!-- knowledge list -->
                            <ul class="art-knowledge-list p-15-0">
                                <!-- list item -->
                                <li>APIs</li>
                                <!-- list item -->
                                <li>IoT</li>
                                <!-- list item -->
                                <li>AWS</li>
                                <!-- list item -->
                                <li>Linux</li>
                                <!-- list item -->
                                <li>Git</li>
                                <!-- list item -->
                                <li>Docker</li>
                                  <!-- list item -->
                                <li>Automation</li>
                                <!-- list item -->
                                <li>Scripting</li>
                                
                            </ul>
                            <!-- knowledge list end -->

                            <!-- divider -->
                            <div class="art-ls-divider"></div>

                            <!-- links frame -->
                            <div class="art-links-frame p-15-15">

                                <!-- download cv button -->
                                <a href="files/cv.txt" class="art-link" download>Download cv <i
                                        class="fas fa-download"></i></a>

                            </div>
                            <!-- links frame end -->

                        </div>
                        <!-- scroll frame end -->

                        <!-- sidebar social -->
                        <div class="art-ls-social">
                            <!-- social link -->
                            <a href="#." target="_blank"><i class="far fa-circle"></i></a>
                            <!-- social link -->
                            <a href="#." target="_blank"><i class="far fa-circle"></i></a>
                            <!-- social link -->
                            <a href="#." target="_blank"><i class="far fa-circle"></i></a>
                            <!-- social link -->
                            <a href="#." target="_blank"><i class="far fa-circle"></i></a>
                            <!-- social link -->
                            <a href="#." target="_blank"><i class="far fa-circle"></i></a>
                        </div>
                        <!-- sidebar social end -->

                    </div>
                    <!-- menu bar frame end -->

                </div>
                <!-- info bar end -->

                <!-- content -->
                <div class="art-content">

                    <!-- curtain -->
                    <div class="art-curtain"></div>

                    <!-- top background -->
                    <div class="art-top-bg" style="background-image: url({{ asset('./img/bg.jpg') }})">
                        <!-- overlay -->
                        <div class="art-top-bg-overlay"></div>
                        <!-- overlay end -->
                    </div>
                    <!-- top background end -->

                    <!-- swup container -->
                    <div class="transition-fade" id="swup">

                        <!-- scroll frame -->
                        <div id="scrollbar" class="art-scroll-frame">

                            <!-- container -->
                            <div class="container-fluid">

                                <!-- row -->
                                <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                                    <!-- col -->
                                    <div class="col-lg-12">

                                        <!-- banner -->
                                        <div class="art-a art-banner" style="background-image: url({{ asset('./img/bg.jpg') }})">
                                            <!-- banner back -->
                                            <div class="art-banner-back"></div>
                                            <!-- banner dec -->
                                            <div class="art-banner-dec"></div>
                                            <!-- banner overlay -->
                                            <div class="art-banner-overlay">
                                                <!-- main title -->
                                                <div class="art-banner-title">
                                                    <!-- title -->
                                                    <h2 class="mb-15">Changing the World with <br>Each Line Of Code.....</h2>
                                                    <!-- suptitle -->
                                                    <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; I build
                                                        <span class="txt-rotate" data-period="2000"
                                                            data-rotate='[ "great websites.", "web applications.", "bespoke software.", "modern web applications.", "great teams.", "automation tools." ]'></span>&lt;/<i>code</i>&gt;
                                                    </div>
                                                    <div class="art-buttons-frame">
                                                        <!-- button -->
                                                        <a href="/portfolio-3-col-masonry.html"
                                                            class="art-btn art-btn-md"><span>Explore Portfolio</span></a>
                                                    </div>
                                                </div>
                                                <!-- main title end -->
                                                <!-- photo -->
                                                <img src="img/face-2.png" class="art-banner-photo" alt="Gitonga Mwaura">
                                            </div>
                                            <!-- banner overlay end -->
                                        </div>
                                        <!-- banner end -->

                                    </div>
                                    <!-- col end -->
                                </div>
                                <!-- row end -->

                            </div>
                            <!-- container end -->

                            <!-- container -->
                            <div class="container-fluid">

                                <!-- row -->
                                <div class="row p-30-0">

                                    <!-- col -->
                                    <div class="col-md-3 col-6">

                                        <!-- couner frame -->
                                        <div class="art-counter-frame">
                                            <!-- counter -->
                                            <div class="art-counter-box">
                                                <!-- counter number -->
                                                <span class="art-counter">6</span><span
                                                    class="art-counter-plus">+</span>
                                            </div>
                                            <!-- counter end -->
                                            <!-- title -->
                                            <h6>Years Experience</h6>
                                        </div>
                                        <!-- couner frame end -->

                                    </div>
                                    <!-- col end -->

                                    <!-- col -->
                                    <div class="col-md-3 col-6">

                                        <!-- couner frame -->
                                        <div class="art-counter-frame">
                                            <!-- counter -->
                                            <div class="art-counter-box">
                                                <!-- counter number -->
                                                <span class="art-counter">60</span><span
                                                    class="art-counter-plus">+</span>
                                            </div>
                                            <!-- counter end -->
                                            <!-- title -->
                                            <h6>Completed Projects</h6>
                                        </div>
                                        <!-- couner frame end -->

                                    </div>
                                    <!-- col end -->

                                    <!-- col -->
                                    <div class="col-md-3 col-6">

                                        <!-- couner frame -->
                                        <div class="art-counter-frame">
                                            <!-- counter -->
                                            <div class="art-counter-box">
                                                <!-- counter number -->
                                                <span class="art-counter">40</span><span
                                                    class="art-counter-plus">+</span>
                                            </div>
                                            <!-- counter end -->
                                            <!-- title -->
                                            <h6>Happy Customers</h6>
                                        </div>
                                        <!-- couner frame end -->

                                    </div>
                                    <!-- col end -->

                                    <!-- col -->
                                    <div class="col-md-3 col-6">

                                        <!-- couner frame -->
                                        <div class="art-counter-frame">
                                            <!-- counter -->
                                            <div class="art-counter-box">
                                                <!-- counter number -->
                                                <span class="art-counter">999999</span><span
                                                    class="art-counter-plus">+</span>
                                            </div>
                                            <!-- counter end -->
                                            <!-- title -->
                                            <h6>Lines of code</h6>
                                        </div>
                                        <!-- couner frame end -->

                                    </div>
                                    <!-- col end -->

                                </div>
                                <!-- row end -->

                            </div>
                            <!-- container end -->

                            <!-- container -->
                            <div class="container-fluid">

                                <!-- row -->
                                <div class="row">

                                    <!-- col -->
                                    <div class="col-lg-12">

                                        <!-- section title -->
                                        <div class="art-section-title">
                                            <!-- title frame -->
                                            <div class="art-title-frame">
                                                <!-- title -->
                                                <h4>My Niches</h4>
                                            </div>
                                            <!-- title frame end -->
                                        </div>
                                        <!-- section title end -->

                                    </div>
                                    <!-- col end -->

                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">Backend Development</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    <!-- col end -->
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">Front End Development</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    
                                    <!-- col end -->
                                    <!-- col end -->   <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">Full Stack Development</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    
                                    <!-- col end -->
                                     
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">Systems Integration</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    
                                    <!-- col end -->
                                    <!-- col end -->  
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">Web Design</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                            
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    <!-- col end -->


                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">Wordpress</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>

                                    <!-- col end -->   <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">Databases</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    
                                    <!-- col end -->
                                    <!-- col end -->   <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">APIs</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    
                                    <!-- col end -->
                                   
                                     <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">Cloud Servers</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    
                                    <!-- col end -->
                                    <!-- col end -->   <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">Python Scripting</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    
                                    <!-- col end -->
                                    <!-- col end -->   <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">Chat Bots</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    
                                    <!-- col end -->
                                    <!-- col end -->   <!-- col -->
                                    <div class="col-lg-3 col-md-6">

                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">WhatsApp Bots</h5>
                                                <!-- text -->
                                                <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Delectus esse commodi deserunt vitae, vero quasi! Veniam
                                                    quaerat tenetur pariatur doloribus.</div>
                                               
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->

                                    </div>
                                    
                                    <!-- col end -->


                                </div>
                                <!-- row end -->

                            </div>
                            <!-- container end -->

                            <!-- container -->
                            <div class="container-fluid">

                                <!-- row -->
                                <div class="row p-0-0">

                                    <!-- col -->
                                    <div class="col-lg-12">

                                        <!-- section title -->
                                        <div class="art-section-title">
                                            <!-- title frame -->
                                            <div class="art-title-frame">
                                                <!-- title -->
                                                <h4>Price Plans</h4>
                                            </div>
                                            <!-- title frame end -->
                                        </div>
                                        <!-- section title end -->

                                    </div>
                                    <!-- col end -->

                                    <!-- col -->
                                    <div class="col-lg-4">

                                        <!-- price -->
                                        <div class="art-a art-price">
                                            <!-- price body -->
                                            <div class="art-price-body">
                                                <h5 class="mb-30">Consultation</h5>
                                                <!-- price cost -->
                                                <div class="art-price-cost">
                                                    <div class="art-number">FREE<sup>*</sup></div>
                                                </div>
                                                <!-- price cost end -->
                                                <!-- price list -->
                                                <ul class="art-price-list">
                                                    <!-- list item -->
                                                    <li>30 Minutes Call</li>
                                                    <!-- list item -->
                                                    <li>Free Site Audit</li>
                                                    <!-- list item -->
                                                    <li class="art-empty-item">Logo design</li>
                                                    <!-- list item -->
                                                    <li class="art-empty-item">SEO optimization</li>
                                                    <!-- list item -->
                                                    <li class="art-empty-item">Wordpress integration</li>
                                                </ul>
                                                <!-- price list end -->
                                                <!-- button -->
                                                <a href="/contact.html"
                                                    class="art-link art-color-link art-w-chevron">Order now</a>
                                                <div class="art-asterisk"><sup>*</sup>Free only when ordering paid
                                                    services</div>
                                            </div>
                                            <!-- price body end -->
                                        </div>
                                        <!-- price end -->

                                    </div>
                                    <!-- grid -->

                                    <!-- col -->
                                    <div class="col-lg-4">

                                        <!-- price -->
                                        <div class="art-a art-price art-popular-price">
                                            <!-- price body -->
                                            <div class="art-price-body">
                                                <h5 class="mb-30">Hourly payment</h5>
                                                <!-- price cost -->
                                                <div class="art-price-cost">
                                                    <div class="art-number"><span>$</span>33<span>h</span></div>
                                                </div>
                                                <!-- price cost end -->
                                                <!-- price list -->
                                                <ul class="art-price-list">
                                                    <!-- list item -->
                                                    <li>Ui Design</li>
                                                    <!-- list item -->
                                                    <li>Web Development</li>
                                                    <!-- list item -->
                                                    <li>Logo design</li>
                                                    <!-- list item -->
                                                    <li class="art-empty-item">SEO optimization</li>
                                                    <!-- list item -->
                                                    <li class="art-empty-item">Wordpress integration</li>
                                                </ul>
                                                <!-- price list end -->
                                                <!-- button -->
                                                <a href="/contact.html"
                                                    class="art-link art-color-link art-w-chevron">Order now</a>
                                            </div>
                                            <!-- price body end -->
                                        </div>
                                        <!-- price end -->

                                    </div>
                                    <!-- col end -->

                                    <!-- col -->
                                    <div class="col-lg-4">

                                        <!-- price -->
                                        <div class="art-a art-price">
                                            <!-- price body -->
                                            <div class="art-price-body">
                                                <h5 class="mb-30"> Full time</h5>
                                                <!-- price cost -->
                                                <div class="art-price-cost">
                                                    <div class="art-number"><span>$</span>4775<span>m</span></div>
                                                </div>
                                                <!-- price cost end -->
                                                <!-- price list -->
                                                <ul class="art-price-list">
                                                    <!-- list item -->
                                                    <li>Ui Design</li>
                                                    <!-- list item -->
                                                    <li>Web Development</li>
                                                    <!-- list item -->
                                                    <li>Logo design</li>
                                                    <!-- list item -->
                                                    <li>SEO optimization</li>
                                                    <!-- list item -->
                                                    <li>Wordpress integration</li>
                                                </ul>
                                                <!-- price list end -->
                                                <!-- button -->
                                                <a href="/contact.html"
                                                    class="art-link art-color-link art-w-chevron">Order now</a>
                                            </div>
                                            <!-- price body end -->
                                        </div>
                                        <!-- price end -->

                                    </div>
                                    <!-- col end -->

                                </div>
                                <!-- row end -->

                            </div>
                            <!-- container end -->

                            <!-- container -->
                            <div class="container-fluid">

                                <!-- row -->
                                <div class="row">

                                    <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/mivida.png" alt="brand">
                                    </div>
                                    <!-- col end -->

                                    <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/coop.jpeg" alt="brand">
                                    </div>
                                    <!-- col end -->

                                    <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/imbank.png" alt="brand">
                                    </div>
                                    <!-- col end -->

                                    <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/chpter.png" alt="brand">
                                    </div>
                                    <!-- col end -->
                                     <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/dawati.png" alt="brand">
                                    </div>
                                    <!-- col end -->
                                     <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/laip.png" alt="brand">
                                    </div>
                                    <!-- col end -->
                                     <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/axis.png" alt="brand">
                                    </div>
                                    <!-- col end -->
                                    
                                    <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/treasurecomms.png" alt="brand">
                                    </div>
                                    <!-- col end -->
                                    
                                    <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/kanes.webp" alt="brand">
                                    </div>
                                    <!-- col end -->
                                    
                                    <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/equinox.jpeg" alt="brand">
                                    </div>
                                    <!-- col end -->
                                    {{-- <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/finsys.jpeg" alt="brand">
                                    </div>
                                    <!-- col end -->
                                    <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/carrel.png" alt="brand">
                                    </div> --}}
                                    <!-- col end -->
                                     <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/belva.png" alt="brand">
                                    </div>
                                    <!-- col end -->
                                     <!-- col -->
                                    <div class="col-6 col-lg-3">
                                        <!-- brand -->
                                        <img class="art-brand" src="img/brands/creative.png" alt="brand">
                                    </div>
                                    <!-- col end -->
                                    

                                </div>
                                <!-- row end -->

                            </div>
                            <!-- container end -->

                            <!-- container -->
                            <div class="container-fluid">

                                <!-- footer -->
                                <footer>
                                    <!-- copyright -->
                                    {{-- get current year --}}
                                    <div>&#169; {{ date('Y') }} Gitonga Mwaura</div>
                                    
                                </footer>
                                <!-- footer end -->

                            </div>
                            <!-- container end -->

                        </div>
                        <!-- scroll frame end -->

                    </div>
                    <!-- swup container end -->

                </div>
                <!-- content end -->

                <!-- menu bar -->
                <div class="art-menu-bar">

                    <!-- menu bar frame -->
                    <div class="art-menu-bar-frame">

                        <!-- menu bar header -->
                        <div class="art-menu-bar-header">
                            <!-- menu bar button -->
                            <a class="art-menu-bar-btn" href="#.">
                                <!-- icon -->
                                <span></span>
                            </a>
                            <!-- menu bar button end -->
                        </div>
                        <!-- menu bar header end -->

                        <!-- current page title -->
                        <div class="art-current-page"></div>
                        <!-- current page title end -->

                        <!-- scroll frame -->
                        <div class="art-scroll-frame">

                            <!-- menu -->
                            <nav id="swupMenu">
                                <!-- menu list -->
                                <ul class="main-menu">
                                    <!-- menu item -->
                                    <li class="menu-item current-menu-item"><a href="/home.html">Home</a></li>
                                    <!-- menu item -->
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#.">Portfolio</a>
                                        <!-- sub menu -->
                                        <ul class="sub-menu">
                                            <!-- lvl 2 nav link -->
                                            <li class="menu-item"><a href="/portfolio-2-col.html">2 column</a></li>
                                            <!-- lvl 2 nav link -->
                                            <li class="menu-item"><a href="/portfolio-3-col.html">3 column</a></li>
                                            <!-- lvl 2 nav link -->
                                            <li class="menu-item"><a href="/portfolio-2-col-masonry.html">2 column
                                                    masonry</a></li>
                                            <!-- lvl 2 nav link -->
                                            <li class="menu-item"><a href="/portfolio-3-col-masonry.html">3 column
                                                    masonry</a></li>
                                            <!-- lvl 2 nav link -->
                                            <li class="menu-item"><a href="/portfolio-single.html">Single project</a>
                                            </li>
                                            <!-- lvl 2 nav link -->
                                            <li class="menu-item"><a href="/portfolio-single-2.html">Single project
                                                    2</a></li>
                                        </ul>
                                        <!-- sub menu end -->
                                    </li>
                                    <!-- menu item -->
                                    <li class="menu-item"><a href="/history.html">History</a></li>
                                    <!-- menu item -->
                                    <li class="menu-item"><a href="/contact.html">Contact</a></li>
                                    <!-- menu item -->
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#.">Blog</a>
                                        <!-- sub menu -->
                                        <ul class="sub-menu">
                                            <!-- lvl 2 nav link -->
                                            <li class="menu-item"><a href="/blog-2-col.html">2 column</a></li>
                                            <!-- lvl 2 nav link -->
                                            <li class="menu-item"><a href="/blog-3-col.html">3 column</a></li>
                                            <!-- lvl 2 nav link -->
                                            <li class="menu-item"><a href="/blog-post.html">Publication</a></li>
                                        </ul>
                                        <!-- sub menu end -->
                                    </li>
                                    <!-- menu item -->
                                    <li class="menu-item"><a href="onepage.html" target="_blank">Onepage</a></li>
                                </ul>
                                <!-- menu list end -->
                            </nav>
                            <!-- menu end -->

                            <!-- language change -->
                            <ul class="art-language-change">
                                <!-- language item -->
                                <li><a href="#.">FR</a></li>
                                <!-- language item -->
                                <li class="art-active-lang"><a href="#.">EN</a></li>
                            </ul>
                            <!-- language change end -->

                        </div>
                        <!-- scroll frame end -->

                    </div>
                    <!-- menu bar frame -->

                </div>
                <!-- menu bar end -->

            </div>
            <!-- app container end -->

        </div>
        <!-- app wrapper end -->

        <!-- preloader -->
        <div class="art-preloader">
            <!-- preloader content -->
            <div class="art-preloader-content">
                <!-- title -->
                <h4>tick....tock....</h4>
                <!-- progressbar -->
                <div id="preloader" class="art-preloader-load"></div>
            </div>
            <!-- preloader content end -->
        </div>
        <!-- preloader end -->

    </div>
    <!-- app end -->

    {{-- import scripts --}}

    <!-- jquery js -->
    <script src="{{ asset('./js/plugins/jquery.min.js') }}"></script>
    <!-- anime js -->
    <script src="{{ asset('./js/plugins/anime.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('./js/plugins/swiper.min.js') }}"></script>
    <!-- progressbar js -->
    <script src="{{ asset('./js/plugins/progressbar.min.js') }}"></script>
    <!-- smooth scrollbar js -->
    <script src="{{ asset('./js/plugins/smooth-scrollbar.min.js') }}"></script>
    <!-- overscroll js -->
    <script src="{{ asset('./js/plugins/overscroll.min.js') }}"></script>
    <!-- typing js -->
    <script src="{{ asset('./js/plugins/typing.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('./js/plugins/isotope.min.js') }}"></script>
    <!-- fancybox js -->
    <script src="{{ asset('./js/plugins/fancybox.min.js') }}"></script>
    <!-- swup js -->
    <script src="{{ asset('./js/plugins/swup.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('./js/main.js') }}"></script>
</body>

</html>
