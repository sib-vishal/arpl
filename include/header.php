<header class="header stricky">
    <div class="containerFull">

        <div class="inline_header">
            <div class="logo">
                <a href="index.php">
                    <img class="logo_img" src="web-assets/images/arpl.jpg" alt="">
                </a>
            </div>
            <div class="nav_links">
                <ul>
                    <li>
                        <a class=" <?php if ($page == 'home') {
                            echo 'active';
                        } ?>" href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>

                </ul>
                <div class="">
                    <a class="btn_1" href="">Explore More <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                </div>
            </div>

        </div>
    </div>

</header>

<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header border-bottom">
        <h5 id="mobileMenuLabel">ARPL</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled menu_item">

        </ul>
    </div>
</div>