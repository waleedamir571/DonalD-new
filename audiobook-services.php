<?php include 'partials/header.php'; ?>

<style>
    .btnres {
        padding-top: 18px;
    }

    #banner.banneroad01.bwss {
        height: 650px;
    }

    .form-banner {
        border-radius: 38px;
        padding: 3rem;
        text-align: center;
        left: 130px;
        top: 45px;
    }

    .btn-theme {
        font-size: 18px !important;
        font-weight: 600 !important;
        padding: 10px 20px !important;
        /* color: #fff !important;
        background-color: #064877 !important; */
        width: auto !important;
        height: auto !important;
    }

    .call-details {
        font-size: 14px;
        /* font-family: 'Raleway'; */
        font-style: normal;
        font-weight: 700;
    }

    .h2Heading {
        font-weight: 600;
        text-shadow: 1px 0 0 #000;
        font-size: 45px;
        text-transform capitalize;
    }

    .font-14 {
        font-size: 22px;
        margin: 40px 0;
    }

    .border-radius-20.img-non-fliud {
        position: relative;
        right: -54px;
        width: 100%;
        border-radius: 16px;
    }

    .img-non-fliud-left {
        position: relative;
        left: -113px;
        border-radius: 16px;
        width: 100%;
    }

    .ban-form input {
        height: calc(1.5em + .75rem + 2px);
    }

    .ban-form textarea {
        height: 50px;
        margin: 0;
    }

    .img-sec6 {
        width: 61%;
        position: absolute;
        top: -45px;
        left: 150px;
    }

    @media(max-width:1024px) {
        .border-radius-20.img-non-fliud {
            right: 0;
        }

        .img-non-fliud-left {
            left: -20px;
            width: 90%;
        }

        .font-14 {
            margin: 20px 0;
        }

        .form-banner {
            left: 0px;
            top: 25px;
        }

        .img-sec8 {
            width: 100%;
            top: 0;
            left: 0;
        }
    }

    @media(max-width:767px) {

        .font-14 {
            margin: 10px 0 0;
        }

        .btn-theme {
            margin: 10px 0 20px
        }

        .border-radius-20.img-non-fliud {
            width: 80%;
            display: flex;
            margin: 0 auto;
        }

        .img-non-fliud-left {
            width: 80%;
            display: flex;
            margin: 0 auto;
        }

        .order-2.order-md-2.col-md-6.text-white.text-center.text-md-left {
            margin-left: 0 !important;
        }

        .img-non-fliud-left {
            left: 0;
        }
    }

    @media(max-width:425px) {

        .font-14 {
            font-size: 18px;
            padding: 0 10px;
        }

        .h2Heading {
            font-size: 35px;
            padding: 0 7px;
        }

        #lp-writing {
            padding: 50px 0 50px;
        }

        .write-txt {
            padding-top: 30px;
        }

        .contact-box .form-control {
            width: 122px;
        }

        textarea#exampleFormControlTextarea1 {
            height: 50px;
            margin-top: 14px;
        }

        .ser-box {
            padding: 0px 0;
        }

        .ser-box-txt p {
            height: 114px;
            padding-bottom: 0px;
        }

        .contact-txt-sec {
            margin: -30px 0;
        }
    }

    #creative-tab2 {
        overflow: hidden;
    }

    @media (max-width: 480px) {
        .cta-btn a {
            color: #fff;
        }

        .contact-box select {
            margin-bottom: 18px;
        }

        .c-b-div {
            display: block;
        }

        .contact-box .form-control {
            width: 100%;
        }
    }

    @media (max-width: 767px) {

        #creative-tab2 {
            padding: 0px 0;
        }
    }

    .img-sec6 {
        width: 100%;
    }
</style>


