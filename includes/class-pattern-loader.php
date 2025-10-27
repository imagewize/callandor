<?php
/**
 * Pattern Loader Class
 *
 * Handles loading and registration of block patterns from the patterns directory.
 *
 * @package Callandor
 * @since 1.0.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Class Callandor_Pattern_Loader
 */
class Callandor_Pattern_Loader {

	/**
	 * Pattern categories to register.
	 *
	 * @var array
	 */
	private $categories = array(
		'callandor-hero'         => array(
			'label' => 'Hero Sections',
		),
		'callandor-cta'          => array(
			'label' => 'Call to Action',
		),
		'callandor-features'     => array(
			'label' => 'Features',
		),
		'callandor-testimonials' => array(
			'label' => 'Testimonials',
		),
		'callandor-pricing'      => array(
			'label' => 'Pricing Tables',
		),
		'callandor-team'         => array(
			'label' => 'Team Members',
		),
		'callandor-contact'      => array(
			'label' => 'Contact Sections',
		),
	);

	/**
	 * Initialize the pattern loader.
	 */
	public function init() {
		add_action( 'init', array( $this, 'register_pattern_categories' ) );
		add_action( 'init', array( $this, 'register_patterns' ) );
	}

	/**
	 * Register custom pattern categories.
	 */
	public function register_pattern_categories() {
		foreach ( $this->categories as $slug => $args ) {
			// Check if the class exists (WP 5.5+)
			if ( class_exists( '\WP_Block_Pattern_Categories_Registry' ) ) {
				if ( ! \WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
					register_block_pattern_category( $slug, $args );
				}
			} else {
				// Fallback for older WordPress versions
				register_block_pattern_category( $slug, $args );
			}
		}
	}

	/**
	 * Register all patterns from the patterns directory.
	 */
	public function register_patterns() {
		$pattern_dirs = glob( CALLANDOR_PLUGIN_DIR . 'patterns/*', GLOB_ONLYDIR );

		if ( empty( $pattern_dirs ) ) {
			return;
		}

		foreach ( $pattern_dirs as $pattern_dir ) {
			$this->load_patterns_from_directory( $pattern_dir );
		}
	}

	/**
	 * Load patterns from a specific directory.
	 *
	 * @param string $directory Directory path to scan for patterns.
	 */
	private function load_patterns_from_directory( $directory ) {
		$pattern_files = glob( $directory . '/*.php' );

		if ( empty( $pattern_files ) ) {
			return;
		}

		foreach ( $pattern_files as $pattern_file ) {
			$this->register_pattern_from_file( $pattern_file );
		}
	}

	/**
	 * Register a single pattern from a file.
	 *
	 * @param string $file Pattern file path.
	 */
	private function register_pattern_from_file( $file ) {
		$pattern_data = require $file;

		// Validate pattern data
		if ( ! is_array( $pattern_data ) || empty( $pattern_data['content'] ) ) {
			return;
		}

		// Generate pattern slug from filename
		$pattern_slug = 'callandor/' . basename( dirname( $file ) ) . '/' . basename( $file, '.php' );

		// Prepare pattern properties
		$pattern_properties = array(
			'title'       => isset( $pattern_data['title'] ) ? $pattern_data['title'] : '',
			'description' => isset( $pattern_data['description'] ) ? $pattern_data['description'] : '',
			'content'     => $pattern_data['content'],
			'categories'  => $this->prepare_categories( $pattern_data ),
			'keywords'    => isset( $pattern_data['keywords'] ) ? $pattern_data['keywords'] : array(),
		);

		// Add optional properties
		if ( isset( $pattern_data['viewportWidth'] ) ) {
			$pattern_properties['viewportWidth'] = $pattern_data['viewportWidth'];
		}

		if ( isset( $pattern_data['blockTypes'] ) ) {
			$pattern_properties['blockTypes'] = $pattern_data['blockTypes'];
		}

		if ( isset( $pattern_data['inserter'] ) ) {
			$pattern_properties['inserter'] = $pattern_data['inserter'];
		}

		// Register the pattern
		register_block_pattern( $pattern_slug, $pattern_properties );
	}

	/**
	 * Prepare pattern categories by prefixing with 'callandor-'.
	 *
	 * @param array $pattern_data Pattern data array.
	 * @return array Prefixed categories.
	 */
	private function prepare_categories( $pattern_data ) {
		if ( empty( $pattern_data['categories'] ) || ! is_array( $pattern_data['categories'] ) ) {
			return array();
		}

		$prefixed_categories = array();
		foreach ( $pattern_data['categories'] as $category ) {
			// Add callandor- prefix if not already present
			if ( strpos( $category, 'callandor-' ) === 0 ) {
				$prefixed_categories[] = $category;
			} else {
				$prefixed_categories[] = 'callandor-' . $category;
			}
		}

		return $prefixed_categories;
	}

	/**
	 * Get all available pattern categories.
	 *
	 * @return array Pattern categories.
	 */
	public function get_categories() {
		return $this->categories;
	}

	/**
	 * Get all registered patterns.
	 *
	 * @return array Registered patterns.
	 */
	public function get_patterns() {
		$patterns       = array();
		$pattern_dirs   = glob( CALLANDOR_PLUGIN_DIR . 'patterns/*', GLOB_ONLYDIR );

		if ( empty( $pattern_dirs ) ) {
			return $patterns;
		}

		foreach ( $pattern_dirs as $pattern_dir ) {
			$category       = basename( $pattern_dir );
			$pattern_files  = glob( $pattern_dir . '/*.php' );

			foreach ( $pattern_files as $pattern_file ) {
				$pattern_data = require $pattern_file;

				if ( is_array( $pattern_data ) ) {
					$patterns[] = array(
						'slug'     => 'callandor/' . $category . '/' . basename( $pattern_file, '.php' ),
						'category' => $category,
						'title'    => isset( $pattern_data['title'] ) ? $pattern_data['title'] : '',
						'file'     => $pattern_file,
					);
				}
			}
		}

		return $patterns;
	}
}
