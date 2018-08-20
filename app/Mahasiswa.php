<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model {
    protected $primaryKey = "nim";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'mahasiswa';
    public $timestamps = false;
}
