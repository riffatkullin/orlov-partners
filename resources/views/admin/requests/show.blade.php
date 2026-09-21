@extends('layouts.app')

@section('title', 'Заявка #{{ $consultationRequest->id }} — ORLOV & PARTNERS')

@section('content')

<section class="admin-requests">
    <div class="container">

        <div class="admin-header">
            <div>
                <p class="eyebrow">Заявка #{{ $consultationRequest->id }}</p>
                <h1>{{ $consultationRequest->name }}</h1>
            </div>

            <a href="{{ route('admin.requests.index') }}" class="admin-back">
                ← Все заявки
            </a>
        </div>

        <div class="request-detail">

            <div class="request-detail-row">
                <span class="request-detail-label">Контакт</span>

                <a href="mailto:{{ $consultationRequest->contact }}">
                    {{ $consultationRequest->contact }}
                </a>
            </div>

            <div class="request-detail-row">
                <span class="request-detail-label">Дата обращения</span>

                <time>
                    {{ $consultationRequest->created_at->format('d.m.Y H:i') }}
                </time>
            </div>

            <div class="request-detail-row">
    <span class="request-detail-label">Статус</span>

    <form
        action="{{ route('admin.requests.update', $consultationRequest) }}"
        method="POST"
        class="status-form"
    >
        @csrf
        @method('PATCH')

        <select name="status" class="status-select">
            <option value="new"
                {{ $consultationRequest->status === 'new' ? 'selected' : '' }}>
                Новая
            </option>

            <option value="in_progress"
                {{ $consultationRequest->status === 'in_progress' ? 'selected' : '' }}>
                В работе
            </option>

            <option value="completed"
                {{ $consultationRequest->status === 'completed' ? 'selected' : '' }}>
                Завершена
            </option>
        </select>

        <button type="submit" class="status-button">
            Сохранить
        </button>
    </form>
</div>

            <div class="request-detail-message">
                <span class="request-detail-label">Задача</span>

                <p>
                    {{ $consultationRequest->message }}
                </p>
            </div>

        </div>

    </div>
</section>

@endsection