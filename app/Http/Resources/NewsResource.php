<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\News;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' =>$this->id,
            'name' =>$this->name,
            'summary'=>$this->summary,
            'content'=>$this->content,
            'id_loaitin'=>$this->id_loaitin,
            'id_user'=>$this->id_user,
            'status'=>$this->status,
            'url_images'=>$this->url_images
        ];
        // $loaitin = NewsResource::collection($this->id_loaitin);
        // if(!loaitin->isEmpty()){
        //     $result['id_loaitin'] = $loaitin;
        // }
        // return $result;
    }
}
