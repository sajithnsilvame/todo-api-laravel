<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserRole extends Model
{
    use HasFactory;
    
    protected $fillable = ['role_name', 'description'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
