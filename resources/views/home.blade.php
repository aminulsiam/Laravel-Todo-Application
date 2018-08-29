@extends('layouts.master')

@section('content')
	<div class="text-center">
        <h1>Welcome to Laravel ToDo App</h1>
        <hr/>

        @include('partials.flash_notification')

        <p>For any query please contact</p>

        <h3>Md.Aminul Haq Mallik</h3>
        <h4><a href="http://aminulsiam.github.io">http://aminulsiam.github.io</a></h4>
    </div>
@endsection
    