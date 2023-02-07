
<?php

if (!function_exists('lang')) {
    function lang()
    {
        return app()->getLocale();
    }
}
if (!function_exists('url_datatable_lang')) {
    function url_datatable_lang()
    {
        $lang = app()->getLocale();
        if($lang == 'ar'){
            return 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/ar.json';
        }else if($lang == 'en'){
            return 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/en-GB.json';
        }
    }
}

