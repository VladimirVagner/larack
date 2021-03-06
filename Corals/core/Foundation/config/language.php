<?php

return [

    'user_level_enabled' => false,

    'store' => 'cookie',

    'store_key' => 'locale',
    /*
    |--------------------------------------------------------------------------
    | Carbon Language
    |--------------------------------------------------------------------------
    |
    | This option the language of carbon library.
    |
    */
    'carbon' => true,

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | This option indicates the middleware to change language.
    |
    */
    'middleware' => 'Corals\Foundation\Http\Middleware\SetLocale',

    /*
    |--------------------------------------------------------------------------
    | Controller
    |--------------------------------------------------------------------------
    |
    | This option indicates the controller to be used.
    |
    */
    'controller' => 'Akaunting\Language\Controllers\Language',

    /*
    |--------------------------------------------------------------------------
    | Flags
    |--------------------------------------------------------------------------
    |
    | This option indicates the flags features.
    |
    */

    'flags' => ['width' => '22px', 'ul_class' => '', 'li_class' => '', 'img_class' => '', 'asset_path' => 'assets/corals/images/flags/'],

    /*
    |--------------------------------------------------------------------------
    | Language code mode
    |--------------------------------------------------------------------------
    |
    | This option indicates the language code and name to be used, short/long
    | and english/native.
    | Short: language code (en)
    | Long: languagecode-COUNTRYCODE (en-GB)
    |
    */

    'mode' => ['code' => 'short', 'name' => 'native'],

    /*
    |--------------------------------------------------------------------------
    | All Languages
    |--------------------------------------------------------------------------
    |
    | This option indicates the language codes and names.
    |
    */

    'all' => [
        ['short' => 'ar', 'long' => 'ar-SA', 'english' => 'Arabic', 'native' => '??????????????'],
        ['short' => 'bg', 'long' => 'bg-BG', 'english' => 'Bulgarian', 'native' => '??????????????????'],
        ['short' => 'bn', 'long' => 'bn-BD', 'english' => 'Bengali', 'native' => '???????????????'],
        ['short' => 'cn', 'long' => 'zh-CN', 'english' => 'Chinese (S)', 'native' => '????????????'],
        ['short' => 'cs', 'long' => 'cs-CZ', 'english' => 'Czech', 'native' => '??e??tina'],
        ['short' => 'da', 'long' => 'da-DK', 'english' => 'Danish', 'native' => 'Dansk'],
        ['short' => 'de', 'long' => 'de-DE', 'english' => 'German', 'native' => 'Deutsch'],
        ['short' => 'de', 'long' => 'de-AT', 'english' => 'Austrian', 'native' => '??sterreichisches Deutsch'],
        ['short' => 'fi', 'long' => 'fi-FI', 'english' => 'Finnish', 'native' => 'Suomi'],
        ['short' => 'fr', 'long' => 'fr-FR', 'english' => 'French', 'native' => 'Fran??ais'],
        ['short' => 'el', 'long' => 'el-GR', 'english' => 'Greek', 'native' => '????????????????'],
        ['short' => 'en', 'long' => 'en-AU', 'english' => 'English (AU)', 'native' => 'English (AU)'],
        ['short' => 'en', 'long' => 'en-CA', 'english' => 'English (CA)', 'native' => 'English (CA)'],
        ['short' => 'en', 'long' => 'en-GB', 'english' => 'English (GB)', 'native' => 'English (GB)'],
        ['short' => 'en', 'long' => 'en-US', 'english' => 'English (US)', 'native' => 'English (US)'],
        ['short' => 'es', 'long' => 'es-ES', 'english' => 'Spanish', 'native' => 'Espa??ol'],
        ['short' => 'et', 'long' => 'et-EE', 'english' => 'Estonian', 'native' => 'Eesti'],
        ['short' => 'he', 'long' => 'he-IL', 'english' => 'Hebrew', 'native' => '????????????????'],
        ['short' => 'hi', 'long' => 'hi-IN', 'english' => 'Hindi', 'native' => '??????????????????'],
        ['short' => 'hr', 'long' => 'hr-HR', 'english' => 'Croatian', 'native' => 'Hrvatski'],
        ['short' => 'hu', 'long' => 'hu-HU', 'english' => 'Hungarian', 'native' => 'Magyar'],
        ['short' => 'hy', 'long' => 'hy-AM', 'english' => 'Armenian', 'native' => '??????????????'],
        ['short' => 'id', 'long' => 'id-ID', 'english' => 'Indonesian', 'native' => 'Bahasa Indonesia'],
        ['short' => 'it', 'long' => 'it-IT', 'english' => 'Italian', 'native' => 'Italiano'],
        ['short' => 'ir', 'long' => 'fa-IR', 'english' => 'Persian', 'native' => '??????????'],
        ['short' => 'lt', 'long' => 'lt-LT', 'english' => 'Lithuanian', 'native' => 'Lietuvi??'],
        ['short' => 'jp', 'long' => 'ja-JP', 'english' => 'Japanese', 'native' => '?????????'],
        ['short' => 'ko', 'long' => 'ko-KR', 'english' => 'Korean', 'native' => '?????????'],
        ['short' => 'ms', 'long' => 'ms-MY', 'english' => 'Malay', 'native' => 'Bahasa Melayu'],
        ['short' => 'mx', 'long' => 'es-MX', 'english' => 'Mexico', 'native' => 'Espa??ol de M??xico'],
        ['short' => 'nb', 'long' => 'nb-NO', 'english' => 'Norwegian', 'native' => 'Norsk Bokm??l'],
        ['short' => 'nl', 'long' => 'nl-NL', 'english' => 'Dutch', 'native' => 'Nederlands'],
        ['short' => 'pl', 'long' => 'pl-PL', 'english' => 'Polish', 'native' => 'Polski'],
        ['short' => 'pt-br', 'long' => 'pt-BR', 'english' => 'Brazilian', 'native' => 'Portugu??s'],
        ['short' => 'pt', 'long' => 'pt-PT', 'english' => 'Portuguese', 'native' => 'Portugu??s'],
        ['short' => 'ro', 'long' => 'ro-RO', 'english' => 'Romanian', 'native' => 'Rom??n??'],
        ['short' => 'ru', 'long' => 'ru-RU', 'english' => 'Russian', 'native' => '??????????????'],
        ['short' => 'sq', 'long' => 'sq-AL', 'english' => 'Albanian', 'native' => 'Shqip'],
        ['short' => 'sv', 'long' => 'sv-SE', 'english' => 'Swedish', 'native' => 'Svenska'],
        ['short' => 'th', 'long' => 'th-TH', 'english' => 'Thai', 'native' => '?????????'],
        ['short' => 'tr', 'long' => 'tr-TR', 'english' => 'Turkish', 'native' => 'T??rk??e'],
        ['short' => 'tw', 'long' => 'zh-TW', 'english' => 'Chinese (T)', 'native' => '????????????'],
        ['short' => 'uk', 'long' => 'uk-UA', 'english' => 'Ukrainian', 'native' => '????????????????????'],
        ['short' => 'vn', 'long' => 'vi-VN', 'english' => 'Vietnamese', 'native' => 'Ti???ng Vi???t'],
    ],
];
