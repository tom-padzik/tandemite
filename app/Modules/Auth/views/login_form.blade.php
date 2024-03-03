@extends('components.layouts.base')

@section('content')
    <div>

        @if($errors->any())
            {{ implode('', $errors->all(':message')) }}
        @endif

    </div>
    <br/>
    <form action="{{ route('login.post') }}" method="post">
        @csrf
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit">
    </form>
@endsection