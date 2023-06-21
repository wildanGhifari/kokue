<?php

class Reports extends My_Controller {
    public function index() {
        $data['title'] = 'Reports';
        $data['page'] = 'pages/reports/index';

        $this->view($data);
    }
}
