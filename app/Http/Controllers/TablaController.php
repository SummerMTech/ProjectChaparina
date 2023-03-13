<?php

namespace App\Http\Controllers;
use App\Models\Animales;
use App\Models\Fugados;
use Illuminate\Http\Request;
use PDF;
class TablaController extends Controller
{
    public function descargarTablaPdf()
    {
        
        $datosTabla = Animales::select('animales.nombre','animales.avatarVaca','fugados.codigo','fugados.fechaFuga')
        ->join('fugados', 'animales.codigo', '=', 'fugados.codigo')->get();
        
        $pdf = PDF::loadView('pdf.vista-tabla-pdf', compact('datosTabla'));

        return $pdf->download('informe.pdf');
    }
}
