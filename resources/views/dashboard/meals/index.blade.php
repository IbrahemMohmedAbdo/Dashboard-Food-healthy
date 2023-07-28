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
                    <h2 class="card-title text-center">Meal Page</h2>
                    <div class="btn-group btn-group-justified m-b-10 text-left">
                        <a href="{{route('users.index')}}">
                    <button type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5">Back</button>
                        </a></div>


                    <div class="btn-group btn-group-justified m-b-10 text-right">
                        <a href="{{route('meals.create')}}">
                    <button type="button" class="btn btn-custom waves-effect waves-light w-md m-b-5">Add New Meal</button>
                        </a></div>

                    <h4 class="header-title m-t-0 m-b-30">{{$meals->count() }} User from database</h4>

                    <p class="text font-18 m-b-15">
                         All Meals In Database are <strong>{{$meals->total()}}</strong>
                    </p>

                    <table class="table table table-hover m-0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th> Title</th>
                                <th>Description</th>
                                <th>quantity</th>
                                <th>calories</th>
                                <th> image</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if (isset($meals))
                                @foreach ($meals as $meal )
                                <td >{{$meal->id}}</td>
                                <td >{{$meal->title}}</td>
                                <td >{{$meal->description}}</td>
                                <td >{{$meal->quantity}}</td>
                                <td >{{$meal->calories}}</td>
                                <td ><img src="{{ asset($meal->image) }}" width= '200' height='200' class="img img-responsive" /></td>
                                <td >
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('meals.edit',[$meal->id]) }}">
                                            <button type="button" class="btn btn-custom btn-bordred waves-effect waves-light w-md m-b-5">Edit</button>
                                        </a>&nbsp;
                                        <form action="{{route('meals.destroy', [$meal->id])}}" method="POST">
                                             @method('DELETE')
                                             @csrf
                                                 <input type="submit" class="btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5" value="Delete"/>
                                           </form>
                                           <a href="{{ route('meals.show',[$meal->id]) }}">
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
            {{ $meals->links() }}
        </div> <!-- container -->

    </div> <!-- content -->



</div>




@endsection
