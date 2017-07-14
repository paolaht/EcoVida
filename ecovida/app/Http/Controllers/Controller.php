<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Controllers\Controller\Auth;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;



}