<!-- header-end -->
<!-- banner-start -->
<section id="banner" class="banneroad01 bwss service-bannner">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bnr-txt btn-tx-cp">
                            <h4>Audiobooks</h4>
                            <h2>Reach a Diverse Audience Without Distractions </h2>
                            <p>
                                Connect with listeners worldwide and make a lasting impression. At Donald’s Book
                                Publishing, we don’t just produce audiobooks; we craft immersive audio experiences that
                                engage busy professionals, multitaskers, and even struggling readers.

                            </p>
                            <p>
                                Inspire strong emotional responses in listeners,
                                engage and connect with audiences across various professions,
                                appeal to children’s emotional intelligence and curiosity,
                                open access to a world of knowledge and possibilities,
                                and ensure your ideas are heard in today’s fast-paced media landscape.
                            </p>

                        </div>
                        <div class="cta-btn btnres">

                            <a href="javascript:;" class="btn btnres1 popupBtn">Get A Quote</a>

                            <a href="javascript:;" onclick="setButtonURL();" class="btn btnres2">Get Started</a>


                        </div>

                    </div>
                    <?php include 'partials/form.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-end -->

<?php include 'partials/bottomSec.php'; ?>

<!-- form-sec -->
<!-- form-sec -->

<!-- form-sec -->
<!-- form-sec -->

<!-- landing-page-inner -->
<section id="lp-writing">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Audiobook Benefits Are Off the Charts</h4>
                <h2>Narration Makes a Stronger Impact Than Any Other Medium
                </h2>
                <br>
                <div class="inner-txt-p">
                    <p>Converting your book into an audiobook makes your content more shareable, engaging, and widely
                        accessible. Listeners can enjoy your work anytime, anywhere, whether they’re commuting, doing
                        household chores, or traveling. We make sure your story is heard, valued, and remembered.

                    </p>
                    <p>Hire professional audiobook writers and narrators today! </p>
                </div>
                <br>
                <div class="cta-btn">

                    <a href="javascript:;" class="btn popupBtn">Get A Quote</a>

                    <a href="javascript:;" onclick="setButtonURL();" class="btn liveChat">Live Chat</a>


                </div>


            </div>
            <div class=" col-md-6 inner-tx-p">
                <div class="inner-img-lp">
                    <img class="img-sec6 " src="assets/images/audio-book.png">
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
<section id="writing-ser">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="write-txt">
                    <h2>Our Three-Step Audiobook Production Process</h2>

                </div>
            </div>
            <div class="col-md-12 write-main-div">
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser1">
                        <div class="img-box img-ser1"></div>
                        <div class="ser-box-txt">
                            <h3>Writing</h3>
                            <p class="list-scroll">
                                We transform your ideas into a clear, compelling script, ensuring smooth flow and
                                eliminating unnecessary fillers so your story communicates effectively.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser4">
                        <div class="img-box img-ser2"></div>
                        <div class="ser-box-txt">
                            <h3>Recording</h3>
                            <p class="list-scroll">
                                Our professional narrators and voice artists bring your script to life. Our sound
                                editors then refine the audio, removing background noise and fine-tuning every detail
                                for a flawless listening experience.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser2">
                        <div class="img-box img-ser3"></div>
                        <div class="ser-box-txt">
                            <h3>Publishing </h3>
                            <p class="list-scroll">
                                We distribute your audiobook across all major platforms, including Audible, Spotify,
                                iTunes, and more, ensuring your work reaches listeners everywhere.

                            </p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- landing-page-inner -->
<!-- cta-1 -->


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
<!-- cta-1 -->


<!-- samples -->
<!-- samples -->
<?php include 'partials/slider.php'; ?>

<!-- creative-ser -->
<!-- <section id="creative-tab2" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="creative-txt">
                        <h2 class="text-center">Our Process</h2>

                    </div>
                </div>
            </div>
            <div class="row faq-tab-div2"> -->
<!-- Nav tabs -->

<!-- <div class="col-md-6">
                    <div id="crtab2-1" class="tabcontent2" style="display: block;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid " src="assets/images/p-1.png">
                        </div>
                    </div>
                    <div id="crtab2-2" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid " src="assets/images/p-2.png">
                        </div>
                    </div>
                    <div id="crtab2-3" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid " src="assets/images/p-3.png">
                        </div>
                    </div>
                    <div id="crtab2-4" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid " src="assets/images/p-4.png">
                        </div>
                    </div>
                </div> -->

