<?php
namespace App\Http\Traits;

trait UrlTrait {
    public static function url_dynamic() {
        return request()->getClientIp() == '127.0.0.1' || request()->getClientIp() == 'localhost' ? 'http://localhost:3014/api/' : 'http://api-insaf.disnavpriok.id:3000/api/';
    }
}