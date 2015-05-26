<?php
class ControllerHome extends Controller {
    public function index(){
        $this->children = array('menu', 'footer', 'header');

        $this->response->setOutput($this->render());
    }
}
