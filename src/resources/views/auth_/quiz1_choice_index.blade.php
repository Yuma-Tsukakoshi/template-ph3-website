<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- web.php -> methodを探す-> Root::resource ->  --}}

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{追加していく}} --}}
                    <div>
                        <h1>一覧表示</h1>
                        <table>
                            <tr>
                                <th>問題ID</th>
                                <th>選択肢</th>
                                <th>正誤</th>
                            </tr>
                            @foreach ($choices as $choice)
                                <tr class="py-5">
                                    <td>{{ $choice->question_id }}</td>
                                    <td>{{ $choice->name }}</td>
                                    <td>{{ $choice->valid }}</td>
                                    <td><a href="{{ route('choices.edit', ['question_id' => $choice->question_id,'choice'=>$choice->id]) }}">{{ __('編集') }}</a>
                                    </td>
                                    <td>
                                        <form method="POST"
                                            action="{{ route('choices.destroy', ['question_id' => $choice->question_id,'choice'=>$choice->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">削除</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <a href="{{ route('choices.create', ['question_id' => $choice->question_id]) }}">{{ __('新規作成') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
