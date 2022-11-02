<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rapor extends Model
{
    use HasFactory;
    protected $table="maclar";
    protected $fillable=["mac_rapor"];
    public $timestamps = false;
}
