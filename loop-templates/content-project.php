<div class="featured-project col-md-6">
    <div class="item-holder">
    <div class="image">
        <?php echo get_the_post_thumbnail( $post->ID, 'project' ); ?>
        <div class="image-hover-overlay"></div>
        <div class="hover-icon">
        </div>

    <div class="project-meta">

            <h3 class="title"><a onclick="changeVideo('<?php echo get_post_meta( get_the_ID(), 'ap-video', true ) ?>'); "><?php the_title(); ?> </a></h3>
            <p><?php echo get_post_meta( get_the_ID(), 'ap-area', true ) ?></p>
    </div>
    </div>
    </div>
</div>