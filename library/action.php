<?php
final class Action {
    protected $file;
    protected $class;
    protected $method;

    public function __construct($route) {
        echo('<pre>');
        print_r($route);
        echo('</pre>');
        die;
    }
}