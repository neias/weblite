<?php
final class Loader {
    private $registry;

    public function __construct($registry) {
        $this->registry = $registry;
    }

    public function controller($route, $args = array()) {
        $action = new Action($route, $args);

        return $action->execute($this->registry);
    }

    public function model($model) {
        $file = DIR_MODEL . $model . '.php';
        $class = 'Model' . preg_replace('/[^a-zA-Z0-9]/', '', $model);

        if (file_exists($file)) {
            include_once($file);

            $this->registry->set('model_' . str_replace('/', '_', $model), new $class($this->registry));
        } else {
            trigger_error('Hata: Model bulunamadı ' . $file . '!');
            exit();
        }
    }

    public function view($template, $data = array()) {
        $file = DIR_TEMPLATE . $template;

        if (file_exists($file)) {
            extract($data);
            ob_start();
            require($file);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        } else {
            trigger_error('Hata: Teplate yüklenemedi ' . $file . '!');
            exit();
        }
    }

    public function library($library) {
        $file = DIR_LIBRARY . $library . '.php';

        if (file_exists($file)) {
            include_once($file);
        } else {
            trigger_error('Hata: Kütüphane bulunamadı' . $file . '!');
            exit();
        }
    }

    public function helper($helper) {
        $file = DIR_HELPER . $helper . '.php';

        if (file_exists($file)) {
            include_once($file);
        } else {
            trigger_error('Hata: Helper bulunamadı ' . $file . '!');
            exit();
        }
    }

}