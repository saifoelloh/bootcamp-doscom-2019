<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
  protected $fillable = [
    'nim',
    'nama',
    'email',
    'telephone',
    'telegram',
    'gender',
    'status',
    'kelompok_id'
  ];

  public function kelompok()
  {
    return $this->belongsTo(Kelompok::class);
  }
}
