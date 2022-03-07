<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
        'slug' => 'required|max:255',
        'nama_siswa' => 'required|max:255',
        'nta' => 'required|integer',
        'kelas' => 'required|max:255',
        'tempat_lahir' => 'required|max:255',
        'tanggal_lahir' => 'required|date',
        'jenis_kelamin' => 'required|max:255',
        'agama' => 'required|max:255',
        'alamat' => 'required',
        'tlp' => 'required|max:255',
        'golongan' => 'required|max:255',
        'jabatan' => 'required|max:255',
        'pangkalan ' => 'required|max:255'
        ];
    }
}
