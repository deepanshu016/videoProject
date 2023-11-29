<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    use HasFactory;
    protected $table = 'tbl_cms_pages';

	protected $fillable = ['contact_us_content','about_us_content','privacy_policy_content','privacy_policy_content'];


	
}
