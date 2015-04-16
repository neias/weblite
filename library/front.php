<?php
final class Front {
    protected $registry;

    public function __construct($registry) {
        $this->registry = $registry;
    }

    public function dispatch($action) {
        while ($action) {
            $action = $this->execute($action);
        }
    }

    public function execute($action) {
        echo('<pre>');
        print_r($action);
        echo('</pre>');
        die;
    }
}