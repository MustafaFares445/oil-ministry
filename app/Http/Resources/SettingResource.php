<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'header_image' =>  asset('/images') . $this->header_image ,
            'header_big' =>  $this->header_big,
            'header_small'=> $this->header_small,
            'about' => $this->about,
            'lang' => $this->lang,
        ];
    }
}
