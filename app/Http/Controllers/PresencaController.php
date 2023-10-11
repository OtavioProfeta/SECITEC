<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\PresencaTrait;
use App\Traits\AdminTrait;
use Illuminate\Support\Facades\DB;

class PresencaController extends Controller
{
    use PresencaTrait, AdminTrait;
    public $tipo; 
    public function __construct() {
        $this->tipo = $_COOKIE['ADM_TIPO'];
        if($this->tipo == 1){
            abort(450);
        }
    }
}
