<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'imageable_id',
        'imageable_type',
        'url',
    ];

    protected $keyType = 'string';

    public function imageable()
    {
        return $this->morphTo();
    }
}
