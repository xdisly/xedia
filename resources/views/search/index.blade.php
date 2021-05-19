@extends('layouts.layout')

@section('title', 'Поиск')

@section('content')
    <section class="search-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search__text">
                        <h3>Поиск</h3>
                        <form action="{{ route('search.searching') }}" method="get">
                            <div class="input-list">
                                <input type="text" class="@error('s') is-invalid @enderror" id="text" name="s"
                                       placeholder="Введите поисковой запрос и нажмите Enter" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
