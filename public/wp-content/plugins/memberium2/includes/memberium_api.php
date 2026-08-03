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

//
// Keap Contact ID Functions
//
/**
 * Retrieves the Keap contact ID for the currently logged-in user.
 *
 * Returns the CRM contact ID associated with the current WordPress user session.
 * This is the primary function for obtaining the current user's Keap contact ID.
 *
 * @return int The Keap contact ID for the current user. Returns 0 if no user is logged in
 *             or if the user has no associated Keap contact.
 */


function memb_getContactId() : int {
return (int) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_1qbr5gs0jfsnf569vm930v();

}
/**
 * Retrieves the Keap contact ID associated with a WordPress user ID.
 *
 * Looks up the Keap/Infusionsoft CRM contact ID that is linked to a specific
 * WordPress user account. This relationship is established during user registration
 * or when a contact is synced from Keap.
 *
 * @param int $user_id The WordPress user ID to look up.
 * @return int The Keap contact ID associated with the WordPress user. Returns 0
 *             if no association exists or the user ID is invalid.
 */


function memb_getContactIdByUserId( int $user_id ) : int {
return (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $user_id );

}
/**
 * Retrieves the WordPress user ID associated with a Keap contact ID.
 *
 * Performs a reverse lookup to find the WordPress user account that is linked
 * to a specific Keap/Infusionsoft contact. This is useful when processing
 * webhooks or API callbacks that reference contacts by their CRM ID.
 *
 * @param int $contact_id The Keap contact ID to look up.
 * @return int The WordPress user ID associated with the contact. Returns 0
 *             if no matching user exists for the given contact ID.
 */


function memb_getUserIdByContactId( int $contact_id ) : int {
return m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e($contact_id);

}
//
// Keap Tag Check Functions
//
/**
 * Checks if a contact has any of the specified Keap tags.
 *
 * Evaluates whether a Keap contact possesses at least one of the provided tag IDs.
 * This is an OR condition - if the contact has any single tag from the list, the
 * function returns true. Administrators with 'manage_options' capability always
 * return true regardless of actual tag assignment.
 *
 * @param array|string $tags       Tag IDs to check for. Accepts either an array of integers
 *                                  or a comma-separated string of tag IDs.
 * @param int|bool     $contact_id Optional. The Keap contact ID to check. If 0 or false,
 *                                  uses the currently logged-in user's contact ID.
 * @return bool True if the contact has any of the specified tags (or is an admin),
 *              false otherwise. Returns true if $tags is empty. Returns false if
 *              no valid user/contact can be determined.
 */


function memb_hasAnyTags( $tags,
 $contact_id = 0 ) : bool {
$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $contact_id ? m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $contact_id ) : $m4is_132xe588j->m4is_vd3qpw0vkdm();

if ( empty( $tags ) ) {
return true;
}
if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return false;
}
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'manage_options' ) ) {
return true;
}
$m4is_8sezvqjmjp811vq3d0a3cssrq23d = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'tags', '' );
if ( ! empty( $m4is_8sezvqjmjp811vq3d0a3cssrq23d)) {
return $m4is_132xe588j->m4is_dy9qsc49he4( $tags, $m4is_8sezvqjmjp811vq3d0a3cssrq23d );

}
return false;
}
/**
 * Checks if a contact has all of the specified Keap tags.
 *
 * Evaluates whether a Keap contact possesses every tag ID in the provided list.
 * This is an AND condition - the contact must have all tags for the function
 * to return true. Useful for content access control requiring multiple tag criteria.
 *
 * @param array|string $tags       Tag IDs to check for. Accepts either an array of integers
 *                                  or a comma-separated string of tag IDs.
 * @param int|bool     $contact_id Optional. The Keap contact ID to check. If false or omitted,
 *                                  uses the currently logged-in user's contact ID.
 * @return bool True if the contact has all specified tags, false if any tag is missing
 *              or if the contact cannot be determined.
 */


function memb_hasAllTags($tags,
 $contact_id = false) : bool {
return m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_n9nmkb32xctdmyy9d0s0trys3zj5y( $tags,
 $contact_id );
}
//
// Memberium Membership Check Functions
//
/**
 * Checks if the current user has any active membership level.
 *
 * Determines whether the currently logged-in user has been assigned at least one
 * membership level through Memberium. Membership levels are typically assigned
 * based on Keap tag assignments or subscription status.
 *
 * @return bool True if the current user has at least one membership level assigned,
 *              false if they have no memberships or are not logged in.
 */


