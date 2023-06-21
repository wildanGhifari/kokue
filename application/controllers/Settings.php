<?php

class Settings extends My_Controller {
    public function index() {
        $data['title'] = 'Settings';
        $data['page'] = 'pages/settings/index';

        $this->view($data);
    }
}
