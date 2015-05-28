<?php
class ControllerMenu extends Controller{
    public function index(){
        $this->load->library('menu');

        // $this->load->model('menu');

        // $this->model_menu->mainMenu();

        $menu = menu::factory()
              ->add('About Us', '/about-us/', menu::factory()
                    ->add('Who We Are', '/who-we-are/')
                    ->add('What We Do', '/what-we-do/')
                    ->add('Other Things', '/other-things/'))
              ->add('Random', '/random/', menu::factory()
                    ->add('Link One', '/link-one/')
                    ->add('Link Two', '/link-two/', menu::factory()
                          ->add('Level Three', '/level-three/')));

        $attrs = array('class' => 'nav navbar-nav');
        $active = $_SERVER['REQUEST_URI'];

        $this->data['main_menu'] = $menu->render($attrs, $active);

        $this->render('menu');
    }
}