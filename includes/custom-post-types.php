<?php
/**
 * Custom Post Types
 */

/* Register CPTs
==============================================================================*/

// Register Custom Post Type: Lesson
function joe_uwpl_register_post_type_lesson() {

	$labels = array(
		'name'                  => _x( 'Lessons', 'Post Type General Name', 'ultimate-wordpress-lessons' ),
		'singular_name'         => _x( 'Lesson', 'Post Type Singular Name', 'ultimate-wordpress-lessons' ),
		'menu_name'             => __( 'Lessons', 'ultimate-wordpress-lessons' ),
		'name_admin_bar'        => __( 'Lesson', 'ultimate-wordpress-lessons' ),
		'archives'              => __( 'Lesson Archives', 'ultimate-wordpress-lessons' ),
		'attributes'            => __( 'Lesson Attributes', 'ultimate-wordpress-lessons' ),
		'parent_item_colon'     => __( 'Parent Lesson:', 'ultimate-wordpress-lessons' ),
		'all_items'             => __( 'All Lessons', 'ultimate-wordpress-lessons' ),
		'add_new_item'          => __( 'Add New Lesson', 'ultimate-wordpress-lessons' ),
		'add_new'               => _x( 'Add New', 'Lesson', 'ultimate-wordpress-lessons' ),
		'new_item'              => __( 'New Lesson', 'ultimate-wordpress-lessons' ),
		'edit_item'             => __( 'Edit Lesson', 'ultimate-wordpress-lessons' ),
		'view_item'             => __( 'View Lesson', 'ultimate-wordpress-lessons' ),
		'view_items'            => __( 'View Lessons', 'ultimate-wordpress-lessons' ),
		'search_items'          => __( 'Search Lessons', 'ultimate-wordpress-lessons' ),
		'not_found'             => __( 'No lessons found.', 'ultimate-wordpress-lessons' ),
		'not_found_in_trash'    => __( 'No lessons found in Trash.', 'ultimate-wordpress-lessons' ),
		'featured_image'        => __( 'Featured Image', 'ultimate-wordpress-lessons' ),
		'set_featured_image'    => __( 'Set featured image', 'ultimate-wordpress-lessons' ),
		'remove_featured_image' => __( 'Remove featured image', 'ultimate-wordpress-lessons' ),
		'use_featured_image'    => __( 'Use as featured image', 'ultimate-wordpress-lessons' ),
		'insert_into_item'      => __( 'Insert into lesson', 'ultimate-wordpress-lessons' ),
		'uploaded_to_this_item' => __( 'Uploaded to this lesson', 'ultimate-wordpress-lessons' ),
		'items_list'            => __( 'Lesson list', 'ultimate-wordpress-lessons' ),
		'items_list_navigation' => __( 'Lesson list navigation', 'ultimate-wordpress-lessons' ),
		'filter_items_list'     => __( 'Filter lesson list', 'ultimate-wordpress-lessons' ),
	);
	$rewrite = array(
		'slug'                  => 'lesson',
		'with_front'            => false,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Lessons', 'ultimate-wordpress-lessons' ),
		'labels'                => $labels,
		'description'           => __( 'Lesson Post Type', 'ultimate-wordpress-lessons' ),
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-joeicons-lesson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'delete_with_user'      => false,
		'can_export'            => true,
		'has_archive'           => 'lessons',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'lesson', $args );

}
add_action( 'init', 'joe_uwpl_register_post_type_lesson', 0 );

