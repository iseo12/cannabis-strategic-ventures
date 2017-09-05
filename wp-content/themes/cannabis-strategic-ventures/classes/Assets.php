<?php

class Assets
{
    private $assets  = [];

    public function __construct()
    {
        $manifest = file_get_contents(get_template_directory_uri() . '/build/manifest.json');
        $this->assets = json_decode($manifest, true);
    }

    public function get($filename)
    {
        return get_template_directory_uri() . '/build/' . $this->assets[$filename];
    }
}

$GLOBALS['assets'] = new Assets();
