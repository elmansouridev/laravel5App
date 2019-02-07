<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\stoRequest;

use Illuminate\Support\Facades\Input;

use App\Questionaire;

use App\Inscription;

use App\User;

use Auth;

class QuController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
            if(Auth::user()->is_admin){
                $insc=User::all();
                return view('new.contact',['insc'=>$insc]);
            }
    }


    public function store(stoRequest $request){
             
            $qs=new Questionaire();
            $qs->Question1=$request->Question1;
            $qs->Question2=$request->Question2;
            $qs->Question3=$request->Question3;
            $qs->inscription_id=$request->inscription_id;
            $qs->save();

            return redirect('inscriptions');
    }

    public function update($id){
            $ins=User::find($id);

            $ins->is_admin=1;
            $ins->save();
            return redirect('admin');
    }

    public function show($id){
        $qss=Questionaire::where('inscription_id',Inscription::find($id)->id)->get();
        return view('new.reponse',['qs'=>$qss]);
    }

    /*public function voir(){
            if(Auth::user()->is_admin){
                $insc=User::all();
            }
            return view('new.contact',['insc'=>$insc]);
    }*/
    public function voir(){

                $insc=User::all();

            return view('new.contact',['insc'=>$insc]);
    }
    
    public function make($id){
        $ins=User::find($id);
        return view('new.testshow',['ins'=>$ins]);
    }

    public function enlever($id){
        $ins=User::find($id);
        return view('new.testContact',['ins'=>$ins]);
    }

    public function lever($id){
        $ins=User::find($id);

            $ins->is_admin=0;
            $ins->save();
            return redirect('admin');
    }

    

    

}
