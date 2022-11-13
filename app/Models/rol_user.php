<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol_user extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];

    protected $softCascade = ['users'];

    protected $table = 'rol_users';

    protected $fillable = [
        'nombre',
        'estado',
    ];

    public function users()
    {
        return $this->hasOne(User::class, 'rol_user_id');
    }
}
