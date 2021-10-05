<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use Illuminate\Http\Request;
//use Barryvdh\DomPDF\PDF;
use PDF;
use App\pacientes;
class PDFController extends Controller
{
 public function PDF()
    {
        $pdf = PDF::loadView('reporte');
        return $pdf->download('reporte.pdf');
    }

    public function PDFPacientes()
    {
        $pacientes = paciente::all();
        $pdf = PDF::loadView('reporte', compact('pacientes'));
        return $pdf->setPaper('a4', 'landscape')->download('pacientes.pdf');
    }
}

