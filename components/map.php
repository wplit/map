<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class X_Map extends \Bricks\Element {

  // Element properties
  public $category     = 'general'; 
  public $name         = 'xmap';
  public $icon         = 'ti-bolt-alt';
  public $scripts      = ['xMapInit']; // Script(s) run when element is rendered on frontend or updated in builder

  // Return localised element label
  public function get_label() {
    return esc_html__( 'Test map', 'bricks' );
  }

 
  public function set_control_groups() {
  }
 

  public function set_controls() {
  }


  public function enqueue_scripts() {

    wp_enqueue_script('x-maplibre-gj', 'https://unpkg.com/maplibre-gl@5.3.0/dist/maplibre-gl.js', [], '1.0.0', true);
    wp_enqueue_script('x-maplibre-init', plugin_dir_url( __FILE__ ) . 'assets/js/maplibre-init.js', [], '1.0.0', true);  
  }

  
  public function render() {
    
    echo "<div {$this->render_attributes( '_root' )}>";
    echo '</div>';
  }
}