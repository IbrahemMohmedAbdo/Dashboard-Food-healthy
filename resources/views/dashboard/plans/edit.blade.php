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

                                <h3 class="card-title text-center">Edit Plan</h3>
                                <br>
                                <div class="btn-group btn-group-justified m-b-10 text-right">
                                    <a href="{{route('plans.index')}}">
                                <button type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5">Back</button>
                                    </a></div>


                        <form method="POST" action="{{ route('plans.update',[$plan->id]) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label for="tittle" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value={{$plan->title}} required autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value={{$plan->description}} required autocomplete="description" autofocus>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value={{$plan->image}} required autocomplete="image" autofocus>

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="select user" class="col-md-4 col-form-label text-md-end">{{ __('Select User') }}</label>
                    <div class="col-md-6">
                    <select class="form-control" name="user_id">

                        @if(count($users))
                        @foreach ($users as $user )
                        <option value={{$user->id}}>{{$user->name}}</option>

                        @endforeach
                        @endif

                    </select>
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


