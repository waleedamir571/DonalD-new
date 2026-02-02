<?php include 'partials/header.php'; ?>

<style>
    .bannnform {
        border-radius: 38px;
        padding: 3rem;
        text-align: center;
        left: 130px;
        top: -3px !important;
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

    }

    #creative-tab2 {
        overflow: hidden;
    }
</style>
<!-- header-end -->

<!-- banner-start -->
<section class="banneroad01-ap bpss new_amazon">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bnr-txt">
                            <h4>Ensuring Worldwide Publication of your Stories on Amazon</h4>
                            <h2>Reach Global Market with Personalized Amazon Book Publishing Services </h2>
                            <p class="para-line">Your stories deserve to be read worldwide. But sometimes, traditional
                                publishing houses can be a hurdle in achieving that dream. At NY Publishers, our amazon
                                book publishing services can help you publish your book on Amazon, giving you access to
                                a global audience.</p>
                            <p class="para-line">Don’t let rejection hold you back from realizing your literary
                                ambitions. Get in touch for worldwide outreach. </p>

                        </div>
                        <div class="cta-btn btnres">

                            <a href="javascript:;" class="btn btnres1 pub2 popupBtn">Get A Quote</a>

                            <a href="javascript:;" onclick="setButtonURL();" class="btn btnres2 pub"
                                style="background: #084e7c;color: white;">Talk to an Expert </a>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <section class="custom-ban-form">
                            <div class="form-banner bannnform">
                                <h3 style="font-size: 22px;padding-bottom: 10px;text-align: center;">
                                    <Strong>Get In Touch With <br>Our Experts</Strong>
                                </h3>
                                <p class="call-details text-center mt-2 mb-2">
                                    To Schedule a consultation please send us your details
                                    or call now
                                </p>
                                <p
                                    style="font-family: 'Raleway';font-style: normal;font-weight: 700;font-size: 16px;-height: 19px;text-transform: capitalize;margin-bottom: 10px;">
                                    <a href="tel:(551) 290-8897">
                                        (551) 290-8897
                                    </a>
                                </p>
                                <div class="banform">
                                    <div class="container">
                                        <div class="row">
                                            <div class="ban-form">
                                                <form class="cmxform" action=""
                                                    method="POST">
                                                    <input type="hidden" name="route" value="/amazon-publishing/">
                                                    <input type="hidden" name="brand" value="nypublishers">
                                                    <input type="hidden" name="token"
                                                        value="1147cabbfecc8c45a410a7b81aa36436aad34ed79fda5f77c790b0492d5f93b3">
                                                    <input type="hidden" name="tag" value="banner form">
                                                    <input type="hidden" name="price" value="null">
                                                    <input type="hidden" name="news" value="1">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="fldset">
                                                                <input
                                                                    onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))"
                                                                    id="username" name="name" minlength="2" type="text"
                                                                    placeholder="Enter your name *" required />

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="fldset">
                                                                <input id="cemail" type="email" name="email"
                                                                    placeholder="Enter email here *" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="fldset">
                                                                <input onkeypress="return isNumberKey(event);"
                                                                    id="phone-country" name="phone" type="text"
                                                                    placeholder="Phone Number *" maxlength="10"
                                                                    required />
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="fldset">
                                                                <textarea name="brief" rows="7"
                                                                    placeholder="Talk About Your Project"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="fldset">
                                                                <input name="submit" type="submit"
                                                                    placeholder="Connect With Us" required />


                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
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

<!-- form-sec -->
<!-- form-sec -->

