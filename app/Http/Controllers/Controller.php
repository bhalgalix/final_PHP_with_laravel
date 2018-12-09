<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create()
    {
    	return view('question');
    }

    public function store()
    {
    	$data = request()->all();

    	$num1 = $data['1'];
    	$num2 = $data['2'];
    	$num3 = $data['3'];
    	$guild = '';
    	$num4 = $num1 + $num2 + $num3;

    	if($num4<10) {
    		$guild = 'Izzet';
    	}
    	elseif ($num4>20 & $num4<100) {
			$guild = 'Selesnya';    	
		}
    	elseif ($num4>10 & $num4<100) {
    		if($num4<20) {
    			$guild = 'Izzet';
    		}
    		else {
    			$guild = 'Selesnya';
    		}
    	}
    	elseif ($num4>200) {
    	 	$guild = 'Boros';
    	 }
    	 elseif ($num4=111) {
			$guild = 'You have no guild';
		}

    	


    	DB::table('answers2')->insert([
        	'answers' =>  $num4,
        	'guild' => $guild
        ]);

    	return redirect('results');
    }
}
