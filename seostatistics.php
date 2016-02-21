<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SEOstatistics {

    private $seostats;

    function __construct() {
        require_once( APPPATH . 'third_party/seostats/bootstrap.php' );

        $this->seostats = new \SEOstats\SEOstats;
    }

    private function alexa() {
        return new \SEOstats\Services\Alexa;
    }

    private function google() {
        return new \SEOstats\Services\Google;
    }

    private function moz() {
        return new \SEOstats\Services\Mozscape();
    }

    private function openSiteExplorer() {
        return new \SEOstats\Services\OpenSiteExplorer();
    }

    private function semRush() {
        return new \SEOstats\Services\SemRush();
    }

    private function sistrix() {
        return new \SEOstats\Services\Sistrix();
    }

    private function social() {
        return new \SEOstats\Services\Social();
    }

    public function __call($method, $url) {
        if (method_exists($this, $method)) {
            if ($this->seostats->setUrl($url[0])) {
                return call_user_func_array(array($this, $method),array());
            }

            return false;
        }
    }

}
