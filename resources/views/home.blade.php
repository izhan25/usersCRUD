@extends('layout.master')

@section('content')

    <div class="row">
        <div class="col s4 m4 l4 xl4">
            <h3>Users</h3>
        </div>
        <div class="col s8 m8 l8 xl8">
            <a href="/user/form" class="btn btn-large blue waves-effect" style="margin-top: 25px; float: right;">
                Add User
            </a>
        </div>
    </div>
    
    <hr style="width: 100%">

    <div class="row">
        <div class="col s12">
            <table class="striped responsive-table" style="margin-bottom: 50px">
                <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($users as $key=>$user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a 
                                    href="user/form/{{$user->id}}"
                                    class="btn blue waves-effect"
                                >
                                    Edit
                                </a>

                                <a
                                    href="user/delete/{{$user->id}}" 
                                    class="waves-effect waves-red btn-flat"
                                >
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            <table>
        </div>
    </div>
@endsection