@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>Filtered Employees</strong></div>
        <div class="panel-body">
            @include('subviews.employee_table', ['employees' => $employees])
        </div>
    </div>
@endsection
