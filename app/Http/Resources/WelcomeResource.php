<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WelcomeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'title' => $this->title,
            'content' => $this->content,
            'person' => $this->person,
            'industry' => $this->industry,
            'img' => asset('images') . $this->img,
            'lang' => $this->lang,
        ];
    }
}
