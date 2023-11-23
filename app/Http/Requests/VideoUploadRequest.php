<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoUploadRequest extends FormRequest
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
           'category' => 'required',
           'video_type' => 'required',
           'video_title' => 'required',
           'video_tags' => 'required',
           'trending_topics' => 'required',
           'video_description' => 'required',
           'video_image' => 'required|file|mimes:jpg,png,jpeg',
           'video' => 'required_if:video_type,1|file|mimes:mp4,mov,avi,wmv',
           'video_url' => 'required_if:video_type,2'
        ];
    }


    public function messages()
    {
        return [
           'video.required_if' => 'File is required if file type is upload video',
           'video_url.required_if' =>  'URL is required if file type is upload video',
        ];
    }

}
