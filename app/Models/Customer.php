<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cpf'
    ];


    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = $this->onlyNumber($value);
    }

    private function onlyNumber($string)
    {
        return preg_replace("/[^0-9]/", "", $string);
    }
    
}
