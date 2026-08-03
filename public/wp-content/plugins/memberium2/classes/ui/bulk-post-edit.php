<?php
/**
 * Proprietary Software - All Rights Reserved
 *
 * This file is part of the Memberium plugin, which is proprietary software developed by Web Power and Light.
 * Unauthorized copying, distribution, or modification of this file, via any medium, is strictly prohibited.
 *
 * Copyright (c) 2012-2026 David J Bullock
 * Web Power and Light
 *
 * For licensing information, please contact Web Power and Light.
 */


class_exists( 'm4is_6y9612z4hjd6fzpap4r5n853641m1jc' ) || die();

final class m4is_8kt6jrvvp0dqqhkrjncfa2gc {
private const NONCE_ACTION = 'memberium_bulk_copy_nonce';
private const META_KEYS = [
'_is4wp_access_tags',

'_is4wp_access_tags2',
'_is4wp_anonymous_only',
'_is4wp_any_loggedin_user',
'_is4wp_any_membership',
'_is4wp_contact_ids',
'_is4wp_facebook_crawler',

'_is4wp_force_public',
'_is4wp_google_1stclick',
'_is4wp_membership_levels',
];
static function m4is_yr7vcx5sq45ngpy73xs63q() : void {
check_ajax_referer( self::NONCE_ACTION,
 'nonce' );
if ( ! current_user_can( 'edit_posts' ) ) {
wp_send_json_error( [ 'message' => 'Permission denied.' ], 403 );
}
$m4is_3vdgkpy5spswjs = (int) ( $_POST['source_id'] ?? 0 );

$m4is_wtt69zqx60txhy6926q5ank1ajb8 = isset( $_POST['post_ids'] ) && is_array( $_POST['post_ids'] )
? array_map( 'intval', $_POST['post_ids'] ) : [];

if ( $m4is_3vdgkpy5spswjs <= 0 || empty( $m4is_wtt69zqx60txhy6926q5ank1ajb8 ) ) {
wp_send_json_error( [ 'message' => 'Invalid source post or no posts selected.' ] );

}
$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_1xj180xcpmhke67k7hgvhfkp7821 = $m4is_132xe588j->m4is_8awbs9rpays1( $m4is_3vdgkpy5spswjs );

$m4is_2hn07pkym65zhgnmbesmq1 = 0;
$m4is_6jxcswpyt9zxxv4 = [];
foreach ( $m4is_wtt69zqx60txhy6926q5ank1ajb8 as $m4is_tz1rt7sbq40fade6e6rx ) {
if ( $m4is_tz1rt7sbq40fade6e6rx === $m4is_3vdgkpy5spswjs ) {
continue;

}
if ( ! current_user_can( 'edit_post', $m4is_tz1rt7sbq40fade6e6rx ) ) {
$m4is_6jxcswpyt9zxxv4[] = $m4is_tz1rt7sbq40fade6e6rx;
continue;

}
foreach ( self::META_KEYS as $m4is_j8j55t8dz79m7 ) {
delete_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $m4is_j8j55t8dz79m7 );
if ( isset( $m4is_1xj180xcpmhke67k7hgvhfkp7821[$m4is_j8j55t8dz79m7] ) && $m4is_1xj180xcpmhke67k7hgvhfkp7821[$m4is_j8j55t8dz79m7] !== '' ) {
update_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_j8j55t8dz79m7, $m4is_1xj180xcpmhke67k7hgvhfkp7821[$m4is_j8j55t8dz79m7] );
}
}
wp_cache_delete( "meta/access/{$m4is_tz1rt7sbq40fade6e6rx}",
 'memberium/posts' );
$m4is_2hn07pkym65zhgnmbesmq1++;
}
wp_send_json_success( [
'updated' => $m4is_2hn07pkym65zhgnmbesmq1,
'skipped' =>
 $m4is_6jxcswpyt9zxxv4,
] );
}
static function m4is_039cews2phfj1mfna9p0qeqn( string $m4is_tfecza742dzhrkkbv781dnbvf40m6, array $m4is_wtt69zqx60txhy6926q5ank1ajb8 ) : string {
$m4is_ypzh3q2mvejn819fhhdxc1 = 0;

foreach ( $m4is_wtt69zqx60txhy6926q5ank1ajb8 as $m4is_tz1rt7sbq40fade6e6rx ) {
$m4is_tz1rt7sbq40fade6e6rx = (int) $m4is_tz1rt7sbq40fade6e6rx;

if ( ! current_user_can( 'edit_post', $m4is_tz1rt7sbq40fade6e6rx ) ) {
continue;
}
foreach ( self::META_KEYS as $m4is_j8j55t8dz79m7 ) {
delete_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_j8j55t8dz79m7 );
}
wp_cache_delete( "meta/access/{$m4is_tz1rt7sbq40fade6e6rx}", 'memberium/posts' );
$m4is_ypzh3q2mvejn819fhhdxc1++;

}
return add_query_arg( 'memberium_protection_removed', $m4is_ypzh3q2mvejn819fhhdxc1, $m4is_tfecza742dzhrkkbv781dnbvf40m6 );
}
static function m4is_461pz3hfb() : void {
if ( ! isset( $_GET['memberium_protection_removed'] ) ) {
return;

}
$m4is_7g9y793jjckyb = (int) $_GET['memberium_protection_removed'];
if ( $m4is_7g9y793jjckyb <= 0 ) {
return;
}
$m4is_5tmqg45z37r82cfb67prh = sprintf(
_n(
'Protection removed from %d post.',

'Protection removed from %d posts.',
$m4is_7g9y793jjckyb,
'memberium'
),
$m4is_7g9y793jjckyb
);
echo '<div class="notice notice-success is-dismissible"><p>' . esc_html( $m4is_5tmqg45z37r82cfb67prh ) . '</p></div>';

}
static function m4is_tpdqpbn7( string $m4is_7wgwjna3mrxka8smb6e6446cjgwx, string $m4is_yhdk2h7srcr7n5mzjnw7m6b ) : void {
if ( $m4is_7wgwjna3mrxka8smb6e6446cjgwx !== 'memberships' ) {
return;

}
$m4is_vmhtx2ecrnzjpy = wp_create_nonce( self::NONCE_ACTION );
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = esc_html__( 'Copy From', 'memberium' );

$m4is_as5wwdkxam858k8rgqepb = esc_attr__( 'Search for a post/page...', 'memberium' );
$m4is_4mqzee80e0yb = esc_attr( $m4is_vmhtx2ecrnzjpy );

echo <<<HTMLBLOCK

            <fieldset class="inline-edit-col-left memberium-bulk-protection">
                <div class="inline-edit-col">
                    <label class="clear">
                        <span class="title">{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}</span>
                        <span class="input-text-wrap">
                            <select id="memberium_bulk_source_post" name="memberium_bulk_source_post" style="width:100%">
                                <option value="">{$m4is_as5wwdkxam858k8rgqepb}</option>
                            </select>
                        </span>
                    </label>
                    <input type="hidden" id="memberium_bulk_copy_nonce" value="{$m4is_4mqzee80e0yb}" />
                </div>
            </fieldset>
        HTMLBLOCK;

self::m4is_68zb5crm834q706tgt750w6xmwqfn();
self::m4is_byjzyza9fmfr6y5qt1();
}
static function m4is_138b6v5naby7paa7( string $m4is_7wgwjna3mrxka8smb6e6446cjgwx,
 string $m4is_yhdk2h7srcr7n5mzjnw7m6b ) : void {
if ( $m4is_7wgwjna3mrxka8smb6e6446cjgwx !== 'memberships' ) {
return;
}
$m4is_vmhtx2ecrnzjpy = wp_create_nonce( self::NONCE_ACTION );

$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = esc_html__( 'Copy From', 'memberium' );
$m4is_as5wwdkxam858k8rgqepb = esc_attr__( 'Search for a post/page...',
 'memberium' );
$m4is_4mqzee80e0yb = esc_attr( $m4is_vmhtx2ecrnzjpy );
echo <<<HTMLBLOCK

            <fieldset class="inline-edit-col-left memberium-quick-protection">
                <div class="inline-edit-col">
                    <label class="clear">
                        <span class="title">{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}</span>
                        <span class="input-text-wrap">
                            <select id="memberium_quick_source_post" name="memberium_quick_source_post" style="width:100%">
                                <option value="">{$m4is_as5wwdkxam858k8rgqepb}</option>
                            </select>
                        </span>
                    </label>
                    <input type="hidden" id="memberium_quick_copy_nonce" value="{$m4is_4mqzee80e0yb}" />
                </div>
            </fieldset>
        HTMLBLOCK;

self::m4is_a81swfd5s8nkek4wmqwqm9vg706q4s1f();
self::m4is_byjzyza9fmfr6y5qt1();
}
static function m4is_yvapnth69qrm5r69xze3cm9rdg3n919() : void {
$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_33we84v139 = $m4is_132xe588j->m4is_hscsx4pb3zt();
wp_register_style( 'memberium-s2css', $m4is_33we84v139 . 'css/wpal-select2.min.css',
 false, '4.0.3', 'all' );
wp_register_script( 'memberium-s2js', $m4is_33we84v139 . 'js/wpal-select2.full.min.js', ['jquery'], '4.0.3',
 true );
wp_enqueue_style( 'memberium-s2css' );
wp_enqueue_script( 'memberium-s2js' );
$m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1 = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_bsh7jwwmtdhvd238q8dz9ebn0qcm9();

wp_add_inline_script( 'memberium-s2js', "window.memberiumPostList = {$m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1};", 'after' );
}
private static function m4is_68zb5crm834q706tgt750w6xmwqfn() : void {
$m4is_as5wwdkxam858k8rgqepb = esc_attr__( 'Search for a post/page...',
 'memberium' );
echo <<<JSDOC

            <script>
            (function($) {
                function initBulkSelect2() {
                    if (typeof $.fn.wpalSelect2 === 'undefined') {
                        setTimeout(initBulkSelect2, 200);
                        return;
                    }
                    var sel = $('#memberium_bulk_source_post');
                    if (!sel.length || sel.hasClass('select2-hidden-accessible')) return;

                    sel.wpalSelect2({
                        placeholder: '{$m4is_as5wwdkxam858k8rgqepb}',
                        allowClear: true,
                        minimumInputLength: 0,
                        width: '100%',
                        data: window.memberiumPostList || []
                    });
                }

                $(document).on('click', '#bulk_edit', function() {
                    var sourceId = $('#memberium_bulk_source_post').val();
                    if (!sourceId || parseInt(sourceId) <= 0) return;

                    var postIds = [];

                    $('#bulk-titles').children().each(function() {
                        var raw = $(this).attr('id');
                        if (raw) {
                            var id = raw.replace(/^(ttle|tt|_)/i, '');
                            if (id && parseInt(id) > 0) postIds.push(parseInt(id, 10));
                        }
                    });

                    if (postIds.length === 0) {
                        $('#bulk-titles-list').children().each(function() {
                            var raw = $(this).attr('id');
                            if (raw) {
                                var id = raw.replace(/^(ttle|tt|_)/i, '');
                                if (id && parseInt(id) > 0) postIds.push(parseInt(id, 10));
                            }
                        });
                    }

                    if (postIds.length === 0) {
                        $('input[name="post[]"]:checked').each(function() {
                            var id = parseInt($(this).val(), 10);
                            if (id > 0) postIds.push(id);
                        });
                    }

                    if (postIds.length === 0) return;

                    var nonce = $('#memberium_bulk_copy_nonce').val();

                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        async: false,
                        data: {
                            action: 'memberium_bulk_copy',
                            nonce: nonce,
                            source_id: parseInt(sourceId, 10),
                            post_ids: postIds
                        }
                    });
                });

                $(document).ready(function() {
                    setTimeout(function() {
                        initBulkSelect2();
                    }, 100);
                });
            })(jQuery);
            </script>
        JSDOC;

}
private static function m4is_a81swfd5s8nkek4wmqwqm9vg706q4s1f() : void {
$m4is_as5wwdkxam858k8rgqepb = esc_attr__( 'Search for a post/page...',
 'memberium' );
echo <<<JSDOC

            <script>
            (function($) {
                var quickSelect2Initialized = false;

                function initQuickSelect2() {
                    if (typeof $.fn.wpalSelect2 === 'undefined') {
                        setTimeout(initQuickSelect2, 200);
                        return;
                    }
                    var sel = $('#memberium_quick_source_post');
                    if (!sel.length || sel.hasClass('select2-hidden-accessible')) return;

                    sel.wpalSelect2({
                        placeholder: '{$m4is_as5wwdkxam858k8rgqepb}',
                        allowClear: true,
                        minimumInputLength: 0,
                        width: '100%',
                        data: window.memberiumPostList || []
                    });

                    quickSelect2Initialized = true;
                }

                function resetQuickSelect2() {
                    var sel = $('#memberium_quick_source_post');
                    if (sel.length && sel.hasClass('select2-hidden-accessible')) {
                        sel.wpalSelect2('val', '').trigger('change');
                    }
                }

                $(document).on('click', '.editinline', function() {
                    setTimeout(function() {
                        initQuickSelect2();
                        resetQuickSelect2();
                    }, 100);
                });

                $(document).on('click', '.save', '#the-list', function() {
                    var sourceId = $('#memberium_quick_source_post').val();
                    if (!sourceId || parseInt(sourceId) <= 0) return;

                    var postId = $('input[name="post_ID"]').val();
                    if (!postId || parseInt(postId) <= 0) return;

                    var nonce = $('#memberium_quick_copy_nonce').val();

                    $.post(ajaxurl, {
                        action: 'memberium_bulk_copy',
                        nonce: nonce,
                        source_id: parseInt(sourceId, 10),
                        post_ids: [parseInt(postId, 10)]
                    });
                });
            })(jQuery);
            </script>
        JSDOC;

}
private static function m4is_byjzyza9fmfr6y5qt1() : void {
echo <<<CSSBLOCK

            <style>
                .memberium-bulk-protection .select2-container,
                .memberium-quick-protection .select2-container {
                    min-width: 300px;
                }
                .memberium-bulk-protection .inline-edit-col,
                .memberium-quick-protection .inline-edit-col {
                    width: 100%;
                }
                .memberium-bulk-protection .select2-container,
                .memberium-quick-protection .select2-container {
                    min-width: 600px;
                }
                .memberium-bulk-protection label,
                .memberium-quick-protection label {
                    display: block;
                    margin-bottom: 8px;
                }
                .memberium-bulk-protection .title,
                .memberium-quick-protection .title {
                    font-weight: 600;
                    display: block;
                    margin-bottom: 4px;
                }
            </style>
        CSSBLOCK;

}
}
