<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Lapangan extends Model
{
    use HasFactory;
    protected $table = 'lapangans';
    protected $fillable = ['no_lap','harga'];

    public function order(): HasMany
    {
        return $this->HasMany(Order::class);
    }
}
