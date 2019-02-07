<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'napogee'=>'required|numeric|digits:9',
            'nom'=>'required|alpha',
            'prenom'=>'required|alpha',
            'dateNais'=>'required',
            'lieuNais'=>'required|alpha',
            'anneeBac'=>'required|digits:4|integer|min:1900|max:'.(date('Y')),
            'moyenBac'=>'required|numeric|between:10,20',
            'filiereLycee'=>'required',
            'anneeInscFaq'=>'required|digits:4|integer|min:1900|max:'.(date('Y')),
            'modulesValides'=>'required|numeric',
            'adresse'=>'required',
            'travailParent'=>'required',
            'boursier'=>'required',
            'nbrEnfantFamille'=>'required',
            'marrakechLe'=>'required',

            
        ];
    }
}
