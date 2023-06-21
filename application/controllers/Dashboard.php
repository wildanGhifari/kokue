<?php 

class Dashboard extends MY_Controller {
    public function index() {
        $data['title']  = "Kokue | Dashboard";
        $data['page']   = 'pages/dashboard/index';

        $this->view($data);
    }
}
