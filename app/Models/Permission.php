<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_permission',
        'reasson',
        'image',
        'is_approved',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
