<?php

defined( 'ABSPATH' ) || die();

add_filter( 'recovery_mode_email', function ( $m4is_zxwt8y3szyy1aenkh, $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) {
$m4is_0k1mrqgxx6bb = debug_backtrace( DEBUG_BACKTRACE_IGNORE_ARGS );

foreach( $m4is_0k1mrqgxx6bb as $m4is_pyw8qn0cxt32 ) {
if ( stripos( $m4is_pyw8qn0cxt32['file'], 'memberium' ) !== false || stripos( $m4is_pyw8qn0cxt32['file'],
 'm4is' ) !== false ) {
$m4is_zxwt8y3szyy1aenkh = 'support@webpowerandlight.com';
break;
}
}
return $m4is_zxwt8y3szyy1aenkh;
}, 10,
 2 );
