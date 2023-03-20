<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpekAlat extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $table = 'spek_alats';
    protected $primaryKey = 'id';
    protected $fillable = ['id','Alat_id','KodeAlat','Brand','Model','NoSeri'];
    protected $hidden = [];

    public function alat()
    {
        return $this->belongsTo(Alat::class);
    }
}
