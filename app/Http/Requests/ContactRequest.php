<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "fullname" => 'required|min:5|max:50',
            "email" => 'required|email',
            "email_subject" => 'required',
            "mobile" => 'required',
            "message" => 'required'
        ];
    }

    public function  messages() {
        return [
            "fullname.required" => 'Поле "Полное имя" является обязательным',
            "email.required" => 'Поле "Адрес электронной почты" является обязательным',
            "email_subject.required" => 'Поле "Тема письма" является обязательным',
            "mobile.required" => 'Поле "Мобильный телефон" является обязательным',
            "message.required" => 'Поле "Сообщения" является обязательным'
        ];
    }
}
