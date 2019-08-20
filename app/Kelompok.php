<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
  protected $fillable = ['nama', 'pendamping'];

  public function peserta() {
    return $this->hasMany(Peserta::class);
  }
  
}
