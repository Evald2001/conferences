<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conferences extends Model
{
    use HasFactory;
    protected $fillable = ['Name', 'Date', 'description', 'Location'];

}
