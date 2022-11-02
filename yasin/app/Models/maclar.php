<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maclar extends Model
{
    use HasFactory;
    protected $table="maclar";
    protected $fillable=["mac_hakem1","mac_hakem2","mac_hakem3","mac_gozlemci","mac_rapor"];
    public $timestamps = false;
}
