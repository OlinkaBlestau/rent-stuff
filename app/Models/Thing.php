<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    use HasFactory;

    private $Name;
    private $Price;
    private $Descriprion;
    private $Img_URL;




    protected $table = 'Thing';
}
