<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 22:47
 */

class Smartphone implements CallPhones,BrowsingWeb
{

    /**
     * @param string $sites
     */
    public function browseWeb(string $sites)
    {
        $sites = array_filter(explode(' ', $sites));
        foreach ($sites as $site) {
            if (preg_match_all('/[0-9]/', $site)) {
                echo 'Invalid URL!'.PHP_EOL;
            } else {
                echo 'Browsing... '.$site.PHP_EOL;
            }
        }
    }

    /**
     * @param string $numbers
     */
    public function call(string $numbers)
    {
        $numbers = array_filter(explode(' ', $numbers));
        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                echo 'Invalid number!'.PHP_EOL;
            } else {
                echo 'Calling... '.$number.PHP_EOL;
            }
        }
    }
}