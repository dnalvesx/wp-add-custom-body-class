<?php

class CustomBodyClassModel {
    public function getSlug() {
        global $post;
        if ($post) {
            return $post->post_name;
        } else {
            $url = $_SERVER["REQUEST_URI"];
            $url_parts = explode('/', $url);
            return end($url_parts);
        }
    }
}
