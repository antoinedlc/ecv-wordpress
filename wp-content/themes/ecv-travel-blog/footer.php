
    <?php wp_body_open(); ?>
    <?php wp_footer(); ?>
    <footer class="footer">
    <div class="footerTop">
    <p> <?php echo get_field('textenews')?></p>

    <form method="post">
    <input type="text" name="email" placeholder="Votre email" id="inputMail">

    <input type="submit" value="Je m'inscris !" id="buttonMail" >
    </form>

    </div>
    <div class="footerBottom">

        <ul>
            <?php
            $args = array( 'numberposts' => 4, 'order'=> 'ASC', 'orderby' => 'title' );
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :  setup_postdata($post); ?>
            <li>
                <?php    the_category();   ?>
            </li>
             <?php endforeach; ?>
         </ul>

    <ul>
        <li>À propos</li>
        <li>Nous contacter </li>
    </ul>

    <p>
    Copyright ©2021 - ECV Travel Blog
    </p>

    </div>

    </footer>
</body>
</html>
