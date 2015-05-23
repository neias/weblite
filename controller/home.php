<?php
class ControllerHome extends Controller {
    public function index(){
        $this->children = array('footer', 'header');

        $this->response->setOutput($this->render());
    }
}