function memb_hasAnyMembership() : bool {
return m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_e4m1kkzt6t1sw();

}
/**
 * Checks if the current user has a specific membership level by name.
 *
 * Determines whether the currently logged-in user has been assigned a membership
 * level matching the specified name. Membership names are case-sensitive and
 * must match exactly the configured membership level name in Memberium settings.
 *
 * @param string $level_name The exact name of the membership level to check for.
 * @return bool True if the current user has the specified membership level,
 *              false otherwise or if not logged in.
 */


function memb_hasMembership( string $level_name ) : bool {
return m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_4krd94v1rk8gmvc6pt3qt( $level_name );

}
/**
 * Checks if the current user has a specific membership level by ID.
 *
 * Determines whether the currently logged-in user has been assigned a membership
 * level matching the specified numeric level ID. Level IDs are internal identifiers
 * assigned to membership levels in the Memberium configuration.
 *
 * @param int $level The numeric membership level ID to check for.
 * @return bool True if the current user has the specified membership level,
 *              false otherwise or if not logged in.
 */


function memb_hasMembershipLevel( int $level) : bool {
return m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_rwhc04e22tz( $level );

}
//
//  Content Access Functions
//
/**
 * Overrides the prohibited action behavior for protected content.
 *
 * Changes how Memberium handles access denial for the current post or page.
 * By default, protected content follows the configured prohibited action setting
 * (redirect, show excerpt, etc.). This function allows programmatic override
 * of that behavior for the current request.
 *
 * @param string $action Optional. The action to set. Accepts 'default', 'redirect',
 *                       'excerpt', 'hide', or other configured action types.
 *                       Default 'default' uses the configured setting.
 * @return mixed The result from the underlying set_post_prohibited_action method.
 */


function memb_overrideProhibitedAction( string $action = 'default' ) {
return m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_yvw2gz9jprtk6kkkbygfs3sf5rc( $action );

}
/**
 * Checks if a post or page is protected by Memberium access controls.
 *
 * Determines whether content protection rules have been applied to a specific
 * post. Protected posts require users to meet certain criteria (tags, memberships)
 * before they can view the full content.
 *
 * @param WP_Post|int|null $post The post object, post ID, or null to use the current post.
 * @return bool True if the post has Memberium protection enabled, false otherwise.
 */


function memb_isPostProtected( $post ) : bool {
return m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_fxnebw69zvjh7345tzdmjaa5d( $post );

}
/**
 * Checks if a user has access to view a specific post.
 *
 * Evaluates all Memberium access control rules for a post including tag requirements,
 * membership level requirements, and any other configured access criteria. Returns
 * whether the specified user would be permitted to view the full content.
 *
 * @param int $post_id The WordPress post ID to check access for.
 * @param int $user_id Optional. The WordPress user ID to check. If 0, uses the
 *                     currently logged-in user's ID.
 * @return bool True if the user has access to the post, false if access is denied
 *              or if the user/post cannot be determined.
 */


function memb_hasPostAccess( int $post_id,
 int $user_id = 0 ) : bool {
return m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_krs2avqy019m3mx( $post_id,
 $user_id );
}
/**
 * Checks if the current user has access to a taxonomy term.
 *
 * Evaluates whether a taxonomy term (category, tag, custom taxonomy) is visible
 * to the current user based on Memberium access control settings. Terms can have
 * tag and membership requirements similar to posts.
 *
 * @param int    $term_id  The WordPress term ID to check access for.
 * @param string $taxonomy The taxonomy slug (e.g., 'category', 'post_tag', or custom taxonomy).
 * @return bool True if the current user has access to view the term, false otherwise.
 */


function memb_hasTermAccess(int $term_id,
 $taxonomy) : bool {
return m4is_htwcx7s7vsfkt7::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_zj3vtv77dnee81e0x9wxfb6ed1esc22( $term_id,
 $taxonomy );
}
//
// Keap Contact Account Functions
//
/**
 * Changes a contact's email address and synchronizes across WordPress and Keap.
 *
 * Updates the email address for a user in both WordPress and the Keap CRM system.
 * This ensures data consistency between the two platforms. Optionally updates the
 * WordPress username to match the new email address.
 *
 * @param string $email          The new email address to assign to the contact.
 * @param int    $user_id        The WordPress user ID of the user to update.
 * @param bool   $force_username Optional. If true, also changes the WordPress username
 *                               to match the new email address. Default null uses
 *                               configured settings.
 * @return bool True on successful update, false on failure or invalid parameters.
 */


