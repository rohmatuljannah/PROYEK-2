<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AktivitasRequest extends FormRequest
{
   
    public function authorize()
    {
        return false;
    }

   
    public function rules()
    {
        return [
            'nama_aktivitas'		=> 'required|string',
            'tanggal'				=> 'required|date'
            'waktu'					=> 'required|string',
            'tempat'				=> 'required|string',
            'deskripsi'				=> 'required',
            'gambar'				=> 'required|nullable|image|mimes:jpeg, jpg, png|max:500|dimensions:width=150, height:180',
            'status'				=> 'required',
        ];
    }
}
?>