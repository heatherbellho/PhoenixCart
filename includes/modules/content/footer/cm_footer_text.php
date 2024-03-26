<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

  class cm_footer_text extends abstract_executable_module {

    const CONFIG_KEY_BASE = 'MODULE_CONTENT_FOOTER_TEXT_';

    public function __construct() {
      parent::__construct(__FILE__);
    }

    public function execute() {
      $tpl_data = [ 'group' => $this->group, 'file' => __FILE__ ];
      include 'includes/modules/content/cm_template.php';
    }

    protected function get_parameters() {
      return [
        'MODULE_CONTENT_FOOTER_TEXT_STATUS' => [
          'title' => 'Enable Module',
          'value' => 'True',
          'desc' => 'Do you want to enable this module?',
          'set_func' => "Config::select_one(['True', 'False'], ",
        ],
        'MODULE_CONTENT_FOOTER_TEXT_CONTENT_WIDTH' => [
          'title' => 'Content Container',
          'value' => 'col-sm-6 col-md-3 mb-2 mb-sm-0',
          'desc' => 'What container should the content be shown in? (col-*-12 = full width, col-*-6 = half width).',
        ],
        'MODULE_CONTENT_FOOTER_TEXT_SORT_ORDER' => [
          'title' => 'Sort Order',
          'value' => '40',
          'desc' => 'Sort order of display. Lowest is displayed first.',
        ],
      ];
    }

  }
