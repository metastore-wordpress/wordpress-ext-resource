<?php

/**
 * Class WP_EXT_Resource_Taxonomy
 */
class WP_EXT_Resource_Taxonomy extends WP_EXT_Resource {

	/**
	 * Constructor.
	 */
	public function __construct() {
		parent::__construct();

		$this->run();
	}

	/**
	 * Plugin: `initialize`.
	 */
	public function run() {
		add_action( 'init', [ $this, 'taxonomy_meta' ], 0 );
		add_action( 'init', [ $this, 'taxonomy_category' ], 0 );
		add_action( 'init', [ $this, 'taxonomy_type' ], 0 );
		add_action( 'init', [ $this, 'taxonomy_language' ], 0 );
		add_action( 'init', [ $this, 'taxonomy_status' ], 0 );
	}

	/**
	 * Taxonomy: `resource_meta`.
	 */
	public function taxonomy_meta() {
		$labels  = [
			'name'                       => _x( 'Resource Meta', 'Meta General Name', 'wp-ext-' . $this->domain_ID ),
			'singular_name'              => _x( 'Meta', 'Meta Singular Name', 'wp-ext-' . $this->domain_ID ),
			'menu_name'                  => __( 'Meta', 'wp-ext-' . $this->domain_ID ),
			'all_items'                  => __( 'All Items', 'wp-ext-' . $this->domain_ID ),
			'parent_item'                => __( 'Parent Item', 'wp-ext-' . $this->domain_ID ),
			'parent_item_colon'          => __( 'Parent Item:', 'wp-ext-' . $this->domain_ID ),
			'new_item_name'              => __( 'New Item Name', 'wp-ext-' . $this->domain_ID ),
			'add_new_item'               => __( 'Add New Item', 'wp-ext-' . $this->domain_ID ),
			'edit_item'                  => __( 'Edit Item', 'wp-ext-' . $this->domain_ID ),
			'update_item'                => __( 'Update Item', 'wp-ext-' . $this->domain_ID ),
			'view_item'                  => __( 'View Item', 'wp-ext-' . $this->domain_ID ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'wp-ext-' . $this->domain_ID ),
			'add_or_remove_items'        => __( 'Add or remove items', 'wp-ext-' . $this->domain_ID ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'wp-ext-' . $this->domain_ID ),
			'popular_items'              => __( 'Popular Items', 'wp-ext-' . $this->domain_ID ),
			'search_items'               => __( 'Search Items', 'wp-ext-' . $this->domain_ID ),
			'not_found'                  => __( 'Not Found', 'wp-ext-' . $this->domain_ID ),
			'no_terms'                   => __( 'No items', 'wp-ext-' . $this->domain_ID ),
			'items_list'                 => __( 'Items list', 'wp-ext-' . $this->domain_ID ),
			'items_list_navigation'      => __( 'Items list navigation', 'wp-ext-' . $this->domain_ID ),
		];
		$rewrite = [
			'slug'         => '',
			'with_front'   => false,
			'hierarchical' => false,
		];
		$args    = [
			'labels'             => $labels,
			'hierarchical'       => false,
			'public'             => false,
			'show_ui'            => true,
			'meta_box_cb'        => false,
			'show_admin_column'  => true,
			'show_in_nav_menus'  => false,
			'show_in_quick_edit' => false,
			'show_tagcloud'      => false,
			'rewrite'            => $rewrite,
		];
		register_taxonomy( $this->pt_ID . '_meta', [ $this->pt_ID ], $args );
	}

