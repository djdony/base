<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'bookings';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'from_id',
        'to_id',
        'date',
        'flight',
        'type',
        'customer_id',
        'currency_id',
        'price',
        'user_id',
        'info'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'from_id' => 'integer',
        'to_id' => 'integer',
        'date' => 'date',
        'flight' => 'string',
        'customer_id' => 'integer',
        'user_id' => 'integer',
        'info' => 'string'
    ];

    public function from()
    {
        return $this->belongsTo('App\Models\Location');
    }
    public function to()
    {
        return $this->belongsTo('App\Models\Location');
    }
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
    public function partner()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function currency()
    {
        return $this->belongsTo('App\Models\Currency');
    }
}
