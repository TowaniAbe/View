{{-- layouts/prolile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- prolile.blade.phpの@yield('title')に'PHP勉強日記'を埋め込む --}}
@section('title', 'PHP勉強日記')

{{-- prolile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>PHPのLaravel勉強の記録</h2>
                <h3>覚えるまで諦めなければものになる！</h3>
            </div>
        </div>
    </div>
@endsection