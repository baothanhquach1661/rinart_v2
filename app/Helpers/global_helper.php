<?php

if(!function_exists('currencyPosition')){
    function currencyPosition($price){
        // Format the price first
        $formattedPrice = number_format($price, 0, '.', '.');

        // Check currency position and return formatted price with currency symbol
        if(config('settings.site_currency_position') === 'left'){
            return config('settings.site_currency_icon') . $formattedPrice;
        } else {
            return $formattedPrice . config('settings.site_currency_icon');
        }
    }
}
