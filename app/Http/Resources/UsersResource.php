<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
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
            'email'=>$this->email,
            'is_admin'=>$this->is_admin,
            'date_of_birth'=>$this->date_of_birth,
            'url_images'=>$this->url_images,
            'password'=>$this->password,
        ];
    }
}
