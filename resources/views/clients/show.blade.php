@extends('layouts.admin')
@section('title','this is clients page')
@section('content')
    <div class="p-3 mb-2 text-black">
        <div >
            <h2 class="text-center">Clients of MyShopp :</h2><br>
            <table class="table table-bordered">
                <thead  class="table-danger">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                </tr>
                </thead>
                <tbody class="table-info">
                    <tr>
                        <th scope="row">{{$clients->id}}</th>
                        <td>{{$clients->fname}}</td>
                        <td>{{$clients->lname}}</td>
                        <td>{{$clients->age}}</td>
                        <td>{{$clients->city}}</td>
                        <td>{{$clients->phone}}</td>
                        <td>{{$clients->email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

            <a href="{{route('clients.index')}}" class="btn btn-primary">Back</a>
        </div>
@endsection

