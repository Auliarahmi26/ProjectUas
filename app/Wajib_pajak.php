<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wajib_pajak extends Model
{
    protected $fillable = ['nomor_objek_pajak', 'nama_wajib_pajak', 'alamat_objek_pajak', 'alamat_wajib_pajak',];
}
