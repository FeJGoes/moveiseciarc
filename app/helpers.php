<?php

use Illuminate\Support\HtmlString;

if (! function_exists('feedback_message')) {
    /**
     * Generate a CSRF token form field.
     *
     * @return \Illuminate\Support\HtmlString
     */
    function feedback_message($boolean = false, $message = '', $type = 'success', $dismissible = true)
    {
        if ($boolean) {
            return new HtmlString("

            ");
        }
    }
}
