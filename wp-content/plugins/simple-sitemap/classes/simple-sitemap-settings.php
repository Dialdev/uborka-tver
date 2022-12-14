<?php
/*
 *	Plugins options page
*/

class WPGO_Simple_Sitemap_Settings {

	protected $module_roots;

	/* Main class constructor. */
	public function __construct($module_roots) {

		$this->module_roots = $module_roots;

		add_action( 'admin_init', array( &$this, 'init' ) );
		add_action( 'admin_menu', array( &$this, 'add_options_page' ) );
	}

	/* Init plugin options to white list our options. */
	public function init() {
		register_setting( 'wpss_plugin_options', 'wpss_options', array( &$this, 'validate_options' ) );
	}

	/* Sanitize and validate input. Accepts an array, return a sanitized array. */
	public function validate_options( $input ) {
		// Strip html from textboxes
		// e.g. $input['textbox'] =  wp_filter_nohtml_kses($input['textbox']);
		//$input['txt_page_ids'] = sanitize_text_field( $input['txt_page_ids'] );

		return $input;
	}

	/* Add menu page. */
	public function add_options_page() {
		add_options_page( __( 'Simple Sitemap Settings Page', 'simple-sitemap' ), __( 'Simple Sitemap', 'simple-sitemap' ), 'manage_options', __FILE__, array( &$this, 'render_form' ) );
	}

