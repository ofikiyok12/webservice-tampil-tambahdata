<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalCost extends Model
{
    use HasFactory;
    protected $table='additionalcosts';

    protected $fillable = [ 'nama_pengeluaran','keterangan','biaya','nama_konsumen','email_konsumen'];

}
