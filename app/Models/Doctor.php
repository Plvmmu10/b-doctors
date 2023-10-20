<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'description',
        'services',
        'address',
        'photo',
        'visible',
        'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }

    public function stars()
    {
        return $this->belongsToMany(Star::class);
    }
}
