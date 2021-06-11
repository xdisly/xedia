@extends('admin.layouts.layout')

@section('content')
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Панель</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    Добро пожаловать, {{ Auth::user()->name }}!
                </div>
                <div class="card-footer">
                    <a href="/logout" class="btn btn-danger">Выйти</a>
                </div>
            </div>
            </div>
                </div>
            </div>
        </section>
@endsection
