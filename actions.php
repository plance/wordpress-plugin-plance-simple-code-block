<?php
/**
 * Actions.
 *
 * @package Plance\Plugin\Simple_Code_Block
 */

namespace Plance\Plugin\Simple_Code_Block;

defined( 'ABSPATH' ) || exit;


use Plance\Plugin\Simple_Code_Block\Assets;
use Plance\Plugin\Simple_Code_Block\Tinymce;
use Plance\Plugin\Simple_Code_Block\Textdomain;


add_action( 'plugins_loaded', array( Assets::class, 'instance' ) );
add_action( 'plugins_loaded', array( Tinymce::class, 'instance' ) );
add_action( 'plugins_loaded', array( Textdomain::class, 'instance' ) );