<?php

/**
 * Template Name: Customizer Landing
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php
                while (have_posts()) :
                    the_post();

                    the_content();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
        </div>
    </div>

</body>
<?php wp_footer(); ?>

</html>