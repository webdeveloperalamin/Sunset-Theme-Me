<h1>Sunset Theme Options</h1>
<?php settings_errors(); ?>

<form method="POST" action="options.php" class="sunset-general-form">
	<?php settings_fields( 'sunset-theme-support' ); ?>
	<?php do_settings_sections( 'alamin_sunset_theme' ); ?>
	<?php submit_button(); ?>
</form>