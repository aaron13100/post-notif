<?php 

/**
 * Display plugin settings (accessible via Settings >> Post Notif on admin menu sidebar).
 *
 * This markup generates the plugin's settings page.
 *
 * @link		https://devonostendorf.com/projects/#post-notif
 * @since		1.0.0
 *
 * @package		Post_Notif
 * @subpackage	Post_Notif/admin/views
 */
?> 
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<div id="post-body-content">
			<form method="post" action="options.php">
				<?php settings_fields( 'post_notif_settings_group' ); ?>
				<?php $options = get_option( 'post_notif_settings' ); ?>                              
				<h2 class="title"><?php esc_html_e( 'Email Settings', 'post-notif' ); ?></h2>
				<table class="form-table">
					<tr valign="top">
						<th scope="row">
							<label for="eml_sender_name"><?php esc_html_e( 'Email sender name:', 'post-notif' ); ?></label>
						</th>
						<td>
							<input type="text" size="75" name="post_notif_settings[eml_sender_name]" id="eml_sender_name" value="<?php echo esc_attr( $options['eml_sender_name'] ); ?>">
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="eml_sender_eml_addr"><?php esc_html_e( 'Email sender email address:', 'post-notif' ); ?></label>
						</th>
						<td>
							<input type="text" size="75" name="post_notif_settings[eml_sender_eml_addr]" id="eml_sender_eml_addr" value="<?php echo esc_attr( $options['eml_sender_eml_addr'] ); ?>">
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<?php echo '@@signature:'; ?>
						</th>
						<td>
							<input type="text" size="75" name="post_notif_settings[@@signature]" id="@@signature" value="<?php echo esc_attr( $options['@@signature'] ); ?>">
							<br />
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sub_conf_eml_subj"><?php esc_html_e( 'Subscription confirmation email subject:', 'post-notif' ); ?></label>
						</th>
						<td>
							<input type="text" size="75" name="post_notif_settings[sub_conf_eml_subj]" id="sub_conf_eml_subj" value="<?php echo esc_attr( $options['sub_conf_eml_subj'] ); ?>">
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sub_conf_eml_body"><?php esc_html_e( 'Subscription confirmation email body:', 'post-notif' ); ?></label>
						</th>
						<td>
							<textarea name="post_notif_settings[sub_conf_eml_body]" rows="10" cols="73" id="sub_conf_eml_body"><?php echo esc_html( $options['sub_conf_eml_body'] ); ?></textarea>
 						</td>
					</tr>
					<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'After subscription is confirmed:', 'post-notif' ); ?>
            			</th>
            			<td>
							<label for="send_eml_to_sub_after_conf">
            					<input type="checkbox" name="post_notif_settings[send_eml_to_sub_after_conf]" id="send_eml_to_sub_after_conf" value="1" <?php echo ( ( array_key_exists( 'send_eml_to_sub_after_conf', $options ) ) ? 'checked' : '' ); ?> />
            					<?php esc_html_e( 'Send email to subscriber?', 'post-notif' ); ?>
            				</label>
            				<br />
            			</td>
            		</tr>
					<tr valign="top">
						<th scope="row">
							<label for="eml_to_sub_after_conf_subj"><?php esc_html_e( 'Email sent after subscription is confirmed subject:', 'post-notif' ); ?></label>
						</th>
						<td>
							<input type="text" size="75" name="post_notif_settings[eml_to_sub_after_conf_subj]" id="eml_to_sub_after_conf_subj" value="<?php echo esc_attr( $options['eml_to_sub_after_conf_subj'] ); ?>">
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="eml_to_sub_after_conf_body"><?php esc_html_e( 'Email sent after subscription is confirmed body:', 'post-notif' ); ?></label>
						</th>
						<td>
							<textarea name="post_notif_settings[eml_to_sub_after_conf_body]" rows="10" cols="73" id="eml_to_sub_after_conf_body"><?php echo esc_html( $options['eml_to_sub_after_conf_body'] ); ?></textarea>
 						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="post_notif_eml_subj"><?php esc_html_e( 'Post notification email subject:', 'post-notif' ); ?>
						</th>
						<td>
							<input type="text" size="75" name="post_notif_settings[post_notif_eml_subj]" id="post_notif_eml_subj" value="<?php echo esc_attr( $options['post_notif_eml_subj'] ); ?>">
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<?php esc_html_e( 'Post notification email body:', 'post-notif' ); ?>
						</th>
						<td>
							<textarea name="post_notif_settings[post_notif_eml_body]" rows="10" cols="73" id="post_notif_eml_body"><?php echo esc_html( $options['post_notif_eml_body'] ); ?></textarea>
							<br />
						</td>
					</tr>
					<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'If using "Custom Structure" permalink:', 'post-notif' ); ?>
            			</th>
            			<td>
							<label for="custom_permalink_with_category_concat">
            					<input type="checkbox" name="post_notif_settings[custom_permalink_with_category_concat]" id="custom_permalink_with_category_concat" value="1" <?php echo ( ( array_key_exists( 'custom_permalink_with_category_concat', $options ) ) ? 'checked' : '' ); ?> />
            					<?php esc_html_e( '%category% is concatenated with something', 'post-notif' ); ?>
            				</label>
            				<br />
            				<p class="description">
            					<?php esc_html_e( 'This is not common.', 'post-notif' ); ?>
            				</p>
            			</td>
            		</tr>					
				</table>
				<h2 class="title"><?php esc_html_e( 'Page Settings', 'post-notif' ); ?></h2>
				<table class="form-table">
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Subscription confirmed page title:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[sub_confirmed_page_title]" id="sub_confirmed_page_title" value="<?php echo esc_attr( $options['sub_confirmed_page_title'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Subscription confirmed page greeting:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[sub_confirmed_page_greeting]" id="sub_confirmed_page_greeting" value="<?php echo esc_attr( $options['sub_confirmed_page_greeting'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Subscription preferences selection instructions:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[sub_pref_selection_instrs]" id="sub_pref_selection_instrs" value="<?php echo esc_attr( $options['sub_pref_selection_instrs'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Current subscription preferences page title:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[curr_sub_prefs_page_title]" id="curr_sub_prefs_page_title" value="<?php echo esc_attr( $options['curr_sub_prefs_page_title'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Current subscription preferences page greeting:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[curr_sub_prefs_page_greeting]" id="curr_sub_prefs_page_greeting" value="<?php echo esc_attr( $options['curr_sub_prefs_page_greeting'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Subscription preferences updated page title:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[sub_prefs_updated_page_title]" id="sub_prefs_updated_page_title" value="<?php echo esc_attr( $options['sub_prefs_updated_page_title'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Subscription preferences updated page greeting:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[sub_prefs_updated_page_greeting]" id="sub_prefs_updated_page_greeting" value="<?php echo esc_attr( $options['sub_prefs_updated_page_greeting'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Unsubscribe link label:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[unsub_link_label]" id="unsub_link_label" value="<?php echo esc_attr( $options['unsub_link_label'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Unsubscribe confirmation page title:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[unsub_confirmation_page_title]" id="unsub_confirmation_page_title" value="<?php echo esc_attr( $options['unsub_confirmation_page_title'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Unsubscribe confirmation page greeting:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[unsub_confirmation_page_greeting]" id="unsub_confirmation_page_greeting" value="<?php echo esc_attr( $options['unsub_confirmation_page_greeting'] ); ?>">
            				<br />
            			</td>
            		</tr>
            	</table> 
            	<h2 class="title"><?php esc_html_e( 'Widget Messages', 'post-notif' ); ?></h2>
            	<table class="form-table">
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Error (blank email address):', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[widget_error_email_addr_blank]" id="widget_error_email_addr_blank" value="<?php echo esc_attr( $options['widget_error_email_addr_blank'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Error (invalid email address):', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[widget_error_email_addr_invalid]" id="widget_error_email_addr_invalid" value="<?php echo esc_attr( $options['widget_error_email_addr_invalid'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Message (processing):', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[widget_info_message_processing]" id="widget_info_message_processing" value="<?php echo esc_attr( $options['widget_info_message_processing'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Message (already subscribed):', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[widget_info_message_already_subscribed]" id="widget_info_message_already_subscribed" value="<?php echo esc_attr( $options['widget_info_message_already_subscribed'] ); ?>">
            				<br />
            			</td>
            		</tr>
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Message (successful subscription request):', 'post-notif' ); ?>
            				</th>
            			<td>
            				<input type="text" size="75" name="post_notif_settings[widget_success_message]" id="widget_success_message" value="<?php echo esc_attr( $options['widget_success_message'] ); ?>">
            				<br />
            			</td>
            		</tr>
            	</table> 
            	<h2 class="title"><?php esc_html_e( 'Category Settings', 'post-notif' ); ?></h2>
            	<table class="form-table">
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Categories available to subscribers:', 'post-notif' ); ?>
            			</th>
            		</tr>
<?php

// If the available_categories array exists in options, assign it to variable
//	otherwise assign a placeholder array with a single element, with index of
//	-1, representing NO categories selected
$available_categories = array_key_exists( 'available_categories', $options ) ? $options['available_categories'] : array( '-1' => '1' );

// The presence of an element with index of 0 means ALL categories are selected
$all_selected = array_key_exists( 0, $available_categories );
?> 

            		<tr valign="top">            		
            			<td>
            				<input type="checkbox" name="post_notif_settings[available_categories][0]" id="available_categories[0]" value="1" <?php echo $all_selected  ? 'checked' : ''; ?> ><?php esc_html_e( 'All', 'post-notif' ); ?></input>
            			</td>
            		</tr>
<?php

// Retrieve all categories in the system
$args = array(
	'orderby' => 'name',
	'order' => 'ASC',
	'hide_empty' => 0
);

$categories = get_categories( $args );
foreach ( $categories as $category ) { 
?>
            		<tr valign="top">            		
            			<td>
<?php
	if ( $all_selected ) {
		echo '&nbsp;&nbsp;<input type="checkbox" class="cats" name="post_notif_settings[available_categories][' . $category->cat_ID . ']" id="available_categories[' . $category->cat_ID . ']" value="1" checked disabled>&nbsp;' . $category->name . '</input>';
	}
	else {
		echo '&nbsp;&nbsp;<input type="checkbox" class="cats" name="post_notif_settings[available_categories][' . $category->cat_ID . ']" id="available_categories[' . $category->cat_ID . ']" value="1"' . ( ( array_key_exists( $category->cat_ID, $available_categories ) ) ? ' checked' : ' ' ) . ' >' . $category->name . '</input>';
	}
?>            			
             			</td>
             		</tr>
<?php
} 
?>  	
				</table> 
				<h2 class="title"><?php esc_html_e( 'Admin Menu Settings', 'post-notif' ); ?></h2>
				<table class="form-table">
            		<tr valign="top">
            			<th scope="row">
            				<?php esc_html_e( 'Position in menu:', 'post-notif' ); ?>
            			</th>
            			<td>
            				<input type="text" size="5" name="post_notif_settings[admin_menu_position]" id="admin_menu_position" value="<?php echo esc_attr( $options['admin_menu_position'] ); ?>">
            				<br />
            				<p class="description">
            					<?php esc_html_e( 'If you cannot see the Post Notif admin menu, change this to another number of the form "3.xyz".', 'post-notif' ); ?>
            				</p>
            			</td>
            		</tr>
            	</table> 
            	<?php submit_button() ?>
            </form>
        </div> <!-- end post-body-content -->
    </div>
