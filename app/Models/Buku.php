<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $tables = 'table_buku';
    
    protected  $primaryKey = 'BukuID';

    public $incrementing = true;

    public $guarded = [];
}
