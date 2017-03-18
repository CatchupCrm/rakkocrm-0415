<?php

namespace App\Modules\Menus\Http\Controllers;

use App\Http\Controllers\Controller;

// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

use Theme;
//extends Controller

class MenuController
{


// 	use DispatchesJobs, ValidatesRequests;

    /**
     * Initializer.
     *
     * @return \MenusController
     */
    public function __construct()
    {
        //dd("die");
    }


    public function getAfterFilters() {return [];}
    public function getBeforeFilters() {return [];}
    public function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }



    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function welcome()
    {
        return Theme::View('modules.menus.welcome.menus');
    }


}
