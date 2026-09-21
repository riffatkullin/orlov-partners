@extends('layouts.app')

@section('title', 'Вход в админ-панель — ORLOV & PARTNERS')

@section('content')

<section class="admin-login">
    <div class="container">

        <div class="admin-login-inner">

            <p class="eyebrow">ORLOV & PARTNERS</p>

            <h1>Вход в<br>админ-панель</h1>

            <form
                action="{{ route('admin.login') }}"
                method="POST"
                class="admin-login-form"
            >
                @csrf

                <div class="form-group">
                    <label for="email">E-mail</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Ваш E-mail"
                        required
                    >

                    @error('email')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Ваш пароль"
                        required
                    >

                    @error('password')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <label class="remember">
                    <input
                        type="checkbox"
                        name="remember"
                        value="1"
                    >

                    <span>Запомнить меня</span>
                </label>

                <button type="submit" class="status-button">
                    Войти
                </button>

            </form>

            <a href="/" class="admin-back">
                ← Вернуться на сайт
            </a>

        </div>

    </div>
</section>

@endsection