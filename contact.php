<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact SureChain | B2B Trade & Partnership Support</title>
<meta name="description" content="Reach out to SureChain for trade inquiries, partnerships, or support. Connect with our team and grow your business through trusted B2B networking.">
<meta name="keywords" content="contact SureChain, B2B trade inquiries India, connect with SureChain team, business partnerships India, networking support">

    <?php include 'includes/styles.php'; ?>
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
                        <h1 class="text-white text-center">Contact Us</h1>
                        <p class="text-white text-center">Have questions, business inquiries, or partnership ideas?
                            We'd love to hear from you.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- sub page content -->
        <section class="">
            <div class="container">
                <div class="row bg-white p-4 rounded-3 contact-box shadow rounded-4">
                    <div class="col-md-4 text-center">
                        <img src="img/R-Send.png" alt="Mail Icon" class="mb-3">
                        <h4>General Inquires</h4>
                        <a href="mailto:besure@surechain.ai">besure@surechain.ai</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="img/r-location.png" alt="Mail Icon" class="mb-3">
                        <h4>Office address</h4>
                        <p>Lakshmi Arcade, KPHB 5th Phase, Hyderabad, Telangana 500072</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="img/R-Camera.png" alt="Mail Icon" class="mb-3">
                        <h4>Website</h4>
                        <a href="./index.php" target="_blank">www.surechain.ai</a>
                    </div>
                </div>

                <div class="row justify-content-between mt-5">
                    <div class="col-md-4">
                        <div class="section-title">
                            <h6 class="font-secondary">FAST REPLIES</h6>
                            <h2>Contact Us</h2>
                        </div>
                        <p>Have questions, business inquiries, or partnership ideas?
                            We'd love to hear from you.</p>
                    </div>
                    <div class="col-md-6">
                        <form id="contact_form" method="post" action="./includes/contact_form.php">
    <div class="row">
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                <label for="firstName">First Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                <label for="lastName">Last Name</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                <label for="phone">Phone</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Message" id="msg" name="message" style="height: 150px" required></textarea>
                <label for="msg">Message</label>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="primary-btn text-white mt-2">Send</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- main content ends -->

    <?php include('includes/footer.php'); ?>
    <?php include('includes/scripts.php'); ?>

</html>