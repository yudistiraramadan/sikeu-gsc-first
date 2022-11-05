<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;
    protected $table = 'detail_user';
    protected $fillable = [
        'id', 'user_id', 'foto', 'alamat', 'tlpn', 'jk', 'status',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
