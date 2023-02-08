<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $primary = 'id';
    protected $table = 'members';
    // protected $fillable = ['nama','email','nohp'];
    protected $guarded = [];

}
