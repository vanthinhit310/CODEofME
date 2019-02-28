@extends('templates')
@section('content')
    <label for="lan">Type of question</label>
    <select name="lan" id="lan" class="form-control">
        @foreach($lang as $l)
        <option value="{{$l->lang}}"> {{$l->name}} </option>
            @endforeach
    </select>
    <br>
    <div align="center">
        <input type="button" name="btn" id="btn" class="btn-success" value="Start now!">
    </div>
@endsection
