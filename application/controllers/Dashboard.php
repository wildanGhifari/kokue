<?php

class Dashboard extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->is_login();
    }

    public function index() {
        $data['title']  = "Kokue | Dashboard";
        $data['page']   = 'pages/dashboard/index';

        $this->view($data);
    }
}
