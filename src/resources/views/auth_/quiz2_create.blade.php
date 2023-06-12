<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- web.php -> methodを探す-> Root::resource ->  --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{追加していく}} --}}
                    <h1>新規作成</h1>
                    <form method="POST" action="{{route('question2.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="form-content">問題文</label>
                            <input type="text" name="content" id="form-content" required>
                        </div>

                        <div>
                            <label for="form-image">画像</label>
                            {{-- <input type="file" name="telephone" id="form-tel"> --}}
                            {{-- TODO fileを画像として挿入 --}}
                            <input type="text" name="image" id="form-image" required>
                        </div>

                        <div>
                            <label for="form-supplement">引用</label>
                            <input type="text" name="supplement" id="form-supplement">
                        </div>
                        
                        <div>
                            <label for="form-quizId">分類ID(ITクイズ⇒1,自己紹介クイズ⇒2)</label>
                            <input type="number" min="1" max="2" name="quiz_id" id="form-quizId">
                        </div>

                        <button type="submit">登録</button>
                        <a href="{{ route('questions2.index')}}">{{ __('一覧へ戻る') }}</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