function memb_changeContactEmail( string $email,
 int $user_id, bool $force_username = null ) : bool {
return (bool) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_a25pd5av7mhr23c0xjnzetf96w4pb( $user_id,
 $email, 0, $force_username );
}
/**
 * Changes a contact's password in both WordPress and Keap.
 *
 * Updates the password for a Keap contact and synchronizes the change to the
 * associated WordPress user account. The password is stored in Keap as a custom
 * field and updated in WordPress using WordPress password functions.
 *
 * @param string $new_password The new plaintext password to set.
 * @param int    $contact_id   Optional. The Keap contact ID to update. If 0,
 *                             uses the currently logged-in user's contact ID.
 * @return bool True on successful password update, false on failure.
 */


function memb_changeContactPassword( string $new_password,
 int $contact_id = 0 ) : bool {
return (bool) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_pmkbdnzvn2zr93dej92b0( $new_password,
 $contact_id );
}
//
// Keap Contact  Functions
//
/**
 * Sets a single field value for a Keap contact.
 *
 * Updates a specific field on a Keap contact record. The field name should match
 * the Keap field name (e.g., 'FirstName', 'EmailAddress1', or custom field names
 * like '_CustomField'). Changes are pushed immediately to the Keap API.
 *
 * @param string $key        The Keap field name to update. Must be a valid field
 *                           identifier (standard or custom field name).
 * @param mixed  $value      The value to set for the field. Type depends on field type.
 * @param int    $contact_id Optional. The Keap contact ID to update. If 0,
 *                           uses the currently logged-in user's contact ID.
 * @return bool True on successful update, false on failure or if $key is empty.
 */


function memb_setContactField( string $key,
 $value, int $contact_id = 0) : bool {
if ( empty( $key ) ) {
return false;
}
return (bool) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_8sqkcc4ebfed07z6qzkv9edmnxzjh( $key,
 $value, $contact_id );
}
/**
 * Retrieves the value of a specific field from the current user's Keap contact.
 *
 * Returns a field value from the currently logged-in user's Keap contact record.
 * Field values are cached in the user's session for performance. Supports standard
 * Keap fields (e.g., 'FirstName', 'Email') and custom fields.
 *
 * @param string $fieldname The Keap field name to retrieve.
 * @param bool   $sanitize  Optional. If true, the returned value is escaped using
 *                          esc_html() for safe HTML output. Default false.
 * @return string The field value as a string. Empty string if field doesn't exist
 *                or user is not logged in.
 */


function memb_getContactField( string $fieldname,
 bool $sanitize = false ) {
return (string) m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_n2ajtpwcec( $fieldname,
 $sanitize );
}
/**
 * Loads complete contact data from Keap by contact ID.
 *
 * Retrieves all available fields for a specific Keap contact from the API.
 * This makes a direct API call to Keap and returns the full contact record
 * as an associative array. Use sparingly to avoid API rate limit issues.
 *
 * @param int $contact_id The Keap contact ID to load.
 * @return array Associative array of contact field names to values.
 *               Empty array if contact not found or API error occurs.
 */


function memb_loadContactById( int $contact_id ) : array {
return (array) m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $contact_id );

}
/**
 * Synchronizes a contact from Keap to the local Memberium database.
 *
 * Performs a full sync of a contact record from Keap, updating cached data
 * in WordPress including tags, custom fields, and membership status. This is
 * an API-intensive operation and should not be called on every page load.
 *
 * WARNING: This function can consume significant API quota. Avoid calling on
 * high-traffic pages or in loops. Use only when fresh data is required.
 *
 * @param int  $contact_id The Keap contact ID to synchronize.
 * @param bool $cascade    Optional. If true, also syncs related data such as
 *                         affiliate information, referrals, and linked records.
 *                         Default false.
 * @return bool True on successful sync, false on failure or API error.
 */