	/**
	 * Taxonomy: `resource_category`.
	 */
	public function taxonomy_category() {
		$labels  = [
			'name'                       => _x( 'Resource Category', 'Category General Name', 'wp-ext-' . $this->domain_ID ),
			'singular_name'              => _x( 'Category', 'Category Singular Name', 'wp-ext-' . $this->domain_ID ),
			'menu_name'                  => __( 'Categories', 'wp-ext-' . $this->domain_ID ),
			'all_items'                  => __( 'All Items', 'wp-ext-' . $this->domain_ID ),
			'parent_item'                => __( 'Parent Item', 'wp-ext-' . $this->domain_ID ),
			'parent_item_colon'          => __( 'Parent Item:', 'wp-ext-' . $this->domain_ID ),
			'new_item_name'              => __( 'New Item Name', 'wp-ext-' . $this->domain_ID ),
			'add_new_item'               => __( 'Add New Item', 'wp-ext-' . $this->domain_ID ),
			'edit_item'                  => __( 'Edit Item', 'wp-ext-' . $this->domain_ID ),
			'update_item'                => __( 'Update Item', 'wp-ext-' . $this->domain_ID ),
			'view_item'                  => __( 'View Item', 'wp-ext-' . $this->domain_ID ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'wp-ext-' . $this->domain_ID ),
			'add_or_remove_items'        => __( 'Add or remove items', 'wp-ext-' . $this->domain_ID ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'wp-ext-' . $this->domain_ID ),
			'popular_items'              => __( 'Popular Items', 'wp-ext-' . $this->domain_ID ),
			'search_items'               => __( 'Search Items', 'wp-ext-' . $this->domain_ID ),
			'not_found'                  => __( 'Not Found', 'wp-ext-' . $this->domain_ID ),
			'no_terms'                   => __( 'No items', 'wp-ext-' . $this->domain_ID ),
			'items_list'                 => __( 'Items list', 'wp-ext-' . $this->domain_ID ),
			'items_list_navigation'      => __( 'Items list navigation', 'wp-ext-' . $this->domain_ID ),
		];
		$rewrite = [
			'slug'         => '',
			'with_front'   => false,
			'hierarchical' => false,
		];
		$args    = [
			'labels'            => $labels,
			'hierarchical'      => false,
			'public'            => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => false,
			'show_tagcloud'     => false,
			'rewrite'           => $rewrite,
		];
		register_taxonomy( $this->pt_ID . '_category', [ $this->pt_ID ], $args );
	}

	/**
	 * Taxonomy: `resource_type`.
	 */
	public function taxonomy_type() {
		$labels  = [
			'name'                       => _x( 'Resource Type', 'Type General Name', 'wp-ext-' . $this->domain_ID ),
			'singular_name'              => _x( 'Type', 'Type Singular Name', 'wp-ext-' . $this->domain_ID ),
			'menu_name'                  => __( 'Types', 'wp-ext-' . $this->domain_ID ),
			'all_items'                  => __( 'All Items', 'wp-ext-' . $this->domain_ID ),
			'parent_item'                => __( 'Parent Item', 'wp-ext-' . $this->domain_ID ),
			'parent_item_colon'          => __( 'Parent Item:', 'wp-ext-' . $this->domain_ID ),
			'new_item_name'              => __( 'New Item Name', 'wp-ext-' . $this->domain_ID ),
			'add_new_item'               => __( 'Add New Item', 'wp-ext-' . $this->domain_ID ),
			'edit_item'                  => __( 'Edit Item', 'wp-ext-' . $this->domain_ID ),
			'update_item'                => __( 'Update Item', 'wp-ext-' . $this->domain_ID ),
			'view_item'                  => __( 'View Item', 'wp-ext-' . $this->domain_ID ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'wp-ext-' . $this->domain_ID ),
			'add_or_remove_items'        => __( 'Add or remove items', 'wp-ext-' . $this->domain_ID ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'wp-ext-' . $this->domain_ID ),
			'popular_items'              => __( 'Popular Items', 'wp-ext-' . $this->domain_ID ),
			'search_items'               => __( 'Search Items', 'wp-ext-' . $this->domain_ID ),
			'not_found'                  => __( 'Not Found', 'wp-ext-' . $this->domain_ID ),
			'no_terms'                   => __( 'No items', 'wp-ext-' . $this->domain_ID ),
			'items_list'                 => __( 'Items list', 'wp-ext-' . $this->domain_ID ),
			'items_list_navigation'      => __( 'Items list navigation', 'wp-ext-' . $this->domain_ID ),
		];
		$rewrite = [
			'slug'         => '',
			'with_front'   => false,
			'hierarchical' => false,
		];
		$args    = [
			'labels'            => $labels,
			'hierarchical'      => false,
			'public'            => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => false,
			'show_tagcloud'     => false,
			'rewrite'           => $rewrite,
		];
		register_taxonomy( $this->pt_ID . '_type', [ $this->pt_ID ], $args );
	}

