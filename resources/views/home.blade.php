@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if(Auth::user()->isAdmin())
                @else
                    <div class="alert alert-info" role="alert">
                        Estimado usuario te informamos que nos encontramos trabajando en una nueva versión para tu inicio. <br>
                        ¡Pronto tendrás nuevas noticias!
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
