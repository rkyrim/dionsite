<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Codeigniter Template Simplicity Extended Version
 *
 * Copyright (C) 2015  Jessica Abaya.
 *
 * @copyright   Copyright (c) 2015, Jessica Abaya
 * @version     1.0
 * @author      Jessica Abaya <jessica.abaya@gmail.com>
 */

class MY_Controller extends MX_Controller {
	private $theme;
    private $active_theme;
    private $layout;
    private $asset_dir;

	var $data;

	function MY_Controller() {
        /* 
         * Load URL helper or simple include it on config autoload file
         */
        $this->load->helper('url');

        $this->load->config('themes', TRUE);
        $this->_set_theme_vars();
	}

    /*
     * Set page title, prepended on the site title
     * Sample output: "Page title - Site title"
     */
    function _set_title($title=NULL) {
        $this->output->prepend_title($title);
    }

    /*
     * Setter and Getter for active theme
     */
    function _set_active_theme($theme) {
        $this->active_theme = $theme;
    }

    function _get_active_theme() {
        return !empty($this->active_theme) ? $this->active_theme : $this->config->item('active_theme', 'themes');
    }

    /*
     * Setter and Getter for page layout
     */
    function _set_layout($layout) {
        $this->layout = $layout;
    }

    function _get_layout() {
        return !empty($this->layout) ? $this->layout : $this->config->item('default_layout', 'themes');
    }

    /*
     * Set section/area
     * Useful if you want to fill a specific area using a separate view file
     * Note: Use the last parameter "module" if the view file is located inside a specific module view files
     */
    function _set_section($section='', $view_file='', $data=array(), $module=false) {
        /*
         * Include the assets directory path url so we can call it on section view file
         * Useful especially for calling asset images 
         */
        $data['assets_dir'] = $this->_get_assets_dir();

        $path = (! $module) ? $this->theme : '';
        $this->load->section($section, $path . $view_file, $data);
    }

    /*
     * Prepare and set the final page template with the active theme and layout
     */
    function _prepare_template() {
        $layout = $this->_get_layout();
        $theme = $this->_get_active_theme();
        $this->output->set_template($theme . '/layout/' . $layout);
    }

    /*
     * Render page with all the supplied theme, layout and assets
     */
    function _render_page($view, $data=null, $render=false) {
        $this->_prepare_template();

        $this->viewdata = empty($data) ? $this->data: $data;

        /*
         * Include the assets directory path url so we can call it on all pages
         * Useful especially for calling asset images 
         */
        $this->viewdata['assets_dir'] = $this->_get_assets_dir();

        $view_html = $this->load->view($view, $this->viewdata, $render);
        if (!$render) return $view_html;
    }


    /*
     * Set js/css assets and load it on the page
     */
    function _set_assets($assets=array()) {
        if ( empty($assets) || ! is_array($assets) ) {
            return;
        }

        foreach($assets as $asset_type => $asset) {
            $this->_load_assets($asset_type, $asset);
        }
    }

    /*
     * Get assets directory path url of the active theme
     */
    function _get_assets_dir() {
        return $this->assets_dir = base_url() . $this->config->item('assets_theme_dir', 'themes') . $this->_get_active_theme() . '/';
    }

    /*
     * Get complete theme path
     * Useful if the view file is on application/views of the active theme
     */
    function _get_theme_path() {
        return $this->config->item('theme_dir', 'themes') . $this->_get_active_theme() . '/';
    }

    /*
     * Initialize and set default theme variables using the "themes" config file
     */
    private function _set_theme_vars() {
    	// Set default/root site title
    	$this->output->set_title($this->config->item('site_title', 'themes'));

        $active_theme = $this->_get_active_theme();
        $this->theme = $this->config->item('theme_dir', 'themes') . $active_theme . '/';
        $this->layout = $this->config->item('default_layout', 'themes');
    }

    /*
     * Load assets on the page, make sure that it's a valid assets type
     */
    private function _load_assets($type='css', $asset=null) {
        if ( $asset === null || !in_array($type, array('css', 'js')) ) {
            return;
        }

        if ( !is_array($asset) ) {
            $this->load->$type($this->assets_dir . $type . '/' . $asset);
        } else {
            foreach($asset as $file) {
                $this->load->$type($this->assets_dir . $type . '/' . $file);
            }
        }
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */