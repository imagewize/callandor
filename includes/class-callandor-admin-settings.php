<?php
/**
 * Admin Settings Class
 *
 * Handles the admin interface for managing patterns and settings.
 *
 * @package Callandor
 * @since 1.0.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Class Callandor_Admin_Settings
 */
class Callandor_Admin_Settings {

	/**
	 * Settings page slug.
	 *
	 * @var string
	 */
	private $page_slug = 'callandor-patterns';

	/**
	 * Pattern loader instance.
	 *
	 * @var Callandor_Pattern_Loader
	 */
	private $pattern_loader;

	/**
	 * Initialize the admin settings.
	 */
	public function init() {
		add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
		add_action( 'admin_init', array( $this, 'register_settings' ) );
		add_action( 'admin_init', array( $this, 'handle_clear_cache' ) );

		// Initialize pattern loader for pattern listing.
		$this->pattern_loader = new Callandor_Pattern_Loader();
	}

	/**
	 * Add admin menu page under Appearance.
	 */
	public function add_admin_menu() {
		add_theme_page(
			__( 'Callandor Patterns', 'callandor' ),
			__( 'Callandor Patterns', 'callandor' ),
			'manage_options',
			$this->page_slug,
			array( $this, 'render_admin_page' )
		);
	}

	/**
	 * Register plugin settings.
	 */
	public function register_settings() {
		register_setting(
			'callandor_settings',
			'callandor_license_key',
			array(
				'type'              => 'string',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '',
			)
		);

		register_setting(
			'callandor_settings',
			'callandor_disabled_patterns',
			array(
				'type'              => 'array',
				'sanitize_callback' => array( $this, 'sanitize_disabled_patterns' ),
				'default'           => array(),
			)
		);

		// Add settings section.
		add_settings_section(
			'callandor_general_section',
			__( 'General Settings', 'callandor' ),
			array( $this, 'render_general_section' ),
			$this->page_slug
		);

		// License key field.
		add_settings_field(
			'callandor_license_key',
			__( 'License Key', 'callandor' ),
			array( $this, 'render_license_field' ),
			$this->page_slug,
			'callandor_general_section'
		);
	}

	/**
	 * Sanitize disabled patterns array.
	 *
	 * @param array $value Array of disabled pattern slugs.
	 * @return array Sanitized array.
	 */
	public function sanitize_disabled_patterns( $value ) {
		if ( ! is_array( $value ) ) {
			return array();
		}

		return array_map( 'sanitize_text_field', $value );
	}

	/**
	 * Render general settings section description.
	 */
	public function render_general_section() {
		echo '<p>' . esc_html__( 'Configure your Callandor pattern library settings.', 'callandor' ) . '</p>';
	}

	/**
	 * Render license key field.
	 */
	public function render_license_field() {
		$license_key = get_option( 'callandor_license_key', '' );
		?>
		<input
			type="text"
			id="callandor_license_key"
			name="callandor_license_key"
			value="<?php echo esc_attr( $license_key ); ?>"
			class="regular-text"
			placeholder="<?php esc_attr_e( 'Enter license key for premium patterns', 'callandor' ); ?>"
		/>
		<p class="description">
			<?php esc_html_e( 'Premium pattern access coming in Phase 2. Leave empty for now.', 'callandor' ); ?>
		</p>
		<?php
	}

