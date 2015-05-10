<?php

// PHP function for decrypting email addresses using JavaScript sw() encryption
function sw( $t ) {

    $t = substr( $t, 0, strlen( $t ) - 4 );

    $r = implode( array_map( 'chr', array( '95', '121', '121', '122', '95' ) ) );

    while ( strpos( $r, '#' ) !== false ) {
        $r = str_replace( '#', '', $r );
    }

    while ( strpos( $t, '.' ) !== false ) {
        $t = str_replace( '.', '@', $t );
    }

    while ( strpos ( $t, $r ) !== false ) {
        $t = str_replace( $r, '.', $t );
    }

    $t = strrev( $t );

    return ( $t );

}
