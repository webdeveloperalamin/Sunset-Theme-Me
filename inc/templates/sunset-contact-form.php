<h1>Sunset Theme Options</h1>
<?php settings_errors(); ?>

<p>Use this <strong>Shortcode</strong> to activate contact form inside a page or a post</p>
<p><code>[contact_form]</code></p>

<form method="POST" action="options.php" class="sunset-general-form">
	<?php settings_fields( 'sunset-contact-options' ); ?>
	<?php do_settings_sections( 'alamin_sunset_theme_contact' ); ?>
	<?php submit_button(); ?>
</form>