function memb_syncContact( int $contact_id,
 bool $cascade = false ) : bool {
return (bool) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_km2vptq0bwg( $contact_id,
 $cascade );
}
/**
 * Applies tags to a Keap contact.
 *
 * Adds one or more tags to a contact's record in Keap. Tags can be specified as
 * tag IDs or tag names. This function only adds tags; use memb_removeTags() to
 * remove tags from a contact. Tags are applied immediately via the Keap API.
 *
 * @param string|array $tags       Tag IDs or names to add. Accepts a single tag ID/name,
 *                                 comma-separated string of tags, or an array of tags.
 * @param int          $contact_id Optional. The Keap contact ID to update. If 0,
 *                                 uses the currently logged-in user's contact ID.
 * @param bool         $force      Optional. If true, forces tag application even if
 *                                 the contact already has the tag. Default false.
 * @return bool True on successful tag application, false on failure.
 */


function memb_setTags( $tags,
 int $contact_id = 0, bool $force = false) : bool {
return (bool) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $tags,
 $contact_id, $force );
}
/**
 * Retrieves the Memberium session data for a WordPress user.
 *
 * Returns the cached Keap contact data and membership information stored in
 * the user's Memberium session. This includes tags, contact fields, membership
 * levels, and other synced data from Keap.
 *
 * @param int $user_id The WordPress user ID to retrieve session data for.
 * @return array Associative array containing the user's session data including
 *               'memb_user' key with contact information, tags, and membership data.
 *               Empty array if user not found or no session exists.
 */


function memb_getSession( int $user_id ) : array {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $user_id );

}
//
// Keap Affiliate Functions
//
/**
 * Retrieves a field value from the current user's affiliate record in Keap.
 *
 * Returns data from the affiliate record associated with the currently logged-in
 * user. The user must be registered as an affiliate in Keap for this to return
 * a value. Common fields include 'AffCode', 'AffName', 'ContactId', etc.
 *
 * @param string $fieldname The Keap affiliate field name to retrieve.
 * @param bool   $sanitize  Optional. If true, the returned value is escaped using
 *                          esc_html() for safe HTML output. Default false.
 * @return string The affiliate field value. Empty string if user is not an affiliate
 *                or field doesn't exist.
 */


function memb_getAffiliateField( string $fieldname,
 bool $sanitize = false ) : string {
return m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_tt2scetf905pm9txa45t( $fieldname,
 $sanitize );
}
//
// Keap Automation Functions
//
/**
 * Executes Keap legacy action sets against a contact record.
 *
 * Triggers one or more Keap legacy action sets (campaign sequences) to run
 * for a specific contact. Action sets contain automated actions like adding
 * tags, sending emails, updating fields, etc. Results are applied immediately.
 *
 * Note: Action sets are a legacy Keap feature. For modern campaigns, consider
 * using Keap's campaign builder and achieve goals instead.
 *
 * @param string|array $actionset_ids One or more action set IDs to execute.
 *                                    Accepts comma-separated string or array of IDs.
 * @param int          $contact_id    Optional. The Keap contact ID to run action sets
 *                                    against. If 0, uses the currently logged-in
 *                                    user's contact ID.
 * @return bool True if all action sets executed successfully, false on any failure.
 */


function memb_runActionset( $actionset_ids = '',
 int $contact_id = 0 ) : bool {
return (bool) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_x5k6c7dm38wwaxnhnzse( $actionset_ids,
 $contact_id );
}
//
// eCommerce Functions
//
/**
 * Retrieves receipt/order data from Keap for a contact's transactions.
 *
 * Fetches transaction and receipt information from Keap for display or processing.
 * Returns order details including line items, totals, payment information, and
 * transaction status. Used for generating invoice/receipt displays.
 *
 * @param array $args {
 *     Optional. Arguments to filter receipt data.
 *
 *     @type int    $contact_id Filter by Keap contact ID.
 *     @type int    $order_id   Specific order/invoice ID to retrieve.
 *     @type string $status     Filter by transaction status.
 * }
 * @return array Associative array containing receipt/order data including items,
 *               totals, payment details, and contact information. Empty array
 *               if no matching transactions found.
 */


function memb_getReceipt( array $args = []) : array {
return m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_zmsw66xd( $args );

}
//
//	Custom Field Functions
//
/**
 * Retrieves a WordPress user meta field value.
 *
 * Returns the value of a WordPress user metadata field. This function accesses
 * the wp_usermeta table directly and is not related to Keap contact fields.
 * Use memb_getContactField() for Keap contact data instead.
 *
 * @param string $field_name The user meta key to retrieve.
 * @param int    $user_id    Optional. The WordPress user ID. If 0, uses the
 *                           currently logged-in user's ID.
 * @return mixed The meta field value, or empty string if field doesn't exist.
 */


