<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function exportPDF()
    {
        // Ambil data dari API backend
        $response = Http::get(env('CODEIGNITER_API').'/Absensi');
        $absensi = $response->json();

        // Pastikan respons adalah array
        $absen = $absensi['tb_absensi']??[];

        // Generate PDF
        $pdf = Pdf::loadView('pdf.pdf-absensi', ['absensi' => $absensi]);
        return $pdf->download('daftar-hadir.pdf');
    }
}
