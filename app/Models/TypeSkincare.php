<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeSkincare extends Model
{
    use HasFactory;
    protected $table = 'type_skincare';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name','desc'];
    public function makeup() {
        return $this->hasMany(Skincare::class);
    }
}
