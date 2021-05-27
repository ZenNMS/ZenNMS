<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RackFormRequest extends FormRequest
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
            'name' => 'required|string',
            'asset_tag' => 'string|nullable',
            'serial_number' => 'string|nullable',
            'facility_id' => 'integer|nullable',
            'group_id' => 'integer|nullable',
            'role_id' => 'integer|nullable',
            'type_id' => 'required|integer',
            'status_id' => 'integer|nullable',
            'u_height' => 'integer',
            'order' => 'string|max:1',
            'inner_depth' => 'integer|nullable',
            'inner_width' => 'integer|nullable',
            'outer_depth' => 'integer|nullable',
            'outer_Height' => 'integer|nullable',
            'outer_width' => 'integer|nullable',
            'notes' => 'string|nullable|max:255',
            'tags' => 'string|nullable',
        ];
    }
}
