<?php
/**
$callback = function($matches) {
return '-'.strtoupper($matches[1]);
};

return preg_replace_callback('/\-(.)/', $callback, )
*/

class Jobeet
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $callback = function() {
            return '-';
        };
        $text = preg_replace_callback('/\W+/', $callback, $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}
