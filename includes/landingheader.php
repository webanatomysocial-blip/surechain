<!-- header-->
<header >
    <div class="custom-container desktop-hide">
        <div class="navbar navbar-expand-lg bsnav">
            <a class="navbar-brand" href="../index.php">
                <img src="../img/logo.png" alt="" />
            </a>
            <a class="blue-button" href="https://surechain.ai/sign-in/">Sign Up</a>
        </div>
        <div class="bsnav-mobile d-block d-xl-none">
            <div class="bsnav-mobile-overlay"></div>
            <div class="navbar"></div>
        </div>
    </div>
     <div class="custom-container mobile-hide">
        <div class="navbar navbar-expand-lg bsnav">
            <a class="navbar-brand" href="../index.php">
                <img src="../img/logo.png" alt="" />
            </a>
            <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
             <div class="collapse navbar-collapse">
                <ul class="navbar-nav navbar-mobile ms-xl-5">
                     <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '../index.php') {
                                                        echo 'activenav';
                                                    } else {
                                                        echo 'nav-link';
                                                    } ?>" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '#tabs') {
                                                        echo 'activenav';
                                                    } else {
                                                        echo 'nav-link';
                                                    } ?>" href="#tabs">How It Works</a></li>
                    <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '#seller') {
                                                        echo 'activenav';
                                                    } else {
                                                        echo 'nav-link';
                                                    } ?>" href="#seller">For Sellers</a></li>
                    <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '#buyer') {
                                                        echo 'activenav';
                                                    } else {
                                                        echo 'nav-link';
                                                    } ?>" href="#buyer">For Buyers</a></li>
                    <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '../index.php') {
                                                        echo 'activenav';
                                                    } else {
                                                        echo 'nav-link';
                                                    } ?>" href="../contact.php">Contact</a></li>
                 

                </ul>
                <ul class="navbar-nav navbar-mobile">
                    <li class="nav-item"><a class="primary-btn text-white mt-2" href="https://surechain.ai/sign-in/" target="_blank">+ Register Now</a></li>
                </ul>
            </div>
        </div>
        <div class="bsnav-mobile d-block d-xl-none">
            <div class="bsnav-mobile-overlay"></div>
            <div class="navbar"></div>
        </div>
    </div>
</header>
<!-- header ends /-->