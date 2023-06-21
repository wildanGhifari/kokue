<?php

class Products extends My_Controller {
    public function __construct() {
        parent::__construct();
        $this->is_login();
    }

    public function index() {
        $data['title'] = 'Products';
        $data['page'] = 'pages/products/index';

        $this->view($data);
    }
}
