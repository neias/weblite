<?php
final class loader {

    public function view($template, $data = array()) {
        $file = DIR_TEPLATE . $template;

        if (file_exists($file)) {
            extract($data);
            ob_start();
            require($file);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        } else {
            trigger_error('Error: Teplate yüklenemedi ' . $file . '!');
            exit();
        }
    }

    public function controller($route, $args = array()) {
        $action = new Action($route, $args);
        return $action->execute($this->registry);
    }

}