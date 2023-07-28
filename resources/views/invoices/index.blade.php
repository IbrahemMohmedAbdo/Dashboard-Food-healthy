@extends('dashboard.layout.master')

@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="col-lg-12 p-t-10">
                <div class="card-box">
    <h1>Invoices</h1>

    <table class="table table table-hover m-0">
        <thead >
            <tr>
                <th>Invoice Number</th>
                <th>Date</th>
                <th>Due Date</th>
                <th>Subtotal</th>
                <th>Tax</th>
                <th>Total</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->invoice_number }}</td>
                    <td>{{ $invoice->date }}</td>
                    <td>{{ $invoice->due_date }}</td>
                    <td>{{ $invoice->subtotal }}</td>
                    <td>{{ $invoice->tax }}</td>
                    <td>{{ $invoice->total }}</td>
                    <td>{{ $invoice->status }}</td>
                    <td>
                        <a href="{{ route('invoices.show', $invoice->id) }}">View</a>
                        <br>
                        <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
                        <br>
                        <a href="{{ route('invoices.pdf', $invoice->id) }}">PDF</a>
                        <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST">
                        @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('invoices.create') }}">Create Invoice</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
