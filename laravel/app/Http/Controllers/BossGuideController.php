<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BossGuideController extends Controller
{
    public function corporeal_beast()
    {
    	return view('bossGuide/corporeal_beast');
    }

    public function kalphite_king()
    {
    	return view('bossGuide/kalphite_king');
    }
}
