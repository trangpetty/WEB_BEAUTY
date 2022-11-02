<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeHair extends Model
{
    use HasFactory;
    protected $table = 'type_hair';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name','desc'];
    public function hair() {
        return $this->hasMany(Hair::class);
    }
}
