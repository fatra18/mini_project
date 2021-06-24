<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|string|',
            'content' => 'required|string|min:8|max:10050',
            'image' =>'required',
            'user_id' =>'required',
            'category_id' =>'required',
        ];
    }
        public function messages()
        {
            return[
                'title.required'        => 'judul wajib diisi',
                'title.string'          => 'judul harus diisi dengan dengan text',
                'title.min'             => 'judul minimal 8 karakter',
                'title.max'             => 'judul minimal 250 karakter',
                'title.required'        => 'judul wajib diisi',
                'content.required'      => 'content wajib diisi',
                'image.required'   => 'gambar wajib diisi',
                'user_id.required'      => 'penulisan wajib diisi',
                'category_id.required'  => ' category wajib diisi',
            ];   
        }
    }

