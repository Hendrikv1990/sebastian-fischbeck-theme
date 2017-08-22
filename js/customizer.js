/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 *
 * @see https://codex.wordpress.org/Theme_Customization_API#Part_3:_Configure_Live_Preview_.28Optional.29
 */
(function ($) {

    // Update the site title in real time...
    wp.customize('blogname', function (value) {
        value.bind(function (newval) {
            console.log(newval);
            $('.navbar-header a').html(newval);
        });
    });



    $ = jQuery;
    $("#myModal").on("hidden.bs.modal", function () {
        //
        console.log('modal is hidden');

        var iframe = document.querySelector('iframe');
        var player = new Vimeo.Player(iframe);

        console.log(player);

        player.pause().then(function() {
            // the video was paused
            console.log('PAUSE');
        }).catch(function(error) {
            switch (error.name) {
                case 'PasswordError':
                    // the video is password-protected and the viewer needs to enter the
                    // password first
                    break;

                case 'PrivacyError':
                    console.log('private');
                    // the video is private
                    break;

                default:
                    console.log('other reason')
                    // some other error occurred
                    break;
            }
        });
    })






})(jQuery);




