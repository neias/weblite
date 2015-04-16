<?php
class Response {
    private $output;

    public function setOutput($output) {
        $this->output = $output;
    }

    public function output() {
        if ($this->output) {
            echo $this->output;
        }
    }
}