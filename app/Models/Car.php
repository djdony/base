<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'cars';

    protected $keyType = 'string';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'car_type_id',
        'max_pax',
        'max_luggage',
        'description',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'car_type_id' => 'integer',
        'max_pax' => 'integer',
        'max_luggage' => 'integer',
        'description' => 'string'
    ];


    public function carType()
    {
        return $this->belongsTo('App\Models\CarType');
    }

    public function images()
    {
        return $this->morphMany('App\Models\Image','imageable');
    }
}
