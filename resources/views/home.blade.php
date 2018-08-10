@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (isset($data))
                        <p>Show your {{$data}} {{csrf_token()}} - {{ csrf_field() }} </p>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @endif
                    You are logged in!

                </div>
                <div>
                    <form action="/user" method="post">
                        {{ csrf_field() }}
                        <input name="user" type="submit" value="get User">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
