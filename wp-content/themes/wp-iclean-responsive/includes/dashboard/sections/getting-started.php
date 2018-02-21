<?php
/**
 * Getting started section.
 *
 * @package iClean
 */
?>
<div id="getting-started" class="gt-tab-pane gt-is-active">
	<div class="feature-section two-col">
		<div class="col">
			<h3><?php esc_html_e( 'Customize The Theme', 'wp-iclean-responsive' ); ?></h3>
			<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'wp-iclean-responsive' ); ?></p>
			<p>
				<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Start Customize', 'wp-iclean-responsive' ); ?></a>
			</p>
			<h3><?php esc_html_e( 'Themes Documentation and Demo', 'wp-iclean-responsive' ); ?></h3>
			<p><?php esc_html_e( 'Please check themes documentation and demo for more informations.', 'wp-iclean-responsive' ); ?></p>
			<p>
			<a href='<?php echo esc_url( "http://docs.wponlinesupport.com/wp-iclean-responsive/"); ?>' target="_blank" class="button button-primary"><?php esc_html_e( 'Themes Documentation', 'wp-iclean-responsive' ); ?></a> <a href='<?php echo esc_url( "http://demo.wponlinesupport.com/themes/wpos-clean-responsive/"); ?>' target="_blank" class="button button-primary"><?php esc_html_e( 'Theme Demo', 'wp-iclean-responsive' ); ?></a>
			</p>
			<h3><?php esc_html_e( 'Our Latest Blog Theme - Amyra', 'wp-iclean-responsive' ); ?></h3>
			<a href='https://themeforest.net/item/amyra-wordpress-blog-theme/20952977?ref=wponlinesupport' target="_blank">
				<img style="border:1px solid #fff;width:400px;" src="https://s3.envato.com/files/240699611/theme-preview/01_preview1.__large_preview.png" alt="<?php esc_attr_e( 'Amyra - Clean WordPress Blog Theme', 'wp-iclean-responsive' ); ?>">
			</a>
		</div>
		<div class="col">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png" alt="<?php esc_attr_e( 'screenshot', 'wp-iclean-responsive' ); ?>">
		</div>
	</div>
</div>