<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'car_id',
        'branch_id',
        'date',
        'load',
        'load_type',
    ];




    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function car(){
        return $this->belongsTo('App\Models\Cars', 'car_id');
    }

    public function branch(){
        return $this->belongsTo('App\Models\Cars', 'branch_id');
    }
}