// Register Custom Post Type: Course
function joe_uwpl_register_post_type_course() {

	$labels = array(
		'name'                  => _x( 'Courses', 'Post Type General Name', 'ultimate-wordpress-lessons' ),
		'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'ultimate-wordpress-lessons' ),
		'menu_name'             => __( 'Courses', 'ultimate-wordpress-lessons' ),
		'name_admin_bar'        => __( 'Course', 'ultimate-wordpress-lessons' ),
		'archives'              => __( 'Course Archives', 'ultimate-wordpress-lessons' ),
		'attributes'            => __( 'Course Attributes', 'ultimate-wordpress-lessons' ),
		'parent_item_colon'     => __( 'Parent Course:', 'ultimate-wordpress-lessons' ),
		'all_items'             => __( 'All Courses', 'ultimate-wordpress-lessons' ),
		'add_new_item'          => __( 'Add New Course', 'ultimate-wordpress-lessons' ),
		'add_new'               => _x( 'Add New', 'Course', 'ultimate-wordpress-lessons' ),
		'new_item'              => __( 'New Course', 'ultimate-wordpress-lessons' ),
		'edit_item'             => __( 'Edit Course', 'ultimate-wordpress-lessons' ),
		'view_item'             => __( 'View Course', 'ultimate-wordpress-lessons' ),
		'view_items'            => __( 'View Courses', 'ultimate-wordpress-lessons' ),
		'search_items'          => __( 'Search Courses', 'ultimate-wordpress-lessons' ),
		'not_found'             => __( 'No courses found.', 'ultimate-wordpress-lessons' ),
		'not_found_in_trash'    => __( 'No courses found in Trash.', 'ultimate-wordpress-lessons' ),
		'featured_image'        => __( 'Featured Image', 'ultimate-wordpress-lessons' ),
		'set_featured_image'    => __( 'Set featured image', 'ultimate-wordpress-lessons' ),
		'remove_featured_image' => __( 'Remove featured image', 'ultimate-wordpress-lessons' ),
		'use_featured_image'    => __( 'Use as featured image', 'ultimate-wordpress-lessons' ),
		'insert_into_item'      => __( 'Insert into course', 'ultimate-wordpress-lessons' ),
		'uploaded_to_this_item' => __( 'Uploaded to this course', 'ultimate-wordpress-lessons' ),
		'items_list'            => __( 'Course list', 'ultimate-wordpress-lessons' ),
		'items_list_navigation' => __( 'Course list navigation', 'ultimate-wordpress-lessons' ),
		'filter_items_list'     => __( 'Filter course list', 'ultimate-wordpress-lessons' ),
	);
	$rewrite = array(
		'slug'                  => 'course',
		'with_front'            => false,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => __( 'Courses', 'ultimate-wordpress-lessons' ),
		'labels'                => $labels,
		'description'           => __( 'Course Post Type', 'ultimate-wordpress-lessons' ),
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => 'edit.php?post_type=lesson',
		'menu_position'         => 1,
		'menu_icon'             => 'dashicons-joeicons-courses',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'delete_with_user'      => false,
		'can_export'            => true,
		'has_archive'           => 'courses',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'course', $args );

}
add_action( 'init', 'joe_uwpl_register_post_type_course', 0 );

// Register Custom Post Type: Teacher
function joe_uwpl_register_post_type_teacher() {

	$labels = array(
		'name'                  => _x( 'Teachers', 'Post Type General Name', 'ultimate-wordpress-lessons' ),
		'singular_name'         => _x( 'Teacher', 'Post Type Singular Name', 'ultimate-wordpress-lessons' ),
		'menu_name'             => __( 'Teachers', 'ultimate-wordpress-lessons' ),
		'name_admin_bar'        => __( 'Teachers', 'ultimate-wordpress-lessons' ),
		'archives'              => __( 'Teacher Archives', 'ultimate-wordpress-lessons' ),
		'parent_item_colon'     => __( 'Parent Teacher:', 'ultimate-wordpress-lessons' ),
		'all_items'             => __( 'All Teachers', 'ultimate-wordpress-lessons' ),
		'add_new_item'          => __( 'Add New Teacher', 'ultimate-wordpress-lessons' ),
		'add_new'               => _x( 'Add New', 'Teacher', 'ultimate-wordpress-lessons' ),
		'new_item'              => __( 'New Teacher', 'ultimate-wordpress-lessons' ),
		'edit_item'             => __( 'Edit Teacher', 'ultimate-wordpress-lessons' ),
		'update_item'           => __( 'Update Teacher', 'ultimate-wordpress-lessons' ),
		'view_item'             => __( 'View Teacher', 'ultimate-wordpress-lessons' ),
		'search_items'          => __( 'Search Teachers', 'ultimate-wordpress-lessons' ),
		'not_found'             => __( 'No teachers found.', 'ultimate-wordpress-lessons' ),
		'not_found_in_trash'    => __( 'No teachers found in Trash.', 'ultimate-wordpress-lessons' ),
		'featured_image'        => __( 'Featured Image', 'ultimate-wordpress-lessons' ),
		'set_featured_image'    => __( 'Set featured image', 'ultimate-wordpress-lessons' ),
		'remove_featured_image' => __( 'Remove featured image', 'ultimate-wordpress-lessons' ),
		'use_featured_image'    => __( 'Use as featured image', 'ultimate-wordpress-lessons' ),
		'insert_into_item'      => __( 'Insert into teacher', 'ultimate-wordpress-lessons' ),
		'uploaded_to_this_item' => __( 'Uploaded to this teacher', 'ultimate-wordpress-lessons' ),
		'items_list'            => __( 'Teacher list', 'ultimate-wordpress-lessons' ),
		'items_list_navigation' => __( 'Teacher list navigation', 'ultimate-wordpress-lessons' ),
		'filter_items_list'     => __( 'Filter teacher list', 'ultimate-wordpress-lessons' ),
	);
	$rewrite = array(
		'slug'                  => 'teacher',
		'with_front'            => false,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => __( 'Teachers', 'ultimate-wordpress-lessons' ),
		'labels'                => $labels,
		'description'           => __( 'Teacher Post Type', 'ultimate-wordpress-lessons' ),
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => 'edit.php?post_type=lesson',
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-joeicons-teachers',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'delete_with_user'      => false,
		'can_export'            => true,
		'has_archive'           => 'teachers',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'teacher', $args );

}
add_action( 'init', 'joe_uwpl_register_post_type_teacher', 0 );

