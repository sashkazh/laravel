@extends('layouts.app')

@section('content')

    <form class="form-horizontal" method="post" action="/tasks">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name" class="col-xs-4 control-label">Name:</label>
            <div class="col-xs-5">
                <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Input name">
            </div>
        </div>
        <div class="form-group">
            <label for="descr" class="col-xs-4 control-label">Descripition:</label>
            <div class="col-xs-5">
                <textarea class="form-control input-lg" name="descr" id="descr" placeholder="Fill describe"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="url" class="col-xs-4 control-label">URL:</label>
            <div class="col-xs-5">
                <input class="form-control input-lg" type="url" name="url" id="url" placeholder="Input URL">
            </div>
        </div>
        <div class="form-group">
            <label for="priority" class="col-xs-4 control-label">Priority:</label>
            <div class="col-xs-5">
                <input class="form-control input-lg" name="priority" id="priority" type="number">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-4 col-xs-5">
                <button type="submit" class="btn btn-lg">Submit</button>
            </div>
        </div>
    </form>

@endsection