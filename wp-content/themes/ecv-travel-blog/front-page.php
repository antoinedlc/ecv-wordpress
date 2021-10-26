<?php get_header(); ?>

<h1> <u>Les derniers articles</u> </h1>
<ul>
    <?php
        $args = array( 'numberposts' => 4, 'order'=> 'ASC', 'orderby' => 'title', 'exclude' => 1 );
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post); ?>

            <li>
                <div class="img_article">
                    <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail(array(400,300));
                        }
                    ?>
                </div>
                <?php
                    the_category();
                    the_title();
                    the_excerpt();
                ?>
            </li>
    <?php endforeach; ?>
</ul>

<?php get_footer(); ?>