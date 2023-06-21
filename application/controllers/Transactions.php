<?php

class Transactions extends My_Controller {
    public function index() {
        $data['title'] = 'Transactions';
        $data['page'] = 'pages/transactions/index';

        $this->view($data);
    }
}
