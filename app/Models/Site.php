<?php

namespace App\Models;

use App\Models\User;
use App\Models\Endpoint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Site extends Model
{
    use HasFactory;
    protected $fillable = [
        'domain',
        'scheme',
        'default',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function endpoints()
    {
        return $this->hasMany(Endpoint::class);
    }
}
