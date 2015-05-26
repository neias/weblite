<?php
class ControllerMenu extends Controller{
    public function index(){
        $this->load->model('menu');

        $this->data['main_menu'] = $this->model_menu->mainMenu();

        $this->render('menu');
    }
}