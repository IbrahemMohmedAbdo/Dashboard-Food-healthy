@extends('dashboard.layout.master')
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">



            <div class="card-body ">
                @if (session('msg'))
                    <div class="alert alert-success col-md-3" role="alert">
                        {{ session('msg') }}
                    </div>
                @endif




            <div class="col-lg-12 p-t-10">
                <div class="card-box">
                    <h2 class="card-title text-center">Plan Page</h2>
                    <div class="btn-group btn-group-justified m-b-10 text-left">
                        <a href="{{route('users.index')}}">
                    <button type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5">Back</button>
                        </a></div>
                        <div class="btn-group btn-group-justified m-b-10 text-left">
                            <form action="{{ route('export.plan') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-custom waves-effect waves-light w-md m-b-5">Export</button>
                            </form>
                           </div>

                    <div class="btn-group btn-group-justified m-b-10 text-right">
                        <a href="{{route('plans.create')}}">
                    <button type="button" class="btn btn-custom waves-effect waves-light w-md m-b-5">Add New plan</button>

                        </a></div>

                    <h4 class="header-title m-t-0 m-b-30">{{$plans->count() }} plan in database</h4>

                    <p class="text font-18 m-b-15">

                    </p>

                    <table class="table table table-hover m-0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th> Title</th>
                                <th>Description</th>
                                <th>User Email</th>
                                <th>Username</th>
                                <th> image</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if (isset($plans))
                                @foreach ($plans as $plan )
                                <td >{{$plan->id}}</td>
                                <td >{{$plan->title}}</td>
                                <td >{{$plan->description}}</td>
                                <td >{{$plan->user->email}}</td>
                                <td >{{$plan->user->name}}</td>
                                <td ><img src="{{ asset($plan->image) }}" width= '200' height='200' class="img img-responsive" /></td>
                                <td >
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('plans.edit',[$plan->id]) }}">
                                            <button type="button" class="btn btn-custom btn-bordred waves-effect waves-light w-md m-b-5">Edit</button>
                                        </a>&nbsp;
                                        <form action="{{route('plans.destroy', [$plan->id])}}" method="POST">
                                             @method('DELETE')
                                             @csrf
                                                 <input type="submit" class="btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5" value="Delete"/>
                                           </form>
                                           <a href="{{ route('plans.show',[$plan->id]) }}">
                                            <button type="button" class="btn btn-info btn-bordred waves-effect w-md waves-light m-b-5">Show</button>
                                        </a>
                                    </div>
                                </td>

                              </tr>
                              @endforeach

                              @endif

                        </tbody>
                    </table>

                </div>
            </div><!-- end col -->
            {{ $plans->links() }}
        </div> <!-- container -->

    </div> <!-- content -->



</div>




@endsection
