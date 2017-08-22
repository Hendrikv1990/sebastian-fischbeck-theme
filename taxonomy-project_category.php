<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

    <div class="container-fluid" id="content">

        <div class="row">

            <div class="col-md-12">
                <?php//masterslider(1); ?>
            </div>




        </div><!-- Container end -->

        <div class="container-fluid projects">

            <div class="row no-gutters">

                <?php query_projects(get_queried_object()->slug); ?>
            </div>
        </div>

    </div><!-- Wrapper end -->
    <!--    Video Modal     -->
    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <iframe id="iframeYoutube" width="100%" height="505"  src="#" frameborder="0" marginwidth="0" marginheight="0"></iframe>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>
                </div>
            </div>
        </div>
    </div>



    <!--    /Video Modal    -->

    <!-- Add youtube api -->

    <?php get_footer(); ?>
