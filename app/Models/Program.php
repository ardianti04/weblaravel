<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{   //data yang ada di sini [] merupakan data yang tidak akan di simpan ke data base meski sudah di input
    protected $guarded = ['student_price'];
    //saat menyimpan data  yang diisi[] merupakan data yang akan dimasukkan ke data base
    // protected $fillable = ['name'];
    //data yang tidak dimunculkan
    protected $hidden = ['created_at', 'updated_at'];

    public function edulevel()
    {
        return $this->belongsTo(Edulevel::class);
    }
}
