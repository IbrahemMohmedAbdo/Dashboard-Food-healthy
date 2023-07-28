@extends('dashboard.layout.master')
@section('content')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="col-lg-12 p-t-10">
                            <div class="card-box">

                                <h3 class="card-title text-center">Edit Meal</h3>
                                <br>
                                <div class="btn-group btn-group-justified m-b-10 text-right">
                                    <a href="{{route('meals.index')}}">
                                <button type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5">Back</button>
                                    </a></div>


                        <form method="POST" action="{{ route('meals.update',[$meal->id]) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('title') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value={{ $meal->title}} required autocomplete="name" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="textarea" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>

                                <div class="col-md-6">
                                    <textarea name="description"class="form-control @error('description') is-invalid @enderror"   >{{$meal->description}}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="calories" class="col-md-4 col-form-label text-md-end">{{ __('calories') }}</label>

                                <div class="col-md-6">
                                    <input id="calories" type="number" class="form-control @error('calories') is-invalid @enderror" name="calories" value={{$meal->calories}} required autocomplete="calories" autofocus>

                                    @error('calories')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="calories" class="col-md-4 col-form-label text-md-end">{{ __('quantity') }}</label>

                                <div class="col-md-6">
                                    <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value={{$meal->quantity}} required autocomplete="quantity" autofocus>

                                    @error('quantity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value={{$meal->image}} required autocomplete="image" autofocus>

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        submit
                                    </button>
                                </div>
                            </div>
                        </form>

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


