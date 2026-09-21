@extends('layouts.app')

@section('title', 'ORLOV & PARTNERS — Юридическая практика')

@section('description', 'Юридическая практика для бизнеса и частных клиентов. Консультации, сопровождение и защита интересов.')

@section('content')

    {{-- HERO --}}
    <section class="hero">
        <div class="container">

            <div class="hero-grid">

                <div class="hero-index">
                    01 / 06
                </div>

                <div class="hero-content">

                    <p class="eyebrow">
                        ORLOV & PARTNERS
                    </p>

                    <h1>
                        Юридическая практика
                        <br>
                        для важных решений
                    </h1>

                    <p class="hero-subtitle">
                        Помогаем бизнесу и частным клиентам
                        разбираться со сложными юридическими
                        задачами и защищать свои интересы.
                    </p>

                    <a href="#consultation" class="text-link">
                        Обсудить задачу
                    </a>

                </div>

            </div>

        </div>
    </section>


    {{-- SERVICES --}}
    <section class="section" id="services">
        <div class="container">

            <div class="section-top">

                <div class="section-number">
                    02 / 06
                </div>

                <div class="section-intro">

                    <p class="eyebrow">
                        Практики
                    </p>

                    <h2>
                        Юридическая поддержка
                        <br>
                        там, где она необходима
                    </h2>

                </div>

            </div>


            <div class="services-list">

                <article class="service-card">

                    <span class="service-number">
                        01
                    </span>

                    <h3>
                        Корпоративное право
                    </h3>

                    <p>
                        Структурирование бизнеса, сопровождение
                        корпоративных процедур и консультации
                        по вопросам управления компанией.
                    </p>

                    <span class="service-arrow">↗</span>

                </article>


                <article class="service-card">

                    <span class="service-number">
                        02
                    </span>

                    <h3>
                        Договорная практика
                    </h3>

                    <p>
                        Подготовка и анализ договоров,
                        выявление рисков и защита интересов
                        клиента при заключении сделок.
                    </p>

                    <span class="service-arrow">↗</span>

                </article>


                <article class="service-card">

                    <span class="service-number">
                        03
                    </span>

                    <h3>
                        Судебные споры
                    </h3>

                    <p>
                        Подготовка правовой позиции,
                        претензионная работа и представление
                        интересов клиента в спорных ситуациях.
                    </p>

                    <span class="service-arrow">↗</span>

                </article>


                <article class="service-card">

                    <span class="service-number">
                        04
                    </span>

                    <h3>
                        Защита бизнеса
                    </h3>

                    <p>
                        Комплексное сопровождение предпринимателей,
                        оценка юридических рисков и поиск
                        практических решений.
                    </p>

                    <span class="service-arrow">↗</span>

                </article>

            </div>

        </div>
    </section>


    {{-- ABOUT --}}
    <section class="section section-wine" id="about">

        <div class="container">

            <div class="about-layout">

                <div class="section-number">
                    03 / 06
                </div>

                <div>

                    <p class="eyebrow">
                        О компании
                    </p>

                    <h2 class="about-title">
                        Право должно
                        <br>
                        работать на результат
                    </h2>

                </div>


                <div class="about-text">

                    <p>
                        ORLOV & PARTNERS — юридическая практика,
                        ориентированная на решение сложных
                        и нестандартных задач.
                    </p>

                    <p>
                        Мы начинаем с анализа ситуации,
                        определяем возможные риски и формируем
                        понятную стратегию дальнейших действий.
                    </p>

                    <div class="about-meta">

                        <div class="meta-item">
                            <span class="meta-value">12+</span>
                            <span class="meta-label">
                                лет практики
                            </span>
                        </div>

                        <div class="meta-item">
                            <span class="meta-value">38</span>
                            <span class="meta-label">
                                проектов
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- PRACTICE --}}
    <section class="section" id="practice">

        <div class="container">

            <div class="section-top">

                <div class="section-number">
                    04 / 06
                </div>

                <div class="section-intro">

                    <p class="eyebrow">
                        Из практики
                    </p>

                    <h2>
                        Работаем с задачами,
                        <br>
                        требующими точности
                    </h2>

                </div>

            </div>


            <div class="practice-list">

                <article class="practice-item">

                    <span>01</span>

                    <h3>
                        Корпоративные споры
                    </h3>

                    <p>
                        Защита интересов участников бизнеса,
                        разрешение конфликтов и сопровождение
                        корпоративных процедур.
                    </p>

                    <span class="practice-arrow">↗</span>

                </article>


                <article class="practice-item">

                    <span>02</span>

                    <h3>
                        Коммерческие споры
                    </h3>

                    <p>
                        Анализ обстоятельств дела, разработка
                        правовой позиции и сопровождение
                        клиента на различных этапах спора.
                    </p>

                    <span class="practice-arrow">↗</span>

                </article>


                <article class="practice-item">

                    <span>03</span>

                    <h3>
                        Сделки и договоры
                    </h3>

                    <p>
                        Проверка документов, оценка рисков
                        и юридическое сопровождение
                        коммерческих сделок.
                    </p>

                    <span class="practice-arrow">↗</span>

                </article>

            </div>

        </div>

    </section>


    {{-- CONSULTATION --}}
    <section class="section consultation" id="consultation">

        <div class="container">

            <div class="consultation-layout">

                <div class="section-number">
                    05 / 06
                </div>

                <div>

                    <p class="eyebrow">
                        Консультация
                    </p>

                    <h2>
                        Расскажите
                        <br>
                        о вашей задаче
                    </h2>

                    <p class="consultation-description">
                        Опишите ситуацию в свободной форме.
                        Мы изучим запрос и свяжемся с вами,
                        чтобы обсудить возможные варианты решения.
                    </p>

                </div>

                <form
    class="consultation-form"
    action="{{ route('consultation.store') }}"
    method="POST"
    novalidate
>
    @csrf

    <div class="form-group">

        <label for="name">
            Имя
        </label>

        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            placeholder="Ваше имя"
            required
        >

    </div>


    <div class="form-group">

        <label for="contact">
            Контакт
        </label>

        <input
            type="text"
            id="contact"
            name="contact"
            value="{{ old('contact') }}"
            placeholder="Телефон или E-mail"
            required
        >

    </div>


    <div class="form-group">

        <label for="message">
            Задача
        </label>

        <textarea
            id="message"
            name="message"
            placeholder="Кратко опишите ситуацию"
            required
        >{{ old('message') }}</textarea>

    </div>


    <button
        type="submit"
        class="submit-button"
    >
        Отправить запрос
    </button>

</form>

            </div>

        </div>

    </section>

@endsection