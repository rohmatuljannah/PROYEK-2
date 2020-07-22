<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
   protected $table = "aktivitas";
   protected $fillable = ['nama_aktivitas', 'tanggal', 'waktu', 'tempat', 'deskripsi', 'status'];
   public function details(){
      return $this->hasMany('App\User');
   }

}
