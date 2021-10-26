<?php $menu_object = wp_get_nav_menu_items('Main Menu');?>
<div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./wp-content/themes/ecv-travel-blog/assets/img/trip.jpg" alt="">
                <div class="contentSlider">
                    <p><?php echo $menu_object[1]->title?></p>
                    <h1>Des paysages incroyables</h1>
                    <a href="#">Lire la suite</a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./wp-content/themes/ecv-travel-blog/assets/img/trip3.jpg" alt="">
                <div class="contentSlider">
                    <p><?php echo $menu_object[2]->title?></p>
                    <h1>Des traditions surprenante</h1>
                    <a href="#">Lire la suite</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="contentSlider">
                <img src="./wp-content/themes/ecv-travel-blog/assets/img/trip2.jpg" alt="">
                    <p><?php echo $menu_object[3]->title?></p>
                    <h1>Des architectures à couper le souffle</h1>
                    <a href="#">Lire la suite</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>