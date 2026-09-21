@extends('layouts.app')

@section('title', 'Заявки — ORLOV & PARTNERS')

@section('content')

<section class="admin-requests">

    <div class="container">

        <div class="admin-header">

            <div>
                <p class="eyebrow">Административная панель</p>
                <h1>Заявки</h1>
            </div>

            <div class="admin-actions">

                <a href="/" class="admin-back">
                    ← На сайт
                </a>

                <form
                    action="{{ route('admin.logout') }}"
                    method="POST"
                >
                    @csrf

                    <button type="submit" class="admin-logout">
                        Выйти
                    </button>
                </form>

            </div>

        </div>

        <div class="requests-list">

            @forelse ($requests as $request)

                <article class="request-item">

                    <div class="request-number">
                        #{{ $request->id }}
                    </div>

                    <div class="request-main">

                        <h2>
                            <a href="{{ route('admin.requests.show', $request) }}">
                                {{ $request->name }}
                            </a>
                        </h2>

                        <a href="mailto:{{ $request->contact }}">
                            {{ $request->contact }}
                        </a>

                        <p>
                            {{ $request->message }}
                        </p>

                    </div>

                    <div class="request-meta">

                        <span class="request-status">
                            @switch($request->status)

                                @case('new')
                                    Новая
                                    @break

                                @case('in_progress')
                                    В работе
                                    @break

                                @case('completed')
                                    Завершена
                                    @break

                                @default
                                    {{ $request->status }}

                            @endswitch
                        </span>

                        <time>
                            {{ $request->created_at->format('d.m.Y H:i') }}
                        </time>

                    </div>

                </article>

            @empty

                <div class="requests-empty">
                    Заявок пока нет.
                </div>

            @endforelse

        </div>

    </div>

</section>

@endsection