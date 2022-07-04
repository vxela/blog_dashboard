<?php

if (! function_exists('page_info')) {
    function page_info($title='',$subtitle='') {
        return [
            'title' => $title,
            'subtitle' => $subtitle
        ];
    }
}