<x-layout>
    <section id="welcome-hero" class="welcome-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="header-text">
                        <h2>hi<span>,</span> i am vedoor Barakat<span>.</span>   </h2>
                        <p>Fullstack Junior Developer</p>
                        <a href="assets/download/vedoor-barakat-Resume.pdf" download>download resume</a>
                        <a href="https://www.linkedin.com/in/vedoor-barakat-1b3181274/">Linkedin</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="about" class="about">
        <div class="section-heading text-center">
            <h2>about me</h2>
        </div>
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-about-txt">
                            <h3>
                                Vedoor Barakat is a software developer and a graduate of George Brown College's Computer Programming and Analyst Program.
                                He is deeply fascinated by technology and its potential to enhance people's lives. With a solid foundation in IT,
                                Vedoor is dedicated to continuous learning and staying abreast of the latest developments in the field.

                            </h3>
                            <p>
                                Vedoor aims to secure a junior developer position within the IT sector,
                                leveraging his programming knowledge to gain new skills and contribute to the creation of cutting-edge software solutions.
                                He holds the belief that an individual's quality of life is directly influenced by the quality of their thoughts.
                                Vedoor advocates that achieving a deep sense of accomplishment and self-satisfaction fosters the development of quality thoughts.
                            </p>

                        </div>
                    </div>
                    <div class="col-sm-offset-1 col-sm-5">
                        <div class="single-about-img">
                            <img src="assets/images/about/profile_image.jpg" alt="profile_image" >

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--portfolio start -->
    <section id="portfolio" class="portfolio">
        <div class="portfolio-details">
            <div class="section-heading text-center">
                <h2>portfolio</h2>
            </div>
            <div class="container">
                <div class="portfolio-content">
                    <div class="isotope">
                        <div class="row">

                            <div class="col-sm-4">
                                <div class="item">
                                    <img src="assets/images/portfolio/p1.jpg" alt="portfolio image"/>
                                    <div class="isotope-overlay">
                                        <a href="#">
                                            ui/ux design
                                        </a>
                                    </div><!-- /.isotope-overlay -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <img src="assets/images/portfolio/p2.jpg" alt="portfolio image"/>
                                    <div class="isotope-overlay">
                                        <a href="#">
                                            ui/ux design
                                        </a>
                                    </div><!-- /.isotope-overlay -->
                                </div><!-- /.item -->
                            </div><!-- /.col -->

                            <div class="col-sm-4">
                                <div class="item">
                                    <img src="assets/images/portfolio/p3.jpg" alt="portfolio image"/>
                                    <div class="isotope-overlay">
                                        <a href="#">
                                            web design
                                        </a>
                                    </div><!-- /.isotope-overlay -->
                                </div><!-- /.item -->
                            </div><!-- /.col -->

                            <div class="col-sm-4">
                                <div class="item">
                                    <img src="assets/images/portfolio/p4.jpg" alt="portfolio image"/>
                                    <div class="isotope-overlay">
                                        <a href="#">
                                            web development
                                        </a>
                                    </div><!-- /.isotope-overlay -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <img src="assets/images/portfolio/p5.jpg" alt="portfolio image"/>
                                    <div class="isotope-overlay">
                                        <a href="#">
                                            web development
                                        </a>
                                    </div><!-- /.isotope-overlay -->
                                </div><!-- /.item -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!--/.isotope-->
                </div><!--/.gallery-content-->
            </div><!--/.container-->
        </div><!--/.portfolio-details-->

    </section><!--/.portfolio-->

{{--    <section id="contact" class="contact">--}}
{{--        <div class="section-heading text-center">--}}
{{--            <h2>contact me</h2>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="contact-content">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-offset-1 col-md-5 col-sm-6">--}}
{{--                        <div class="single-contact-box">--}}
{{--                            <div class="contact-form">--}}
{{--                                <form method="POST" action="/contact">--}}
{{--                                    @csrf--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6 col-xs-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="text" class="form-control" id="name" placeholder="Name*" name="name">--}}
{{--                                            </div><!--/.form-group-->--}}
{{--                                        </div><!--/.col-->--}}
{{--                                        <div class="col-sm-6 col-xs-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="email" class="form-control" id="email" placeholder="Email*" name="email">--}}
{{--                                            </div><!--/.form-group-->--}}
{{--                                        </div><!--/.col-->--}}
{{--                                    </div><!--/.row-->--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">--}}
{{--                                            </div><!--/.form-group-->--}}
{{--                                        </div><!--/.col-->--}}
{{--                                    </div><!--/.row-->--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <textarea class="form-control" rows="8" id="comment" name="comment" placeholder="Message" ></textarea>--}}
{{--                                            </div><!--/.form-group-->--}}
{{--                                        </div><!--/.col-->--}}
{{--                                    </div><!--/.row-->--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-12">--}}
{{--                                            <div class="single-contact-btn">--}}
{{--                                                <button class="contact-btn" type="submit">submit</button>--}}
{{--                                            </div><!--/.single-single-contact-btn-->--}}
{{--                                        </div><!--/.col-->--}}
{{--                                    </div><!--/.row-->--}}
{{--                                </form><!--/form-->--}}
{{--                            </div><!--/.contact-form-->--}}
{{--                        </div><!--/.single-contact-box-->--}}
{{--                    </div><!--/.col-->--}}
{{--                    <div class="col-md-offset-1 col-md-5 col-sm-6">--}}
{{--                        <div class="single-contact-box">--}}
{{--                            <div class="contact-adress">--}}
{{--                                <div class="contact-add-head">--}}
{{--                                    <h3>Vedoor Barakat</h3>--}}
{{--                                    <p>Fullstack Developer</p>--}}
{{--                                </div>--}}
{{--                                <div class="contact-add-info">--}}
{{--                                    <div class="single-contact-add-info">--}}
{{--                                        <h3>email</h3>--}}
{{--                                        <p>vedoorbbs@gmail.com</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="single-contact-add-info">--}}
{{--                                        <h3>Located</h3>--}}
{{--                                        <p>Scarborough, Toronto, ON, Canada</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!--/.contact-adress-->--}}

{{--                        </div><!--/.single-contact-box-->--}}
{{--                    </div><!--/.col-->--}}
{{--                </div><!--/.row-->--}}
{{--            </div><!--/.contact-content-->--}}
{{--        </div><!--/.container-->--}}

{{--    </section><!--/.contact-->--}}

</x-layout>