function memb_getUserFields(string $field_name,
 int $user_id = 0) {
return m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_1gdsc4zrspe39f5q04xwnetj6466($field_name,
 $user_id);
}
/**
 * Sets a WordPress user meta field value.
 *
 * Updates or creates a WordPress user metadata field. This function writes to
 * the wp_usermeta table and is not related to Keap contact fields. Use
 * memb_setContactField() for Keap contact data instead.
 *
 * @param string $field_name The user meta key to set.
 * @param mixed  $value      The value to store. Serialized automatically for arrays/objects.
 * @param int    $user_id    Optional. The WordPress user ID. If 0, uses the
 *                           currently logged-in user's ID.
 * @return int|bool Meta ID if new field, true on update, false on failure.
 */


function memb_setUserField(string $field_name,
 $value, int $user_id = 0) {
return m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_fkwjzzpbkcrc3nhe2yvnfvrv32yq($field_name,
 $value, $user_id);
}
//
// Mapping Functions
//
/**
 * Retrieves the mapping of membership levels configured in Memberium.
 *
 * Returns an associative array of all membership levels defined in the
 * Memberium settings. Each entry maps a membership level name/ID to its
 * configuration including access tags, login redirects, and other settings.
 *
 * @return array Associative array of membership level configurations.
 *               Key is membership name/ID, value is array of settings.
 */


function memb_getMembershipMap() : array {
return m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('memberships');

}
/**
 * Retrieves the mapping of all tags from Keap.
 *
 * Returns an associative array of all tags available in the connected Keap
 * application. Each entry maps a tag ID to its name and category information.
 * Results are cached for performance unless cache busting is requested.
 *
 * @param bool $cache_bust Optional. If true, fetches fresh data from Keap API
 *                         instead of using cached values. Default false.
 * @param bool $negatives  Optional. If true, includes negative/removed tags
 *                         in the response. Default false.
 * @return array Associative array where keys are tag IDs and values contain
 *               tag names and metadata. Empty array on API failure.
 */


function memb_getTagMap( bool $cache_bust = false,
 bool $negatives = false ) : array {
return m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( $cache_bust ,$negatives );
}
/**
 * Retrieves the mapping of all contact fields from Keap.
 *
 * Returns an array of all standard and custom contact field names available
 * in the connected Keap application. Used for field selection in shortcodes,
 * admin interfaces, and API operations.
 *
 * @return array Array of contact field identifiers. Standard fields have
 *               names like 'FirstName', 'Email'; custom fields are prefixed
 *               with underscores. Empty array on API failure.
 */


function memb_getContactFieldsMap() : array {
return m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact',
 false );
}
/**
 * Creates a new tag in Keap.
 *
 * Creates a new tag in the Keap application if it doesn't already exist.
 * Tags can be organized into categories and assigned descriptions for
 * easier management. The tag is created immediately via the Keap API.
 *
 * @param string $tag_name    The name for the new tag. Will be trimmed of whitespace.
 * @param int    $category_id Optional. The ID of the tag category to assign.
 *                            Use 0 for no category (default).
 * @param string $description Optional. A description for the tag.
 *                            Default 'Created by Memberium PHP API'.
 * @return int|bool The new tag ID on success, false on failure or if tag exists.
 */


function memb_createTag( $tag_name,
 $category_id = 0, $description = 'Created by Memberium PHP API' ) {
$tag_name = trim( $tag_name );
$category_id = (int) $category_id;

$description = trim( $description );
return m4is_0ddg4zyk7dn8eg0283::m4is_9bbkcv7vn6spvqcjs( $tag_name, $category_id, $description );

}
/**
 * Saves Memberium access permissions for a WordPress post.
 *
 * Configures which membership levels, tags, or users can access a specific post.
 * Permissions control content visibility and can be combined with other access
 * rules. Changes are saved to post meta and apply immediately.
 *
 * @param int    $post_id     The WordPress post ID to configure permissions for.
 * @param mixed  $permissions Permission configuration array or key name.
 *                            Accepts array of settings or individual permission key.
 * @param mixed  $value       Optional. If $permissions is a key name, this is the value.
 *                            Ignored if $permissions is an array.
 * @return bool True on successful save, false on failure or invalid post.
 */


