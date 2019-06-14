@extends('layout.master')


@if ($user === null)
    {{-- for add new user --}}
    @section('content')

        <div class="row" style="margin-top: 15px">
            <div class="col 12">
                <a href="/">Back To Home</a>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <h3>Add User</h3>
            </div>
        </div>

        <div class="row">
            <form action="/user/add" method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name" name="name" type="text" class="validate">
                        <label for="first_name">Display Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input  id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col s3 offset-s9">
                        <button class="btn btn-large blue waves-effect waves-light right" type="submit" name="submit">
                            Submit
                        </button>
                    </div>
                </div>

            </form>
        </div>
    @endsection

@else
    @section('content')

        <div class="row" style="margin-top: 15px">
            <div class="col 12">
                <a href="/">Back To Home</a>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <h3>Edit User</h3>
            </div>
        </div>

        <div class="row">
            <form action="/user/edit/{{$user->id}}" method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input 
                            id="first_name" 
                            name="name"
                            value={{ $user->name }} 
                            type="text" 
                            class="validate"
                        >
                        <label for="first_name">Display Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input  
                            id="email" 
                            name="email"
                            value={{ $user->email }} 
                            type="email" 
                            class="validate"
                        >
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input 
                            id="password" 
                            name="password"
                            value={{ $user->password }} 
                            type="text" 
                            class="validate"
                        >
                        <label for="password">Password</label>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col s3 offset-s9">
                        <button class="btn btn-large blue waves-effect waves-light right" type="submit" name="submit">
                            Submit
                        </button>
                    </div>
                </div>

            </form>
        </div>
    @endsection
    
@endif