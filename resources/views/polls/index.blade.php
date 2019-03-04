@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">@lang("Poll")</div>
            <div class="card-body">
                <form action="{{ route('polls.store') }}" method="POST">
                    @csrf
                    {{ method_field('POST') }}
                    <div class="form-group">
                        <img src="{{ asset('img/logo.png') }}" class="img-fluid"><br>
                        <label>
                            ¿Qué tan satisfecho te sientes con el servicio de Rateinc?
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="score">@lang("Note")</label>
                        <select name="score" class="form-control" id="score">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                        {{ $errors->first('score', ':message') }}
                    </div>
                    <div class="form-group">
                        <label for="commentary">@lang('Commentary')</label>
                        <textarea name="comentary" class="form-control" id="commentary" rows="3"></textarea>
                        {{ $errors->first('commentary', ':message') }}
                    </div>
                    <button type="submit" class="btn btn-primary float-right">
                        @lang("Send")
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
