<?php

class Reports extends My_Controller {
    public function __construct() {
        parent::__construct();
        $this->is_login();
    }

    public function index() {
        $data['title'] = 'Reports';
        $data['page'] = 'pages/reports/index';

        $this->view($data);
    }
}
