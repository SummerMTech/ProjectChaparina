<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Animales extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['nombre', 'codigo','sexo','peso','edad','raza','numeroVacunas','numeroCrias','avatarVaca'];

    public function sendNotification()
    {
        $this->notify(new \App\Notifications\notificarCambios($this));
    }

    public static function boot()
    {
        parent::boot();

        static::created(function ($animal) {
            $animal->updateAnimalAges($animal);
        });
    
        static::updated(function ($animal) {
            $animal->updateAnimalAges($animal);
        });
    }
}
