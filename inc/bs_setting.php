<?php

/**
 * WordPress settings API demo class
 *
 * @author Hannan
 */
if ( ! defined( 'ABSPATH' ) ){
    exit;
}  
if ( !class_exists('Bs_Accrodian_Setting' ) ):
class Bs_Accrodian_Setting {

    private $settings_api;

    /**
     * Holds the class object.
     *
     * @since 1.0
     *
     */
    public static $_instance;
    /**
     *
     * Hold the base Object
     *
     * @since 1.0
     */
    
    public $base;

    function __construct() {
        $this->settings_api = new Ps_Settings_API();

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }

    function admin_menu() {
        add_menu_page( __('Responsive Accordion Slider','bs_rp' ), __( 'Responsive Accordion Slider','bs_rp' ), 'manage_options', 'accrodian_slider', array($this, 'bs_plugin_page') ); 
        //add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );
    }
    //add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function );

    function get_settings_sections() {
        $sections = array(
            array(
                'id' => 'bs_upl_basic',
                'title' => __( 'Slider Settings', 'bs_rp' ),
                //'callback' =>'callback_section_ps',
            ),
        );
        return $sections;
    }
    

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array(
            'bs_upl_basic' => array(
              
                array(
                    'name' => 'file1',
                    'label' => __( 'Slider Image ', 'wedevs' ),
                    'desc' => __( 'Slider Image ', 'wedevs' ),
                    'type' => 'file',
                    'default' => ''
                ),
				array(
                    'name' => 'text1',
                    'label' => __( 'Title Text', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => 'Title'
                ),
                array(
                    'name' => 'textarea1',
                    'label' => __( 'Title description', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'textarea'
                ),
				array(
                    'name' => 'link1',
                    'label' => __( 'URL', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => ''
                ),
				array(
                    'name' => 'file2',
                    'label' => __( 'Slider Image ', 'wedevs' ),
                    'desc' => __( 'Slider Image ', 'wedevs' ),
                    'type' => 'file',
                    'default' => ''
                ),
				array(
                    'name' => 'text2',
                    'label' => __( 'Title Text', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => 'Title'
                ),
                array(
                    'name' => 'textarea2',
                    'label' => __( 'Title description', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'textarea'
                ),
				array(
                    'name' => 'link2',
                    'label' => __( 'URL', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => ''
                ),
				array(
                    'name' => 'file3',
                    'label' => __( 'Slider Image ', 'wedevs' ),
                    'desc' => __( 'Slider Image ', 'wedevs' ),
                    'type' => 'file',
                    'default' => ''
                ),
				array(
                    'name' => 'text3',
                    'label' => __( 'Title Text', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => 'Title'
                ),
                array(
                    'name' => 'textarea3',
                    'label' => __( 'Title description', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'textarea'
                ),
				array(
                    'name' => 'link3',
                    'label' => __( 'URL', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => ''
                ),
				array(
                    'name' => 'file4',
                    'label' => __( 'Slider Image ', 'wedevs' ),
                    'desc' => __( 'Slider Image ', 'wedevs' ),
                    'type' => 'file',
                    'default' => ''
                ),
				array(
                    'name' => 'text4',
                    'label' => __( 'Title Text', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => 'Title'
                ),
                array(
                    'name' => 'textarea4',
                    'label' => __( 'Title description', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'textarea'
                ),
				array(
                    'name' => 'link4',
                    'label' => __( 'URL', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => ''
                ),
				array(
                    'name' => 'file5',
                    'label' => __( 'Slider Image ', 'wedevs' ),
                    'desc' => __( 'Slider Image ', 'wedevs' ),
                    'type' => 'file',
                    'default' => ''
                ),
				array(
                    'name' => 'text5',
                    'label' => __( 'Title Text', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => 'Title'
                ),
                array(
                    'name' => 'textarea5',
                    'label' => __( 'Title description', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'textarea'
                ),
				array(
                    'name' => 'link5',
                    'label' => __( 'URL', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => ''
                ),
				array(
                    'name' => 'file6',
                    'label' => __( 'Slider Image ', 'wedevs' ),
                    'desc' => __( 'Slider Image ', 'wedevs' ),
                    'type' => 'file',
                    'default' => ''
                ),
				array(
                    'name' => 'text6',
                    'label' => __( 'Title Text', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => 'Title'
                ),
                array(
                    'name' => 'textarea6',
                    'label' => __( 'Title description', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'textarea'
                ),
				array(
                    'name' => 'link6',
                    'label' => __( 'URL', 'wedevs' ),
                    'desc' => __( '', 'wedevs' ),
                    'type' => 'text',
                    'default' => ''
                ),
            ),
            
        );

        return $settings_fields;
    }

    function bs_plugin_page() {
        echo '<div class="wrap">';
        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();
        echo '</div>';
    }


 public function bs_get_option( $option, $section, $default = '' ) {
        $options = get_option( $section );
        if ( isset( $options[$option] ) ) {
            return $options[$option];
        }
        return $default;
    }



    /**

     * The ultimate_portfolio Setting Object.
     *
     * @since 1.0
     *
     */


    public static function bs_get_instance(){
        if(!isset($_instance)){
            self::$_instance=new Bs_Accrodian_Setting();
        }
        return self::$_instance;
    }


}
$ultimate_portfolio_setting =Bs_Accrodian_Setting::Bs_get_instance();

endif;
