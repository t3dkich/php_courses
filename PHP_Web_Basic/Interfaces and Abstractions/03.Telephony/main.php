<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 22:55
 */

interface BrowsingWeb
{
    public function browseWeb(string $sites);
}

interface CallPhones
{
    public function call(string $numbers);
}

class Smartphone implements CallPhones,BrowsingWeb
{

    /**
     * @param string $sites
     */
    public function browseWeb(string $sites)
    {
        $sites = explode(' ', $sites);
        foreach ($sites as $site) {
            if (preg_match_all('/[0-9]/', $site)) {
                echo 'Invalid URL!'.PHP_EOL;
            } else {
                echo 'Browsing: '.$site.'!'.PHP_EOL;
            }
        }
    }

    /**
     *
     * @param string $numbers
     */
    public function call(string $numbers)
    {
        $numbers = explode(' ', $numbers);
        foreach ($numbers as $number) {
            if (!ctype_digit($number)) {
                echo 'Invalid number!'.PHP_EOL;
            } else {
                echo 'Calling... '.$number.PHP_EOL;
            }
        }
    }
}

$smartPhone = new Smartphone();
$numbers = readline();
$sites = readline();
$smartPhone->call($numbers);
$smartPhone->browseWeb($sites);

