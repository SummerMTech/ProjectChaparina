<?php

namespace App\Http\Controllers;
use App\Models\Fugados;
use Illuminate\Http\Request;
use PDF;
class TablaController extends Controller
{
    public function descargarTablaPdf()
    {
        $datosTabla = Fugados::all();
        $pdf = PDF::loadView('pdf.vista-tabla-pdf', compact('datosTabla'));

        return $pdf->download('informe.pdf');
    }
}
