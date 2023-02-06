<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
        $clients=clients::all();
        return view('clients.index', compact('clients'));
    }
   public function create(){
        return view('clients.create');
    }
    public function store(){
        $data=request()->validate([
            'fname'=>'string',
            'lname'=>'string',
            'age'=>'Integer',
            'city'=>'string',
            'phone'=>'string',
            'email'=>'string'
        ]);
        clients::create($data);
        return redirect()->route('clients.index')->with('success','clients created successfully!!!');
    }
    public  function show(clients $clients)
    {
       return view('clients.show', compact('clients'));
    }
    public  function edit(clients $clients)
    {
        return view('clients.edit', compact('clients'));
    }
    public  function update(clients $clients)
    {
        $data=request()->validate([
            'fname'=>'string',
            'lname'=>'string',
            'age'=>'Integer',
            'city'=>'string',
            'phone'=>'string',
            'email'=>'string'
        ]);
        $clients->update($data);
        return redirect()->route('clients.index',$clients->id)->with('success','clients created successfully!!!');
    }

    public  function destroy(clients $clients)
    {
       $clients->delete();
        return redirect()->route('clients.index',$clients->id)->with('success','clients created successfully!!!');

    }


}
