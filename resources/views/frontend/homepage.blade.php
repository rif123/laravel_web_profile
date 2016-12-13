@extends('layoutsFe.index')
    @section('content')
    <body id="homepage">
        <div id="wrapper">
            <header>
    			<div class="info">
    				<div class="container">
    					<div class="row">
    						<div class="col-md-12">
    							<div class="col">Working Hours Monday - Friday <span class="id-color"><strong>08:00-16:00</strong></span></div>
    							<div class="col">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
    							<div class="col social">
    								<a href="#"><i class="fa fa-facebook"></i></a>
    								<a href="#"><i class="fa fa-twitter"></i></a>
    								<a href="#"><i class="fa fa-rss"></i></a>
    								<a href="#"><i class="fa fa-google-plus"></i></a>
    								<a href="#"><i class="fa fa-envelope-o"></i></a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="#wrapper">
                                    <img class="logo" src="{{ URL::asset('') }}/fe/images/logo.png" alt="">
                                </a>
                            </div>
                            <!-- logo close -->

                            <!-- small button begin -->
                            <span id="menu-btn"></span>
                            <!-- small button close -->

    						<!-- mainmenu begin -->
                            <nav>
                                <ul id="mainmenu">
                                    <li><a href="#wrapper">Home</a></li>
                                    <li><a href="#section-services">What We Do</a></li>
                                    <li><a href="#section-steps">Process</a></li>
                                    <li><a href="#section-team">Team</a></li>
                                    <li><a href="#section-portfolio">Projects</a></li>
                                    <li><a href="#section-blog">Blog</a></li>
                                    <li><a href="#section-contact">Contact</a></li>
                                </ul>
                            </nav>

                        </div>
                        <!-- mainmenu close -->

                    </div>
                </div>
            </header>
            <!-- header close -->





            <!-- content begin -->
            <div id="content" class="no-bottom no-top">

                <!-- revolution slider begin -->
                <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
                    <div id="revolution-slider">
                        <ul>
                            <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                                <!--  BACKGROUND IMAGE -->
                                <img src="{{ URL::asset('') }}/fe/images-slider/wide1.jpg" alt="" />
                                <div class="tp-caption big-white sft"
                                    data-x="0"
                                    data-y="160"
                                    data-speed="800"
                                    data-start="400"
                                    data-easing="easeInOutExpo"
                                    data-endspeed="450">
                                    Our Expertise For
                                </div>

                                <div class="tp-caption ultra-big-white customin customout start"
                                    data-x="0"
                                    data-y="center"
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="800"
                                    data-start="400"
                                    data-easing="easeInOutExpo"
                                    data-endspeed="400">
                                    Interior Design
                                </div>

                                <div class="tp-caption sfb"
                                    data-x="0"
                                    data-y="335"
                                    data-speed="400"
                                    data-start="800"
                                    data-easing="easeInOutExpo">
                                    <a href="#" class="btn-slider">Our Portfolio
                                    </a>
                                </div>
                            </li>

                            <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                                <!--  BACKGROUND IMAGE -->
                                <img src="{{ URL::asset('') }}/fe/images-slider/wide2.jpg" alt="" />
                                <div class="tp-caption big-white sft"
                                    data-x="0"
                                    data-y="160"
                                    data-speed="800"
                                    data-start="400"
                                    data-easing="easeInOutExpo"
                                    data-endspeed="450">
                                    Featured Project
                                </div>

                                <div class="tp-caption ultra-big-white customin customout start"
                                    data-x="0"
                                    data-y="center"
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="800"
                                    data-start="400"
                                    data-easing="easeInOutExpo"
                                    data-endspeed="400">
                                    Green Interior
                                </div>

                                <div class="tp-caption sfb"
                                    data-x="0"
                                    data-y="335"
                                    data-speed="400"
                                    data-start="800"
                                    data-easing="easeInOutExpo">
                                    <a href="#" class="btn-slider">Our Portfolio
                                    </a>
                                </div>
                            </li>

                            <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                                <!--  BACKGROUND IMAGE -->
                                <img src="{{ URL::asset('') }}/fe/images-slider/wide3.jpg" alt="" />
                                <div class="tp-caption big-white sft"
                                    data-x="0"
                                    data-y="160"
                                    data-speed="800"
                                    data-start="400"
                                    data-easing="easeInOutExpo"
                                    data-endspeed="450">
                                    Interior Remodeling To Makes
                                </div>

                                <div class="tp-caption ultra-big-white customin customout start"
                                    data-x="0"
                                    data-y="center"
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="800"
                                    data-start="400"
                                    data-easing="easeInOutExpo"
                                    data-endspeed="400">
                                    Your Life Easier
                                </div>

                                <div class="tp-caption sfb"
                                    data-x="0"
                                    data-y="335"
                                    data-speed="400"
                                    data-start="800"
                                    data-easing="easeInOutExpo">
                                    <a href="#" class="btn-slider">Our Portfolio
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </section>
                <!-- revolution slider close -->

                <!-- section begin -->
                <section id="section-services">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                                <h1>What We Do</h1>
                                <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                                <div class="spacer-single"></div>
                            </div>


                            <div class="col-md-4 wow fadeInLeft">
                                <h3><span class="id-color">Residential</span> Design</h3>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
    							<div class="spacer-single"></div>
                                <img src="{{ URL::asset('') }}/fe/images/misc/pic_1.jpg" class="img-responsive" alt="">
                            </div>

                            <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                                <h3><span class="id-color">Office</span> Design</h3>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
    							<div class="spacer-single"></div>
                                <img src="{{ URL::asset('') }}/fe/images/misc/pic_2.jpg" class="img-responsive" alt="">
                            </div>

                            <div class="col-md-4 wow fadeInRight">
                                <h3><span class="id-color">Commercial</span> Design</h3>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
    							<div class="spacer-single"></div>
                                <img src="{{ URL::asset('') }}/fe/images/misc/pic_3.jpg" class="img-responsive" alt="">
                            </div>

                        </div>
                    </div>
                </section>
                <!-- section close -->


                <!-- section begin -->
                <section id="section-steps" class="text-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                                <h1>Our Process</h1>
                                <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                                <div class="spacer-single"></div>
                            </div>

                            <div class="col-md-12">
                                <div class="de_tab tab_steps">
                                    <ul class="de_nav">
                                        <li class="active wow fadeIn" data-wow-delay="0s"><span>Meet &amp; Agree</span><div class="v-border"></div>
                                        </li>
                                        <li class="wow fadeIn" data-wow-delay=".4s"><span>Idea &amp; Concept</span><div class="v-border"></div>
                                        </li>
                                        <li class="wow fadeIn" data-wow-delay=".8s"><span>Design &amp; Create</span><div class="v-border"></div>
                                        </li>
                                        <li class="wow fadeIn" data-wow-delay="1.2s"><span>Build &amp; Install</span><div class="v-border"></div>
                                        </li>
                                    </ul>

                                    <div class="de_tab_content">

                                        <div id="tab1">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                        </div>

                                        <div id="tab2">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                        </div>

                                        <div id="tab3">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                        </div>

                                        <div id="tab4">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section close -->

                <!-- section begin -->
                <section id="section-team">
                    <div class="container">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Our Team</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 container-4 wow fadeInUp">
                                <!-- team member -->
                                <div class="de-team-list">
                                    <div class="team-pic">
                                        <img src="{{ URL::asset('') }}/fe/images/team/team_pic_1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="team-desc col-md-12">
                                        <h3>John Smith</h3>
                                        <p class="lead">Project Manager</p>
                                        <div class="small-border"></div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                        <div class="social">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- team close -->

                                <!-- team member -->
                                <div class="de-team-list">
                                    <div class="team-pic">
                                        <img src="{{ URL::asset('') }}/fe/images/team/team_pic_2.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="team-desc col-md-12">
                                        <h3>Michael Dennis</h3>
                                        <p class="lead">Creative Director</p>
                                        <div class="small-border"></div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                        <div class="social">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- team close -->

                                <!-- team member -->
                                <div class="de-team-list">
                                    <div class="team-pic">
                                        <img src="{{ URL::asset('') }}/fe/images/team/team_pic_3.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="team-desc col-md-12">
                                        <h3>Sarah Michelle</h3>
                                        <p class="lead">Creative Staff</p>
                                        <div class="small-border"></div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <div class="social">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- team close -->

                                <!-- team member -->
                                <div class="de-team-list">
                                    <div class="team-pic">
                                        <img src="{{ URL::asset('') }}/fe/images/team/team_pic_4.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="team-desc col-md-12">
                                        <h3>Katty Wilson</h3>
                                        <p class="lead">Creative Staff</p>
                                        <div class="small-border"></div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <div class="social">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- team close -->

                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- section close -->

                <!-- section begin -->
                <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
                    <div class="container">

                        <div class="spacer-single"></div>

                        <!-- portfolio filter begin -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                                    <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                                    <li><a href="#" data-filter=".residential">Residential</a></li>
                                    <li><a href="#" data-filter=".hospitaly">Hospitaly</a></li>
                                    <li><a href="#" data-filter=".office">Office</a></li>
                                    <li><a href="#" data-filter=".commercial">Commercial</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- portfolio filter close -->

                    </div>

                    <div id="gallery" class="gallery full-gallery de-gallery pf_full_width wow fadeInUp" data-wow-delay=".3s">

                        <!-- gallery item -->
                        <div class="item residential">
                            <div class="picframe">
                                <a class="simple-ajax-popup-align-top" href="project-details-1.html">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Eco Green Interior</span>
                                        </span>
                                    </span>
                                </a>
                                <img src="{{ URL::asset('') }}/fe/images/portfolio/pf%20(1).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item hospitaly">
                            <div class="picframe">
                                <a class="simple-ajax-popup-align-top" href="project-details-2.html">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Modern Elegance Suite</span>
                                        </span>
                                    </span>
                                </a>

                                <img src="{{ URL::asset('') }}/fe/images/portfolio/pf%20(2).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item hospitaly">
                            <div class="picframe">
                                <a class="simple-ajax-popup-align-top" href="project-details-3.html">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Apartment Renovation</span>
                                        </span>
                                    </span>
                                </a>

                                <img src="{{ URL::asset('') }}/fe/images/portfolio/pf%20(3).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item residential">
                            <div class="picframe">
                                <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Youtube Video</span>
                                        </span>
                                    </span>
                                </a>
                                <img src="{{ URL::asset('') }}/fe/images/portfolio/pf%20(4).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item office">
                            <div class="picframe">
                                <a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Vimeo Video</span>
                                        </span>
                                    </span>
                                </a>
                                <img src="{{ URL::asset('') }}/fe/images/portfolio/pf%20(5).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item commercial">
                            <div class="picframe">
                                <a class="simple-ajax-popup-align-top" href="project-details.html">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Restaurant In Texas</span>
                                        </span>
                                    </span>
                                </a>
                                <img src="{{ URL::asset('') }}/fe/images/portfolio/pf%20(6).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item residential">
                            <div class="picframe">
                                <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Summer House</span>
                                        </span>
                                    </span>
                                </a>

                                <img src="{{ URL::asset('') }}/fe/images/portfolio/pf%20(7).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item office">
                            <div class="picframe">
                                <a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Office On Space</span>
                                        </span>
                                    </span>
                                </a>

                                <img src="{{ URL::asset('') }}/fe/images/portfolio/pf%20(8).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                    </div>

                    <div id="loader-area">
                        <div class="project-load"></div>
                    </div>
                </section>
                <!-- section close -->


                <!-- section begin -->
                <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
                    <a href="projects.html" class="btn btn-line-black btn-big">View All Projects</a>
                </section>
                <!-- logo carousel section close -->


                <!-- section begin -->
                <section id="section-testimonial" class="text-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                                <h1>Customer Says</h1>
                                <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                                <div class="spacer-single"></div>
                            </div>
                        </div>
                        <div id="testimonial-carousel" class="de_carousel  wow fadeInUp" data-wow-delay=".3s">

                            <div class="col-md-6 item">
                                <div class="de_testi">
                                    <blockquote>
                                        <p>I'm always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        <div class="de_testi_by">
                                            John, Customer
                                        </div>
                                    </blockquote>

                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi">
                                    <blockquote>
                                        <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        <div class="de_testi_by">
                                            Michael, Customer
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi">
                                    <blockquote>
                                        <p>I totally recommend your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        <div class="de_testi_by">
                                            Patrick, Customer
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi">
                                    <blockquote>
                                        <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        <div class="de_testi_by">
                                            James, Customer
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section close -->

                <!-- section begin -->
                <section id="section-fun-facts">
                    <div class="container">

                        <div class="row">

                            <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                                <h1>Fun Facts</h1>
                                <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                                <div class="spacer-single"></div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                                <div class="de_count">
                                    <i class="icon-alarmclock wow zoomIn" data-wow-delay="0"></i>
                                    <h3 class="timer" data-to="2350" data-speed="2500">0</h3>
                                    <span>Hours of Works</span>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                                <div class="de_count">
                                    <i class="icon-tools wow zoomIn" data-wow-delay=".25s"></i>
                                    <h3 class="timer" data-to="128" data-speed="2500">0</h3>
                                    <span>Projects Complete</span>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                                <div class="de_count">
                                    <i class="icon-piechart wow zoomIn" data-wow-delay=".5s"></i>
                                    <h3 class="timer" data-to="750" data-speed="2500">0</h3>
                                    <span>Slice of Pizza</span>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                                <div class="de_count">
                                    <i class="icon-wine wow zoomIn" data-wow-delay=".75s"></i>
                                    <h3 class="timer" data-to="520" data-speed="2500">0</h3>
                                    <span>Cups of Coffee</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- section close -->

                <!-- section begin -->
                <section id="section-blog" class="text-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                                <h1>Latest Blog</h1>
                                <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                                <div class="spacer-single"></div>
                            </div>

    						<div class="clearfix"></div>

                            <ul id="blog-carousel" class="blog-list blog-snippet wow fadeInUp">
                                <li class="col-md-6 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <img src="{{ URL::asset('') }}/fe/images/blog/pic-blog-1.jpg" alt="" />
                                        </div>


                                        <div class="date-box">
                                            <div class="day">26</div>
                                            <div class="month">FEB</div>
                                        </div>

                                        <div class="post-text">
                                            <h3><a href="{{ URL::asset('') }}/fe/css/#">5 Things That Take a Room from Good to Great</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="col-md-6 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <img src="{{ URL::asset('') }}/fe/images/blog/pic-blog-2.jpg" alt="" />
                                        </div>


                                        <div class="date-box">
                                            <div class="day">20</div>
                                            <div class="month">FEB</div>
                                        </div>

                                        <div class="post-text">
                                            <h3><a href="{{ URL::asset('') }}/fe/css/#">Functional and Stylish Wall-to-Wall Shelves</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        </div>

                                    </div>
                                </li>

    							<li class="col-md-6 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <img src="{{ URL::asset('') }}/fe/images/blog/pic-blog-3.jpg" alt="" />
                                        </div>


                                        <div class="date-box">
                                            <div class="day">16</div>
                                            <div class="month">FEB</div>
                                        </div>

                                        <div class="post-text">
                                            <h3><a href="{{ URL::asset('') }}/fe/css/#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="col-md-6 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <img src="{{ URL::asset('') }}/fe/images/blog/pic-blog-4.jpg" alt="" />
                                        </div>


                                        <div class="date-box">
                                            <div class="day">08</div>
                                            <div class="month">FEB</div>
                                        </div>

                                        <div class="post-text">
                                            <h3><a href="{{ URL::asset('') }}/fe/css/#">How to Make a Huge Impact With Multiples</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- section close -->

                <!-- section begin -->
                <section id="section-contact" class="no-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                                <h1>Contact Us</h1>
                                <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                                <div class="spacer-single"></div>
                            </div>

                            <div class="col-md-8 wow fadeInLeft">
                                <form name="contactForm" id='contact_form' method="post" action='email.php'>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div id='name_error' class='error'>Please enter your name.</div>
                                            <div>
                                                <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                            </div>

                                            <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                            <div>
                                                <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                            </div>

                                            <div id='phone_error' class='error'>Please enter your phone number.</div>
                                            <div>
                                                <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div id='message_error' class='error'>Please enter your message.</div>
                                            <div>
                                                <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <p id='submit'>
                                                <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                            </p>
                                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-4 wow fadeInRight">

                                <div class="widget_text">
                                    <h3>Contact Info</h3>
                                    <address>
                                        <span>100 Mainstreet Center, Sydney</span>
                                        <span><strong>Phone:</strong>(208) 333 9296</span>
                                        <span><strong>Fax:</strong>(208) 333 9298</span>
                                        <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                                        <span><strong>Web:</strong><a href="#test">http://example.com</a></span>
                                        <span><strong>Open</strong>Sunday - Friday 08:00 - 18:00</span>
                                    </address>
                                </div>

                            </div>
                        </div>
                    </div>

    				<div class="spacer-double"></div>

                    <div id="map"></div>
                </section>
                <!-- section close -->

                <!-- footer begin -->
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ URL::asset('') }}/fe/images/logo.png" class="logo-small" alt=""><br>
                                We are team based on Brookylin. Our expertise on Interior Design. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </div>

                            <div class="col-md-4">
                                <div class="widget widget_recent_post">
                                    <h3>Latest News</h3>
                                    <ul>
                                        <li><a href="#">5 Things That Take a Room from Good to Great</a></li>
                                        <li><a href="#">Functional and Stylish Wall-to-Wall Shelves</a></li>
                                        <li><a href="#">9 Unique and Unusual Ways to Display Your TV</a></li>
                                        <li><a href="#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></li>
                                        <li><a href="#">How to Make a Huge Impact With Multiples</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h3>Contact Us</h3>
                                <div class="widget widget-address">
                                    <address>
                                        <span>100 Mainstreet Center, Sydney</span>
                                        <span><strong>Phone:</strong>(208) 333 9296</span>
                                        <span><strong>Fax:</strong>(208) 333 9298</span>
                                        <span><strong>Email:</strong><a href="mailto:contact@archi-interior.com">contact@archi-interior.com</a></span>
                                        <span><strong>Web:</strong><a href="#">http://archi-interior.com</a></span>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="subfooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                &copy; Copyright 2016 - Archi Interior Design Template by <span class="id-color">Designesia</span>
                            </div>
                                <div class="col-md-6 text-right">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    				<a href="#" id="back-to-top"></a>
                </footer>
                <!-- footer close -->
            </div>
        </div>
    </body>
    @stop
@stop
