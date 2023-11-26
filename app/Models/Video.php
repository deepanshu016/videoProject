<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Video extends Model
{
	protected $table = 'tbl_videos';

	protected $fillable = ['category_id','video_type','video_title','time_for_live','video_futured_image','add_tags','trending_topic','video_description','video_embeded_code'];

	protected $guarded = ['upload_video','time_for_live','add_tags','video_embeded_code'];



	public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getVideoFuturedImageAttribute($value){
    	$value = asset('public').'/'.$value;
    	return $value;
    }	
}
