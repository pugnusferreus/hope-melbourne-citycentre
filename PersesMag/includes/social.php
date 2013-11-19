<?php

    global $options;
    $options = get_option( 'swt_theme_options' );
    
    if ( $options['swt_social'] == 'Display' ) {
        $facebook = $options['swt_facebook'];
        $twitter = $options['swt_twitter'];
        $rss = $options['swt_rss'];
        $youtube = $options['swt_youtube'];
        $linkedin = $options['swt_linkedin'];
        $pinterest = $options['swt_pinterest'];
        
        if ( $twitter || $facebook || $youtube || $rss ) {
        
                echo '<div id="social-wrap"><ul id="social">';
                            
                    if ( $facebook )
                            echo '<li><a id="facebook" href="'. $facebook .'" title="'. __( 'Facebook', hybrid_get_parent_textdomain() ) .'"></a></li>';                                                                                   

                    // if ( $twitter )
                    //         echo '<li><a id="twitter" href="'. $twitter .'" title="'. __( 'Twitter', hybrid_get_parent_textdomain() ) .'"></a></li>';
                            
                    if ( $rss ) { ?>
                        <li><a id="rss" href="<?php bloginfo('rss2_url') ?>"></a></li>
                    <?php }

                    // if ( $youtube )
                    //         echo '<li><a id="youtube" href="'. $youtube .'" title="'. __( 'Youtube Channel', hybrid_get_parent_textdomain() ) .'"></a></li>';
                                                                                                                                                                                                                                                        
                echo '</ul></div>';
    
        }
    }        
?>