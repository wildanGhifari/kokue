<?php

class Products extends My_Controller {
    private $id;

    public function __construct() {
        parent::__construct();
        $is_login   = $this->session->userdata('is_login');
        $this->id   = $this->session->userdata('id');

        if (!$is_login) {
            $this->session->set_flashdata('error', 'Please Login first.');
            redirect(base_url('login'));
            return;
        }
    }

    public function index() {
        $data['title']      = 'Products';
        $data['products']   = $this->products->select([
            'product.id', 'product.name AS product_name', 'product.description',
            'product.image', 'product.price', 'product.stock',
            'category.name AS category_name',
        ])->join('category')->get();

        $data['page']       = 'pages/products/index';

        $this->view($data);
    }
}
