<?php

class CustomBodyClassController {
    public function __construct() {
        add_filter('body_class', array($this, 'addBodyClass'));
    }

    public function addBodyClass($classes) {
        if (is_admin()) {
            return $classes;
        }
        $view = new CustomBodyClassView();
        return $view->displayBodyClass($classes);
    }
}
