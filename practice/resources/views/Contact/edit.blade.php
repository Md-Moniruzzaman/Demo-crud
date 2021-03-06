@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <form action="{{route('Contacts.update', [$contact->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <level>Name</level>
                                <input value="{{$contact->name}}" type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <level>Address</level>
                                <textarea name="address" id="" cols="30" rows="10" class="form-control">{{$contact->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <level>Phone</level>
                                <input value="{{$contact->phone}}" type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn bg-warning" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