<!-- landing-page-inner -->
<section id="lp-writing">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Move Your Story Fast with Amazon Publisher Services</h2>
                <br>
                <div class="inner-txt-p">
                    <p>We offer the most efficient and comprehensive amazon publisher services to authors and aspiring
                        writers. At NY Publishers, we are committed to helping authors and publishers move their stories
                        fast.  </p>
                    <p>Our suite of Amazon book publisher services is designed to help authors at every stage of the
                        publishing process. It covers a range of areas, including editing, design, marketing, and
                        distribution, ensuring that your book is not only of the highest quality but also reaches a wide
                        audience.</p>
                </div>
                <h2>Manuscript Editing and Proofreading </h2>
                <p>Our editing services are second to none. With a team of amazon book publishers and editing experts,
                    you can refine your manuscript, ensuring that it is error-free, engaging, well-structured, and ready
                    for publication. </p>
                <h2>Designing to Perfection </h2>
                <p>Our designers can create stunning book covers and interior layouts that capture the essence of your
                    book and entice readers to pick it up. Our amazon book publishing company focuses on soaring your
                    book sales, and for that, they are ready to go above and beyond. </p>
                <h2>Marketing Expertise </h2>
                <p>Our marketing services are designed to help you reach a wider audience and promote your book
                    effectively. From creating eye-catching ads to running targeted campaigns on social media, we offer
                    a range of services that can help your book stand out in a crowded marketplace. </p>
                <h2>Distributions Competences </h2>
                <p>We also offer distribution services, ensuring that your book is available for purchase on Amazon and
                    other major online retailers, reaching readers around the world.</p>
                <br>
                <div class="cta-btn">

                    <a href="javascript:;" class="btn popupBtn">Get A Quote</a>

                    <a href="javascript:;" onclick="setButtonURL();" class="btn liveChat">Live Chat</a>


                </div>


            </div>
            <div class=" col-md-6 inner-tx-p">
                <div class="inner-img-lp">
                    <img class="img-sec5" src="assets/images/bookps.png">
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
                    <h2>Our Amazing Process That Drives Inspiring Outcomes</h2>
                    <p>We are honored to provide you top-notch quality content to make sure that your trust is
                        gained for a lifetime.</p>

                </div>
            </div>
            <div class="col-md-12 write-main-div">
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser1">
                        <div class="img-box img-ser1"></div>
                        <div class="ser-box-txt">
                            <h3>Publishing Experts </h3>
                            <p class="list-scroll">Our team of publishing experts is well-versed in all platforms,
                                including Amazon, and can ensure exceptional quality for your book, no matter the genre.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser4">
                        <div class="img-box img-ser2"></div>
                        <div class="ser-box-txt">
                            <h3>Personalized Feedback </h3>
                            <p class="list-scroll">Submit your draft and instructions, and we’ll provide personalized
                                Feedback to meet your expectations and improve your work.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ser-img-box">
                    <div class="ser-box ser2">
                        <div class="img-box img-ser3"></div>
                        <div class="ser-box-txt">
                            <h3>Tailored Service </h3>
                            <p class="list-scroll">We’ll assign an experienced agent to your project, considering your
                                needs and developing a customized plan to publish your book on time. We’re committed to
                                delivering excellent work and punctuality, which you won’t find with any cheap
                                publishing services. </p>

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
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/axiom.webp"
                            class="img-fluid" alt="axiom"></div>
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/gold.webp" class="img-fluid"
                            alt="gold"></div>
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/finalist.webp"
                            class="img-fluid" alt="finalist"></div>
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/global.webp"
                            class="img-fluid" alt="global"></div>
                    <div class="award-winning-logo"><img src="nypublishers/assets/images/illum.webp"
                            class="img-fluid" alt="illum"></div>
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
<section id="sample">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="sample-txt">
                        <h2><b>Work –We Are Proud to Showcase </b></h2>
                        <p>Our amazon publishing company is proud to share our story of success. Our clients are from
                            all over the USA and beyond. Here are some of the projects that reveal our commitment to our
                            projects. </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- portfolio -->
        <div class="sample-tab">
            <div align="center">

            </div>
            <br>

            <div id="tab1" class="tab-pane active show">
                <div class="book-covers">
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Stolen-Voices-Missing-Murdered-County-ebook/dp/B0CTL3KZD6/ref=sr_1_3?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.Z33eiuOFqADdEyCOit8vIKP2T7VzzVB2JiN-_uAiz_LPkQtZK8dd67T9w__WPpTMdn2NRDjwTMjT6F9KF1dE-8JtP_Fqt65O3x3Lbccx3BLYCJiBYMTFG0BZF6P80qGHxM2h-0e_PwUti62upVbIVOgE5uxauhsUjWhOatMHgyH_KDO6vT9OJ5JGElpsvlipFP2WcZ64y8RGabn-4KhBDuzMyNES0eGKOanJXDLq158.WSm10dJprDk9u9uZLkx3xFiGENykk8HnnhevRiuqK94&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737583866&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-3"
                                target="_blank"><img class="" src="assets/images/final/1.jpg"></a>
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Weather-Man-Overcoming-managing-storms/dp/1966642091/ref=sr_1_4?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.Z33eiuOFqADdEyCOit8vIKP2T7VzzVB2JiN-_uAiz_LPkQtZK8dd67T9w__WPpTMdn2NRDjwTMjT6F9KF1dE-8JtP_Fqt65O3x3Lbccx3BLYCJiBYMTFG0BZF6P80qGHxM2h-0e_PwUti62upVbIVOgE5uxauhsUjWhOatMHgyH_KDO6vT9OJ5JGElpsvlipFP2WcZ64y8RGabn-4KhBDuzMyNES0eGKOanJXDLq158.WSm10dJprDk9u9uZLkx3xFiGENykk8HnnhevRiuqK94&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737583892&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-4"
                                target="_blank"><img class="" src="assets/images/final/2.jpg"></a>
                            <div class="badge rounded bg-body color-blue"></div>
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/I-BELONG-Jami-Swenson/dp/1964365139/ref=sr_1_18?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.ykSXTIssCK9S8hE9WoPDIXAxJgnHiSM-72im_WDnRCafBGBiK7Iipw_9_piZ1x1lCqO_dVA4p7rm-SZkUDtn7BgMaQk7wOXo-x54Txnxc3xbknHIooO6bveUQNb36oFTOBawPXUTgnIGmb1QAuhS3TsxasZodHB7P0vTSS9Aan-9jjr0GN8eDcQ3eJi2146f2D73zqu1vDONfZ7l2ki_bJu8vbtni-LV_0VZJL3xWYg.VNV2cSRHfcEVaTBJMVH16a3NQoBDrEEG_vJ8bTjVR8k&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737583934&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-18&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/3.jpg"></a>
                            <div class="badge rounded bg-body color-blue"></div>
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Trinity-Infinity-Divinity-David-Courtney/dp/1966642105/ref=sr_1_24?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.ykSXTIssCK9S8hE9WoPDIXAxJgnHiSM-72im_WDnRCafBGBiK7Iipw_9_piZ1x1lCqO_dVA4p7rm-SZkUDtn7BgMaQk7wOXo-x54Txnxc3xbknHIooO6bveUQNb36oFTOBawPXUTgnIGmb1QAuhS3TsxasZodHB7P0vTSS9Aan-9jjr0GN8eDcQ3eJi2146f2D73zqu1vDONfZ7l2ki_bJu8vbtni-LV_0VZJL3xWYg.VNV2cSRHfcEVaTBJMVH16a3NQoBDrEEG_vJ8bTjVR8k&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584029&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-24&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/4.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Private-Relationship-Van-Cliburn-fascinating/dp/1964030552/ref=sr_1_26?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.ykSXTIssCK9S8hE9WoPDIXAxJgnHiSM-72im_WDnRCafBGBiK7Iipw_9_piZ1x1lCqO_dVA4p7rm-SZkUDtn7BgMaQk7wOXo-x54Txnxc3xbknHIooO6bveUQNb36oFTOBawPXUTgnIGmb1QAuhS3TsxasZodHB7P0vTSS9Aan-9jjr0GN8eDcQ3eJi2146f2D73zqu1vDONfZ7l2ki_bJu8vbtni-LV_0VZJL3xWYg.VNV2cSRHfcEVaTBJMVH16a3NQoBDrEEG_vJ8bTjVR8k&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584029&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-26&amp;xpid=mJUvuLXvqRTQm"
                                taget="_blank"><img class="" src="assets/images/final/5.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/YOU-ARE-NOT-ALONE-Journey/dp/1964365031/ref=sr_1_29?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.ykSXTIssCK9S8hE9WoPDIXAxJgnHiSM-72im_WDnRCafBGBiK7Iipw_9_piZ1x1lCqO_dVA4p7rm-SZkUDtn7BgMaQk7wOXo-x54Txnxc3xbknHIooO6bveUQNb36oFTOBawPXUTgnIGmb1QAuhS3TsxasZodHB7P0vTSS9Aan-9jjr0GN8eDcQ3eJi2146f2D73zqu1vDONfZ7l2ki_bJu8vbtni-LV_0VZJL3xWYg.VNV2cSRHfcEVaTBJMVH16a3NQoBDrEEG_vJ8bTjVR8k&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584029&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-29&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/6.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Inheritable-Luminosity-Chelsey-R-Embry-ebook/dp/B0DKRBSRKM/ref=sr_1_31?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.ykSXTIssCK9S8hE9WoPDIXAxJgnHiSM-72im_WDnRCafBGBiK7Iipw_9_piZ1x1lCqO_dVA4p7rm-SZkUDtn7BgMaQk7wOXo-x54Txnxc3xbknHIooO6bveUQNb36oFTOBawPXUTgnIGmb1QAuhS3TsxasZodHB7P0vTSS9Aan-9jjr0GN8eDcQ3eJi2146f2D73zqu1vDONfZ7l2ki_bJu8vbtni-LV_0VZJL3xWYg.VNV2cSRHfcEVaTBJMVH16a3NQoBDrEEG_vJ8bTjVR8k&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584029&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-31&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/7.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Silent-Paralyzer-decade-life-disrupted-ebook/dp/B0CVJQ99P9/ref=sr_1_32?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.ykSXTIssCK9S8hE9WoPDIXAxJgnHiSM-72im_WDnRCafBGBiK7Iipw_9_piZ1x1lCqO_dVA4p7rm-SZkUDtn7BgMaQk7wOXo-x54Txnxc3xbknHIooO6bveUQNb36oFTOBawPXUTgnIGmb1QAuhS3TsxasZodHB7P0vTSS9Aan-9jjr0GN8eDcQ3eJi2146f2D73zqu1vDONfZ7l2ki_bJu8vbtni-LV_0VZJL3xWYg.VNV2cSRHfcEVaTBJMVH16a3NQoBDrEEG_vJ8bTjVR8k&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584029&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-32&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/8.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Black-Beautiful-Side-Us/dp/1964365368/ref=sr_1_33?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.dkwkmCcMrJQy84N_2jxJD7FXFaiB38Y0VTo980LFEzpaG3Y9qu8HEZ7K4zFVTpMblz5cYttxJKVP8iUN7rH350a0V79FeyxlPpbS5i6988SrS8BmsXY0suB9p0UmPwosCOIolNVZTbeI6cOeOrkWnNO7ZsrEEIyhA4aQRN3FYVyaIDeLpvsr7X5FFfI157Mvksy4zM59HprbwXJ-fCqDKG9zYy_ahnozd5QP05VDrX8.-elS83kkkMTrd40iV_lCmOVvAjHzl6QgqGIonCE6OLU&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584229&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-33&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/9.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Filing-Insurance-Claim-Logan-Dory/dp/1964030390/ref=sr_1_58?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9._mWcQwHBDDoBs8bYpo_p8M37PsFcWgB5VaY3_fZjxe6CKbglPNMSV86YWsNaRSg6QolIPEsOQaXaTF3Zaryz4PLZtDl8jovAMoKNGXCCo_elbKTCma_cehq3o6yzsfsvT0vk8wA9UEIgjjK7-H-U89AfvACuLLEKi6r463GHFhuw1HQVB8y4KjTFAGCEU_3raZr_O8MPcH9zLIe4NNNStnNYpGCv7MbdvKdQV_OOjaQ.EFxRGY7gzNiooEHtS1T1AhUOXygt6XyQBYUIjVzUvo8&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584384&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-58&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/10.jpg"></a>
                        </div>
                    </div>

                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/DARK-ALLEY-Sandra-Littlefield-ebook/dp/B0CSV8VGWR/ref=sr_1_61?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9._mWcQwHBDDoBs8bYpo_p8M37PsFcWgB5VaY3_fZjxe6CKbglPNMSV86YWsNaRSg6QolIPEsOQaXaTF3Zaryz4PLZtDl8jovAMoKNGXCCo_elbKTCma_cehq3o6yzsfsvT0vk8wA9UEIgjjK7-H-U89AfvACuLLEKi6r463GHFhuw1HQVB8y4KjTFAGCEU_3raZr_O8MPcH9zLIe4NNNStnNYpGCv7MbdvKdQV_OOjaQ.EFxRGY7gzNiooEHtS1T1AhUOXygt6XyQBYUIjVzUvo8&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584384&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-61&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/11.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/ANGUS-HERO-Pollinators-Stories-Tessier-ebook/dp/B0CRK73LLG/ref=sr_1_62?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9._mWcQwHBDDoBs8bYpo_p8M37PsFcWgB5VaY3_fZjxe6CKbglPNMSV86YWsNaRSg6QolIPEsOQaXaTF3Zaryz4PLZtDl8jovAMoKNGXCCo_elbKTCma_cehq3o6yzsfsvT0vk8wA9UEIgjjK7-H-U89AfvACuLLEKi6r463GHFhuw1HQVB8y4KjTFAGCEU_3raZr_O8MPcH9zLIe4NNNStnNYpGCv7MbdvKdQV_OOjaQ.EFxRGY7gzNiooEHtS1T1AhUOXygt6XyQBYUIjVzUvo8&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584384&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-62&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/12.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Moody-Toody-Rosedale-Where-Whales-ebook/dp/B0CS4YXBT5/ref=sr_1_63?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9._mWcQwHBDDoBs8bYpo_p8M37PsFcWgB5VaY3_fZjxe6CKbglPNMSV86YWsNaRSg6QolIPEsOQaXaTF3Zaryz4PLZtDl8jovAMoKNGXCCo_elbKTCma_cehq3o6yzsfsvT0vk8wA9UEIgjjK7-H-U89AfvACuLLEKi6r463GHFhuw1HQVB8y4KjTFAGCEU_3raZr_O8MPcH9zLIe4NNNStnNYpGCv7MbdvKdQV_OOjaQ.EFxRGY7gzNiooEHtS1T1AhUOXygt6XyQBYUIjVzUvo8&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584384&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-63&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/13.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Shadows-Doubt-Ecstasy-Matthew-Green-ebook/dp/B0CQWPDXCM/ref=sr_1_64?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9._mWcQwHBDDoBs8bYpo_p8M37PsFcWgB5VaY3_fZjxe6CKbglPNMSV86YWsNaRSg6QolIPEsOQaXaTF3Zaryz4PLZtDl8jovAMoKNGXCCo_elbKTCma_cehq3o6yzsfsvT0vk8wA9UEIgjjK7-H-U89AfvACuLLEKi6r463GHFhuw1HQVB8y4KjTFAGCEU_3raZr_O8MPcH9zLIe4NNNStnNYpGCv7MbdvKdQV_OOjaQ.EFxRGY7gzNiooEHtS1T1AhUOXygt6XyQBYUIjVzUvo8&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584384&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-64&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/14.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Roriks-Embrace-Interstellar-Alliance-Book-ebook/dp/B0DCKF5H23/ref=sr_1_65?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.6e4DX15XAGetXRQFCww1cxzZvvTB5_X3KC9HbVgZHbtB0vNJGsOSU9fBudGtRUNb0u5YR6u3xxzTF6Lkthw3QtHDTicuJ0OJQ_-O0dyP7__tenTHLl7edlv9g3T2GZVxtfcViSScMY1kmgQURbcD3EOik2ZaEbTpdgOltavRTX7JpADOkLViZlvcfjOfjCp91ySidF782dI5m28quuVf-q1ZcxXBgBl3alPhjnvbwQE.0XBkjKjY_iWw5Tlhzz2P7X153k9his7I6U-xQdfuweI&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584551&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-65&amp;xpid=mJUvuLXvqRTQm"
                                target="_blank"><img class="" src="assets/images/final/15.jpg"></a>
                        </div>
                    </div>
                    <div class="body-content">
                        <div class="cover">
                            <a href="https://www.amazon.com/Shipwrecked-Soul-My-Journey-Recovery-ebook/dp/B0CV2WFPBD/ref=sr_1_66?crid=3HISYG1QFS6&amp;dib=eyJ2IjoiMSJ9.6e4DX15XAGetXRQFCww1cxzZvvTB5_X3KC9HbVgZHbtB0vNJGsOSU9fBudGtRUNb0u5YR6u3xxzTF6Lkthw3QtHDTicuJ0OJQ_-O0dyP7__tenTHLl7edlv9g3T2GZVxtfcViSScMY1kmgQURbcD3EOik2ZaEbTpdgOltavRTX7JpADOkLViZlvcfjOfjCp91ySidF782dI5m28quuVf-q1ZcxXBgBl3alPhjnvbwQE.0XBkjKjY_iWw5Tlhzz2P7X153k9his7I6U-xQdfuweI&amp;dib_tag=se&amp;keywords=ny+publishers&amp;qid=1737584569&amp;sprefix=ny+publisher%2Caps%2C326&amp;sr=8-66&amp;xpid=mJUvuLXvqRTQm"
                                target=""><img class="" src="assets/images/final/16.jpg"></a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- portfolio -->
        </div>
    </div>
    </div>

