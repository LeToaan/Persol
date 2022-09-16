<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Account extends Model
{
    use HasFactory;
    protected $table = 'account';
    public $timestamps = false;
    protected $fillable = ['name_account','address_account', 'email_account', 'pass_account','phone_account','gender_account','dob_account','status','token','remember_token'];

    protected $hidden =[
        'pass_account', 'remember_token',
    ];

   
}
