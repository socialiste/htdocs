<?php
    function opinion_excerpt_length( $length ) {
            return 85;
    }
    function main_exercpt_length( $length ) {
            return 250;
    }
        function second_exercpt_length( $length ) {
            return 30;
    }
    
    
    
    function new_excerpt_more( $more ) {
            return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"> ... Lire la suite</a>';
    }
    add_filter( 'excerpt_more', 'new_excerpt_more' );
    
?>