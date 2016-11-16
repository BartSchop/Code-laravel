<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\player_data;
use App\User;
use Illuminate\Support\Facades\Auth;

class RunescapeAPIController extends Controller
{
    public function HiScores()
    {
    	$input = request::all();

		$skills = array('Skill', 'Total', 'Attack', 'Defence', 'Strenght', 'Constitution', 'Ranged', 'Prayer', 'Magic', 'Cooking', 'Woodcutting', 'Fletching', 'Fishing', 'Firemaking', 'Crafting', 'Smithing', 'Mining', 'Herblore', 'Agility', 'Thieving', 'Slayer', 'Farming', 'Runecrafting', 'Hunter', 'Construction', 'Summoning', 'Dungeoneering', 'Divination', 'Invention');
		$rank = array('Rank');
		$level = array('Level');
		$xp = array('Experience');

		if ($input) {
			$data = file_get_contents("http://services.runescape.com/m=hiscore/index_lite.ws?player=$input[username]");

	    	$data1 = preg_split('/[\s]+/', $data);

			for ($pop=0; $pop<25 ; $pop++) { 
	    		array_pop($data1);
	    	}

	    	foreach ($data1 as $data2) {
	    		$data3 = preg_split('/[\s,]+/', $data2);
	    		array_push($rank, $data3[0]);
	    		array_push($level, $data3[1]);
	    		array_push($xp, $data3[2]);
	    	}
	    }

	    return view("rsAPI/HiScores", compact('skills', 'rank', 'level', 'xp'));
    }

    public function player_tracker_index($action)
    {
    	$user = Auth::user();

    	if ($user) {
    		$player_data = player_data::where('user_id', $user->id)->count();
    		if ($player_data == 1) {
    			$tracking = true;
    		} else {
    			$tracking = false;
    		}
    	} else {
    		return redirect('/login');
    	}

    	$skills = array('Skill', 'Total', 'Attack', 'Defence', 'Strenght', 'Constitution', 'Ranged', 'Prayer', 'Magic', 'Cooking', 'Woodcutting', 'Fletching', 'Fishing', 'Firemaking', 'Crafting', 'Smithing', 'Mining', 'Herblore', 'Agility', 'Thieving', 'Slayer', 'Farming', 'Runecrafting', 'Hunter', 'Construction', 'Summoning', 'Dungeoneering', 'Divination', 'Invention');
		$rank = array('Rank');
		$level = array('Level');
		$xp = array('Experience');
		$changes = array('Change');

		if ($action == 'start') {
			$input = request::all();
			return $this->start_player_tracker($skills, $rank, $level, $xp, $changes, $user, $input);
		} elseif ($action == 'update') {
			return $this->update_player_tracker($skills, $rank, $level, $xp, $changes, $user);
		} elseif ($action == 'reset') {
			return $this->reset_player_tracker($user);
		} elseif ($action == 'index') {
    		return view("rsAPI/player_tracker", compact('skills', 'rank', 'level', 'xp', 'changes', 'tracking'));
    	}
    }

    public function start_player_tracker($skills, $rank, $level, $xp, $changes, $user, $input)
    {
		if ($input) {
			$data = file_get_contents("http://services.runescape.com/m=hiscore/index_lite.ws?player=$input[username]");

	    	$data1 = preg_split('/[\s]+/', $data);

	    	for ($pop=0; $pop<25 ; $pop++) { 
	    		array_pop($data1);
	    	}

	    	foreach ($data1 as $data2) {
	    		$data3 = preg_split('/[\s,]+/', $data2);
	    		array_push($rank, $data3[0]);
	    		array_push($level, $data3[1]);
	    		array_push($xp, $data3[2]);
	    	}

	    }

    	player_data::create([
            'user_id' => $user->id,
            'xp' => implode(" ", $xp),
            'status' => 1,
            'username' => $input['username'],
        ]);

	    $tracking = true;

	    return view("rsAPI/player_tracker", compact('skills', 'rank', 'level', 'xp', 'changes', 'tracking'));
    }

    public function update_player_tracker($skills, $rank, $level, $xp, $changes, $user)
    {
    	$input = player_data::where('user_id', $user->id)->pluck('username');
    	$input1 = str_replace('"', "", $input);
    	$input2 = str_replace('[', "", $input1);
    	$input3 = str_replace(']', "", $input2);

		$getinfo = file_get_contents("http://services.runescape.com/m=hiscore/index_lite.ws?player=$input3");

	    	$getinfo1 = preg_split('/[\s]+/', $getinfo);

	    	for ($pop=0; $pop<25 ; $pop++) { 
	    		array_pop($getinfo1);
	    	}

	    	foreach ($getinfo1 as $getinfo2) {
	    		$getinfo3 = preg_split('/[\s,]+/', $getinfo2);
	    		array_push($rank, $getinfo3[0]);
	    		array_push($level, $getinfo3[1]);
	    		array_push($xp, $getinfo3[2]);
	    	}

		$player_data = player_data::where('user_id', $user->id)->pluck('xp');
    	$data = preg_split('/[\s]+/', $player_data);
    	$data1 = str_replace('"', "", $data);
    	$data2 = str_replace('[', "", $data1);
    	$old_xp = str_replace(']', "", $data2);

		for ($total=1; $total<29 ; $total++) { 
			$change = $xp[$total] - $old_xp[$total];
			array_push($changes, "+($change)");
		}
		$tracking = true;

		return view("rsAPI/player_tracker", compact('skills', 'rank', 'level', 'xp', 'changes', 'tracking'));
    }

    public function reset_player_tracker($user)
    {
    	player_data::where('user_id', $user->id)->delete();

    	return redirect('/player_tracker/index');
    }
}
