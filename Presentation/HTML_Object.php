<?php

class HTML_Object {
    public function h1($text) {
        return "<h1>" . $text . "</h1>";
    }
    public function s($text) {
        return "<>" . $text . "</>";
    }
}
