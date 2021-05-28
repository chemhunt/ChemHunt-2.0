<?php

namespace App\Http\Controllers\Chemhunt;

use App\Http\Controllers\Controller;
use App\Models\Riddle;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function show(){
        if(config('chemhunt.exam_status')===true){
            $user = Auth::user();
            $day = config('chemhunt.day');
            if($user->task->{'hunt_day_'.$day}==='Done'){
                return view('user.exam.success');
            }
            $i=1;
            do{
                if($user->task->{'day_'.$i}==='Done'&&$i==$day) {
                    $riddles = Riddle::query()->where('day',$day)->orderBy('sr_no')->get();
                    return view('user.exam.index',compact('riddles'));
                }
                elseif($user->task->{'day_'.$i}==='Pending' || $user->task->{'hunt_day_'.$i}==='Pending' ){
                    $eliminated_day = $i;
                    return view('user.exam.eliminated',compact('eliminated_day'));
                }
                $i++;
            }while($i<=$day);
        }
        return redirect('/dashboard');

    }

    public function store(Request $request){
        $user = Auth::user();
        $user->answer()->update([
            'day_'.config('chemhunt.day').'_q_1'=>$request->{'day_'.config('chemhunt.day').'_q_1'},
            'day_'.config('chemhunt.day').'_q_2'=>$request->{'day_'.config('chemhunt.day').'_q_2'},
            'day_'.config('chemhunt.day').'_q_3'=>$request->{'day_'.config('chemhunt.day').'_q_3'},
            'day_'.config('chemhunt.day').'_q_4'=>$request->{'day_'.config('chemhunt.day').'_q_4'},
        ]);
        $user->task()->update(['hunt_day_'.config('chemhunt.day')=>'Done']);
        return redirect('/hunt');
    }

}
