<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdvertisementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'name'=>$this->name,
            'content'=>$this->content,
            'location'=>$this->location,
            'id_loaitin'=>$this->id_loaitin,
            'url_hinh'=>$this->url_hinh,
            'status'=>$this->status,
        ];
    }
}
