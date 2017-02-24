<?php 

/**
 * 	Plugin Name: Responsive Accrodian Slider
 *	Plugin URI:
 *	Description:Responsive Accrodian Slider
 *	Author:Sagar Paul
 *	Author URI:sagar.xyz
 *	Version:1.0
 */

/* Exit Try To Direct Access  */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 *
 * Main Class
 *
 * @since 1.0
 *
 * @package Ultimate Wocommerce Related Produts Slider
 * @author Sagar Paul
 *
 */
 

class Ps_Accrodian_Slider{
	
	
    /**
     * Holds the class object.
     *
     * @since 1.0
     *
     */

    public static $_instance;

    /**
     * Plugin Name
     *
     * @since 1.0
     *
     */

    public $plugin_name='Responsive Accrodian Slider';

    /**
     * Plugin Slug
     *
     * @since 1.0
     *
     */

    public $plugin_version='1.0';

    /**
     * Plugin File
     *
     * @since 1.0
     *
     */
    public $file=__FILE__;
    /**
     * Holds the base class object.
     *
     * @since 1.0
     *
     */
    public $base;

    /**
     * Load Construct
     *
     * @since 1.0
     *
     */
	
	public function __construct(){

		require_once dirname( __FILE__ ) . '/inc/bs_setting_class.php';//Setting 
		require_once dirname( __FILE__ ) . '/inc/bs_setting.php';//Configure Setting
		add_shortcode('bs_accrodian',array($this,'bs_accrodian_shortcode'));
	  //  add_action('wp_enqueue_scripts', array($this,'bs_accrodian_scripts'));
		 //add_action('init', array($this,'bs_accrodian_responsive_slider'));

	}
    public function bs_accrodian_shortcode($atts, $content = NULL){
        $this->base=Bs_Accrodian_Setting::bs_get_instance();
        extract(shortcode_atts(
            array(
            'img1' => $this->base->bs_get_option( 'file1', 'bs_upl_basic'),
			'img2' => $this->base->bs_get_option( 'file2', 'bs_upl_basic'),
			'img3' => $this->base->bs_get_option( 'file3', 'bs_upl_basic'),
			'img4' => $this->base->bs_get_option( 'file4', 'bs_upl_basic'),
			'img5' => $this->base->bs_get_option( 'file5', 'bs_upl_basic'),
			'img6' => $this->base->bs_get_option( 'file6', 'bs_upl_basic'),
			'text1' => $this->base->bs_get_option( 'text1', 'bs_upl_basic'),
			'text2' => $this->base->bs_get_option( 'text2', 'bs_upl_basic'),
			'text3' => $this->base->bs_get_option( 'text3', 'bs_upl_basic'),
			'text4' => $this->base->bs_get_option( 'text4', 'bs_upl_basic'),
			'text5' => $this->base->bs_get_option( 'text5', 'bs_upl_basic'),
			'text6' => $this->base->bs_get_option( 'text6', 'bs_upl_basic'),
			'textarea1' => $this->base->bs_get_option( 'textarea1', 'bs_upl_basic'),
			'textarea2' => $this->base->bs_get_option( 'textarea2', 'bs_upl_basic'),
			'textarea3' => $this->base->bs_get_option( 'textarea3', 'bs_upl_basic'),
			'textarea4' => $this->base->bs_get_option( 'textarea4', 'bs_upl_basic'),
			'textarea5' => $this->base->bs_get_option( 'textarea5', 'bs_upl_basic'),
			'textarea6' => $this->base->bs_get_option( 'textarea6', 'bs_upl_basic'),
			'link1' => $this->base->bs_get_option( 'link1', 'bs_upl_basic'),
			'link2' => $this->base->bs_get_option( 'link2', 'bs_upl_basic'),
			'link3' => $this->base->bs_get_option( 'link3', 'bs_upl_basic'),
			'link4' => $this->base->bs_get_option( 'link4', 'bs_upl_basic'),
			'link5' => $this->base->bs_get_option( 'link5', 'bs_upl_basic'),
			'link6' => $this->base->bs_get_option( 'link6', 'bs_upl_basic'),
            ), $atts)

        );
        
        ob_start();?>
     <style>
        .accordion ul li:nth-child(1) { background-image: url("<?php echo $img1;?>"); }
		.accordion ul li:nth-child(2) { background-image: url("<?php echo $img2;?>"); }
		.accordion ul li:nth-child(3) { background-image: url("<?php echo $img3;?>"); }
		.accordion ul li:nth-child(4) { background-image: url("<?php echo $img4;?>"); }
		.accordion ul li:nth-child(5) { background-image: url("<?php echo $img5;?>"); }
		.accordion ul li:nth-child(6) { background-image: url("<?php echo $img6;?>"); }
		
		.accordion {
  width: 100%;
  max-width: 1080px;
  height: 250px;
  overflow: hidden;
  margin: 50px auto;
}

.accordion ul {
  width: 100%;
  display: table;
  table-layout: fixed;
  margin: 0;
  padding: 0;
}

.accordion ul li {
  display: table-cell;
  vertical-align: bottom;
  position: relative;
  width: 16.666%;
  height: 250px;
  background-repeat: no-repeat;
  background-position: center center;
  transition: all 500ms ease;
}

.accordion ul li div {
  display: block;
  overflow: hidden;
  width: 100%;
}

.accordion ul li div a {
  display: block;

  width: 100%;
  position: relative;
  z-index: 3;
  vertical-align: bottom;
  padding: 15px 20px;
  box-sizing: border-box;
  color: #fff;
  text-decoration: none;
  font-family: Open Sans, sans-serif;
  transition: all 200ms ease;
}

.accordion ul li div a * {
  opacity: 0;
  margin: 0;
  width: 100%;
  text-overflow: ellipsis;
  position: relative;
  z-index: 5;
  white-space: nowrap;
  overflow: hidden;
  -webkit-transform: translateX(-20px);
  transform: translateX(-20px);
  -webkit-transition: all 400ms ease;
  transition: all 400ms ease;
}

.accordion ul li div a h2 {
  font-family: Montserrat, sans-serif;
  text-overflow: clip;
  font-size: 24px;
  text-transform: uppercase;
  margin-bottom: 2px;

}

.accordion ul li div a p {
  font-size: 13.5px;
}


.accordion ul:hover li { width: 8%; }
.accordion ul:hover li:hover { width: 60%; }
.accordion ul:hover li:hover a { background: rgba(0, 0, 0, 0.4); }
.accordion ul:hover li:hover a * {
  opacity: 1;
  -webkit-transform: translateX(0);
  transform: translateX(0);
}
 @media screen and (max-width: 600px) {


.accordion { height: auto; }

.accordion ul li,
.accordion ul li:hover,
.accordion ul:hover li,
.accordion ul:hover li:hover {
  position: relative;
  display: table;
  table-layout: fixed;
  width: 100%;
  -webkit-transition: none;
  transition: none;
}
}
 
     </style>
     
       <div class="accordion">
  <ul>
    <?php if ($img1)  { ?>
    <li>
      <div> <a href="<?php echo $link1 ;?>">
        <h2><?php echo $text1;?></h2>
        <p><?php echo $textarea1;?></p>
        </a> </div>
    </li> 
     <?php } else {} ?> 
    <?php if ($img2)  { ?>
    <li>
      <div> <a href="<?php echo $link2;?>">
        <h2><?php echo $text2;?></h2>
        <p><?php echo $textarea2;?></p>
        </a> </div>
    </li>
     <?php } else {} ?> 
    <?php if ($img3)  { ?>
    <li>
      <div> <a href="<?php echo $link3;?>">
       <h2><?php echo $text3;?></h2>
        <p><?php echo $textarea3;?></p>
        </a> </div>
    </li>
    <?php } else {} ?> 
    <?php if ($img4)  { ?>
    <li>
      <div> <a href="<?php echo $link4 ;?>">
        <h2><?php echo $text4;?></h2>
        <p><?php echo $textarea4;?></p>
        </a> </div>
    </li>
     <?php } else {} ?>
   <?php if ($img5)  { ?>
    <li>
      <div> <a href="<?php echo $link5;?>">
        <h2><?php echo $text5;?></h2>
        <p><?php echo $textarea5;?></p>
        </a> </div>
    </li>
    <?php } else {} ?> 
   <?php if ($img6)  { ?>
    <li>
      <div> <a href="<?php echo $link6 ;?>">
        <h2><?php echo $text6;?></h2>
        <p><?php echo $textarea6;?></p>
        </a> </div>
    </li> 
  <?php } else {} ?>   
  </ul>
</div>
		
<?php
     $content = ob_get_contents();
     ob_get_clean();
     return $content;

    }

	 
	  public function bs_accrodian_scripts(){
       // wp_enqueue_style('bs_accrodian_style', plugin_dir_url(__FILE__) .'assets/css/style.css');

    }

}

$simple_accrodian_slider=new Ps_Accrodian_Slider();
//$yelp_review = Bs_Shortcode::bs_get_instance();

?>