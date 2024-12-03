<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'email',
        'website',
        'customer_care_no',
        'address',
        'google_play_link',
        'apple_app_store_link',
        'facebook_link',
        'twitter_link',
        'instragram_link',
        'youtube_link'
    ];
}
