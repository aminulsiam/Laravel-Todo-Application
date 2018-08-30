@extends('layouts.master')

@section('content')
    <h1>User Profile</h1>
    <hr/>

    {!! Form::model($user, ['method' => 'put', 'route' => ['user.update', $user->id], 'class' => 'form-horizontal', 'role' => 'form']) !!}
        @include('users._form')
        {!! Form::hidden('id', null,['class' => 'form-control']) !!}
        <!-- submit button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <p class="pull-right"><a href="">Forget password ???</a></p>
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                <a href="{{ url('/todo') }}" class="btn btn-default">Cancel</a>

            </div>
        </div>
    {!! Form::close() !!}
@endsection