<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Simplify B2B Purchases with Verified Sellers | SureChain</title>
<meta name="description" content="Connect with trusted sellers on SureChain. Post requirements, compare quotes, pay securely, and trade confidently in India’s B2B marketplace.">
<meta name="keywords" content="verified sellers India, buy wholesale products, B2B buyer platform, secure B2B trade India, compare supplier quotes">

    <?php include 'includes/styles.php' ?>
</head>

<body>
    <div id="load"></div>

    <?php include 'includes/header.php' ?>
    <!-- main contnet starts-->
    <main class="">
        <section class="subpage-header">
            <div class="custom-container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h1 class="text-white text-center">Buyer</h1>
                        <p class="text-center text-white">Your Trusted Marketplace for Verified Products</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- sub page content -->
        <section class="buyer-page-section">
            <div class="container">
                <h2 class="text-center">Which products are you looking to buy?</h2>

                <!-- carousel -->
                <div class="products-carousel">
                    <div class="swiper-container productstobuy-page py-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-card shadow ">
                                    <img src="img/industries/electronics-indu-img.jpg" alt="" class="img-fluid imageproduct" />
                                    <a href="javascript:void(0)" class="d-block p-3 text-center h5">Electronics, Electricals & IT Hardware</a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-card shadow ">
                                    <img src="img/industries/home-interiors.jpg" alt="" class="img-fluid imageproduct" />
                                    <a href="javascript:void(0)" class="d-block p-3 text-center h5">Home & Interior Solutions</a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-card shadow ">
                                    <img src="img/industries/apparel.jpg" alt="" class="img-fluid imageproduct" />
                                    <a href="javascript:void(0)" class="d-block p-3 text-center h5">Apparel, Fashion & Personal Care</a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-card shadow ">
                                    <img src="img/industries/pharmaimage.jpg" alt="" class="img-fluid imageproduct" />
                                    <a href="javascript:void(0)" class="d-block p-3 text-center h5">Pharmaceuticals & Medical Supplies</a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-card shadow ">
                                    <img src="img/industries/medical-image.jpg" alt="" class="img-fluid imageproduct" />
                                    <a href="javascript:void(0)" class="d-block p-3 text-center h5">Medical & Hospital Equipment</a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-card shadow ">
                                    <img src="img/industries/industrial-machine-image.jpg" alt="" class="img-fluid imageproduct" />
                                    <a href="javascript:void(0)" class="d-block p-3 text-center h5">Industrial Machinery & Equipment</a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-card shadow ">
                                    <img src="img/industries/engineering-image.jpg" alt="" class="img-fluid imageproduct" />
                                    <a href="javascript:void(0)" class="d-block p-3 text-center h5">Engineering & Industrial Supplies</a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-card shadow ">
                                    <img src="img/industries/foodimage.jpg" alt="" class="img-fluid imageproduct" />
                                    <a href="javascript:void(0)" class="d-block p-3 text-center h5">Food, Agriculture & Agro Products</a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-card shadow ">
                                    <img src="img/industries/packing-image.jpg" alt="" class="img-fluid imageproduct" />
                                    <a href="javascript:void(0)" class="d-block p-3 text-center h5">Packaging & Chemical Solutions</a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-card shadow ">
                                    <img src="img/industries/construction-image.jpg" alt="" class="img-fluid imageproduct" />
                                    <a href="javascript:void(0)" class="d-block p-3 text-center h5">Construction & Building Materials</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                </div>
            </div>

            <!-- contact container -->
            <div class="contact-container">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-4 align-self-center">
                            <h2 class="text-white text-left mb-0 pb-1">Post your requirement</h2>
                            <p class="text-white text-left">Share your details and we will contact you shortly</p>
                            <img src="img/contactimg.jpg" alt="" class="img-fluid rounded d-none d-md-block">
                        </div>
                        <div class="col-md-6">
                            <div class="buyer-form bg-white p-4 rounded">
    <h4 class="text-center">Connect with us today!</h4>
    <p class="text-center"><small>* fields are mandatory</small></p>

    <form class="pt-4" method="post" action="includes/buyer_form.php">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="businessname" id="businessname" placeholder="Business Name" required>
            <label for="businessname">Business Name <span class="text-danger">*</span></label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="fullname" id="firstlastname" placeholder="Write your Name" required>
            <label for="firstlastname">Write your Name <span class="text-danger">*</span></label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email id" required>
            <label for="email">Email id <span class="text-danger">*</span></label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
            <label for="phone">Phone Number <span class="text-danger">*</span></label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Pincode" required>
            <label for="pincode">Pincode <span class="text-danger">*</span></label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="productdescribe" id="product-describe" placeholder="Describe Your Product Requirement" style="height: 100px" required></textarea>
            <label for="product-describe">Describe Your Product Requirement</label>
        </div>

        <p class="small pt-3" style="line-height: 20px;">
            <small>The personal data shared by you will be used by Surechain to connect with you directly or through its affiliates and partners.</small>
        </p>

        <input type="submit" class="form-control btn-talk" value="Submit">
    </form>