function memb_savePostPermissions( int $post_id,
 $permissions, $value = null ) {
return m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt( $post_id, $permissions,
 $value );
}
//
//  Raw Keap API Functions
//
/**
 * Returns the Keap iSDK API object used by Memberium.
 *
 * Provides direct access to the underlying Keap Infusionsoft SDK object for
 * advanced API operations not covered by Memberium's helper functions. Use
 * with caution as this bypasses Memberium's caching and error handling.
 *
 * Note: Requires the i2sdk plugin to be active and configured.
 *
 * @return object|bool The iSDK object if available, false if i2sdk not loaded.
 */


function memb_get_keap_api() {
if ( ! is_object( $GLOBALS['i2sdk'] ) ) {
return false;

}
return $GLOBALS['i2sdk']->isdk;
}
/**
 * Retrieves the Keap application name configured in Memberium.
 *
 * Returns the Keap/Infusionsoft app name (subdomain) that Memberium is
 * connected to. This is the name portion of yourappname.infusionsoft.com.
 *
 * @return string The Keap application name. Empty string if not configured.
 */


function memb_getAppName() : string {
return m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_pdgd084n380vnszr3r( 'appname' );

}
//
// 3rd Party Plugin Integration
//
/**
 * Retrieves Memberium access permissions for a WordPress post.
 *
 * Returns the configured access rules for a post including required tags,
 * membership levels, and other access restrictions. Used by integrations
 * to determine content visibility rules.
 *
 * @param int $post_id The WordPress post ID to retrieve permissions for.
 * @return array Associative array of permission settings. Empty array if
 *               no permissions configured or post doesn't exist.
 */


function memb_loadPostPermissions( int $post_id ) {
return m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_snv9yqj539vh88gtr( $post_id );

}
/**
 * Retrieves Memberium settings for a WordPress post.
 *
 * Alias of memb_loadPostPermissions(). Returns all Memberium-related post
 * settings including access rules, redirect URLs, and other configuration.
 *
 * @param int $post_id The WordPress post ID to retrieve settings for.
 * @return array Associative array of post settings. Empty array if not configured.
 */


function memb_getPostSettings( int $post_id ) {
return m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_snv9yqj539vh88gtr($post_id);

}
/**
 * Retrieves the current Memberium license status.
 *
 * Returns the current status of the Memberium license key. Used to verify
 * plugin is properly licensed and check for license expiration or errors.
 *
 * @return string License status string. Possible values include 'active',
 *                'expired', 'invalid', 'inactive', or 'error'.
 */


function memb_get_license_status() : string {
return m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();

}
/**
 * Checks if the current license has any of the specified tags.
 *
 * Memberium licenses can be configured with feature tags that enable or
 * restrict certain functionality. This function checks if any of the
 * provided tags are present on the current license.
 *
 * @param string|array $tags Tag name(s) to check for. Accepts comma-separated
 *                           string or array of tag names.
 * @return bool True if license has any of the specified tags, false otherwise.
 */


function memb_has_license_tags( $tags ) : bool {
$tags = is_array($tags) ? $tags : explode(',',
 $tags);
return m4is_zrrt34b1nqxbv::m4is_yb1kyacqc84h1zq0m17py($tags);
}
/**
 * Checks if the Memberium license is in trial mode.
 *
 * Determines whether the current Memberium installation is running under
 * a trial license. Trial licenses may have restricted features or time limits.
 *
 * @return bool True if license is in trial mode, false otherwise.
 */


function memb_is_license_trial() : bool {
return m4is_zrrt34b1nqxbv::m4is_n9vtfbtbfsdnyf8vzsrb522pak078vcf();

}
//
// Deprecated Functions - Do Not Use
//
/**
 * @deprecated Use is_user_logged_in() instead.
 *
 * Checks if a user is currently logged in to WordPress.
 *
 * This function is deprecated and will be removed in a future release.
 * Use the WordPress core function is_user_logged_in() instead.
 *
 * @return bool True if user is logged in, false otherwise.
 */


