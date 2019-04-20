<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
<<<<<<< HEAD
=======
        // verify the data sent in the form
>>>>>>> 37909b7ae22790cd1a81f376ddd83f9fc2ed03b3
        return [
            'contact_name' => 'bail|required|between:1,20|alpha',
            'contact_email' => 'bail|required|email',
            'contact_message' => 'bail|required|max:250'
        ];
    }
<<<<<<< HEAD
=======


    // cutom error messages for the contactForm
    public function messages()
    {
        return [
            'contact_name.required' => 'Vous devez saisir votre nom ',
            'contact_email.required' => 'Vous devez saisir une adresse email!',
        ];
    }
>>>>>>> 37909b7ae22790cd1a81f376ddd83f9fc2ed03b3
}