	/**
	 * Handle clear cache action.
	 */
	public function handle_clear_cache() {
		// Check if clear cache button was clicked.
		if ( ! isset( $_POST['callandor_clear_cache'] ) ) {
			return;
		}

		// Verify nonce.
		if ( ! isset( $_POST['callandor_clear_cache_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['callandor_clear_cache_nonce'] ) ), 'callandor_clear_cache_action' ) ) {
			return;
		}

		// Check user capabilities.
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		// Clear the cache.
		$this->pattern_loader->clear_cache();

		// Redirect with success message.
		wp_safe_redirect(
			add_query_arg(
				array(
					'page'          => $this->page_slug,
					'cache-cleared' => '1',
				),
				admin_url( 'themes.php' )
			)
		);
		exit;
	}

	/**
	 * Render the admin page.
	 */
	public function render_admin_page() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		// Handle form submission.
		if ( isset( $_GET['settings-updated'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			add_settings_error(
				'callandor_messages',
				'callandor_message',
				__( 'Settings saved successfully.', 'callandor' ),
				'success'
			);
		}

		// Handle cache cleared message.
		if ( isset( $_GET['cache-cleared'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			add_settings_error(
				'callandor_messages',
				'callandor_cache_cleared',
				__( 'Pattern cache cleared successfully. Patterns will be reloaded on next page load.', 'callandor' ),
				'success'
			);
		}

		settings_errors( 'callandor_messages' );
		?>
		<div class="wrap callandor-admin-wrap">
			<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

			<div class="callandor-admin-content">
				<!-- Settings Form -->
				<div class="callandor-settings-section">
					<h2><?php esc_html_e( 'Plugin Settings', 'callandor' ); ?></h2>
					<form method="post" action="options.php">
						<?php
						settings_fields( 'callandor_settings' );
						do_settings_sections( $this->page_slug );
						submit_button();
						?>
					</form>
				</div>

				<!-- Cache Management -->
				<div class="callandor-cache-section">
					<h2><?php esc_html_e( 'Cache Management', 'callandor' ); ?></h2>
					<p class="description">
						<?php esc_html_e( 'Clear the pattern cache to force reload all patterns from files. Useful when developing or modifying patterns.', 'callandor' ); ?>
					</p>
					<form method="post" action="" id="callandor-clear-cache-form">
						<?php wp_nonce_field( 'callandor_clear_cache_action', 'callandor_clear_cache_nonce' ); ?>
						<button type="submit" name="callandor_clear_cache" class="button button-secondary" id="callandor-clear-cache-btn" style="margin-top: 10px;">
							<span class="callandor-btn-text"><?php esc_html_e( 'Clear Pattern Cache', 'callandor' ); ?></span>
							<span class="callandor-btn-loading" style="display: none;">
								<span class="spinner is-active" style="float: none; margin: 0 5px 0 0;"></span>
								<?php esc_html_e( 'Clearing Cache...', 'callandor' ); ?>
							</span>
						</button>
					</form>
				</div>

				<!-- Pattern Library Browser -->
				<div class="callandor-patterns-section">
					<h2><?php esc_html_e( 'Available Patterns', 'callandor' ); ?></h2>
					<?php $this->render_pattern_library(); ?>
				</div>

				<!-- Plugin Information -->
				<div class="callandor-info-section">
					<h2><?php esc_html_e( 'About Callandor', 'callandor' ); ?></h2>
					<div class="callandor-info-box">
						<p>
							<strong><?php esc_html_e( 'Version:', 'callandor' ); ?></strong>
							<?php echo esc_html( CALLANDOR_VERSION ); ?>
						</p>
						<p>
							<strong><?php esc_html_e( 'Theme Compatibility:', 'callandor' ); ?></strong>
							<?php echo esc_html( wp_get_theme()->get( 'Name' ) ); ?>
						</p>
						<p class="description">
							<?php
							echo wp_kses_post(
								sprintf(
									/* translators: %s: Documentation URL */
									__( 'Built for Sage 11 hybrid themes with Tailwind CSS support. <a href="%s" target="_blank">View Documentation</a>', 'callandor' ),
									'https://github.com/imagewize/callandor'
								)
							);
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Render the pattern library browser.
	 */
	private function render_pattern_library() {
		$patterns          = $this->pattern_loader->get_patterns();
		$categories        = $this->pattern_loader->get_categories();
		$disabled_patterns = get_option( 'callandor_disabled_patterns', array() );

		if ( empty( $patterns ) ) {
			echo '<p class="description">' . esc_html__( 'No patterns found. Add pattern files to the patterns directory.', 'callandor' ) . '</p>';
			return;
		}

		// Group patterns by category.
		$patterns_by_category = array();
		foreach ( $patterns as $pattern ) {
			$category = $pattern['category'];
			if ( ! isset( $patterns_by_category[ $category ] ) ) {
				$patterns_by_category[ $category ] = array();
			}
			$patterns_by_category[ $category ][] = $pattern;
		}
		?>
		<div class="callandor-pattern-library">
			<?php foreach ( $patterns_by_category as $category_slug => $category_patterns ) : ?>
				<?php
				$category_key   = 'callandor-' . $category_slug;
				$category_label = isset( $categories[ $category_key ]['label'] )
					? $categories[ $category_key ]['label']
					: ucfirst( $category_slug );
				?>
				<div class="callandor-pattern-category">
					<h3><?php echo esc_html( $category_label ); ?></h3>
					<div class="callandor-pattern-grid">
						<?php foreach ( $category_patterns as $pattern ) : ?>
							<?php
							$is_disabled   = in_array( $pattern['slug'], $disabled_patterns, true );
							$pattern_class = $is_disabled ? 'callandor-pattern-card disabled' : 'callandor-pattern-card';
							?>
							<div class="<?php echo esc_attr( $pattern_class ); ?>">
								<div class="callandor-pattern-header">
									<h4><?php echo esc_html( $pattern['title'] ); ?></h4>
									<span class="callandor-pattern-slug"><?php echo esc_html( $pattern['slug'] ); ?></span>
								</div>

								<?php if ( ! empty( $pattern['description'] ) ) : ?>
									<p class="callandor-pattern-description"><?php echo esc_html( $pattern['description'] ); ?></p>
								<?php endif; ?>

								<div class="callandor-pattern-meta">
									<span class="callandor-pattern-category-badge">
										<?php echo esc_html( $category_label ); ?>
									</span>
									<span class="callandor-pattern-status">
										<?php echo $is_disabled ? esc_html__( 'Disabled', 'callandor' ) : esc_html__( 'Active', 'callandor' ); ?>
									</span>
								</div>

								<?php if ( ! empty( $pattern['content'] ) ) : ?>
									<div class="callandor-pattern-actions">
										<button type="button" class="button button-small callandor-toggle-preview" data-pattern-slug="<?php echo esc_attr( $pattern['slug'] ); ?>">
											<span class="dashicons dashicons-visibility"></span>
											<span class="preview-text"><?php esc_html_e( 'Show Preview', 'callandor' ); ?></span>
										</button>
									</div>

									<div class="callandor-pattern-preview" style="display: none;">
										<div class="callandor-pattern-preview-viewport">
											<?php echo wp_kses_post( $pattern['content'] ); ?>
										</div>
									</div>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="callandor-pattern-stats">
			<p>
				<strong><?php esc_html_e( 'Total Patterns:', 'callandor' ); ?></strong>
				<?php echo esc_html( count( $patterns ) ); ?>
			</p>
			<p>
				<strong><?php esc_html_e( 'Categories:', 'callandor' ); ?></strong>
				<?php echo esc_html( count( $patterns_by_category ) ); ?>
			</p>
		</div>
		<?php
	}
}
