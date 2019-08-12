<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:50',
            'factory' => 'required|max:50',
            'type' => 'required|max:50',
            'effects' => 'max:50',
            'ral_color' => 'required|integer|between:1000,9999',
            'price_purchase' => 'required',
            'price_final' => 'required_without:margin',
            'margin' => 'required_without:price_final',
            'package_name' => 'required|max:50',
            'weight' => 'required|between:1,100000',
            'min_order' => 'between:0,100000',
            'delivery_time' => 'required|between:1,365',
            'discount' => 'between:0,100',
            'stock' => 'max:50'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле название краски обязательно для заполнения',
            'name.max' => 'Поле название краски не может быть длиннее 50 символов',
            'factory.required' => 'Поле производитель краски обязательно для заполнения',
            'factory.max' => 'Поле производитель краски не может быть длиннее 50 символов',
            'type.required' => 'Какой тип краски выберите один из вариантов',
            'type.max' => 'Поле тип краски не может быть длиннее 50 символов',
            'effects.max' => 'Поле эффект краски не может быть длиннее 50 символов',
            'ral_color.required' => 'Поле цвета обязательно для заполениняinteger',
            'ral_color.integer.between' => 'Поле цвета обозначается целым числом в диапазоне от 1000 до 9999',
            'price_purchase.required' => 'Поле закупочной цены обязательно для заполнения',
            'price_final.required_without' => 'Поле финальной цены или надбавки обязательно для заполнения',
            'margin.required_without' => 'Поле финальной цены или надбавки обязательно для заполнения',
            'package_name.required' => 'Выберите тип упаковки required|max:50',
            'package_name.max' => 'Поле тип упаковки не может быть длиннее 50 символов',
            'weight.required' => 'Поле веса упковки обязательно для заполнения',
            'weight.between' => 'Поле веса упковки от 1 до 100 000 кг',
            'min_order.required.between' => 'Поле минимального заказа обязательно для заполнения и должно быть от 0 до 100 000',
            'delivery_time.required.between' => 'Поле времени доставки обязательно для заполнения в диапазоне от 1 дня до 365',
            'discount.between' => 'Поле скидки не может быть меньше 0 и больше 100',
            'stock.max' => 'Поле название скидки должно содержать только название до 50 символов'

        ];
    }
}
