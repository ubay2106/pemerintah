<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemerintahModel extends Model
{
    use HasFactory;

    protected $table = 'pemerintah';

    protected $guarded=[];

    public function bidang()
    {
        return $this->belongsTo(BidangModel::class,'bidang_id','id');
    }

    public function jabatan()
    {
        return $this->belongsTo(JabatanModel::class,'jabatan_id','id');
    }
}
