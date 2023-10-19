<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'penggunas';
    protected $fillable = ['nama','email','pass'];

    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