</div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- steps =-->
            <div class="simplesteps container pt-5">
                <article class="text-center">
                    <h2 class="pb-0 mb-0">Place an Order in 4 Simple Steps </h2>
                    <p>Seamless sourcing from verified sellers </p>
                </article>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="place-col">
                            <div class="icon mx-auto shadow">
                                <i class="bi bi-list-task text-white h1"></i>
                            </div>
                            <article class="mx-auto mt-3">
                                <h5>1. Share Your Requirements </h5>
                                <p>Specify product details, quantity, and delivery timelines.</p>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <div class="place-col">
                            <div class="icon mx-auto shadow">
                                <i class="bi bi-shield-check text-white h1"></i>
                            </div>
                            <article class="mx-auto mt-3">
                                <h5>2. Compare Offers </h5>
                                <p>Review and select the best quotes from trusted sellers. </p>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <div class="place-col">
                            <div class="icon mx-auto shadow">
                                <i class="bi bi-credit-card text-white h1"></i>
                            </div>
                            <article class="mx-auto mt-3">
                                <h5>3. Secure Payment </h5>
                                <p>Pay instantly or opt for flexible credit terms. </p>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <div class="place-col">
                            <div class="icon mx-auto shadow">
                                <i class="bi bi-truck text-white h1"></i>
                            </div>
                            <article class="mx-auto mt-3">
                                <h5>4. Receive & Approve </h5>
                                <p>Get doorstep delivery and confirm receipt hassle-free. </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- faq-->
            <div class="faqsection-page ">
                <div class="container">
                    <h2 class="text-center">Frequently Asked Questions </h2>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <!-- accordion -->
                            <div class="accordion accordion-flush faq-accordion">
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            <span class="flex-grow-1">1. How do I find products on SureChain? </span>
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            Use the search bar or browse categories to find products from verified sellers. You can also post your requirements to receive tailored offers.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            <span class="flex-grow-1">2. Are all sellers verified? </span>
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            Yes. Every seller on SureChain goes through a strict verification process to ensure authenticity and quality.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            <span class="flex-grow-1">3. Can I negotiate prices? </span>
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            Absolutely. You can compare multiple quotes and negotiate directly with sellers through our secure platform.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            <span class="flex-grow-1">4. How do payments work? </span>
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            Payments can be made instantly through our secure gateway or via approved credit terms, depending on your arrangement with the seller.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            <span class="flex-grow-1">5. What if my order is delayed or not as described? </span>
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            SureChain offers buyer protection — our support team will mediate disputes and ensure your payment is secure until your order is fulfilled as agreed.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            <span class="flex-grow-1">6. Do you offer bulk purchasing options? </span>
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            Yes. You can request bulk orders directly from sellers and get competitive pricing for large quantities.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                            <span class="flex-grow-1">7. Can I track my order? </span>
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            Yes. Once your order is shipped, you can track it in real time until it’s delivered.
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- main content ends -->

    <?php include('includes/footer.php'); ?>
    <?php include('includes/scripts.php'); ?>

    <script>
        var swiper = new Swiper('.productstobuy-page', {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },
            // init: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            }
        });
    </script>

</html>