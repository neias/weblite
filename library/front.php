<?php
final class Front {
    protected $registry;
    protected $error;

    public function __construct($registry) {
        $this->registry = $registry;
    }

    public function dispatch($action) {
        while ($action) {
            $action = $this->execute($action);
        }
    }

    public function execute($action) {
        if (file_exists($action->getFile())) {
            require_once($action->getFile());

            $class = $action->getClass();

            if (class_exists($class)) {
                $controller = new $class($this->registry);
            } else {
                die($class . ' - bu class bunulanamadı');
            }

            if (is_callable(array($controller, $action->getMethod()))) {
                $action = call_user_func_array(array($controller, $action->getMethod()), $action->getArgs());
            } else {
                $action = $this->error;

                $this->error = '';
            }
        } else {
            $action = $this->error;

            $this->error = '';
        }

        return $action;
    }
}