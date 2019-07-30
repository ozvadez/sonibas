@extends('layouts.app')

@section('showcase')
@parent
<p>home page</p>
@endsection

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quisquam eos distinctio possimus optio, nobis excepturi maxime eaque facere rem quasi, accusantium sit. Deserunt nisi dolores voluptas, possimus fugit blanditiis?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the side bar</p>
@endsection

