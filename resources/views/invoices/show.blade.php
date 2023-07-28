@extends('dashboard.layout.master')

@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="col-lg-12 p-t-10">
                <div class="card-box">
    <h1>Invoice {{ $invoice->invoice_number }}</h1>

    <p>User ID: {{ $invoice->user_id }}</p>
    <p>Date: {{ $invoice->date }}</p>
    <p>Due Date: {{ $invoice->due_date }}</p>
    <p>Subtotal: {{ $invoice->subtotal }}</p>
    <p>Tax: {{ $invoice->tax }}</p>
    <p>Total: {{ $invoice->total }}</p>
    <p>Status: {{ $invoice->status }}</p>

    <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
