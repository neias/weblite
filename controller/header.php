<?php
class ControllerHeader extends Controller {
    protected function index() {
        $this->data['title'] = $this->document->getTitle();
        $this->data['description'] = $this->document->getDescription();
        $this->data['keywords'] = $this->document->getKeywords();
        $this->data['links'] = $this->document->getLinks();
        $this->data['styles'] = $this->document->getStyles();
        $this->data['scripts'] = $this->document->getScripts();

        $this->render('header');
    }
}