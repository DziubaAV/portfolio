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
             'fullname' => ['required', 'string', 'min:5', 'max:50', 'regex:/^[A-Za-zА-Яа-яЁё]+$/u'],
             'email' => ['required', 'email', 'max:255'],
             'email_subject' => ['required', 'string', 'max:255'],
            //  'mobile' => ['required', 'string', 'min:10', 'max:20', 'regex:/^[0-9()+\s]+$/'],
             'message' => ['required', 'min:20', 'string', 'max:500']
         ];
     }

     public function messages()
     {
         return [
             "fullname.required" => 'Поле "Полное имя" является обязательным',
             "fullname.min" => 'Поле "Полное имя" должно содержать не менее :min символов',
             "fullname.max" => 'Поле "Полное имя" должно содержать не более :max символов',
             "fullname.regex" => 'Поле "Полное имя" может содержать только буквы и пробелы',
             "email.required" => 'Поле "Адрес электронной почты" является обязательным',
             "email.email" => 'Поле "Адрес электронной почты" должно быть действительным адресом электронной почты',
             "email.max" => 'Поле "Адрес электронной почты" должно содержать не более :max символов',
             "email_subject.required" => 'Поле "Тема письма" является обязательным',
             "email_subject.max" => 'Поле "Тема письма" должно содержать не более :max символов',
            //  "mobile.required" => 'Поле "Мобильный телефон" является обязательным',
            //  "mobile.min" => 'Поле "Мобильный телефон" должно содержать не менее :min символов',
            //  "mobile.max" => 'Поле "Мобильный телефон" должно содержать не более :max символов',
            //  "mobile.regex" => 'Поле "Мобильный телефон" должно содержать только цифры, символы "+" и пробелы',
             "message.required" => 'Поле "Сообщение" является обязательным',
             "message.min" => 'Поле "Сообщение" должно содержать не менее :min символов',
             "message.max" => 'Поле "Сообщение" должно содержать не более :max символов',
         ];
     }
}
