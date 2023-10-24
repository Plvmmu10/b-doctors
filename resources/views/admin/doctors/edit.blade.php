@extends('layouts.admin')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6 text-center my-3">
               <h4>Modifica</h4>
            </div>
        </div>
        <div class="row">
            <div class="offset-3 col">
                <div class="d-flex justify-content-start py-3">
                    <a class="btn btn-primary" href="{{route('admin.doctors.index')}}"><i class="fa-solid fa-arrow-left mx-1"></i><span class="mx-2">Torna ai dottori</span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-3 col-6">
                <div class="container" >
                    <div class="row">
                        <div class="col">
                            @if ($errors->any())
                            <div class="alert alert-danger my-3" >
                                @foreach ($errors->all() as $error)
                                <ul class="list-unstyled mb-0" >
                                    <li>{{$error}}</li>
                                </ul>
                                @endforeach
                            </div>
                             @endif
                        </div>
                    </div>
                </div>
                <form action="{{route('admin.doctors.update', $doctor->slug)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Nome</p></label>
                        <input type="text" name="name" class="form-control" placeholder="Inserisci il Nome" value="{{old('slug') ?? $doctor->slug}}">   
                    </div>
                        <label for="floatingTextarea2"><p class="fw-semibold mt-1">Indirizzo</p></label>
                        <textarea name="address" class="form-control" placeholder="Indirizzo"  rows="10">
                            {{old('address') ?? $doctor->address}}
                        </textarea>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-success" class="form-control" >Salva le Modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection