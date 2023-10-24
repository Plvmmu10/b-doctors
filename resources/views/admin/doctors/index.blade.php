@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dottori') }}
    </h2>
    <div class="row justify-content-center">
        <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2>Aggiungi nuovo dottore</h2>
                        </div>
                        {{-- <div>
                            <a href="{{route('admin.projects.create')}}" class="btn btn-small btn-primary"><i class="fa-solid fa-plus mx-1"></i><span class="mx-2" >Nuovo Dottore</span></a> 
                        </div> --}}
                    </div>
            </div>
            @if(session('message'))
            <div class="alert alert-success my-3" >
                {{session('message')}}
            </div>
            @endif
        </div>
        <div class="col">
            <div class="card my-3">
                <div class="card-header">{{ __('User Doctors') }}</div>
                <div class="card-body p-0">
                    <table class="table mb-0">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Indirizzo</th>
                            <th scope="col">Servizio</th>
                            <th scope="col" class="text-center">Azioni</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                            <tr>
                              <th scope="row">{{$doctor['id']}}</th>
                              <td><p class="fw-semibold">{{$doctor['slug']}}</p></td>
                              <td><p class="fw-semibold">{{$doctor['address']}}</p></td>
                              <td><p class="fw-semibold">{{$doctor['services']}}</p></td>
                              <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.doctors.show', $doctor->slug)}}" class="btn btn-square btn-sm btn-info m-1" title="Ispeziona"><i class="fa fa-eye" ></i></a>
                                    <a  href="{{route('admin.doctors.edit', $doctor->slug)}}" class="btn btn-square btn-sm btn-secondary m-1" title="Modifica"><i class="fa fa-edit"></i></a>
                                    <form class="d-inline-block" method="POST" action="{{route('admin.doctors.destroy', ['doctor' => $doctor['slug']])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-square btn-danger confirm-delete-button m-1" data-title="{{$doctor->name}}"><i class="fas fa-trash" ></i></button>
                                    </form>
                                </div>
                              </td>
                            </tr>    
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @include('partials.modal_delete') --}}
@endsection
