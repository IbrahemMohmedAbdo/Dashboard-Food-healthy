<?php

namespace App\Http\Controllers\Dashboard;

use Dompdf\Dompdf;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
    //


public function generatePDF($id)
{
    setlocale(LC_ALL, 'ar');
    $invoice = Invoice::findOrFail($id);

    $dompdf = new Dompdf();
    $dompdf->loadHtml(view('invoices.pdf', compact('invoice')));

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    return $dompdf->stream("invoice_{$invoice->user->name}.pdf");
}

}
