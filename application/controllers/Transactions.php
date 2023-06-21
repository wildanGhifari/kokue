<?php

class Transactions extends My_Controller {
    public function __construct() {
        parent::__construct();
        $this->is_login();
    }

    public function index() {
        $data['title'] = 'Transactions';
        $data['page'] = 'pages/transactions/index';

        $this->view($data);
    }
}
