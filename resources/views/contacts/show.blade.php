@extends('base')
@section('main')
    <div role="main" class="container">
        <div class="jumbotron">
            <h4 class="display-5">Address: </h4>
            <h4 class="display-5 font-italic">{{$contact->address}}</h4>
        </div>
            <a style="right: 10px;" href="{{ route('contacts.index')}}" class="btn btn-primary">Go Back</a>
    </div>

@endsection


