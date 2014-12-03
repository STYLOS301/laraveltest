<?php namespace Stylos\Stshop;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class StshopController extends Controller {

        public function showList()
        {
           $this->layout = View::make('stshop::hello');
        }
    }
