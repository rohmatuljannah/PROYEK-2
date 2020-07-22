<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = "detail_aktivitas";
    protected $fillable = ['id', 'id_aktivitas', 'judul', 'id_volunteer', 'nama'];
    public function aktivitas(){
    	return $this->belongsTo('App\Aktivitas');
    }
}
