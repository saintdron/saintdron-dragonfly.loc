<?php

namespace App;

use App\Traits\DronTrait;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use DronTrait;

    protected $fillable = [
        'img', 'title', 'alias', 'text', 'customer', 'techs', 'created_at', 'updated_at', 'live_version'
    ];

    public function getCreatedAtAttribute($value)
    {
        return $this->formatCreatedAtDate($value / 1000);
    }

    public function getImgAttribute($value)
    {
        return json_decode($value);
    }
}
