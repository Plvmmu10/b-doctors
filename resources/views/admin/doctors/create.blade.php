@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-12">
                <div class="my-3">
                    <h2>Aggiungi nuovo dottore</h2>
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger my-3" >
                @foreach ($errors->all() as $error)
                <ul class="list-unstyled mb-0" >
                    <li>{{$error}}</li>
                </ul>
                @endforeach
            </div>
             @endif
            <div class="col-12">
                <form action="{{route('admin.doctors.store')}}" method="POST">
                @csrf  
                <div class="form-group" >
                    <label for=""><p class="fw-semibold">Nome</p></label>
                    <input type="text" class="form-control" placeholder="Nome.." id="slug" name="slug">
                </div>
                <div class="form-group" >
                    <label for=""><p class="fw-semibold mt-2">Indirizzo</p></label>
                    <textarea type="text" class="form-control" placeholder="Indirizzo.." id="address" name="address"></textarea>
                </div>
                <div class="form-group" >
                    <label for=""><p class="fw-semibold mt-2">Servizio</p></label>
                    <textarea type="text" class="form-control" placeholder="Servizio.." id="services" name="services"></textarea>
                </div>
                <div class="form-group my-3" >
                    <button type="submit" class="btn btn-sm btn-success" >Aggiungi Dottore</button>
                </div>
            </form>
            </div>
    </div>
</div>
@endsection