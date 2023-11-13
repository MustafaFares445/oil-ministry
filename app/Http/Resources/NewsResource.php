<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'img' => asset('/images')  . $this->img,
            'title' => $this->title,
            'content' => $this->content,
            'lang' => $this->lang,
        ];
    }
}
