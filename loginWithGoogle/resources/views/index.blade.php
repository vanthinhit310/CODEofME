@extends('template')
@section('content')
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-dark bg-dark">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mail-box">Mailbox</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <h1 style="color: #1b1e21; font-family: 'SFU DaxCondensed'">Website test một số chức năng đặc biệt</h1>
        </div>
    </div>
@endsection