</section>

<!-- creative-ser -->
<section id="creative-tab2" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="creative-txt">
                    <h2 class="text-center">Our Self-Publishing a Book On Amazon Process</h2>

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
                            <h3 class="h2Heading">Submission of Manuscript and Requirements </h3>
                            <p class="font-14">Send your manuscript and requirements to our agency for book publication,
                                along with any other instructions. Our team will review it and share the instant quote
                                to get the project started. </p>
                            <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                        </div>
                        <div class="order-1 order-md-2 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                            <img src="nypublishers/assets/images/publishing/steps3.png"
                                alt="professional writer service" class="border-radius-20 img-non-fliud">
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
                            <h3 class="h2Heading">Development of a Customized Plan </h3>
                            <p class="font-14">
                                Based on your needs, our experts will develop a tailored plan for publishing your book
                                on Amazon. Whether you need the best marketing strategy for amazon or designing
                                expertise for a book cover, our company will deliver you everything best.
                            </p>
                            <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                        </div>
                        <div style="width:100%;"
                            class="order-1 order-md-1 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                            <img src="nypublishers/assets/images/publishing/steps2.webp"
                                alt="professional writer service" class="border-radius-20 img-non-fliud-left">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12 col-xl-11 border-radius-20"
                    style="background-size: cover !important; background:url('childrens-book/img/fiction/service1.jpg');">
                    <div class="row py-5 align-items-center">
                        <div class="order-2 order-md-1 col-md-6 text-white pr-md-0 pl-md-5 text-center text-md-left">
                            <h3 class="h2Heading">Editing, Designing, and Formatting </h3>
                            <p class="font-14">
                                Our professionals will take care of editing, designing, formatting, and creating a book
                                cover to ensure your book is ready for publication.
                            </p>
                            <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                        </div>
                        <div class="order-1 order-md-2 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                            <img src="nypublishers/assets/images/publishing/steps1.jpg"
                                alt="professional writer service" class="border-radius-20 img-non-fliud">
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
                            <h3 class="h2Heading">Publication and Marketing </h3>
                            <p class="font-14">
                                We’ll publish your book on Amazon, and our top marketing experts will help promote it to
                                reach a broader audience. With us, you don’t have to worry about the cost to self
                                publish on amazon, as we provide multiple bundles and affordable packages.
                            </p>
                            <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                        </div>
                        <div class="order-1 order-md-1 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                            <img src="nypublishers/assets/images/publishing/steps4.jpg"
                                alt="professional writer service" class="border-radius-20 img-non-fliud-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                            <img class="img-fluid lazy"
                                src="nypublishers/assets/images/publishing/1.png">
                        </div>
                    </div>
                    <div id="crtab2-2" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid lazy"
                                src="nypublishers/assets/images/publishing/2.png">
                        </div>
                    </div>
                    <div id="crtab2-3" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid lazy"
                                src="nypublishers/assets/images/publishing/3.png">
                        </div>
                    </div>
                    <div id="crtab2-4" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid lazy"
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

