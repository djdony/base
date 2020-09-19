<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'settings';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'title',
        'about',
        'service_title',
        'services',
        'contact_title',
        'address',
        'email',
        'phone',
        'company',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'about' => 'string',
        'service_title' => 'string',
        'contact_title' => 'string',
        'address' => 'string',
        'phone' => 'string'
    ];
}
