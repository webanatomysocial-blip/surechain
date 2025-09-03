<!-- header-->
<header>
    <div class="custom-container">
        <div class="navbar navbar-expand-lg bsnav">
            <a class="navbar-brand" href="../index.php">
                <img src="../img/logo.png" alt="" />
            </a>
            <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
             <div class="collapse navbar-collapse justify-content-xl-between align-self-center">
                <ul class="navbar-nav navbar-mobile ms-xl-5">
                    <li class="nav-item dropdown zoom"><a class="<?php if (
                                                                        basename($_SERVER['SCRIPT_NAME']) == '../seller.php' ||
                                                                        basename($_SERVER['SCRIPT_NAME']) == '../buyer.php' ||
                                                                        basename($_SERVER['SCRIPT_NAME']) == '../industries.php'
                                                                      
                                                                    ) {
                                                                        echo 'activenav';
                                                                    } else {
                                                                        echo '';
                                                                    } ?> nav-link" href="#">Trade <i class="caret"></i></a>
                        <ul class="navbar-nav rounded-3">
                            <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '../seller.php') {
                                                                echo 'activesubnav';
                                                            } else {
                                                                echo 'nav-link';
                                                            } ?>" href="../seller.php">Seller</a></li>
                            <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '../buyer.php') {
                                                                echo 'activesubnav';
                                                            } else {
                                                                echo 'nav-link';
                                                            } ?>" href="../buyer.php">Buyer</a></li>
                            <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '../industries.php') {
                                                                echo 'activesubnav';
                                                            } else {
                                                                echo 'nav-link';
                                                            } ?>" href="../industries.php">Industries</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown zoom"><a class="<?php if (
                                                                        basename($_SERVER['SCRIPT_NAME']) == 'javascript:void(0)' ||
                                                                        basename($_SERVER['SCRIPT_NAME']) == 'javascript:void(0)' ||
                                                                        basename($_SERVER['SCRIPT_NAME']) == 'javascript:void(0)' ||
                                                                        basename($_SERVER['SCRIPT_NAME']) == 'javascript:void(0)'
                                                                    ) {
                                                                        echo 'activenav';
                                                                    } else {
                                                                        echo '';
                                                                    } ?> nav-link" href="#">Features <i class="caret"></i></a>
                        <ul class="navbar-nav rounded-3">
                            <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '../connect.php') {
                                                                echo 'activesubnav';
                                                            } else {
                                                                echo 'nav-link';
                                                            } ?>" href="../connect.php">Connect</a></li>
                            <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '../promote.php') {
                                                                echo 'activesubnav';
                                                            } else {
                                                                echo 'nav-link';
                                                            } ?>" href="../promote.php">Promote</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown zoom"><a class="<?php if (
                                                                        basename($_SERVER['SCRIPT_NAME']) == 'javascript:void(0)' ||
                                                                        basename($_SERVER['SCRIPT_NAME']) == 'javascript:void(0)' ||
                                                                        basename($_SERVER['SCRIPT_NAME']) == 'javascript:void(0)' ||
                                                                        basename($_SERVER['SCRIPT_NAME']) == 'javascript:void(0)'
                                                                    ) {
                                                                        echo 'activenav';
                                                                    } else {
                                                                        echo '';
                                                                    } ?> nav-link" href="#">Company <i class="caret"></i></a>
                        <ul class="navbar-nav rounded-3">
                            <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '../about.php') {
                                                                echo 'activesubnav';
                                                            } else {
                                                                echo 'nav-link';
                                                            } ?>" href="../about.php">About us</a></li>
                            <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == '../customer-support.php') {
                                                                echo 'activesubnav';
                                                            } else {
                                                                echo 'nav-link';
                                                            } ?>" href="../customer-support.php">Support</a></li>
                            <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == 'faq.php') {
                                                                echo 'activesubnav';
                                                            } else {
                                                                echo 'nav-link';
                                                            } ?>" href="../faq.php">FAQ's</a></li>
                            <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == 'contact.php') {
                                                                echo 'activesubnav';
                                                            } else {
                                                                echo 'nav-link';
                                                            } ?>" href="../contact.php">Contact</a></li>
                            <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == 'careers.php') {
                                                                echo 'activesubnav';
                                                            } else {
                                                                echo 'nav-link';
                                                            } ?>" href="../careers.php">Careers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == 'pricing.php') {
                                                        echo 'activenav';
                                                    } else {
                                                        echo 'nav-link';
                                                    } ?>" href="../pricing.php">Pricing</a></li>
                     <li class="nav-item"><a class="<?php if (basename($_SERVER['SCRIPT_NAME']) == 'blogs.php') {
                                                        echo 'activenav';
                                                    } else {
                                                        echo 'nav-link';
                                                    } ?>" href="../blogs.php">Blogs</a></li>

                </ul>
                <ul class="navbar-nav navbar-mobile">
                    <li class="nav-item"><a class="nav-link pt-3 m-0" href="https://surechain.ai/sign-in/" target="_blank">Sign in</a></li>
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