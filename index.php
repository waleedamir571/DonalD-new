<?php include 'partials/header.php'; ?>

<!-- header-end -->
<!-- banner-start -->
<section id="banner" class="banner01 home_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bnr-txt ptop">
                            <h4>Your Story. Our Publishing Expertise.</h4>
                            <h1 class="text-white"> <strong>USA-Based Publishers for Author Success</strong>
                            </h1>
                            <p>
                                Donald’s Book Publishing is a USA-based publishing company helping authors bring
                                powerful stories to life. We offer expert writing, publishing, and promotion services
                                that transform ideas into professionally published books ready for the market.


                            </p>
                            <p>From concept to launch, we provide hands-on support, refine every detail, and deliver
                                personalized plans, transparent pricing, and goal-driven strategies that make publishing
                                simple, effective, and author-friendly.



                            </p>
                        </div>


                        <div class="cta-btn btnres">

                            <a href="javascript: ;" class="btn btnres1 for-m popupBtn">Get a Free Quote</a>
                            <a href="javascript:;" onclick="setButtonURL();" class="btn btnres2 res22">Talk to an Expert
                            </a>

                        </div>
                    </div>


                    <?php include 'partials/form.php'; ?>
                </div>
            </div>
        </div>
</section>

<!-- banner-end -->
<div class="bottomSec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="top-slider">
                    <li>

                        <img src="assets/images/cl-1.png" alt="">
                    </li>
                    <li>

                        <img src="assets/images/cl-2.png" alt="">
                    </li>
                    <li>

                        <img src="assets/images/cl-3.png" alt="">
                    </li>
                    <li>
                        <img src="assets/images/cl-4.png" alt="">
                    </li>
                    <li>

                        <img src="assets/images/cl-5.png" alt="">
                    </li>

                    <li>

                        <img src="assets/images/cl-6.png" alt="">
                    </li>
                    <li>

                        <img src="assets/images/cl-7.png" alt="">
                    </li>
                    <!--<li>-->

                    <!--   <img  src="assets/images/cl-8.png" alt="">-->
                    <!--</li>-->
                    <li>
                        <img src="assets/images/cl-9.png" alt="">
                    </li>
                    <li>

                        <img src="assets/images/cl-10.png" alt="">
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>
<!-- form-sec -->
<!-- form-sec -->

<section id="form-sec">
    <div class="container">
        <div class="row">
            <div class="form-txt">
                <h2>Ready to Publish Your Book? Begin with Reliable, High-Quality Book Publishing Services.

                </h2>
            </div>
            <!-- btn form-btn -->
            <form action="backend/action/action.php" method="POST" class="cmxform">
                <input type="hidden" name="type" value="formLong">
                <!-- <input type="hidden" name="brand" value="nypublishers"> -->
                <!-- <input type="hidden" name="token"
                    value="1147cabbfecc8c45a410a7b81aa36436aad34ed79fda5f77c790b0492d5f93b3">
                <input type="hidden" name="tag" value="banner form">
                <input type="hidden" name="price" value="null">
                <input type="hidden" name="news" value="1"> -->
                <div class="form-div" style="margin:25px 0 0;">
                    <div class="col-lg">
                        <input
                            onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))"
                            name="name" required class="form-control" type="text" placeholder="Name">

                    </div>
                    <div class="col-lg">
                        <input name="email" required class="form-control" type="email" placeholder="Email">
                    </div>
                    <div class="col-lg">
                        <input name="phone" required class="form-control" type="number" id="phone-coun"
                            onkeypress="return isNumberKey(event);" placeholder="Phone">
                    </div>
                    <div class="col-lg">

                        <select class="classic" name="service">
                            <optgroup label="&nbsp; Select Services">
                                <option value="Book Writing " data-amt="16" data-deadline="1">Book Writing
                                </option>
                                <option value="Book Marketing " data-amt="16" data-deadline="1">Book Marketing
                                </option>
                                <option value="Book Cover Design" data-amt="50" data-deadline="1">Book Cover
                                    Design
                                </option>
                                <option value="Book Proof Reading & Editing" data-amt="50" data-deadline="1">
                                    Book
                                    Proof Reading & Editing</option>
                                <option value="Book Publishing" data-amt="50" data-deadline="1">Book Publishing
                                </option>
                                <option value="E-Book Writing & Publishing" data-amt="50" data-deadline="1">
                                    E-Book
                                    Writing & Publishing</option>
                            </optgroup>
                        </select>
                        <!-- <input name="services" class="form-control" type="text" placeholder="Select Services"> -->
                    </div>
                    <div class="col-lg bnr-form-btn">
                        <!-- <input type="submit" class="btn form-btn" value="submit" /> -->
                        <input type="submit" name="submit" class="btn form-btn" value="Submit">

                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- <div class="agree-two">
          <input type="checkbox" id="test2" required="">
          <label for="test2">I Agree to <a href="terms-and-condition">Terms of Use</a> and the <a href="privacy-policy">Privacy Policy.</a> </label>&nbsp;&nbsp;
         
                    </div>-->
            </form>
        </div>
    </div>
