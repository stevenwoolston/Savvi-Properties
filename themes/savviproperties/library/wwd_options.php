<?php
/*  Custom Options Page 
**  https://gist.githubusercontent.com/tommcfarlin/04782209b0822ce2bf1f/raw/4249877ae35665e1a4776de420b7df34d36102aa/display-acme-options-final.php
*/
add_action( 'admin_menu', 'add_acme_options_page' );
function add_acme_options_page() {

	add_options_page(
		'WWD Options',
		'WWD Options',
		'manage_options',
		'acme-options-page',
		'display_acme_options_page'
	);

}

function display_acme_options_page() {

	echo '<h1>WWD Options Panel</h1><hr />';

	echo '<form method="post" action="options.php">';

	do_settings_sections( 'acme-options-page' );
	settings_fields( 'acme-settings' );

	submit_button();

	echo '</form>';

}

add_action( 'admin_init', 'acme_admin_init_one' );
function acme_admin_init_one() {

	add_settings_section(
		'acme-settings-section-one',      
		'General Options',         
		'display_general_settings_message',  
		'acme-options-page'               
	);

	add_settings_field(
		'frontpage_carousel',        
		'Enable Front Page Carousel?',        
		'display_frontpage_carousel',  
		'acme-options-page',        
		'acme-settings-section-one' 
	);

	add_settings_field(
		'carousel_category',
		'Category For Carousel',
		'display_carousel_category',
		'acme-options-page',
		'acme-settings-section-one'
	);
    
	add_settings_field(
		'carousel_speed',
		'Carousel Transition Speed (in seconds)',
		'display_carousel_speed',
		'acme-options-page',
		'acme-settings-section-one'
	);
    
	add_settings_field(
		'carousel_transition',
		'Carousel Transition',
		'display_carousel_transition',
		'acme-options-page',
		'acme-settings-section-one'
	);
    
	add_settings_field(
		'home_content_category',
		'Full Width Home Content Category',
		'display_home_content_category',
		'acme-options-page',
		'acme-settings-section-one'
	);
    
	register_setting(
		'acme-settings',    
		'frontpage_carousel'    
	);
    
	register_setting(
		'acme-settings',    
		'carousel_category'    
	);
    
	register_setting(
		'acme-settings',    
		'carousel_speed'    
	);
    
	register_setting(
		'acme-settings',    
		'carousel_transition'    
	);

	register_setting(
		'acme-settings',    
		'home_content_category'    
	);
    
}

function display_general_settings_message() {
	echo "<p>General settings that are used in the WWD Theme.</p>";
}

add_action( 'admin_init', 'acme_admin_init_two' );
function acme_admin_init_two() {

	add_settings_section(
		'acme-settings-section-two',
		'<hr />SEO Options',
		'display_seo_settings_message',
		'acme-options-page'
	);

	add_settings_field(
		'facebookurl',
		'Facebook URL',
		'display_facebook_url',
		'acme-options-page',
		'acme-settings-section-two'
	);

	add_settings_field(
		'twitter_url',
		'Twitter URL',
		'display_twitter_url',
		'acme-options-page',
		'acme-settings-section-two'
	);
    
	add_settings_field(
		'googleurl',
		'Google Plus URL',
		'display_google_url',
		'acme-options-page',
		'acme-settings-section-two'
	);

	add_settings_field(
		'youtube_url',
		'Youtube Channel URL',
		'display_youtube_url',
		'acme-options-page',
		'acme-settings-section-two'
	);
    
	add_settings_field(
		'tracking_code',
		'Google Analytics Tracking Code',
		'display_tracking_code',
		'acme-options-page',
		'acme-settings-section-two'
	);
    
	add_settings_field(
		'meta_description',
		'Meta Description (155 chars)',
		'display_meta_description',
		'acme-options-page',
		'acme-settings-section-two'
	);

	register_setting(
		'acme-settings',
		'facebook_url'
	);

	register_setting(
		'acme-settings',
		'twitter_url'
	); 

	register_setting(
		'acme-settings',
		'google_url'
	);

	register_setting(
		'acme-settings',
		'youtube_url'
	); 
    
	register_setting(
		'acme-settings',
		'tracking_code'
	); 
    
	register_setting(
		'acme-settings',
		'meta_description'
	);     
}

