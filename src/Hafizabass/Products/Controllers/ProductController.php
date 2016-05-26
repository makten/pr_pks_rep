<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 25-May-16
 * Time: 16:28
 */

namespace Hafizabass\Products\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ProductController extends Controller
{

    public function index($timezone = null)
    {
        $current_time = ($timezone) ?
            Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('products::timezone', compact('current_time'));
    }

}