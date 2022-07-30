<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMotorista extends Model
{
    protected $table='motorista';
    protected $fillable=['name', 'cpf', 'cnh'];
    use HasFactory;
}
