@extends('dashboard.layout.master')
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">








            <div class="col-lg-12 p-t-10" style="height:70vh">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">Meal {{$meal->title}}</h4>

                    <p class="text-muted font-13 m-b-15">

                    </p>
                    <div class="btn-group btn-group-justified m-b-10 text-right">
                        <a href="{{route('meals.index')}}">
                    <button type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5">Back</button>
                        </a></div>


                    <table class="table table table-hover m-0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th> Title</th>
                                <th>Description</th>
                                <th>calories</th>
                                <th>quantity</th>
                                <th>image</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>


                                <td >{{$meal->id}}</td>
                                <td >{{$meal->title}}</td>
                                <td >{{$meal->description}}</td>
                                <td >{{$meal->calories}}</td>
                                <td >{{$meal->quantity}}</td>
                                <td>
                                    <img src="{{ asset($meal->image) }}" width= '100' height='100' class="img img-responsive" />
                                </td>


                              </tr>

                        </tbody>
                    </table>

                </div>
            </div><!-- end col -->

        </div> <!-- container -->

    </div> <!-- content -->



</div>




@endsection
