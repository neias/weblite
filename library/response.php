<?php
class Response {
    private $headers = array();
    private $level = 0;
    private $output;

    public function addHeader($header) {
        $this->headers[] = $header;
    }

    public function redirect($url) {
        header('Location: ' . $url);
        exit;
    }

    public function setCompression($level) {
        $this->level = $level;
    }

    public function setOutput($output) {
        $this->output = $output;
    }

    public function output() {
        if ($this->output) {

            $output = $this->output;

            if (!headers_sent()) {
                foreach ($this->headers as $header) {
                    header($header, true);
                }
            }

            echo $output;
        }
    }
}