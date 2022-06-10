<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCustomer extends Model
{
    use HasFactory;

    protected $table = 'post_customers';
    
    protected $fillable  =  [
            'name',
            'email',
            'phone' ,
            'address'
        ];
}