<!-- ul -->
<!-- <div class="col-md-6">
                    <div class="tab crt-tab-menu">
                        <div class="border-lt">
                            <button class="tablinks2 btn-one-cr active" data-toggle="modal" data-target="#Mymodal"
                                onclick="openCity2(event, 'crtab2-1')" id="defaultOpen2">
                                <div class="tab-txt-2 tab-txt-img1">
                                    <h3>Research and Outlining the First Draft</h3>
                                    <p>
                                        Before delving into the manuscript, we form a clear understanding of your idea,
                                        instructions and requirements. We then conduct necessary research and devise a
                                        preliminary outline and a tentative table of contents for your review.
                                    </p>
                                </div>
                            </button>
                            <button class="tablinks2" onclick="openCity2(event, 'crtab2-2')">
                                <div class="tab-txt-2 tab-txt-img2">
                                    <h3>Writing</h3>
                                    <p>Once you approve the outline and table of contents, your dedicated writing team
                                        will write and share drafts of the manuscript with you chapter by chapter.
                                        Throughout the writing process, you have the facility of requesting an unlimited
                                        number of revisions till you are 100% satisfied.</p>
                                </div>
                            </button>
                            <button class="tablinks2" onclick="openCity2(event, 'crtab2-3')">
                                <div class="tab-txt-2 tab-txt-img3">
                                    <h3>Critical Review, Editing and Proofreading</h3>
                                    <p>
                                        Every draft we share with you is edited and proofread once written. Once we
                                        complete writing your manuscript, our editors perform a critical assessment of
                                        it, proofread and edit it thoroughly before finalisation.
                                    </p>
                                </div>
                            </button>
                            <button class="tablinks2" onclick="openCity2(event, 'crtab2-4')">
                                <div class="tab-txt-2 tab-txt-img4">
                                    <h3>Formatting, Typesetting and Design</h3>
                                    <p>
                                        Once your manuscript is finalised and approved from your end, we set the layout
                                        of the book, format it extensively, perform typesetting as per International
                                        publishing standards and design the book's cover as per your preferences.
                                    </p>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->

