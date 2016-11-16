<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\boss_info;
use App\boss_reqs;

class BossGuideController extends Controller
{
	public function index()
	{
		$boss_names = boss_info::all();
		return view('/bossGuide/index', compact('boss_names', 'user'));
	}

    public function getSingle($name, $id)
    {
    	$boss_info = boss_info::findOrFail($id);
    	$boss_reqs = boss_reqs::findOrFail($id);
    	return view("/bossGuide/$name", compact('boss_info', 'boss_reqs'));
    }

    public function terms()
    {
        return view('terms');
    }
}
