<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table = 'type';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name','desc'];
    public function makeup() {
        return $this->hasMany(Makeup::class);
    }
}
