
@extends('dashboard.layout.master')
@section('content')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">




                            <div class="card-box">
                                <h3 class="card-title text-center">Create New Iinvoices</h3>
                                <br>


                                    {!! Form::open(['route' => 'invoices.store']) !!}

                                        {!! Form::label('user_id', 'user_id') !!}
                                        {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('user_id'))

                                        <span>{{ $errors->first('user_id') }}</span>
                                    @endif

                                        {!! Form::label('invoice_number', 'invoice_number') !!}

                                        {!! Form::number('invoice_number', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('invoice_number'))

                                        <span>{{ $errors->first('invoice_number') }}</span>
                                    @endif

                                        {!! Form::label('date', 'Date') !!}
                                        {!! Form::date('date', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('date'))

                                        <span>{{ $errors->first('date') }}</span>
                                    @endif

                                        {!! Form::label('due_date', 'Due Date') !!}
                                        {!! Form::date('due_date', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('due_date'))

                                        <span>{{ $errors->first('due_date') }}</span>
                                    @endif

                                        {!! Form::label('subtotal', 'subtotal') !!}
                                        {!! Form::number('subtotal', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('subtotal'))

                                        <span>{{ $errors->first('subtotal') }}</span>
                                    @endif

                                        {!! Form::label('tax', 'tax') !!}
                                        {!! Form::number('tax', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('tax'))

                                        <span>{{ $errors->first('tax') }}</span>
                                    @endif

                                        {!! Form::label('total', 'total') !!}
                                        {!! Form::number('total', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('total'))

                                        <span>{{ $errors->first('total') }}</span>
                                    @endif

                                        {!! Form::label('status', 'Status:') !!}

                                        {!! Form::select('status', ['draft' => 'Draft', 'paid' => 'Paid', 'overdue' => 'Overdue']) !!}

                                        @if ($errors->has('status'))

                                            <span>{{ $errors->first('status') }}</span>
                                        @endif
                                        <br>
                                        <br>
                                        {!! Form::submit('Create Invoice', ['class' => 'btn btn-primary']) !!}

                                    {!! Form::close() !!}

                            </div>
                        </div>


                        <!-- end row -->


                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->



            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


@endsection


