<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDojoRequest extends FormRequest
{
    public function attributes()
    {
        return [
            'nama_dojo' => 'Nama Dojo',
            'pic' => 'Person In Charger',
            'lokasi' => 'Alamat',
            'id_pengcap' => 'Pengurus Cabang'
        ];
    }
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
            'nama_dojo' => 'required|min:3|max:255',
            'lokasi' => 'required|min:3',
            'pic' => 'required',
            'id_pengcap' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_dojo.required' => 'Nama Dojo Tidak Boleh Kosong',
            'lokasi.required' => 'Alamat Tidak Boleh Kosong',
            'pic.required' => 'Person In Charge Tidak Boleh Kosong',
            'id_pengcap.required' => 'Pengurus Cabang Harus Diisi'
        ];
    }
}
