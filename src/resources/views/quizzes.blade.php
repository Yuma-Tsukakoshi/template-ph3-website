<x-top>
    <x-slot name='title'>
      クイズ一覧
    </x-slot>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/auth') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        

        <main class="l-main">
            <section class="p-hero p-quiz-hero">
                <div class="l-container">
                    <h1 class="p-hero__title">
                        <a href="{{ route('') }}"><span class="p-hero__title__inline">ITクイズ</span></a>
                        <a href="{{ route('') }}"><span class="p-hero__title__inline">自己紹介クイズ</span></a>
                    </h1>
                </div>
            </section>
            <!-- /.p-hero .p-quiz-hero -->
        </main>
        {{-- {{$question}} --}}

        <footer class="l-footer p-footer">
            <div class="p-fixedLine">
                <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer"
                    class="p-fixedLine__link">
                    <i class="u-icon__line"></i>
                    <p class="p-fixedLine__link__text"><span class="u-sp-hidden">POSSE</span>公式LINEで<br>最新情報をGET！</p>
                    <i class="u-icon__link"></i>
                </a>
            </div>
            <div class="l-footer__inner">
                <div class="p-footer__siteinfo">
                    <span class="p-footer__logo">
                        <img src="{{asset('/assets/img/logo.svg')}}" alt="POSSE">
                    </span>
                    <a href="https://posse-ap.com/" target="_blank" rel="noopener noreferrer"
                        class="p-footer__siteinfo__link">POSSE公式サイト</a>
                </div>
                <div class="p-footer__sns">
                    <ul class="p-sns__list p-footer__sns__list">
                        <li class="p-sns__item">
                            <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer"
                                class="p-sns__item__link" aria-label="Twitter">
                                <i class="u-icon__twitter"></i>
                            </a>
                        </li>
                        <li class="p-sns__item">
                            <a href="https://www.instagram.com/posse_programming/" target="_blank"
                                rel="noopener noreferrer" class="p-sns__item__link" aria-label="instagram">
                                <i class="u-icon__instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-footer__copyright">
                <small lang="en">©︎2022 POSSE</small>
            </div>
        </footer>
        <!-- /.l-footer .p-footer -->
    </div>

</x-top>

