<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hair extends Model
{
    use HasFactory;
    protected $table = 'hair';
    protected $primaryKey = 'id';
    public $timestamps = true;
    //protected $dateFormat = 'h:m:s';
    protected $fillable = ['name','desc','count','type_id','image_path','price'];
    public function type() {
        return $this->belongsTo(TypeHair::class);
    }
}
