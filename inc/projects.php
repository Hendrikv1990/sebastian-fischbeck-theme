<?php
/**
 * Projects functions
 */

function query_projects($term_slug = array('music', 'tv', 'commercial'))
{

    $args = array(
        'post_type' => 'project',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'posts_per_archive_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'project_category',
                'field' => 'slug',
                'terms' => $term_slug,
            ),
        ),
    );


    $query = new WP_Query($args);

    project_template($query);


}

function project_template($query)
{

    while ($query->have_posts()) : $query->the_post();

        get_template_part('loop-templates/content', 'project');

    endwhile;

    wp_reset_postdata();

// reset the query


}