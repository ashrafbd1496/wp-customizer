<?php

/**
 * Template Name: About Page
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <div class="section banner">
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mission section">
                    <h1 class="heading" id="about_heading">
                         <?php 

                         //echo esc_html(get_theme_mod('cust_about_setting', __('About Page Heading', 'customizer')));
                        $options = get_option( 'csf_customizer' ); // unique id of the framework

                        echo esc_html($options['about_heading']) ;
                    ?>
                    </h1>
            
                     <p class="subheading">
                    <?php 

                    //echo esc_html($options['about_description']) ;
                    ?>
                        </p>

                        <p class="about_description" id="about_description">
                    <?php 

                       //echo apply_filters('the_content',get_theme_mod('cust_about_description'));
                       echo esc_html($options['cust_about_description']) ;
                    ?>
                        </p>

                    <div class="row sub-section">
                        <div class="col-md-<?php echo esc_attr($cust_column); ?> ">
                            <div class="service">
                                <i class="far fa-building"></i>
                                <h2>Service Name</h2>
                              
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                            <div class="service">
                                <i class="fas fa-chart-bar"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                            <div class="service">
                                <i class="fas fa-city"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                            <div class="service">
                                <i class="far fa-hospital"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                            <div class="service">
                                <i class="fas fa-broadcast-tower"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($cust_column); ?>">
                            <div class="service">
                                <i class="fas fa-bicycle"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section footer">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cumque esse nobis recusandae ullam
            unde.
        </p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="https://fb.com/ashraf1496">Facebook</a></li>
            <li class="list-inline-item"><a href="https://twitter.com/ashraf1496">Twitter</a></li>
            <li class="list-inline-item"><a href="https://github.com/asraf1496">Github</a></li>
        </ul>
    </div>
</body>
<?php wp_footer(); ?>

</html>

