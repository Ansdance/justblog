<?php
//php artisan make:model Contact -m создает модель(значение -м создает  файл в migration)
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $table='contacts';

}
