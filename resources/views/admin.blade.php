@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col">
                pagina de edicion 
            </div>
        </div>
        <div class="row">
            <div class="col">
            nota a editar 
            @foreach ( $texts as $txt)

                <h1>{{$txt->txt_header}}</h1>

            @endforeach
            </div>
                <form action="{{ route('notes.update', $txt->id )}}" method="POST">
                    @method('PUT')
                    @csrf
                    <!-- <textarea placeholder="{{$txt->txt_header}}" name="txt_header" id="" cols="30" rows="10"></textarea> -->
                    <input value="{{$txt->txt_header}}" type="text" name="txt_header">
                    <button type="submit" class="btn btn-primary" >editar</button>

                </form>
           </div>
        
    </div>
</div>
@endsection
