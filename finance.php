<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Finance & Trade Funding Solutions | SureChain</title>
<meta name="description" content="Access fast and flexible trade finance with SureChain. From invoices to exports, unlock document-backed capital to power business growth.">
<meta name="keywords" content="B2B finance solutions, trade finance India, business working capital, export finance platform, SureChain finance, B2B trade embedded finance solutions">

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
                        <h1 class="text-white text-center">Finance Solutions for Indian Businesses </h1>
                        <p class="text-white text-center">Surechain enables MSMEs, manufacturers, and exporters to access fast, flexible, and document-backed working capital-right within our B2B marketplace. From invoices to exports, power your growth with smart, trade-linked finance.  
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- sub page content -->
        <section class="">
            <img src="img/finance-banner.png" alt="" class="img-fluid w-100">

            <!-- connect tab -->
            <div class="connect-tab finance-tab">
                <div class="container">
                    <div class="row justify-content-center border-bottom pb-3 mb-3">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2 class="text-white pb-1 mb-0">Finance Solutions for Indian Businesses </h2>
                                <p class="font-regular text-white">Surechain enables MSMEs, manufacturers, and exporters to access fast, flexible, and document-backed working capital-right within our B2B marketplace. From invoices to exports, power your growth with smart, trade-linked finance. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- tab -->
            <div class="finance-tab-container">
                <div class="container bg-white rounded-3 shadow">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <!-- tab -->
                            <div class="parentHorizontalTab nested-tab my-5">
                                <ul class="resp-tabs-list hor_1">
                                    <li>Invoice Discounting </li>
                                    <li>PO Financing</li>
                                    <li>Invoice Financing</li>
                                    <li>Digital Credit Line </li>
                                    <li>Working Capital Loans</li>
                                    <li>Reverse Factoring</li>
                                </ul>
                                <div class="resp-tabs-container hor_1 mt-3">
                                    <div>
                                        <div class="finance-in-tab text-center">
                                            <h5 class="font-primary">Invoice Discounting</h5>
                                            <p class="py-2">Get paid early for accepted invoices to meet your business needs on time.</p>
                                            <a href="javascript:void(0)" class="btn-talk font-bold">Start Promoting</a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="finance-in-tab text-center">
                                            <h5 class="font-primary">PO Financing</h5>
                                            <p class="py-2">Get paid early for accepted invoices to meet your business needs on time.</p>
                                            <a href="javascript:void(0)" class="btn-talk font-bold">Start Promoting</a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="finance-in-tab text-center">
                                            <h5 class="font-primary">Invoice Financing</h5>
                                            <p class="py-2">Get paid early for accepted invoices to meet your business needs on time.</p>
                                            <a href="javascript:void(0)" class="btn-talk font-bold">Start Promoting</a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="finance-in-tab text-center">
                                            <h5 class="font-primary">Digital Credit Line</h5>
                                            <p class="py-2">Get paid early for accepted invoices to meet your business needs on time.</p>
                                            <a href="javascript:void(0)" class="btn-talk font-bold">Start Promoting</a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="finance-in-tab text-center">
                                            <h5 class="font-primary">Working Capital Loans</h5>
                                            <p class="py-2">Get paid early for accepted invoices to meet your business needs on time.</p>
                                            <a href="javascript:void(0)" class="btn-talk font-bold">Start Promoting</a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="finance-in-tab text-center">
                                            <h5 class="font-primary">Reverse Factoring</h5>
                                            <p class="py-2">Get paid early for accepted invoices to meet your business needs on time.</p>
                                            <a href="javascript:void(0)" class="btn-talk font-bold">Start Promoting</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ tab -->

            <!-- cards -->
            <div class="container cards-container">
                <div class="row pt-4">
                    <?php foreach ($finance_cards as $card): ?>
                        <div class="col-md-4">
                            <div class="card valuecard p-4 rounded-3 shadow border-0">
                                <img src="<?= $card['img'] ?>" alt="Core Value Image">
                                <h5 class="py-3 font-primary"><?= $card['title'] ?></h5>
                                <p><?= $card['desc'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>




        </section>
    </main>
    <!-- main content ends -->

    <?php include('includes/footer.php'); ?>
    <?php include('includes/scripts.php'); ?>

</html>