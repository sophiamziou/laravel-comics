@extends('layouts.app')
@section('content')
 <div class="card" style="width: 18rem;">
    <img src="{{$single_book['thumb']}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$single_book['title']}}</h5>
     </div>
</div>
@endsection