<?php

class CustomBodyClassView {
    public function displayBodyClass($classes) {
        $model = new CustomBodyClassModel();
        $slug = $model->getSlug();
        $classes[] = sanitize_html_class($slug);
        return $classes;
    }
}