</section>
<!-- form-sec -->
<!-- form-sec -->

<!-- --------------------------------------------------------------------- -->



<section id="lp-writing">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Donald’s Book Publishing — Where Your Story Comes to Life

                </h2>
                <br>
                <div class="inner-txt-p">
                    <p>Donald’s Book Publishing is a premier book writing, publishing, and marketing company dedicated
                        to transforming manuscripts into successful, market-ready books. With proven expertise and a
                        results-driven approach, we help authors bring their ideas to life with confidence.


                    </p>
                    <p>We proudly serve authors across the USA, offering affordable publishing solutions that deliver
                        top-tier quality without compromises or submission delays.

                    </p>
                    <ul>

                        <li>Ghostwriting Services </li>
                        <li>Professional Editing & Proofreading </li>
                        <li> Cover Design & Illustrations
                        </li>
                        <li>Book Promotions & Marketing
                        </li>
                        <li>Amazon Publishing & Printing
                        </li>
                        <li>Children’s Book Illustration & Publishing
                        </li>




                    </ul>
                </div>
                <br>
                <div class="cta-btn">

                    <a href="javascript:;" class="btn btnres1 rbt1 popupBtn">Get A Quote</a>

                    <a href="javascript:;" onclick="setButtonURL();" class="btn btnres2 rbt2 liveChat">Live
                        Chat</a>


                </div>


            </div>
            <div class=" col-md-6 inner-tx-p">
                <div class="inner-img-lp">
                    <!-- <img class="img-sec lazyload" data-src="../nypublishers/assets/images/sec55.webp"> -->
                    <img class="img-sec lazyload" src="nypublishers/assets/images/sec55.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>

</section>

<!-- --------------------------------------------------------------------- -->


<!-- writing-ser -->
<section id="writing-ser">
    <div class="container">
        <div class="reviews-row">
            <div class="col-md-12">
                <div class="write-txt">
                    <h2>Publishing Experts Who Bring Your Book to Life</h2>
                    <p>Start your publishing journey with a team that guides you from idea to launch.
                    </p>
                </div>
            </div>
            <div class="col-md-12 write-main-div">
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser1">
                        <div class="img-box img-ser1"></div>
                        <div class="ser-box-txt ">
                            <h3>Book Writing
                            </h3>

                            <p class="list-scroll">Our team of experienced writers works closely with you to turn your
                                ideas into a compelling story that connects with readers. From shaping strong characters
                                to building an engaging narrative, we help create a book readers won’t want to put down.

                            </p>

                            <a href="book-writing/index.html" class="read-txt">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser4">
                        <div class="img-box img-ser2"></div>
                        <div class="ser-box-txt">
                            <h3>Book Editing

                            </h3>

                            <p class="list-scroll">Our professional editors carefully refine your manuscript for
                                clarity, flow, and consistency. We polish every chapter while preserving your unique
                                voice, ensuring your book reads smoothly and feels professionally crafted.

                            </p>

                            <a href="proofreading/index.html" class="read-txt">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser2">
                        <div class="img-box img-ser3"></div>
                        <div class="ser-box-txt">
                            <h3>Book Publishing
                            </h3>

                            <p class="list-scroll">We handle the entire publishing process, from formatting to final
                                release. Whether print or digital, we make sure your book is professionally prepared and
                                ready to reach readers worldwide.
                            </p>

                            <a href="book-publishing/index.html" class="read-txt">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser3">

                        <div class="ser-box-txt">
                            <h3>Book Marketing</h3>
                            <p class="list-scroll">Our marketing team helps your book find the right audience through
                                targeted promotion strategies. From online visibility to reader engagement, we work to
                                build awareness and drive lasting interest in your book.

                            </p>

                            <a href="book-marketing/index.html" class="read-txt">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section id="cta-sec">

    <div class="container">
        <div class="align-items-center row">
            <div class="col-12 col-lg-3">
                <h4 data-aos="fade-right" data-aos-delay="100" data-aos-easing="ease-in-out" class="inner-hd-sm">
                    AWARD-WINNING BOOK CREATION IS OUR FORTE</h4>
            </div>
            <div class="col-12 col-lg-8">
                <div class="award-winning-wrap">
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/axiom.webp" class="img-fluid"
                            alt="axiom"></div>
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/gold.webp" class="img-fluid"
                            alt="gold"></div>
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/finalist.webp"
                            class="img-fluid" alt="finalist"></div>
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/global.webp" class="img-fluid"
                            alt="global"></div>
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/illum.webp" class="img-fluid"
                            alt="illum"></div>
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/moon.webp" class="img-fluid"
                            alt="moon"></div>
                </div>
            </div>
        </div>
    </div>



</section>




