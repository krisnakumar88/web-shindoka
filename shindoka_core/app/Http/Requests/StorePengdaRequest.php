<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePengdaRequest extends FormRequest
{
    public function attributes()
    {
        return [
            'nama_pengda' => 'Nama Pengda',
            'pic' => 'Person In Charger',
            'lokasi' => 'Alamat'
        ];
    }

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nama_pengda' => 'required|min:3|max:255',
            'lokasi' => 'required|min:3',
            'pic' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_pengda.required' => 'Nama Pengda Tidak Boleh Kosong',
            'lokasi.required' => 'Alamat Tidak Boleh Kosong',
            'pic.required' => '<i>Person In Charge</i> Tidak Boleh Kosong'
        ];
    }
}
