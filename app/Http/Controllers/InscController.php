<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inscription;

use App\User;

use App\Questionaire;

use Illuminate\Support\Facades\Input;

use App\Http\Requests\storeRequest;

use Auth;

use PDF;

class InscController extends Controller
{

    

    public function voice($id){
        $insc=Inscription::where('user_id',Inscription::find($id)->id)->get();
        $pdf = PDF::loadView('new.invoice',['insc'=>$insc]);
        return $pdf->download('insc.pdf');
    }

    public function image(){
        return view('new.image');
    }

    public function index(){
        
        //$insc=Inscription::where('user_id',Auth::user()->id)->get();
        if(Auth::user()->is_admin){
            $insc=Inscription::all();
            $qss=Questionaire::all();
            return view('new.index',['insc'=>$insc],['qs'=>$qss]);
        }else{
            $qss=Questionaire::all();
            $insc=Auth::user()->inscriptions;
            return view('new.index',['insc'=>$insc],['qs'=>$qss]);
        }

        


    }
/*
    public function datatable(){
            $insc=Inscription::all();
            return view('new.datatable',['insc'=>$insc]);
    }*/

    public function create(){
            return view('new.create');
    }
    public function store(storeRequest $request){
             
            $insc=new Inscription();

            //$insc->id=$request->id;
            $insc->napogee=$request->napogee;
            $insc->nom=$request->nom;
            $insc->prenom=$request->prenom;
            $insc->dateNais=$request->dateNais;
            $insc->lieuNais=$request->lieuNais;
            $insc->anneeBac=$request->anneeBac;
            $insc->moyenBac=$request->moyenBac;
            $insc->filiereLycee=$request->filiereLycee;
            $insc->fiiereInscFaq=$request->fiiereInscFaq;
            $insc->anneeInscFaq=$request->anneeInscFaq;
            $insc->modulesValides=$request->modulesValides;
            $insc->adresse=$request->adresse;
            $insc->travailParent=$request->travailParent;
            $insc->boursier=$request->boursier;
            $insc->nbrEnfantFamille=$request->nbrEnfantFamille;
            $insc->marrakechLe=$request->marrakechLe;
            $insc->user_id=auth::user()->id;

            $insc->save();

            return View('new.questionaire',['insc'=>$insc]);
    }
    public function edit($id){
            $ins=Inscription::find($id);

            $this->authorize('update', $ins); 

            return view('new.edit',['ins'=>$ins]);
            
    }
    public function update(storeRequest $request, $id){
            $ins=Inscription::find($id);

            $ins->napogee=$request->napogee;
            $ins->nom=$request->nom;
            $ins->prenom=$request->prenom;
            $ins->dateNais=$request->dateNais;
            $ins->lieuNais=$request->lieuNais;
            $ins->anneeBac=$request->anneeBac;
            $ins->moyenBac=$request->moyenBac;
            $ins->filiereLycee=$request->filiereLycee;
            $ins->fiiereInscFaq=$request->fiiereInscFaq;
            $ins->anneeInscFaq=$request->anneeInscFaq;
            $ins->modulesValides=$request->modulesValides;
            $ins->adresse=$request->adresse;
            $ins->travailParent=$request->travailParent;
            $ins->boursier=$request->boursier;
            $ins->nbrEnfantFamille=$request->nbrEnfantFamille;
            $ins->marrakechLe=$request->marrakechLe;
            $ins->save();
            return redirect('inscriptions');
    }

    public function show($id){
           // $insc=Inscription::find($id);
            $insc=Inscription::where('id',Inscription::find($id)->id)->get();
        return view('new.show',['insc'=>$insc]);
    }

    public function destroy(Request $request,$id){
            $ins=Inscription::find($id);
            $ins->delete();
            return redirect('inscriptions');
    }

    public function getInscriptions(){
            $insc = Inscription::all();
            return $insc;
    }


  }
