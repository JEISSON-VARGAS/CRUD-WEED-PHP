<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pipas extends Model
{
    use HasFactory;

    protected $table='pipas';
    protected $primarykey='id';
    protected $fillable=['color','material'];
    protected $guarded=[];
    public $timestamps=false;

}
