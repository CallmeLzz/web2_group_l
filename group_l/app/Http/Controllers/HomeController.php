<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menus;
use App\Banners;

class HomeController extends Controller
{
    public function __construct(){
    	$this->data = array();
    }
    public function index(){
    	//$data = Menu::where('menu_id', 'M01')->get();

    	//$user_ip = getenv('REMOTE_ADDR');

        /*if (pingAddress("http://www.geoplugin.net/php.gp") == 1) {
            $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp"));//?ip=$user_ip"));
            $country = $geo["geoplugin_countryName"];
            $city = $geo["geoplugin_city"];
        }
        else {*/
            $country = 'Vietnam';
            $city = 'Da Lat city';

        $currDay = date('l');
        $nextDay = date('l',strtotime("tomorrow"));
        /*if ($this->pingAddress('http://www.geoplugin.net/php.gp') == 1) echo "Alive";
        else echo "Dead";*/

        $banner = new Banners();
        $result = $banner->getData();
    	return view('front.home.index')->with([
            'country' => $country,
            'city' => $city,
            'currentDay' => $currDay,
            'nextDay' => $nextDay,
            'banner' => $result
            ]);
    }

    public function pingAddress($ip) {
        $pingresult = exec("ping  -n 3 $ip", $outcome, $status);
        if (0 == $status) {
            return 1;
            //$status = "alive => ( ".print_r($outcome)." )";
        } else {
            return 0;
            //$status = "dead";
        }
        //echo "The IP address, $ip, is  ".$status;
    }
}
