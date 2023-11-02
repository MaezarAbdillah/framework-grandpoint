<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lapangan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['jam','hari','durasi','lapangan_id','user_id'];
    public function lapangan(): BelongsTo
    {
        return $this->belongsTo(Lapangan::class,'lapangan_id');
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
