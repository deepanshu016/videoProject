<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'video_id' => $this->video_id,
            'category_id' => $this->category_id,
            'video_type' => $this->video_type,
            'slug' => $this->slug,
            'upload_video' => $this->upload_video,
            'time_for_live' => $this->time_for_live,
            'video_futured_image' => $this->video_futured_image,
            'add_tags' => $this->add_tags,
            'trending_topic' => $this->trending_topic,
            'video_embeded_code' => $this->video_embeded_code,
            'video_description' => $this->video_description
        ];
    }
}
