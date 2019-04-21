<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name'=>$this->name,
            'short_name'=>$this->short_name,
            'code'=>$this->code,
            'sku'=>$this->sku,
            'description'=>$this->description,
            'company_name'=>$this->company->name,
            'category_name'=>$this->product_category->name,
            'brand_name'=>$this->product_brand->name,
            'group_name'=>$this->product_group->name,
            'unit_of_measurement_name'=>$this->unit_of_measurement->name,
            'unit_of_measurement_short_name'=>$this->unit_of_measurement->short_name,
            'alert_quantity'=>$this->alert_quantity,
            'selling_price'=>$this->selling_price,
            'discount'=>$this->discount,
            'creator_user_name'=>$this->creator_user->name,
            'updator_user_name'=>$this->updator_user?$this->updator_user->name:null,
            'href'=>[
                'product'=>route('products.show',$this),
            ],
        ];
    }
}
