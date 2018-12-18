<?php
   /* Khai bao hang gia tri */
	define( 'THEME_URL', get_stylesheet_directory() );
  /*Nhúng file /core/init.php */
   require_once (CORE."/init.php");
  /*Thiết lập chiều rộng nội dung  */
  if(!isset($content_width)){
  	$content_width =620;
  }
  /*Khai bao  chức năng của theme */
  if(!function_exists("DuDoLf_theme_setup")){
  		function DuDoLf_theme_setup(){
  			/* Thiết lập text domain */
  			$language_folder = THEME_URL.'/languages';
  			
  			load_theme_textdomain('DuDoLf',$languages_folder);
  			/* Tự động thêm link RSS */
  			add_theme_support('automatic-feed-links');
  			/* Them post thumbnail */
  			add_theme_support('post-thumbnails');
  			/* Post Fomart */
  			add_theme_support('post-formats',array(
  				'image',
  				'video',
  				'gallery',
  				'quote',
  				'link'
  			));
        
        $default_background=array('default-color' => '#e8e8e8' );
  			add_theme_support('custom-background',$default_background);
  			add_theme_support('title-tag');
  			/* thêm menu */
  			//register_nav_menu('primary-menu',__('Primary Menu','DuDoLf'));
  			/* Tạo sidebar */
  			$sidebar=array(
  				'name' => __('Main Sidebar','DuDoLf'),
  				'id' =>'main-sidebar',
  				'description' =>__('Default sidebar'),
  				'class' =>'main-sidebar',
  				'before_title' => '<h3 class="widgettitle"',
  				'after_title' => '</h3>'
  			);
  			register_sidebar($sidebar);
  		}
  		add_action('init','DuDoLf_theme_setup');
  }



  /** Thiết lập menu **/

  if(!function_exists('DuDoLf_menu')){
    function DuDoLf_menu($menu){
      $menu=array(
        'theme_location' => $menu ,
        'container'  => 'nav',
        'container_class' => $menu
      );
      wp_nav_menu($menu);
    }
  }
 