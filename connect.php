<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connect with Verified Buyers & Sellers | SureChain</title>
<meta name="description" content="Grow your business on SureChain. Connect with verified buyers, sellers, and service providers in India to build meaningful partnerships.">
<meta name="keywords" content="connect with buyers India, verified sellers B2B, B2B networking platform, business partnerships India, SureChain connect">

    <?php include 'includes/styles.php'; ?>
    <?php include 'includes/data.php'; ?>
</head>

<body>
    <div id="load"></div>
    <?php include 'includes/header.php'; ?>


    <!-- main contnet starts-->
    <main class="">
        <section class="subpage-header">
            <div class="custom-container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h1 class="text-white text-center">Build Meaningful Business Relationships</h1>
                        <p class="text-white text-center">At Surechain, we make it easy for businesses to discover and connect with the right partners — verified buyers, sellers, and service providers — so you can grow with confidence. 
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- sub page content -->
        <section class="">
            <img src="img/connect-banner.png" alt="" class="img-fluid w-100">

            <!-- connect about -->
            <div class="about-connect">
                <div class="container">
                    <div class="row connect">
                        <div class="col-md-6 align-self-center text-white">
                            <p class="pb-2 text-white">We’re also here to support you at every step. Whether you have a question, need help, or want to partner with us, we’re just a message away. </p>
                            <article class="mb-3">
                                <p class="mb-2 text-white"><strong>Connect With Businesses –Discover Verified Partners </strong></p>
                                <ul class="list-items">
                                    <li>Search and connect with verified businesses in your industry</li>
                                    <li>View their SureScore and business profiles before you reach out</li>
                                    <li>Find partners based on location, category, and trust level</li>
                                </ul>
                            </article>

                            <article class="mb-3">
                                <p class="mb-2 text-white"><strong>Send & Respond to Leads  </strong></p>
                                <ul class="list-items">
                                    <li>Post your RFQ (Request for Quote) and get responses from trusted suppliers</li>
                                    <li>Respond to incoming leads quickly and track conversations easily</li>
                                </ul>
                            </article>

                            <article class="mb-3">
                                <p class="mb-2 text-white"><strong>Grow Your Network </strong></p>
                                <ul class="list-items">
                                    <li>Build long-term relationships beyond just one-time transactions</li>
                                    <li>Expand your reach to new regions and industries</li>
                                </ul>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <img src="img/connect-img01.png" alt="" class="img-fluid w-100 rounded-3">
                        </div>
                    </div>
                </div>
            </div>


            <!-- grow network -->
            <!-- core values -->
            <div class="core-values">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="section-title text-center">
                                <!-- <h6 class="font-secondary">CORE VALUES</h6> -->
                                <h2>Grow Your Network</h2>
                                <p>Build trusted business relationships - explore, invite, and manage connections within the Surechain network.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <?php foreach ($core_values as $value): ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="card valuecard p-4 rounded-3 shadow border-0 mb-3">
                                    <img src="<?= $value['img'] ?>" alt="Core Value Image">
                                    <h5 class="py-3 font-primary"><?= $value['title'] ?></h5>
                                    <p><?= $value['desc'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <!-- main content ends -->

    <?php include('includes/footer.php'); ?>
    <?php include('includes/scripts.php'); ?>

</html>