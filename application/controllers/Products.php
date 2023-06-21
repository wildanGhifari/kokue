<?php

class Products extends My_Controller {
    public function index() {
        $data['title'] = 'Products';
        $data['page'] = 'pages/products/index';

        $this->view($data);
    }
}
