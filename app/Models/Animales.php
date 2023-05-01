<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Notification;
use App\Notifications\NotificarCambios;

class Animales extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['nombre', 'codigo','sexo','peso','edad','raza','numeroVacunas','numeroCrias','generoCrias','Proposito','avatarVaca'];

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

    public function updateAnimalAges($animales)
    {
        $age = $animales->edad;
        if ($age >= 10) {
           // dd("es mayor a 10");
            //$notification = new notification();
            //$notification->title = 'Animal mayor de 10 años';
        
            $esquema = User::all();
   
            $notificacion = [
                'titulo' => 'Vaca lista para paimeo',
               // 'contenido' => 'El animal ' . $animales->nombre . ' tiene ' . $animales->edad . ' años o más.',
               'contenido' => 'El animal ' . $animales->nombre . ' tiene ' . $animales->edad . ' años o más.',
            ];
      
            Notification::send($esquema, new NotificarCambios($notificacion));
        }
    }
}