	/**
	 * Taxonomy: `resource_language`.
	 */
	public function taxonomy_language() {
		$labels  = [
			'name'                       => _x( 'Resource Language', 'Language General Name', 'wp-ext-' . $this->domain_ID ),
			'singular_name'              => _x( 'Language', 'Language Singular Name', 'wp-ext-' . $this->domain_ID ),
			'menu_name'                  => __( 'Languages', 'wp-ext-' . $this->domain_ID ),
			'all_items'                  => __( 'All Items', 'wp-ext-' . $this->domain_ID ),
			'parent_item'                => __( 'Parent Item', 'wp-ext-' . $this->domain_ID ),
			'parent_item_colon'          => __( 'Parent Item:', 'wp-ext-' . $this->domain_ID ),
			'new_item_name'              => __( 'New Item Name', 'wp-ext-' . $this->domain_ID ),
			'add_new_item'               => __( 'Add New Item', 'wp-ext-' . $this->domain_ID ),
			'edit_item'                  => __( 'Edit Item', 'wp-ext-' . $this->domain_ID ),
			'update_item'                => __( 'Update Item', 'wp-ext-' . $this->domain_ID ),
			'view_item'                  => __( 'View Item', 'wp-ext-' . $this->domain_ID ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'wp-ext-' . $this->domain_ID ),
			'add_or_remove_items'        => __( 'Add or remove items', 'wp-ext-' . $this->domain_ID ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'wp-ext-' . $this->domain_ID ),
			'popular_items'              => __( 'Popular Items', 'wp-ext-' . $this->domain_ID ),
			'search_items'               => __( 'Search Items', 'wp-ext-' . $this->domain_ID ),
			'not_found'                  => __( 'Not Found', 'wp-ext-' . $this->domain_ID ),
			'no_terms'                   => __( 'No items', 'wp-ext-' . $this->domain_ID ),
			'items_list'                 => __( 'Items list', 'wp-ext-' . $this->domain_ID ),
			'items_list_navigation'      => __( 'Items list navigation', 'wp-ext-' . $this->domain_ID ),
		];
		$rewrite = [
			'slug'         => '',
			'with_front'   => false,
			'hierarchical' => false,
		];
		$args    = [
			'labels'            => $labels,
			'hierarchical'      => false,
			'public'            => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => false,
			'show_tagcloud'     => false,
			'rewrite'           => $rewrite,
		];
		register_taxonomy( $this->pt_ID . '_language', [ $this->pt_ID ], $args );
	}

	/**
	 * Taxonomy: `resource_status`.
	 */
	public function taxonomy_status() {
		$labels  = [
			'name'                       => _x( 'Resource Status', 'Status General Name', 'wp-ext-' . $this->domain_ID ),
			'singular_name'              => _x( 'Status', 'Status Singular Name', 'wp-ext-' . $this->domain_ID ),
			'menu_name'                  => __( 'Statuses', 'wp-ext-' . $this->domain_ID ),
			'all_items'                  => __( 'All Items', 'wp-ext-' . $this->domain_ID ),
			'parent_item'                => __( 'Parent Item', 'wp-ext-' . $this->domain_ID ),
			'parent_item_colon'          => __( 'Parent Item:', 'wp-ext-' . $this->domain_ID ),
			'new_item_name'              => __( 'New Item Name', 'wp-ext-' . $this->domain_ID ),
			'add_new_item'               => __( 'Add New Item', 'wp-ext-' . $this->domain_ID ),
			'edit_item'                  => __( 'Edit Item', 'wp-ext-' . $this->domain_ID ),
			'update_item'                => __( 'Update Item', 'wp-ext-' . $this->domain_ID ),
			'view_item'                  => __( 'View Item', 'wp-ext-' . $this->domain_ID ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'wp-ext-' . $this->domain_ID ),
			'add_or_remove_items'        => __( 'Add or remove items', 'wp-ext-' . $this->domain_ID ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'wp-ext-' . $this->domain_ID ),
			'popular_items'              => __( 'Popular Items', 'wp-ext-' . $this->domain_ID ),
			'search_items'               => __( 'Search Items', 'wp-ext-' . $this->domain_ID ),
			'not_found'                  => __( 'Not Found', 'wp-ext-' . $this->domain_ID ),
			'no_terms'                   => __( 'No items', 'wp-ext-' . $this->domain_ID ),
			'items_list'                 => __( 'Items list', 'wp-ext-' . $this->domain_ID ),
			'items_list_navigation'      => __( 'Items list navigation', 'wp-ext-' . $this->domain_ID ),
		];
		$rewrite = [
			'slug'         => '',
			'with_front'   => false,
			'hierarchical' => false,
		];
		$args    = [
			'labels'            => $labels,
			'hierarchical'      => false,
			'public'            => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => false,
			'show_tagcloud'     => false,
			'rewrite'           => $rewrite,
		];
		register_taxonomy( $this->pt_ID . '_status', [ $this->pt_ID ], $args );
	}
}

/**
 * Helper function to retrieve the static object without using globals.
 *
 * @return WP_EXT_Resource_Taxonomy
 */
function WP_EXT_Resource_Taxonomy() {
	static $object;

	if ( null == $object ) {
		$object = new WP_EXT_Resource_Taxonomy;
	}

	return $object;
}

/**
 * Initialize the object on `plugins_loaded`.
 */
add_action( 'plugins_loaded', [ WP_EXT_Resource_Taxonomy(), 'run' ] );
