<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangModel extends Model
{
    use HasFactory;

    protected $table = 'bidang';
    protected $guarded = [];

    public function pemerintah(){
        return $this->hasMany(PemerintahModel::class, 'bidang_id','id');
    }

}