<section id="creative-tab2" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="creative-txt">
                    <h2 class="text-center mt-5">What to Expect from Our Audiobook Production Experts?</h2>

                </div>
            </div>
        </div>
        <div class="row faq-tab-div2">
            <!-- Nav tabs -->

            <!-- <div class="col-md-6">
                    <div id="crtab2-1" class="tabcontent2" style="display: block;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid "
                                src="nypublishers/assets/images/publishing/1.png">
                        </div>
                    </div>
                    <div id="crtab2-2" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid "
                                src="nypublishers/assets/images/publishing/2.png">
                        </div>
                    </div>
                    <div id="crtab2-3" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid "
                                src="nypublishers/assets/images/publishing/3.png">
                        </div>
                    </div>
                    <div id="crtab2-4" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid "
                                src="nypublishers/assets/images/publishing/4.png">
                        </div>
                    </div>
                </div> -->

            <!-- ul -->
            <!-- <div class="col-md-6">
                    <div class="tab crt-tab-menu">
                        <div class="border-lt">
                            <button class="tablinks2 btn-one-cr active" data-toggle="modal" data-target="#Mymodal"
                                onclick="openCity2(event, 'crtab2-1')" id="defaultOpen2">
                                <div class="tab-txt-2 tab-txt-img1">
                                    <h3>Draft Submission</h3>
                                    <p>The client submits the draft along with a set of instructions about editing,
                                        printing, and publishing.</p>
                                </div>
                            </button>
                            <button class="tablinks2" onclick="openCity2(event, 'crtab2-2')">
                                <div class="tab-txt-2 tab-txt-img2">
                                    <h3>Editing And Proofreading</h3>
                                    <p>We assign an experienced editor to review, peruse, edit, and proofread the draft
                                        meticulously.</p>
                                </div>
                            </button>
                            <button class="tablinks2" onclick="openCity2(event, 'crtab2-3')">
                                <div class="tab-txt-2 tab-txt-img3">
                                    <h3>Typesetting, Images, Illustrations</h3>
                                    <p>Once the manuscript is finalised after editing, we set its typeface and add
                                        images and graphical illustrations.</p>
                                </div>
                            </button>
                            <button class="tablinks2" onclick="openCity2(event, 'crtab2-4')">
                                <div class="tab-txt-2 tab-txt-img4">
                                    <h3>Book Designing</h3>
                                    <p>The book is professionally designed, with front and back covers, blurbs, author's
                                        bio, table of content, and disclaimer.</p>
                                </div>
                            </button>
                        </div>
                    </div>
                </div> -->

            <div class="row mb-5">
                <div class="col-12 col-xl-11 border-radius-20"
                    style="background-size: cover !important; background:url('childrens-book/img/fiction/service1.jpg');">
                    <div class="row py-5 align-items-center">
                        <div class="order-2 order-md-1 col-md-6 text-white pr-md-0 pl-md-5 text-center text-md-left">
                            <h3 class="h2Heading">Perfectly Tuned Narration</h3>
                            <p class="font-14"> Our team of audio and literary experts ensures your words are brought to
                                life with the perfect tone, pacing, and emotion, creating a lasting impact on your
                                audience.
                            </p>
                            <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                        </div>
                        <div class="order-1 order-md-2 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                            <img src="nypublishers/assets/images/1111.png" alt="professional writer service"
                                class="border-radius-20 img-non-fliud">
                        </div>
                    </div>
                </div>
                <div class="col-xl-1">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-xl-1"></div>
                <div class="col-12 col-xl-11 border-radius-20"
                    style="background-size: cover !important; background:url('childrens-book/img/fiction/web-development-service.jpg');">
                    <div class="row py-5 align-items-center">
                        <div class="order-2 order-md-2 col-md-6 text-white text-center text-md-left"
                            style="margin-left: -40px;">
                            <h3 class="h2Heading">High-Quality Editing</h3>
                            <p class="font-14">
                                We ensure your audiobook is crystal clear, free from background noise or distractions,
                                with only carefully added sound effects to enhance the listener’s experience.

                            </p>
                            <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                        </div>
                        <div style="width:100%;"
                            class="order-1 order-md-1 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                            <img src="nypublishers/assets/images/2222.png" alt="professional writer service"
                                class="border-radius-20 img-non-fliud-left">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12 col-xl-11 border-radius-20"
                    style="background-size: cover !important; background:url('childrens-book/img/fiction/service1.jpg');">
                    <div class="row py-5 align-items-center">
                        <div class="order-2 order-md-1 col-md-6 text-white pr-md-0 pl-md-5 text-center text-md-left">
                            <h3 class="h2Heading">All-Inclusive Audiobooks
                            </h3>
                            <p class="font-14">
                                We are dedicated to creating audiobooks that are accessible to everyone. Whether your
                                audience includes students, non-native speakers, or individuals with learning
                                differences, our expert production ensures an engaging, immersive listening experience
                                for all.

                            </p>
                            <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                        </div>
                        <div class="order-1 order-md-2 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                            <img src="nypublishers/assets/images/3333.png" alt="professional writer service"
                                class="border-radius-20 img-non-fliud">
                        </div>
                    </div>
                </div>
                <div class="col-xl-1">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-xl-1"></div>
                <div class="col-12 col-xl-11 border-radius-20"
                    style="background-size: cover !important; background:url('childrens-book/img/fiction/web-development-service.jpg');">
                    <div class="row py-5 align-items-center">
                        <div class="order-2 order-md-2 col-md-6 text-white text-center text-md-left"
                            style="margin-left: -40px;">
                            <h3 class="h2Heading">Meeting Industry Standards</h3>
                            <p class="font-14">
                                Every platform has its unique standards and publishing guidelines. Our experts help
                                you fulfill their eligibility criteria so that your audiobook is published on your
                                desired platform without any hassle.
                            </p>
                            <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                        </div>
                        <div class="order-1 order-md-1 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                            <img src="nypublishers/assets/images/4444.png" alt="professional writer service"
                                class="border-radius-20 img-non-fliud-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- creative-ser -->

<!--main-footer -->
<?php include 'partials/footer.php'; ?>