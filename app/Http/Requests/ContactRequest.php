<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => [
                'min:4',
                'max:20'
            ],
            'email' => [
                'email',
                'max:30',
                'min:15'
            ],
            'companyname' => [
                'max:30',
                'min:4'
            ],
            'gender' => ['required'],
            'tel' => [
                function ($attribute, $value, $fail) {
                    $pattern = "/(0[8|7|9]0)+([0-9]{8})+$/";
                    if (!preg_match($pattern, $value)) {
                        return $fail("Đây không phải số điện thoại định dạng Nhật Bản, vui lòng điền lại");
                    }
                }

            ],
            'content' => [
                'max:200',
                'min:10',
                function ($attribute, $value, $fail) {
                    $badWord = ['lồn', 'buồi', 'dái', 'cứt'];
                    $value2 = preg_replace('/\s+/', '', $value);
                    $value4 = strtolower($value2);
                    foreach ($badWord as $bad) {
                        $findWord = strpos($value4, $bad);
                        if ($findWord !== false) {
                            return $fail("Địt mẹ mày ảo thật đấy, có từ bậy kìa!!");
                        }
                    }
                }
            ]

        ];
    }
    public function messages()
    {
        return [
            'min' => 'Nội dung nhập vào quá ngắn xin nhập nhiều thêm',
            'max' => 'Nội dung nhập vào quá dài xin nhập ngắn lại ',
            'email' => 'Email Nhập vào không đúng định dạng',
            'required'=>'Xin vui lòng chọn giới tính! '

        ];
    }
}
