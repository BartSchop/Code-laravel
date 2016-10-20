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
		return view('/bossGuide/index');
	}

    public function getSingle($name, $id)
    {
    	$boss_info = boss_info::findOrFail($id);
    	$boss_reqs = boss_reqs::findOrFail($id);
    	return view("/bossGuide/$name", compact('boss_info', 'boss_reqs'));
    }
}
