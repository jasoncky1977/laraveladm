<?php

namespace App\Http\Requests;

use App\Models\CrmStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCrmStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crm_status_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
}