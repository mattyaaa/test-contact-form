@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header')
<nav class="header__nav">
        <a class="header__login-button" href="/register">logut</a>
</nav>
@endsection

@section('content')
<div class="admin">
    <h1 class="admin__title">Admin</h1>
    <table class="admin__table">
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの内容</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->gender }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->inquiry_type }}</td>
        @endforeach
    </table>
</div>
@endsection