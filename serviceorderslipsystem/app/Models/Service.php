<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table= 'servicedata';
    
    protected $fillable = [
         'customername',
         'servicenumber',
         'customernumber',
         'appointmentnumber',
         'contact',
         'email',
         'typeofservice',
         'maintenance',
         'customerpassword',
         'listofproblems',
         'assignedstaff',
    ];
}
