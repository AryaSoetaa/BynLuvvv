<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KelaspraktikumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'nama_praktikum' => 'required|string',
			'dosen' => 'required|string',
			'asisten_praktikum' => 'required|string',
			'kepala_laboratorium' => 'required|string',
			'tanggal_dibuka' => 'required',
			'tanggal_ditutup' => 'required',
        ];
    }
}