<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $table = 'news';
    protected $primaryKey = 'newsId';
    protected $guarded = [];

    public function getPublishAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function author()
    {
        return $this->hasOne(User::class, 'userId', 'userId');
    }
}