function memb_getLoggedIn() : bool {
error_log( 'Memberium: [error]:  ' . __FUNCTION__ . '() is deprecated and will be removed in a future release.  Use is_user_logged_in() instead.' );

$m4is_4qbnse1s0zvb3044afap1m = debug_backtrace();
if ( ! empty( $m4is_4qbnse1s0zvb3044afap1m ) ) {
error_log( 'Location: ' . print_r( $m4is_4qbnse1s0zvb3044afap1m,
 true ) );
}
return is_user_logged_in();
}
/**
 * @deprecated Use is_user_logged_in() instead.
 *
 * Checks if a user is currently logged in to WordPress.
 *
 * This function is deprecated and will be removed in a future release.
 * Use the WordPress core function is_user_logged_in() instead.
 *
 * @return bool True if user is logged in, false otherwise.
 */


function memb_is_loggedin() : bool {
error_log( 'Memberium: [warning]:  ' . __FUNCTION__ . '() is deprecated and will be removed in a future release.  Use is_user_logged_in() instead.' );

$m4is_4qbnse1s0zvb3044afap1m = debug_backtrace();
if ( ! empty( $m4is_4qbnse1s0zvb3044afap1m ) ) {
error_log( 'Location: ' . print_r( $m4is_4qbnse1s0zvb3044afap1m,
 true ) );
}
return is_user_logged_in();
}
/**
 * @deprecated Use do_shortcode() instead.
 *
 * Parses shortcode content and returns the processed output.
 *
 * This function is deprecated and will be removed in a future release.
 * Use the WordPress core function do_shortcode() instead.
 *
 * @param string $content               The content string containing shortcodes to process.
 * @param bool   $do_regular_shortcodes Ignored. Shortcodes are always processed.
 * @return string The content with shortcodes replaced by their output.
 */


function memb_doShortcode( string $content,
 bool $do_regular_shortcodes = true ) : string {
error_log( 'Memberium: [warning]:  ' . __FUNCTION__ . '() is deprecated and will be removed in a future release.  Use do_shortcode() instead.' );

$m4is_4qbnse1s0zvb3044afap1m = debug_backtrace();
if ( ! empty( $m4is_4qbnse1s0zvb3044afap1m ) ) {
error_log( 'Location: ' . print_r( $m4is_4qbnse1s0zvb3044afap1m,
 true ) );
}
return do_shortcode( $content );
}
/**
 * @deprecated 
 *
 * Performs a programmatic WordPress login for a Memberium user.
 *
 * This function is deprecated. Use the class method directly if needed.
 * Logs the call stack for debugging purposes.
 *
 * @param string $username   The username or email to log in as.
 * @param string $password   Optional. The user's password. Default empty.
 * @param bool   $idempotent Optional. If true, prevents duplicate login attempts.
 *                           Default false.
 * @return mixed WP_User object on success, WP_Error or false on failure.
 */


function doMemberiumLogin( string $username,
 string $password = '', bool $idempotent = false ) {
error_log( 'Memberium: [warning]:  ' . __FUNCTION__ . '() is deprecated.' );
$m4is_4qbnse1s0zvb3044afap1m = debug_backtrace();

if ( ! empty( $m4is_4qbnse1s0zvb3044afap1m ) ) {
error_log( 'Location: ' . print_r( $m4is_4qbnse1s0zvb3044afap1m, true ) );
}
return m4is_an0pxqdph6ax26586c::m4is_svgxcbmh9at8xq2s73drytnyfr6pb0($username,
 $password, $idempotent);
}
/**
 * @deprecated SSO mode is handled automatically.
 *
 * Sets the Single Sign-On (SSO) mode for Memberium.
 *
 * This function is deprecated. SSO behavior is now controlled through
 * plugin settings and handled automatically by Memberium.
 *
 * @param bool $mode True to enable SSO mode, false to disable.
 * @return mixed Previous SSO mode value or void.
 */


function memb_setSSOMode( bool $mode = true ) {
error_log( 'Memberium: [warning]:  ' . __FUNCTION__ . '() is deprecated.' );

$m4is_4qbnse1s0zvb3044afap1m = debug_backtrace();
if ( ! empty( $m4is_4qbnse1s0zvb3044afap1m ) ) {
error_log( 'Location: ' . print_r( $m4is_4qbnse1s0zvb3044afap1m,
 true ) );
}
return m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_bw82cy1jxnmkhtbvkezjv4y3ntky($mode);

}
//
// Internal Functions
//