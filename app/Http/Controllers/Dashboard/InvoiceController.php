<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'invoice_number' => 'required|unique:invoices',
            'date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:date',
            'subtotal' => 'required|numeric|min:0',
            'tax' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
            'status' => 'required|in:draft,paid,overdue'
        ]);
      //  return dd($validatedData) ;
        $invoice = Invoice::create($validatedData);

        return redirect()->route('invoices.show', $invoice->id);
    }

    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        return view('invoices.edit', compact('invoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'invoice_number' => 'required|unique:invoices,invoice_number,' . $invoice->id,
            'date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:date',
            'subtotal' => 'required|numeric|min:0',
            'tax' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
            'status' => 'required|in:draft,paid,overdue'
        ]);

        $invoice->update($validatedData);

        return redirect()->route('invoices.show', $invoice->id);
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoices.index');
    }
}
