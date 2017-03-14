@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as <span><?php
                        switch (Auth::user()->level) {
                        case '1':
                            echo "Super Admin";
                            break;
                        case '2':
                            echo "Admin";
                            break;
                        case '4':
                            echo "Pengawas";
                            break;

                        default:
                            echo "Operator";
                            break;
                    } ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
