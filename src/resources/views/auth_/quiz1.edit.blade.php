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
                    <h1>編集</h1>
                    <form method="POST" action="{{route('auth.quiz1.update',['id' =>$question->id])}}">
                        {{-- @method('PATCH') --}}
                        {{-- method patchとは？ --}}
                        @csrf

                        <div>
                            問題文
                            <input type="text" name=content value="{{ $question->content}}">
                        </div>

                        <div>
                            画像
                            <input type="text" name=image value="{{ $question->image }}">
                        </div>

                        <div>
                            引用文
                            <input type="text" name=supplement value="{{ $question->supplement}}">
                        </div>

                        <input type="submit" value="更新する">
                        <a href="{{route('auth.quiz1')}}">{{ __('一覧に戻る') }}</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
