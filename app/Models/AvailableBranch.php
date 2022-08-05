<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableBranch extends Model
{
    use HasFactory;
    protected $table = 'available_branches';

    protected $fillable = [
        'user_id',
        'branch_id'
    ];


    public function user(){
        return $this->belongsToMany('App\Models\User', 'available_branches', 'branch_id', 'user_id');
    }

    public function branch(){
        return $this->belongsToMany('App\Models\Brach', 'available_branches', 'branch_id', 'user_id');
    }
}
