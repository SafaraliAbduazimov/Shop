@extends('layouts.shopp')
@section('title','this is registration of clients page')
@section('content')
   <div class="p-3 mb-2 bg-warning text-white" >
       <form action="{{route('clients.store')}}" method="post">
           @csrf
           <div class="m-auto">
               <div class="form-group">
                   <h3 class="text-center">Registration clienta</h3>
                   <label for="205">FirstName</label>
                   <input type="text" name="fname" class="form-control" id="205" placeholder="Enter your firstname">
               </div><br>
               <div class="form-group">
                   <label for="208">LastName</label>
                   <input type="text" name="lname" class="form-control" id="208" placeholder="Enter your lastname">
               </div><br>
               <div class="form-group">
                   <label for="502">Age</label>
                   <input type="number" name="age" class="form-control" id="502" placeholder="Enter your age">
               </div><br>

               <div class="form-group">
                   <label for="802">City</label>
                   <input type="text" name="city" class="form-control" id="802" placeholder="Enter your city">
               </div><br>
               <div class="form-group">
                   <label for="22">Number of phone</label>
                   <input type="text" name="phone" class="form-control" id="22" placeholder="Enter number  of phone">
               </div><br>
               <div class="form-group">
                   <label for="25">Email</label>
                   <input type="text" name="email" class="form-control" id="25" placeholder="Enter email">
               </div><br>

               <div class="btn-group" >
                   <button type="submit" class="btn btn-danger ">Create</button>
                   <a href="{{route('clients.index')}}" class="btn btn-primary ">back</a>
               </div>
           </div>
       </form>
   </div>
@endsection

