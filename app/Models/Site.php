<?php

namespace App\Models;

use App\Models\User;
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

    public static function booted()
    {
        static::updating(function (Site $site) {
           if(in_array('default',array_keys($site->getDirty()))){
               $site->user->sites()->whereNot('id',$site->id)->update(['default'=>false]);
           }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
