@extends('layouts.app')

@section('content')
<div id='app'>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="input-group">
                            <input type="text" class="form-control" v-on:input="changeTitle">
                        </div>
                        <a v-bind:href="getUsers">Get users</a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
