<?php

namespace App\Providers;

use DOMDocument;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Blade::directive('svg', function($arguments) {
        // Funky madness to accept multiple arguments into the directive
            list($file, $class) = array_pad(explode(',', trim($arguments, "() ")), 2, '');
            $file = trim($file, "' ");
            $class = trim($class, "' ");

            /** Create the DOM */
            $svg = new DOMDocument();
            $svg->load(public_path("images/svg/$file.svg"));
            $svg->documentElement->setAttribute("class", $class);

            return $svg->saveXML($svg->documentElement);
        });
    }
}
