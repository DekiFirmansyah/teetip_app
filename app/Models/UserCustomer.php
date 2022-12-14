<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCustomer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'gender', 'phone', 'identity_photo', 'driver_license', 'selfie_photo'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
