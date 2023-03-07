<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePengcapRequest extends FormRequest
{

    public function attributes()
    {
        return [
            'nama_pengcap' => 'Nama Pengcab',
            'pic' => 'Person In Charger',
            'lokasi' => 'Alamat',
            'id_pengda' => 'Pengurus Daerah'
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
            'nama_pengcap' => 'required|min:3|max:255',
            'lokasi' => 'required|min:3',
            'pic' => 'required',
            'id_pengda' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_pengcap.required' => 'Nama Pengcap Tidak Boleh Kosong',
            'lokasi.required' => 'Alamat Tidak Boleh Kosong',
            'pic.required' => 'Person In Charge Tidak Boleh Kosong',
            'id_pengda.required' => 'Pengurus Daerah Harus Diisi'
        ];
    }
}