<!-- --------------------------------------------------------------------- -->
<section id="lp-writing">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    From Compelling Storytelling to Striking Book Covers
                </h2>
                <br>
                <div class="inner-txt-p">
                    <p>
                        As a trusted publishing company serving authors across the USA, we are committed to excellence
                        at every stage of the publishing process. Whether you’re a seasoned author or writing your first
                        book, our team is here to guide you every step of the way. We help turn your ideas into a
                        polished, professionally published book that captivates readers and stands the test of time. We
                        also specialize in photo book publishing, making us a complete, all-in-one publishing partner
                        for writing, design, and publishing.
                    </p>
                    <!-- <ul>

                            <li>E-book publication</li>
                            <li>Branding and publicity</li>
                            <li>Video book trailers</li>
                            <li>Web and Internet SEO</li>
                            <li>Audiobooks</li>
                            <li>Custom illustrations</li>
                        </ul> -->
                </div>
                <br>
                <div class="cta-btn">

                    <a href="javascript:;" class="btn btnres1 rbt1 popupBtn">Get A Quote</a>

                    <a href="javascript:;" onclick="setButtonURL();" class="btn btnres2 rbt2 liveChat">Live Chat</a>


                </div>


            </div>
            <div class=" col-md-6 inner-tx-p">
                <div class="inner-img-lp">
                    <!-- <img class="img-sec2 lazyload" data-src="nypublishers/assets/images/sec44.jpg"> -->
                    <img class="img-sec2 ls-is-cached lazyloaded" src="nypublishers/assets/images/sec44.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>

</section>

<!-- --------------------------------------------------------------------- -->

<!-- creative-ser -->
<!-- creative-ser -->

<div class="revie1 testimonial">

    <div class="container">
        <div class="col-sm-12">
            <div class="test-txt">
                <h2>What Our Clients Say</h2>
            </div>
        </div>

        <div class="row reviews-row book-covers-2">

            <div class="col">
                <div class="thumbnail review-box">
                    <div class="caption">
                        <h3 class="text-center review-heading">John S</h3>
                        <p class="text-center review-text list-scroll">Working with NY Publishers was an incredible
                            experience. They turned my manuscript into a masterpiece, and their marketing team
                            helped me reach a wider audience. I highly recommend them to any author who wants to
                            take their book to the next level." </p>
                        <ul class="list-group text-left">
                            <li class="list-group-item">
                                <span class="text-uppercase">communication</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">quality of work</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">delivery</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">support</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="thumbnail review-box">
                    <div class="caption">
                        <h3 class="text-center review-heading">Maria C.</h3>
                        <p class="text-center review-text">NY Publishers is the best in the business. They provided
                            me with a comprehensive publishing solution, from writing to marketing, and made the
                            entire process seamless. I'm thrilled with the results and would definitely work with
                            them again." </p>
                        <ul class="list-group text-left">
                            <li class="list-group-item">
                                <span class="text-uppercase">communication</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">quality of work</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">delivery</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">support</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="thumbnail review-box">
                    <div class="caption">
                        <h3 class="text-center review-heading">David W.</h3>
                        <p class="text-center review-text">I've worked with several publishing companies in the
                            past, but NY Publishers stands out for their exceptional quality and attention to
                            detail. Their editors are top-notch, and their marketing strategies are highly
                            effective. I couldn't be happier with the outcome.
                        </p>
                        <ul class="list-group text-left">
                            <li class="list-group-item">
                                <span class="text-uppercase">communication</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">quality of work</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">delivery</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">support</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="thumbnail review-box">
                    <div class="caption">
                        <h3 class="text-center review-heading">Jessica L.</h3>
                        <p class="text-center review-text">NY Publishers helped me achieve my dream of becoming a
                            published author. They were with me every step of the way, providing valuable feedback
                            and support. I highly recommend their self publishing services to anyone who wants to
                            turn their manuscript into a bestseller."
                        </p>
                        <ul class="list-group text-left">
                            <li class="list-group-item">
                                <span class="text-uppercase">communication</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">quality of work</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">delivery</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">support</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="thumbnail review-box">
                    <div class="caption">
                        <h3 class="text-center review-heading">Peter M.</h3>
                        <p class="text-center review-text list-scroll">I was blown away by the level of
                            professionalism and expertise at NY Publishers. Their team of writers, editors, and
                            designers worked seamlessly to create a beautiful book that exceeded my expectations. I
                            can't thank them enough for their hard work and dedication.</p>
                        <ul class="list-group text-left">
                            <li class="list-group-item">
                                <span class="text-uppercase">communication</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">quality of work</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">delivery</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">support</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="thumbnail review-box">
                    <div class="caption">

                        <h3 class="text-center review-heading">Sarah R.</h3>
                        <p class="text-center review-text">NY Publishers provided me with a stress-free publishing
                            experience. They handled everything from book design to marketing, allowing me to focus
                            on what I do best - writing. I'm grateful for their expertise and highly recommend them
                            to anyone who wants to publish a book.</p>
                        <ul class="list-group text-left">
                            <li class="list-group-item">
                                <span class="text-uppercase">communication</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">quality of work</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">delivery</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-uppercase">support</span>
                                <span class="pull-right">
                                    <span class="stars5"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




</div>



<?php include 'partials/footer.php'; ?>

<!--main-footer -->