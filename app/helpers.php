<?php

if (!function_exists('trans_fb')) {
    function trans_fb(string $key, array $replace = [], ?string $locale = null)
    {
        $translation = trans($key, $replace, $locale);

        if ($key === $translation) {
            return trans($key, $replace, config('app.fallback_locale'));
        }

        return $translation;
    }
}