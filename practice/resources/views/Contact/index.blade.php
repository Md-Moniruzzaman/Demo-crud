@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                       <table class="table table-striped">
                           <thead>
                               <th>Name</th>
                               <th>Address</th>
                               <th>phone</th>
                               <th>Action</th>
                           </thead>
                           <tbody>
                           @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->address}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>
                                        <a href="{{route('Contacts.edit', [$contact->id])}}"><button type="submit" class="btn btn-warning">Edit</button></a>
                                        <a href="{{route('Contacts.destroy', [$contact->id])}}"> <button type="submit" class="btn btn-danger">delete</button></a>
                                    </td>
                                </tr>
                               @endforeach
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
