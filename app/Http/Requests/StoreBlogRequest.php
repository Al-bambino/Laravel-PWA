<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*
         * Ovde mozete vrsiti proveru da li vas user ima dozvolu
         * za kreiranje Bloga, i vrsiti bilo kakvu dodatnu proveru u zavisnosti od
         * biznis logike
         * (pr. mozda user mora da ima min 18 godina da bi submitovao blog)
         *
         * Posto nemam nikakvu logiku za to, samo vracam true
         */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /*
         * Ascoijativni niz:
         *      - kljuc je atribut iz forme
         *      - vrednost je niz Laravel pravila koje zelite za taj atribut
         * Ukoliko bilo koji rule padne, Laravel sam vraca korisnika na formu sa koje je dosao.
         * https://laravel.com/docs/5.8/validation#available-validation-rules
         */
        return [
            'title' => ['required', 'min:3'],
            'body' => ['required'],
            'points' => ['required', 'numeric','max:1000'],
        ];
    }
}