	/* Draw the menu page itself. */
	public function render_form() {
		?>
		<div class="wrap">

			<h2 style="float:left;"><?php _e( 'Welcome to Simple Sitemap!', 'simple-sitemap' ); ?></h2>
			<div style="float:right;margin-top:5px;padding:10px 12px;"><a style="text-decoration:none;" title="Check out some of our other plugins" alt="WPGO Plugins Site" href="https://wpgoplugins.com/" target="_blank">wpgoplugins.com</a></div>

			<div style="clear:both;"></div>

			<div style="margin:20px 0 10px;font-size:14px;line-height:1.4em;">What type of sitemap will you create today? There are just so many different types of sitemap to choose from. That's why we recommend checking out the <a href="http://demo.wpgothemes.com/flexr/simple-sitemap-pro-demo/" target="_blank">live demo</a> page to start with to see all the different types of sitemap available!</div>

			<div><a class="plugin-btn" href="http://demo.wpgothemes.com/flexr/simple-sitemap-pro-demo/" target="_blank">Launch Sitemap Demo</a></div>

			<h2 style="margin:25px 0 0 0;">Sitemap Shortcodes & Attributes</h2>
			<div class="ss-box" style="margin-top:30px;">
				<h4 style="margin-top:5px;display:inline-block;margin-bottom:10px;">Available Shortcodes</h4><button id="shortcodes-btn" class="button">Expand <span style="vertical-align:sub;width:16px;height:16px;font-size:16px;" class="dashicons dashicons-arrow-down-alt2"></span></button>

				<div id="shortcodes-wrap">
					<p style="margin:15px 0 0 0;"><code>[simple-sitemap]</code> <?php printf( __( 'Display a list of posts for one or more post types.<br><br>', 'simple-sitemap' ) ); ?>
					</p>
					<p style="margin:0;"><code>[simple-sitemap-group]</code> <?php printf( __( 'Display a list of posts grouped category, OR tags.<br><br>', 'simple-sitemap' ) ); ?>
					</p>

					<p style="margin:0;"><code>[simple-sitemap-menu]</code> <span class="pro" title="Shortcode available in Simple Sitemap Pro"><a href="https://wpgoplugins.com/plugins/simple-sitemap-pro/" target="_blank">PRO</a></span> <?php printf( __( 'Displays a sitemap based on a nav menu.<br><br>', 'simple-sitemap' ) ); ?>
					</p>

					<p style="margin:0;"><code>[simple-sitemap-tax]</code> <span class="pro" title="Shortcode available in Simple Sitemap Pro"><a href="https://wpgoplugins.com/plugins/simple-sitemap-pro/" target="_blank">PRO</a></span> <?php printf( __( 'Display a list of post categories (or ANY other registered taxonomies) with various options available such as post count.<br><br>', 'simple-sitemap' ) ); ?>
					</p>

					<p style="margin:0 0 40px 0;"><code>[simple-sitemap-child]</code> <span class="pro" title="Shortcode available in Simple Sitemap Pro"><a href="https://wpgoplugins.com/plugins/simple-sitemap-pro/" target="_blank">PRO</a></span> <?php printf( __( 'Display a list of child pages for a specific parent page.', 'simple-sitemap' ) ); ?>
					</p>
				</div>
			</div>

			<?php $pro_attribute = '<span class="pro" title="Shortcode attribute available in Simple Sitemap Pro"><a href="https://wpgoplugins.com/plugins/simple-sitemap-pro/" target="_blank">PRO</a></span>'; ?>

			<div class="ss-box">
				<h4 style="margin-top:5px;display:inline-block;margin-bottom:10px;">Shortcode Attributes & Default Values</h4><button id="attributes-btn" class="button">Expand <span style="vertical-align:sub;width:16px;height:16px;font-size:16px;" class="dashicons dashicons-arrow-down-alt2"></span></button>
				<div id="attributes-wrap">
					<p>Note: Default values are always used for missing shortcode attributes. i.e. Override only the values you want to change.</p>
					<p style="margin:20px 0 0 0;"><code><b>[simple-sitemap ... ]</b></code></p>
					<ul class="shortcode-attributes">
						<li><code>types="page"</code> - List of posts for each post type specified, in the order entered.</li>
						<li><code>page_depth="0"</code> - For the 'page' post type allow the indentation depth to be specified.</li>
						<li><code>title_tag=""</code> - Tag used to wrap each sitemap item in a specified tag.</li>
						<li><code>post_type_tag="h2"</code> - Tag used to display the post type label.</li>
						<li><code>orderby="title"</code> - Value to sort posts by (title, date, author etc.). See the full list <a href="https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">here</a>.</li>
						<li><code>order="asc"</code> - List posts for each post type in ascending, or descending order.</li>
						<li><code>show_excerpt="true"</code> - Optionally show post excerpt (if defined) under each sitemap item.</li>
						<li><code>excerpt_tag=""</code> - Tag used to wrap the post excerpt text.</li>
						<li><code>exclude=""</code> - Comma separated list of post IDs to exclude from the sitemap.</li>
						<li><code>show_label="true"</code> - Optionally show post type label above the sitemap list of posts.</li>
						<li><code>links="true"</code> - Show sitemap items as links or plain text.</li>
						<li><code>container_tag="ul"</code> - List type tag, ordered, or unordered.</li>
						<li><code>include=""</code> <?php echo $pro_attribute; ?> - Comma separated list of post IDs to INCLUDE in the sitemap only. Other posts will be ignored.</li>
						<li><code>render=""</code> <?php echo $pro_attribute; ?> - Set to "tab" to display posts in a tabbed layout!</li>
						<li><code>image="false"</code> <?php echo $pro_attribute; ?> - Optionally show the post featured image (if defined) next to each sitemap item.</li>
						<li><code>list_icon="true"</code> <?php echo $pro_attribute; ?> - Optionally display HTML bullet icons.</li>
						<li><code>separator="false"</code> <?php echo $pro_attribute; ?> - Optionally render separator lines inbetween sitemap items.</li>
						<li><code>id="1"</code> <?php echo $pro_attribute; ?> - If multiple tabbed sitemaps displayed this attribute is useful to avoid CSS id conflicts.</li>
						<li><code>horizontal="false"</code> <?php echo $pro_attribute; ?> - Set to "true" to display sitemap items in a flat horizontal list. Great for adding a sitemap to the footer!</li>
						<li><code>horizontal_separator=", "</code> <?php echo $pro_attribute; ?> - The character(s) used to separate sitemap items. Use with the 'horizontal' attribute.</li>
						<li><code>nofollow="0"</code> <?php echo $pro_attribute; ?> - Set to "1" to make sitemap links <a href="https://en.wikipedia.org/wiki/Nofollow" target="_blank">nofollow</a>.</li>
						<li><code>numposts="-1"</code> <?php echo $pro_attribute; ?> - Limit the number of posts outputted in the sitemap.</li>
						<li><code>visibility="all"</code> <?php echo $pro_attribute; ?> - Control whether private posts/pages are displayed in the sitemap.</li>
					</ul>

					<p style="margin:30px 0 0 0;"><code><b>[simple-sitemap-group ... ]</b></code></p>

					<ul class="shortcode-attributes">
						<li><code>tax="category"</code> - List posts grouped by categories OR tags ('post_tag').</li>
						<li><code>title_tag=""</code> - Tag used to wrap each sitemap item in a specified tag.</li>
						<li><code>show_excerpt="true"</code> - Optionally show post excerpt (if defined) under each sitemap item.</li>
						<li><code>excerpt_tag=""</code> - Tag used to wrap the post excerpt text.</li>
						<li><code>links="true"</code> - Show sitemap items as links or plain text.</li>
						<li><code>orderby="title"</code> - Value to sort posts by (title, date, author etc.). See the full list <a href="https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">here</a>.</li>
						<li><code>order="asc"</code> - List posts for each post type in ascending, or descending order.</li>
						<li><code>term_orderby="title"</code> - Order post taxonomy term labels by title etc.</li>
						<li><code>term_order="asc"</code> - List taxonomy term labels in ascending, or descending order.</li>
						<li><code>exclude=""</code> - Comma separated list of post IDs to exclude from the sitemap.</li>
						<li><code>post_type_tag="h2"</code> - Tag used to display the post type label.</li>
						<li><code>show_label="true"</code> - Optionally show post type label above the sitemap list of posts.</li>
						<li><code>page_depth="0"</code> - For the 'page' post type allow the indentation depth to be specified.</li>
						<li><code>container_tag="ul"</code> - List type tag, ordered, or unordered.</li>
						<li><code>type="post"</code> <?php echo $pro_attribute; ?> - List posts grouped by taxonomy from ANY post type.</li>
						<li><code>separator="false"</code> <?php echo $pro_attribute; ?> - Optionally render separator lines inbetween sitemap items.</li>
						<li><code>image="false"</code> <?php echo $pro_attribute; ?> - Optionally show the post featured image (if defined) next to each sitemap item.</li>
						<li><code>list_icon="true"</code> <?php echo $pro_attribute; ?> - Optionally display HTML bullet icons.</li>
						<li><code>include_terms=""</code> <?php echo $pro_attribute; ?> - Comma separated list of taxonomy terms to include.</li>
						<li><code>exclude_terms=""</code> <?php echo $pro_attribute; ?> - Comma separated list of taxonomy terms to exclude.</li>
						<li><code>visibility="all"</code> <?php echo $pro_attribute; ?> - Control whether private posts/pages are displayed in the sitemap.</li>
						<li><code>id="1"</code> <?php echo $pro_attribute; ?> - If multiple tabbed sitemaps displayed this attribute is useful to avoid CSS id conflicts.</li>
						<li><code>numposts="-1"</code> <?php echo $pro_attribute; ?> - Limit the number of posts outputted in the sitemap.</li>
						<li><code>render=""</code> <?php echo $pro_attribute; ?> - Set to "tab" to display posts in a tabbed layout!</li>
						<li><code>horizontal="false"</code> <?php echo $pro_attribute; ?> - Set to "true" to display sitemap items in a flat horizontal list. Great for adding a sitemap to the footer!</li>
						<li><code>horizontal_separator=", "</code> <?php echo $pro_attribute; ?> - The character(s) used to separate sitemap items. Use with the 'horizontal' attribute.</li>
						<li><code>nofollow="0"</code> <?php echo $pro_attribute; ?> - Set to "1" to make sitemap links <a href="https://en.wikipedia.org/wiki/Nofollow" target="_blank">nofollow</a>.</li>
					</ul>

					<br><hr><br><?php printf( __( 'The following (public) registered post types are available: ', 'simple-sitemap' ) ); ?>
					<?php
					$post_type_args = array(
						'public'   => true
					);
					$registered_post_types = get_post_types($post_type_args);
					$registered_post_types_str = implode(', ', $registered_post_types);
					echo '<code>"' . $registered_post_types_str . '"</code>';
					?><br><br>
				</div>
			</div>

			<div style="margin-top:15px;"></div>

			<table class="form-table">

				<tr valign="top">
					<th scope="row">Like the plugin?</th>
					<td>
						<p>Then why not try <a href="https://wpgoplugins.com/plugins/simple-sitemap-pro/" target="_blank">Simple Sitemap Pro</a> to access powerful additional features. Try risk free today with our <span style="font-weight: bold;">100% money back guarantee!</span></p>
						<div><a class="plugin-btn" target="_blank" href="https://wpgoplugins.com/plugins/simple-sitemap-pro/">Upgrade to Pro</a></div>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Help support this plugin</th>
					<td>
						<div style="float:left;"><a style="margin-right:10px;line-height:0;display:block;" href="https://wpgoplugins.com/plugins/simple-sitemap-pro/" target="_blank"><img style="box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);width:75px;border-radius:2px;border:2px white solid;" src="<?php echo plugins_url(); ?>/simple-sitemap/images/david.png"></a></div>
						<p style="margin-top:0;">Hi there, I'm David. I spend a lot of time developing FREE WordPress plugins like this one. If you like Simple Sitemap and use it on your website please consider making a <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FBAG4ZHA4TTUC" target="_blank">donation</a>, or purchase the <a href="https://wpgoplugins.com/plugins/simple-sitemap-pro/" target="_blank">pro version</a>, to help fund continued development (and to keep Dexter in doggy biscuits!).</p>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Try our other top plugins!</th>
					<td>
						<table class="other-plugins-tbl">
							<tr><td><a class="plugin-image-link" href="https://wpgoplugins.com/plugins/flexible-faqs/" target="_blank"><img src="<?php echo plugins_url(); ?>/simple-sitemap/images/flexible-faq-thumb.png"></a></td></tr>
							<tr><td class="plugin-text-link"><div><h3><a href="https://wpgoplugins.com/plugins/flexible-faqs/" target="_blank">Flexible FAQs</a></h3></div></td></tr>
						</table>
						<table class="other-plugins-tbl">
							<tr><td><a class="plugin-image-link" href="https://wpgoplugins.com/plugins/content-censor/" target="_blank"><img src="<?php echo plugins_url(); ?>/simple-sitemap/images/content-censor-thumb.png"></a></td></tr>
							<tr><td class="plugin-text-link"><div><h3><a href="https://wpgoplugins.com/plugins/content-censor/" target="_blank">Content Censor</a></h3></div></td></tr>
						</table>
						<table class="other-plugins-tbl">
							<tr><td><a class="plugin-image-link" href="https://wpgoplugins.com/plugins/seo-media-manager/" target="_blank"><img src="<?php echo plugins_url(); ?>/simple-sitemap/images/seo-media-manager-thumb.png"></a></td></tr>
							<tr><td class="plugin-text-link"><div><h3><a href="https://wpgoplugins.com/plugins/seo-media-manager/" target="_blank">SEO Media Manager</a></h3></div></td></tr>
						</table>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Read all about it!</th>
					<td>
						<p>Subscribe to our newsletter for news and updates about the latest development work. Be the first to find out about future projects and exclusive promotions.</p>
						<div><a class="plugin-btn" target="_blank" href="http://eepurl.com/bXZmmD">Sign Me Up!</a></div>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Keep in touch...</th>
					<td>
						<div><p style="margin-bottom:10px;">Come and say hello. I'd love to hear from you!</p>
							<span><a class="social-link" href="http://www.twitter.com/dgwyer" title="Follow us on Twitter" target="_blank"><img src="<?php echo plugins_url(); ?>/simple-sitemap/images/twitter.png" /></a></span>
							<span><a class="social-link" href="https://www.facebook.com/wpgoplugins/" title="Our Facebook page" target="_blank"><img src="<?php echo plugins_url(); ?>/simple-sitemap/images/facebook.png" /></a></span>
							<span><a class="social-link" href="https://www.youtube.com/channel/UCWzjTLWoyMgtIfpDgJavrTg" title="View our YouTube channel" target="_blank"><img src="<?php echo plugins_url(); ?>/simple-sitemap/images/yt.png" /></a></span>
							<span><a style="text-decoration:none;" title="Need help with ANY aspect of WordPress? We're here to help!" href="https://wpgoplugins.com/need-help-with-wordpress/" target="_blank"><span style="margin-left:-2px;color:#d41515;font-size:39px;line-height:32px;width:39px;height:39px;" class="dashicons dashicons-sos"></span></a></span>
						</div>
					</td>
				</tr>

				<tr><td colspan="2" style="padding:0;"><div style="margin-bottom:20px;margin-top:15px;">Please <a href="https://wpgoplugins.com/contact" target="_blank">report</a> any plugin issues, or suggest additional features. <span style="font-weight:bold;">All feedback welcome!</span></div>
					</td></tr>

			</table>

		</div>
		<?php
	}

} /* End class definition */