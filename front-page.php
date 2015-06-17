
    <div class="row">
        <div class="slider col-md-12 col-xs-12 col-sm-12 col-lg-9 col-centered">
            <?php echo do_shortcode( "[metaslider id=13]"); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h1>My Choice Family Care</h1>
            <p>My Choice Family Care offers you the experience and trust you need in a <b>Long-Term Care partner</b>. At My Choice Family Care, we have been providing quality, long-term care for members like you since 2000.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <a href="#">
                <div class="mc-btn" id="members">
                    <img src="content/themes/my_choice_theme/assets/images/member_btn.jpg" alt="Members" />
                    <h4>My Choice Members</h4>
                    <p>Dolore cupidatat tractavissent, ab aliqua legam ab offendit. Admodum lorem illum qui veniam ubi et quorum
                    </p>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <a href="#">
                <div class="mc-btn" id="providers">
                    <img src="content/themes/my_choice_theme/assets/images/provider_btn.jpg" alt="Members" />
                    <h4>My Choice Providers</h4>
                    <p>Dolore cupidatat tractavissent, ab aliqua legam ab offendit. Admodum lorem illum qui veniam ubi et quorum
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h3>Enroll In My Choice</h3>
            <p>To be eligible for the Family Care program with the Milwaukee County Department of Family Care, a person must have long-term care service needs, be an older adult or an adult with a disability, live within our service area and meet financial eligibility requirements.</p>
            <p>
                If you or someone you know is interested in learning more about the Family Care program, the first step is to contact the appropriate resource center. Resource Centers provide information and assistance and help people apply for programs and benefits. They are available to help you, whether or not you decide to become a Family Care Member.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-6">
            <h3>Find a resource center in your county</h3>
            <div class="mapcontainer">
                <div class="map"></div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h2>News and Annoucements</h2>
        </div>
         <?php query_posts( 'cat=1&showposts=4'); ?>
        <?php if (have_posts() ) : while ( have_posts()) : the_post(); ?>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            
            <div class="postbox">
                
               <?php if ( ( function_exists('has_post_thumbnail') ) && ( has_post_thumbnail() ) ) { 
        $post_thumbnail_id = get_post_thumbnail_id();
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
        ?>
                <div class="postimg">
                    <img title="image title" alt="thumb image" class="wp-post-image" src="<?php echo $post_thumbnail_url; ?>" />
                </div>
                <?php } ?>
<h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h4>
                <p>
                    <?php the_time( get_option( 'date_format' ) ); ?>
                </p>
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>">Read More...</a>
            </div>
                
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
            </div>
    <div class="row last">
            <div class="col-xs-12">
                <h2>Notice of Privacy Practices</h2>
                <p>Id summis nulla o probant. Quid in senserit ubi quibusdam varias nam expetendis 
                    transferrem si id eu quorum quibusdam iis nostrud nisi varias consequat sint. 
                    Commodo quem aliquip, varias probant est illustriora. Velit comprehenderit 
                    senserit aliqua vidisse. Legam expetendis exquisitaque, malis an incurreret. 
                    Magna proident despicationes, admodum nisi eu aliquip domesticarum, cernantur 
                    ita amet expetendis, cupidatat si ipsum. Mandaremus elit ut occaecat 
                    cohaerescant. Irure expetendis proident, ea duis et noster.</p>
            </div>
    </div>
    </div>
