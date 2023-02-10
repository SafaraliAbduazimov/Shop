@extends('layouts.admin')
@section('title','Clients in the International shopp')
@section('content')
    <div class=" mb-2 text-black">
        <div class="container" >
            <h2 class="text-center">Clients of My shopp :</h2>
            <a href="{{route('clients.create')}}" class="mb-2 btn btn-success">Add client</a>
            <table class="table table-border-rounded">
                <thead  class="table-danger">
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
                                <td> <a href="{{route('clients.show',$i->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
                                <td><a href="{{route('clients.edit',$i->id)}}" class="btn btn-success"><i class="fa fa-pen"></i></a></td>
                                <td>
                                    <form action="{{route('clients.delete',$i->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"  class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                    </div>
                @endforeach
                </tbody>
            </table>
            <div>
                {{$clients->links()}}
            </div>
        </div>
    </div>
@endsection

