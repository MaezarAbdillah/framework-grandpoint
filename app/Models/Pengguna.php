<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'penggunas';
    protected $fillable = ['role','nama','email','pass'];

    public function order(): HasMany
    {
        return $this->HasMany(Order::class);
    }

    
}
