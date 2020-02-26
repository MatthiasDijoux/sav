@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row">
                <div class="col-md-6 mt-5">
<div class="card mx-auto">
        <h5 class="card-title">Liste des commentaires </h5>
        <div class="card-body">
                @foreach($datas as $data)

          <p class="card-text">
                {{$data->commentaires}}
        </p>
        @endforeach

       <p>
        </p>
        </div>
      </div>
                </div>
        </div>
</div>

              
              
@endsection