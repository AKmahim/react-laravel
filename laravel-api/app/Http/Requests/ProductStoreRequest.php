<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if(request()->isMethod('post')) {
            return [
                //
                'name' => 'required|string|max:258',
                'image'=> 'required|image|mimes:jpeg,png,jpg,webp|2048',
                'description'=>'required|string'
            ];
        }
        else{
            return [
                //
                'name' => 'required|string|max:258',
                'image'=> 'nullable|image|mimes:jpeg,png,jpg,webp|2048',
                'description'=>'required|string',
            ];
        }
    }

    public function messages(){
        if(request()->isMethod('post')){
            return [
                //
                'name.required' => 'Name is required',
                'image'=> 'Image is required!',
                'description'=>'description is required'
            ];
        }
        else{
            return [
                //
                'name.required' => 'Name is required',
                'description'=>'description is required'
            ];
        }
    }
}
