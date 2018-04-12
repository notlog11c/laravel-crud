<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorFormRequest extends FormRequest
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
            'nama' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
            'jenis_kelamin' => 'required', 
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => ' Nama Tidak Boleh Kosong!', 
            'umur.required' => ' Umur Tidak Boleh Kosong!',
            'integer' => 'Umur Harus Diisi dengan Angka!',
            'alamat.required' => ' Alamat Tidak Boleh Kosong!',
            'jenis_kelamin.required' => ' Jenis Kelamin Tidak Boleh Kosong!'
        ];
    }
}