<!-- <div class="row mb-5">
                    <div class="col-12 col-xl-11 border-radius-20" style="background-size: cover !important; background:url('childrens-book/img/fiction/service1.jpg');">
                        <div class="row py-5 align-items-center">
                            <div class="order-2 order-md-1 col-md-6 text-white pr-md-0 pl-md-5 text-center text-md-left">
                                <h3 class="h2Heading">Draft Submission</h3>
                                <p class="font-14">The client submits the draft along with a set of instructions about editing,
                                        printing, and publishing.</p>
                                    <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                            </div>
                            <div class="order-1 order-md-2 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                                <img src="nypublishers/assets/images/publishing/steps1.jpg" alt="professional writer service" class="border-radius-20 img-non-fliud">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1">
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-xl-1"></div>
                    <div class="col-12 col-xl-11 border-radius-20" style="background-size: cover !important; background:url('childrens-book/img/fiction/web-development-service.jpg');">
                        <div class="row py-5 align-items-center">
                            <div class="order-2 order-md-2 col-md-6 text-white text-center text-md-left" style="margin-left: -40px;">
                                <h3 class="h2Heading">Editing And Proofreading</h3>
                                <p class="font-14">
                                    We assign an experienced editor to review, peruse, edit, and proofread the draft
                                    meticulously.
                                </p>
                                <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                            </div>
                            <div style="width:100%;" class="order-1 order-md-1 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                                <img src="nypublishers/assets/images/publishing/steps2.webp" alt="professional writer service" class="border-radius-20 img-non-fliud-left">
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="row mb-5">
                    <div class="col-12 col-xl-11 border-radius-20" style="background-size: cover !important; background:url('childrens-book/img/fiction/service1.jpg');">
                        <div class="row py-5 align-items-center">
                            <div class="order-2 order-md-1 col-md-6 text-white pr-md-0 pl-md-5 text-center text-md-left">
                                <h3 class="h2Heading">Typesetting, Images, Illustrations</h3>
                                <p class="font-14">
                                    Once the manuscript is finalised after editing, we set its typeface and add
                                        images and graphical illustrations.
                                </p>
                                    <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                            </div>
                            <div class="order-1 order-md-2 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                                <img src="nypublishers/assets/images/publishing/steps3.png" alt="professional writer service" class="border-radius-20 img-non-fliud">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1">
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-xl-1"></div>
                    <div class="col-12 col-xl-11 border-radius-20" style="background-size: cover !important; background:url('childrens-book/img/fiction/web-development-service.jpg');">
                        <div class="row py-5 align-items-center">
                            <div class="order-2 order-md-2 col-md-6 text-white text-center text-md-left" style="margin-left: -40px;">
                                <h3 class="h2Heading">Book Designing</h3>
                                <p class="font-14">
                                    The book is professionally designed, with front and back covers, blurbs, author's
                                        bio, table of content, and disclaimer.
                                </p>
                                <button class="btn btn-theme bg-theme-white mt-4 popupBtn">CONSULT AN EXPERT</button>
                            </div>
                            <div class="order-1 order-md-1 col-md-6 align-self-center pt-3 pt-md-0 pb-md-0">
                                <img src="nypublishers/assets/images/publishing/steps4.jpg" alt="professional writer service" class="border-radius-20 img-non-fliud-left">
                            </div>
                        </div>
                    </div>  
                </div> -->
</div>
</div>
</section>
<!-- creative-ser -->


<!--main-footer -->
<?php include 'partials/footer.php'; ?>