function display_seo_settings_message() {
    echo '<p>Please be aware that these settings can take many days or even weeks to appear in search engine results.</p>';
}

function display_frontpage_carousel()
{
	$input = get_option( 'frontpage_carousel' );
    ?>
        <input type="radio" name="frontpage_carousel" id="frontpage_carousel_true" value="true" <?php if ($input == 'true') echo 'checked'; ?> />Yes
        <input type="radio" name="frontpage_carousel" id="frontpage_carousel_true" value="false" <?php if ($input == 'false') echo 'checked'; ?> />No
    <?php
}

function display_facebook_url()
{
	$input = get_option( 'facebook_url' );
    echo '<input type="text" size="50" name="facebook_url" id="facebook_url" value="' . $input . '" />';
}
function display_twitter_url()
{
	$input = get_option( 'twitter_url' );
    echo '<input type="text" size="50" name="twitter_url" id="twitter_url" value="' . $input . '" />';
}
function display_google_url()
{
	$input = get_option( 'google_url' );
    echo '<input type="text" size="50" name="google_url" id="google_url" value="' . $input . '" />';
}
function display_youtube_url()
{
	$input = get_option( 'youtube_url' );
    echo '<input type="text" size="50" name="youtube_url" id="youtube_url" value="' . $input . '" />';
}

function display_tracking_code()
{
	$input = get_option( 'tracking_code' );
    echo '<input type="text" size="50" name="tracking_code" id="tracking_code" value="' . $input . '" />';
}

function display_meta_description()
{
	$input = get_option( 'meta_description' );
    echo '<textarea name="meta_description" rows="3" style="width: 80%" id="meta_description">' . $input . '</textarea>';
}

function display_carousel_speed()
{
	$input = get_option( 'carousel_speed' );
    echo '<input type="text" size="50" name="carousel_speed" id="carousel_speed" value="' . $input . '" />';
}

function display_carousel_transition()
{
	$input = get_option( 'carousel_transition' );
?>
    <select name='carousel_transition'>
        <option value="carousel-fade" <?php echo ($input == "carousel-fade") ? 'selected' : ''; ?>>Fade</option>
        <option value="" <?php echo ($input == "") ? 'selected' : ''; ?>>Slide Horizontally</option>
        <option value="carousel-height" <?php echo ($input == "carousel-height") ? 'selected' : ''; ?>>Slide In Vertically</option>
    </select>
<?php
}

function display_carousel_category()
{
	$input = get_option( 'carousel_category' );
?>
    <select name="carousel_category">
<?php
    if ( $input == '') {
?>
        <option value=""><?php echo esc_attr(__('Select Category')); ?></option> 
<?php }

        $categories = get_categories(); 
        foreach ($categories as $category) {
            if ( $category->slug == $input )
                echo '<option selected value="'.$category->slug.'">' . $category->cat_name . '</option>';
            else
                echo '<option value="'.$category->slug.'">' . $category->cat_name . '</option>';                    
        }
        ?>
    </select>
<?php
}

function display_home_content_category()
{
	$input = get_option( 'home_content_category' );
?>
    <select name="home_content_category">
<?php
    if ( $input == '') {
?>
        <option selected value=""><?php echo esc_attr(__('Section Is Hidden')); ?></option> 
<?php 
    } else {
?>
        <option value=""><?php echo esc_attr(__('Section Is Hidden')); ?></option>    
<?php
    }
        $categories = get_categories(); 
        foreach ($categories as $category) {
            if ( $category->slug == $input )
                echo '<option selected value="'.$category->slug.'">' . $category->cat_name . '</option>';
            else
                echo '<option value="'.$category->slug.'">' . $category->cat_name . '</option>';                    
        }
        ?>
    </select>
<?php
}
?>