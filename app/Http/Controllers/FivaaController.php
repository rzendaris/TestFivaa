<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FivaaController extends Controller
{
    public function submit(Request $request){
		$input = (int)$request->fiva;
		$group_fisrt_digit = $input - 1;
		$group_second_digit = $input + 1;
		
		$result = array();
		
		for($x = 1; $x <= $input; $x++) {
			if($x != 0){
				$first_digit = str_repeat($group_fisrt_digit, 2);
				$second_digit = str_repeat($group_second_digit, (($input - $x) + 1));
				
				$add = $first_digit.$second_digit;
				array_push($result, $add);
				
				$group_fisrt_digit -= 1;
				$group_second_digit -= 1;
				
			}
		}
		
		return view('result', compact('result'));
	}
}
