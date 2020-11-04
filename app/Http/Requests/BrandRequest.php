<?php

namespace App\Http\Requests;

class BrandRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'required|max:255',
                    'logo' => 'required',
                    'place' => 'required|max:255',
                    'introduce' => 'required|max:4000',
                    'category_id' => 'required',
                    'nationality' => 'required|max:255',
                    'major_products' => 'required|max:2000',
                    'major_models' => 'required|max:2000',
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [

                ];
            };
        }
    }

    public function messages()
    {
        return [
            'name.required' => '品牌名称不能为空！',
            'name.max' => '品牌名称字数超过限制！',

            'logo.required' => '品牌logo不能为空！',

            'place.required' => '品牌产地不能为空！',
            'place.max' => '品牌产地字数超过限制！',

            'introduce.required' => '品牌介绍不能为空！',
            'introduce.max' => '品牌介绍字数超过限制！',

            'category_id.required' => '分类不能为空！',

            'nationality.required' => '品牌所属国籍不能为空！',
            'nationality.max' => '品牌所属国籍字数超过限制！',

            'major_products.required' => '主要产品不能为空！',
            'major_products.max' => '主要产品字数超过限制！',

            'major_models.required' => '主要型号不能为空！',
            'major_models.max' => '主要型号字数超过限制！',
        ];
    }
}
