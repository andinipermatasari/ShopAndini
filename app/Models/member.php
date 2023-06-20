<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $guarded = [];
    protected $primaryKey = 'id_member';
}
