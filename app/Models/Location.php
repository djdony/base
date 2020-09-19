<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class Location extends Model
{
    use HasFactory, SoftDeletes,  NodeTrait;

    public $table = 'locations';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'type',
        'code',
        'lat',
        'lon',
        'parent_id',
        '_lft',
        '_rgt'
    ];

    const COUNTRY = 1;
    const REGION = 2;
    const CITY = 3;
    const AIRPORT = 4;
    const SUBREGION = 5;
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'integer',
        'parent_id' => 'integer',
        'code' => 'string',
        'lat' => 'string',
        'lon' => 'string'
    ];


}
