<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kullanici extends Model
{
    use HasFactory;
    protected $table="kullanicilar";
    protected $fillable=["kullaniciad","kullanicisifre","kullanicitelefon","kullanicimail","kullanicisoyad","kullanicisoyad","kullaniciclasman","kullanicimeslek"];
    public $timestamps = false;
}
