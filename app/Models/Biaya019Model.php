<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya019Model extends Model
{
    use HasFactory;
    protected $table='biaya019';

    protected $fillable = [ 'nama','phone','email','address'];

}
