@extends('layouts.shopp')
@section('title','Clients in the International shopp')
@section('content')
    <div class="p-3 mb-2 bg-warning text-white">
        <div class="container" >
            <a href="{{route('clients.create')}}" class="btn btn-success">Add client</a>
            <h2 class="text-center text-white">Clients of My shopp :</h2><br>
            <table class="table table-bordered">
                <thead  class="table-warning">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody class="table-info">
                @foreach($clients as $i)
                    <div>
                            <tr>
                                <th scope="row">{{$i->id}}</th>
                                <td>{{$i->fname}}</td>
                                <td>{{$i->lname}}</td>
                                <td>{{$i->age}}</td>
                                <td>{{$i->city}}</td>
                                <td>{{$i->phone}}</td>
                                <td>{{$i->email}}</td>
                                <td> <a href="{{route('clients.show',$i->id)}}" class="btn btn-primary">Show</a></td>
                                <td><a href="{{route('clients.edit',$i->id)}}" class="btn btn-success">update</a></td>
                                <td>
                                    <form action="{{route('clients.delete',$i->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                    </div>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

