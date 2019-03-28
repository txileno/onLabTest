<?php


?>
    <footer class="site-footer">
        <div class="container">

            <div class="row justify-content-center footer-section">
                <div class="col-lg-8">
	                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Top") ) {} ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>

            <div class="row footer-section">
                <div class="col-lg-3 col-md-12 text-center text-lg-left">
                    <h3 class="site-footer-headline">Donec</h3>
                    <nav class="nav-list">
                        <ul>
                            <li><a href="#">Vestibulum consequat <span class="footer-new">new</span></a></li>
                            <li><a href="#">DMV <span class="footer-new">new</span></a></li>
                            <li><a href="#">Quisque sagittis <span class="footer-new">new</span></a></li>
                            <li><a href="#">Pellen</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3 col-md-12 text-center text-lg-left">
                    <h3 class="site-footer-headline">Aenean</h3>
                    <nav class="nav-list">
                        <ul>
                            <li><a href="#">Aliquam tempus <span class="footer-new">new</span></a></li>
                            <li><a href="#">Aenean faucibus</a></li>
                            <li><a href="#">Efficitur volutpat <span class="footer-new">new</span></a></li>
                            <li><a href="#">Fer</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3 col-md-12 text-center text-lg-left">
	                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Column 3") ) {} ?>
                </div>

                <div class="col-lg-3 col-md-12 text-center text-lg-left">
                <h3 class="site-footer-headline">Maecenas</h3>
                <nav class="nav-list">
                    <ul>
                        <li><a href="#">Phasellus commodo <span class="footer-new">new</span> </a></li>
                        <li><a href="#">Nunc vitae </a></li>
                        <li><a href="#">Skywalker </a></li>
                        <li><a href="#">Fusce dictum</a></li>
                    </ul>
                </nav>
            </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>

            <div class="row justify-content-center footer-section">
                <div class="col-lg-2 col-md-12 text-center">
                    <a href="#">Terms and Conditions</a>
                </div>
                <div class="col-lg-2 col-md-12 text-center">
                    <a href="#">Privacy Policy</a>
                </div>
                <div class="col-lg-2 col-md-12 text-center">
                    <a href="#">Contact Us</a>
                </div>
                <div class="col-lg-5 col-md-12 text-center">
                    <span>Terms and Conditions Privacy Policy Contact Us Copyright © 2009</span>
                </div>
            </div>

        </div>
    </footer>

<?php wp_footer();?>
</body>
</html>