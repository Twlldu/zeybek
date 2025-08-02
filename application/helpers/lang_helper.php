<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Dil yönetimi için helper fonksiyonları
 */

/**
 * URL’den prefix olarak gelen ‘turkish’ veya ‘english’ segment’ini
 * tespit eder, ilgili language dosyasını yükler ve
 * o dili ‘current_language’ config öğesi olarak set eder.
 *
 * @return string Bulunan veya default dil kodu
 */
if ( ! function_exists('init_language') )
{
    function init_language(): string
    {
        $CI =& get_instance();

        // Config’ten desteklenen diller ve varsayılan dil
        $langs       = (array) $CI->config->item('supported_languages');
        $defaultLang = $CI->config->item('default_language');

        // RAW path’i al
        $rawPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $parts   = explode('/', trim($rawPath, '/'));
        $first   = $parts[0] ?? '';

        // Eğer geçerli bir dil koduysa onu, değilse default’u kullan
        $lang_code = in_array($first, $langs, true)
                   ? $first
                   : $defaultLang;

        // Language dosyasını yükle
        $CI->lang->load('messages', $lang_code);

        // Current language olarak config’e set et
        $CI->config->set_item('current_language', $lang_code);

        return $lang_code;
    }
}

/**
 * Dil anahtarına karşılık gelen metni getirir.
 *
 * @param string $key Language dosyasındaki anahtar
 * @return string
 */
if ( ! function_exists('__') )
{
    function __(string $key): string
    {
        $CI =& get_instance();
        return (string) $CI->lang->line($key);
    }
}

/**
 * Mevcut sayfanın URL segment’lerini baz alarak,
 * hedef dil prefix’li URL’i üretir.
 *
 * @param string      $targetLang Geçilecek dil kodu
 * @param string|null $uri        Opsiyonel: üzerine eklemek istediğin path
 * @return string
 */
if ( ! function_exists('switch_lang_url') )
{
    function switch_lang_url(string $targetLang, string $uri = null): string
    {
        $CI =& get_instance();

        // Desteklenen diller
        $langs = (array) $CI->config->item('supported_languages');

        // RAW path’i al
        $rawPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $parts   = explode('/', trim($rawPath, '/'));

        // Eğer ilk segment dil koduysa çıkar
        if (in_array($parts[0] ?? '', $langs, true)) {
            array_shift($parts);
        }

        // Eğer fonksiyona ikinci parametre olarak path verdiyse onu kullan
        if ($uri !== null) {
            $parts = explode('/', trim($uri, '/'));
        }

        $cleanPath = implode('/', $parts);

        return site_url($targetLang . ($cleanPath ? "/{$cleanPath}" : ''));
    }
}

/**
 * Aktif dil kodunu döner.
 *
 * @return string
 */
if ( ! function_exists('current_lang') )
{
    function current_lang(): string
    {
        $CI =& get_instance();
        return (string) $CI->config->item('current_language')
               ?: (string) $CI->config->item('default_language');
    }
}

/**
 * Mevcut dilde yeni bir URL üretmek için (alias).
 * Örneğin: lang_url('about') → /turkish/about veya /english/about
 *
 * @param string $uri
 * @return string
 */
if ( ! function_exists('lang_url') )
{
    function lang_url(string $uri = ''): string
    {
        return switch_lang_url(current_lang(), $uri);
    }
}
