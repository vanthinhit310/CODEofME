@extends('templates')
@section('content')
    <label for="lan">Type of question</label>
    <select name="lan" id="lan" class="form-control">
        <option value=""> -- Select One -- </option>
    </select>
    <input type="button" name="btn" id="btn" class="btn-success" value="Start now!">
@endsection
