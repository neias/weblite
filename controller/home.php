<?php
class ControllerHome extends Controller {
    public function index(){
        $this->children = array('header');

        $this->response->setOutput($this->render());
    }
}
