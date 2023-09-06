<?php

declare(strict_types=1);

namespace Faker\Core;

use Faker\Extension;

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class Ietf implements Extension\IetfExtension
{
    /**
     * Set of validated values extracted from PHP Internationalization Functions and connected ICU library.
     *
     * Generated by iterating over \ResourceBundle::getLocales(''), but respecting the notation of BCP 47 and PHPs
     * own understand of locales using "-" as separator instead of "_".
     *
     * The list was checked against current browsers Intl.DateTimeFormat class for acceptance.
     *
     * @see https://en.wikipedia.org/wiki/IETF_language_tag
     * @see https://www.iana.org/assignments/language-subtag-registry/language-subtag-registry
     * @see https://www.php.net/manual/en/book.intl.php
     * @see https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Intl/DateTimeFormat
     *
     * Enumerated from:
     *
     * PHP 8.2.9
     * ICU version => 72.1
     * ICU Data version => 72.1
     * ICU TZData version => 2022e
     * ICU Unicode version => 15.0
     *
     * Checked against:
     *
     * Firefox 116.0.3
     * Chrome 16.0.5845.140
     *
     * @var string[]
     */
    private array $tags = [
        'af', 'af-NA', 'af-ZA', 'agq', 'agq-CM', 'ak', 'ak-GH', 'sq', 'sq-AL', 'sq-XK', 'sq-MK', 'am', 'am-ET', 'ar',
        'ar-DZ', 'ar-BH', 'ar-DJ', 'ar-ER', 'ar-IQ', 'ar-IL', 'ar-YE', 'ar-JO', 'ar-QA', 'ar-KM', 'ar-KW', 'ar-LB',
        'ar-LY', 'ar-MA', 'ar-MR', 'ar-OM', 'ar-PS', 'ar-SA', 'ar-SO', 'ar-SD', 'ar-SY', 'ar-SS', 'ar-TD', 'ar-TN',
        'ar-AE', 'ar-001', 'ar-EH', 'ar-EG', 'hy', 'hy-AM', 'az', 'az-Cyrl', 'az-Latn', 'as', 'as-IN', 'ast', 'ast-ES',
        'asa', 'asa-TZ', 'ksf', 'ksf-CM', 'bm', 'bm-ML', 'eu', 'eu-ES', 'bas', 'bas-CM', 'be', 'be-BY', 'bem', 'bem-ZM',
        'bez', 'bez-TZ', 'bn', 'bn-BD', 'bn-IN', 'bgc', 'bgc-IN', 'bho', 'bho-IN', 'my', 'my-MM', 'brx', 'brx-IN', 'bs',
        'bs-Cyrl', 'bs-Latn', 'br', 'br-FR', 'bg', 'bg-BG', 'ceb', 'ceb-PH', 'ccp', 'ccp-BD', 'ccp-IN', 'chr', 'chr-US',
        'zh', 'zh-Hant', 'zh-Hans', 'de', 'de-BE', 'de-DE', 'de-IT', 'de-LI', 'de-LU', 'de-CH', 'de-AT', 'dyo',
        'dyo-SN', 'doi', 'doi-IN', 'dua', 'dua-CM', 'dz', 'dz-BT', 'da', 'da-DK', 'da-GL', 'ebu', 'ebu-KE', 'en',
        'en-AS', 'en-VI', 'en-UM', 'en-AI', 'en-AG', 'en-AU', 'en-BS', 'en-BB', 'en-BE', 'en-BZ', 'en-BM', 'en-BW',
        'en-VG', 'en-IO', 'en-BI', 'en-CK', 'en-DE', 'en-DG', 'en-DM', 'en-DK', 'en-ER', 'en-SZ', 'en-150', 'en-FK',
        'en-FJ', 'en-FI', 'en-GM', 'en-GH', 'en-GI', 'en-GD', 'en-GU', 'en-GG', 'en-GY', 'en-IN', 'en-IE', 'en-IM',
        'en-IL', 'en-JM', 'en-JE', 'en-KY', 'en-CM', 'en-CA', 'en-KE', 'en-KI', 'en-CC', 'en-LS', 'en-LR', 'en-MG',
        'en-MW', 'en-MY', 'en-MV', 'en-MT', 'en-MH', 'en-MU', 'en-FM', 'en-MS', 'en-NA', 'en-NR', 'en-NZ', 'en-NL',
        'en-NG', 'en-NU', 'en-NF', 'en-MP', 'en-PK', 'en-PW', 'en-PG', 'en-PH', 'en-PN', 'en-PR', 'en-RW', 'en-SB',
        'en-ZM', 'en-WS', 'en-SE', 'en-CH', 'en-SC', 'en-SL', 'en-ZW', 'en-SG', 'en-SX', 'en-SI', 'en-HK', 'en-MO',
        'en-SH', 'en-KN', 'en-LC', 'en-VC', 'en-SD', 'en-ZA', 'en-SS', 'en-TZ', 'en-TK', 'en-TO', 'en-TT', 'en-TC',
        'en-TV', 'en-UG', 'en-VU', 'en-AE', 'en-GB', 'en-US', 'en-CX', 'en-001', 'en-CY', 'en-AT', 'eo', 'eo-001',
        'et', 'et-EE', 'ee', 'ee-GH', 'ee-TG', 'ewo', 'ewo-CM', 'fil', 'fil-PH', 'fi', 'fi-FI', 'fr', 'fr-DZ',
        'fr-BE', 'fr-BJ', 'fr-BF', 'fr-BI', 'fr-CI', 'fr-DJ', 'fr-FR', 'fr-GF', 'fr-PF', 'fr-GA', 'fr-GP', 'fr-GN',
        'fr-HT', 'fr-CM', 'fr-CA', 'fr-KM', 'fr-CG', 'fr-CD', 'fr-LU', 'fr-MG', 'fr-ML', 'fr-MA', 'fr-MQ', 'fr-MR',
        'fr-MU', 'fr-YT', 'fr-MC', 'fr-NC', 'fr-NE', 'fr-RW', 'fr-RE', 'fr-CH', 'fr-SN', 'fr-SC', 'fr-BL', 'fr-MF',
        'fr-PM', 'fr-SY', 'fr-TG', 'fr-TD', 'fr-TN', 'fr-VU', 'fr-WF', 'fr-CF', 'fr-GQ', 'fur', 'fur-IT', 'ff',
        'ff-Adlm', 'ff-Latn', 'fo', 'fo-DK', 'fo-FO', 'gl', 'gl-ES', 'lg', 'lg-UG', 'ka', 'ka-GE', 'el', 'el-GR',
        'el-CY', 'kl', 'kl-GL', 'gu', 'gu-IN', 'guz', 'guz-KE', 'gd', 'gd-GB', 'ha', 'ha-GH', 'ha-NE', 'ha-NG', 'haw',
        'haw-US', 'he', 'he-IL', 'hi', 'hi-IN', 'hi-Latn', 'ig', 'ig-NG', 'smn', 'smn-FI', 'id', 'id-ID', 'ia',
        'ia-001', 'ga', 'ga-IE', 'ga-GB', 'is', 'is-IS', 'it', 'it-IT', 'it-SM', 'it-CH', 'it-VA', 'sah', 'sah-RU',
        'ja', 'ja-JP', 'jv', 'jv-ID', 'yi', 'yi-001', 'kea', 'kea-CV', 'kab', 'kab-DZ', 'kgp', 'kgp-BR', 'kkj',
        'kkj-CM', 'kln', 'kln-KE', 'kam', 'kam-KE', 'kn', 'kn-IN', 'yue', 'yue-Hant', 'yue-Hans', 'kk', 'kk-KZ', 'ks',
        'ks-Arab', 'ks-Deva', 'ca', 'ca-AD', 'ca-FR', 'ca-IT', 'ca-ES', 'km', 'km-KH', 'ki', 'ki-KE', 'rw', 'rw-RW',
        'ky', 'ky-KG', 'kok', 'kok-IN', 'ko', 'ko-KP', 'ko-KR', 'kw', 'kw-GB', 'khq', 'khq-ML', 'ses', 'ses-ML', 'hr',
        'hr-BA', 'hr-HR', 'ku', 'ku-TR', 'nmg', 'nmg-CM', 'ksh', 'ksh-DE', 'lkt', 'lkt-US', 'lag', 'lag-TZ', 'lo',
        'lo-LA', 'lv', 'lv-LV', 'ln', 'ln-AO', 'ln-CG', 'ln-CD', 'ln-CF', 'lt', 'lt-LT', 'lu', 'lu-CD', 'luy', 'luy-KE',
        'luo', 'luo-KE', 'lb', 'lb-LU', 'jmc', 'jmc-TZ', 'mai', 'mai-IN', 'mgh', 'mgh-MZ', 'kde', 'kde-TZ', 'mg',
        'mg-MG', 'ms', 'ms-BN', 'ms-ID', 'ms-MY', 'ms-SG', 'ml', 'ml-IN', 'mt', 'mt-MT', 'gv', 'gv-IM', 'mr', 'mr-IN',
        'mzn', 'mzn-IR', 'mas', 'mas-KE', 'mas-TZ', 'mk', 'mk-MK', 'mni', 'mni-Beng', 'mer', 'mer-KE', 'mgo', 'mgo-CM',
        'mn', 'mn-MN', 'mfe', 'mfe-MU', 'mua', 'mua-CM', 'mi', 'mi-NZ', 'naq', 'naq-NA', 'ne', 'ne-IN', 'ne-NP', 'nnh',
        'nnh-CM', 'jgo', 'jgo-CM', 'yrl', 'yrl-BR', 'yrl-CO', 'yrl-VE', 'nl', 'nl-AW', 'nl-BE', 'nl-CW', 'nl-BQ',
        'nl-NL', 'nl-SX', 'nl-SR', 'dsb', 'dsb-DE', 'pcm', 'pcm-NG', 'nd', 'nd-ZW', 'se', 'se-FI', 'se-NO', 'se-SE',
        'no', 'nb', 'nb-NO', 'nb-SJ', 'nn', 'nn-NO', 'nus', 'nus-SS', 'nyn', 'nyn-UG', 'lrc', 'lrc-IQ', 'lrc-IR', 'hsb',
        'hsb-DE', 'or', 'or-IN', 'om', 'om-KE', 'om-ET', 'os', 'os-GE', 'os-RU', 'ps', 'ps-AF', 'ps-PK', 'fa', 'fa-AF',
        'fa-IR', 'pl', 'pl-PL', 'pt', 'pt-AO', 'pt-BR', 'pt-CV', 'pt-GW', 'pt-LU', 'pt-MZ', 'pt-PT', 'pt-CH', 'pt-MO',
        'pt-ST', 'pt-TL', 'pt-GQ', 'pa', 'pa-Arab', 'pa-Guru', 'qu', 'qu-BO', 'qu-EC', 'qu-PE', 'raj', 'raj-IN', 'rof',
        'rof-TZ', 'cgg', 'cgg-UG', 'ro', 'ro-MD', 'ro-RO', 'rn', 'rn-BI', 'ru', 'ru-BY', 'ru-KZ', 'ru-KG', 'ru-MD',
        'ru-RU', 'ru-UA', 'rwk', 'rwk-TZ', 'rm', 'rm-CH', 'saq', 'saq-KE', 'sg', 'sg-CF', 'sbp', 'sbp-TZ', 'sa',
        'sa-IN', 'sat', 'sat-Olck', 'sc', 'sc-IT', 'sv', 'sv-FI', 'sv-SE', 'sv-AX', 'gsw', 'gsw-FR', 'gsw-LI', 'gsw-CH',
        'seh', 'seh-MZ', 'sr', 'sr-Cyrl', 'sr-Latn', 'ksb', 'ksb-TZ', 'sn', 'sn-ZW', 'sd', 'sd-Arab', 'sd-Deva', 'si',
        'si-LK', 'sk', 'sk-SK', 'sl', 'sl-SI', 'xog', 'xog-UG', 'so', 'so-DJ', 'so-KE', 'so-SO', 'so-ET', 'es', 'es-AR',
        'es-BZ', 'es-BO', 'es-BR', 'es-EA', 'es-CL', 'es-CR', 'es-DO', 'es-EC', 'es-SV', 'es-GT', 'es-HN', 'es-IC',
        'es-CO', 'es-CU', 'es-419', 'es-MX', 'es-NI', 'es-PA', 'es-PY', 'es-PE', 'es-PH', 'es-PR', 'es-ES', 'es-UY',
        'es-VE', 'es-US', 'es-GQ', 'sw', 'sw-KE', 'sw-CD', 'sw-TZ', 'sw-UG', 'su', 'su-Latn', 'tg', 'tg-TJ', 'dav',
        'dav-KE', 'zgh', 'zgh-MA', 'ta', 'ta-IN', 'ta-MY', 'ta-SG', 'ta-LK', 'twq', 'twq-NE', 'shi', 'shi-Latn',
        'shi-Tfng', 'tt', 'tt-RU', 'te', 'te-IN', 'teo', 'teo-KE', 'teo-UG', 'th', 'th-TH', 'bo', 'bo-CN', 'bo-IN',
        'ti', 'ti-ER', 'ti-ET', 'to', 'to-TO', 'cs', 'cs-CZ', 'ce', 'ce-RU', 'cv', 'cv-RU', 'tk', 'tk-TM', 'tr',
        'tr-TR', 'tr-CY', 'ug', 'ug-CN', 'uk', 'uk-UA', 'hu', 'hu-HU', 'ur', 'ur-IN', 'ur-PK', 'uz', 'uz-Arab',
        'uz-Cyrl', 'uz-Latn', 'vai', 'vai-Latn', 'vai-Vaii', 'vi', 'vi-VN', 'vun', 'vun-TZ', 'cy', 'cy-GB', 'wae',
        'wae-CH', 'fy', 'fy-NL', 'wo', 'wo-SN', 'xh', 'xh-ZA', 'yav', 'yav-CM', 'ii', 'ii-CN', 'yo', 'yo-BJ', 'yo-NG',
        'dje', 'dje-NE', 'tzm', 'tzm-MA', 'ckb', 'ckb-IQ', 'ckb-IR', 'zu', 'zu-ZA',
    ];

    /**
     * Contains a reduced set of $tags, those without a subtag.
     */
    private array $languages = [
        'af', 'agq', 'ak', 'sq', 'am', 'ar', 'hy', 'az', 'as', 'ast', 'asa', 'ksf', 'bm', 'eu', 'bas', 'be', 'bem',
        'bez', 'bn', 'bgc', 'bho', 'my', 'brx', 'bs', 'br', 'bg', 'ceb', 'ccp', 'chr', 'zh', 'de', 'dyo', 'doi', 'dua',
        'dz', 'da', 'ebu', 'en', 'eo', 'et', 'ee', 'ewo', 'fil', 'fi', 'fr', 'fur', 'ff', 'fo', 'gl', 'lg', 'ka', 'el',
        'kl', 'gu', 'guz', 'gd', 'ha', 'haw', 'he', 'hi', 'ig', 'smn', 'id', 'ia', 'ga', 'is', 'it', 'sah', 'ja', 'jv',
        'yi', 'kea', 'kab', 'kgp', 'kkj', 'kln', 'kam', 'kn', 'yue', 'kk', 'ks', 'ca', 'km', 'ki', 'rw', 'ky', 'kok',
        'ko', 'kw', 'khq', 'ses', 'hr', 'ku', 'nmg', 'ksh', 'lkt', 'lag', 'lo', 'lv', 'ln', 'lt', 'lu', 'luy', 'luo',
        'lb', 'jmc', 'mai', 'mgh', 'kde', 'mg', 'ms', 'ml', 'mt', 'gv', 'mr', 'mzn', 'mas', 'mk', 'mni', 'mer', 'mgo',
        'mn', 'mfe', 'mua', 'mi', 'naq', 'ne', 'nnh', 'jgo', 'yrl', 'nl', 'dsb', 'pcm', 'nd', 'se', 'no', 'nb', 'nn',
        'nus', 'nyn', 'lrc', 'hsb', 'or', 'om', 'os', 'ps', 'fa', 'pl', 'pt', 'pa', 'qu', 'raj', 'rof', 'cgg', 'ro',
        'rn', 'ru', 'rwk', 'rm', 'saq', 'sg', 'sbp', 'sa', 'sat', 'sc', 'sv', 'gsw', 'seh', 'sr', 'ksb', 'sn', 'sd',
        'si', 'sk', 'sl', 'xog', 'so', 'es', 'sw', 'su', 'tg', 'dav', 'zgh', 'ta', 'twq', 'shi', 'tt', 'te', 'teo',
        'th', 'bo', 'ti', 'to', 'cs', 'ce', 'cv', 'tk', 'tr', 'ug', 'uk', 'hu', 'ur', 'uz', 'vai', 'vi', 'vun', 'cy',
        'wae', 'fy', 'wo', 'xh', 'yav', 'ii', 'yo', 'dje', 'tzm', 'ckb', 'zu',
    ];

    public function languageTag(bool $allowSubtag = true): string
    {
        return Extension\Helper::randomElement($allowSubtag ? $this->tags : $this->languages);
    }
}
