@extends('layouts.app')
@section('content')
<div class="alert alert-success mt-5 text-center" role="alert">
  <strong>L'échange a bien été ajouté</strong> 
</div>
<div class="mx-5 text-center">
  <form action="/users/exchanges">
    <input type="submit" class="btn btn-primary" value="Retour"/>
  </form>
  </div>
@endsection
