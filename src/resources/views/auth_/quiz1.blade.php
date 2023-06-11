<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          ITクイズ
      </h2>
      <a href="{{ route('auth.quiz1.create') }}">{{ __('新規作成') }}</a>
  </x-slot>

  <x-slot name="table">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
          <th class="px-4 py-3">ID</th>
          <th class="px-4 py-3">問題文</th>
          <th class="px-4 py-3">画像名</th>
          <th class="px-4 py-3">引用文</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y">
        @foreach ($questions as $question)
          <tr class="text-gray-700">
            <td class="px-4 py-3">
              <p class="font-semibold items-center text-sm">{{ $question->id }}</p>
            </td>
            <td class="px-4 py-3">
              <p class="font-semibold items-center text-sm">{{ $question->content}}</p>
            </td>
            <td class="px-4 py-3">
              <p class="font-semibold items-center text-sm">{{ $question->image}}</p>
            </td>
            <td class="px-4 py-3">
              <p class="font-semibold items-center text-sm">{{ $question->supplement}}</p>
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center space-x-4 text-sm">
                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-500 rounded-lg focus:outline-none focus:shadow-outline-gray"><a href="{{route('auth.quiz1.edit',['id'=>$question->id])}}">{{ __('編集') }}</a></button>
                <form method="POST" action="{{route('auth.quiz1.destroy',['id'=>$question->id])}}">
                  @csrf
                  <button type="submit" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-gray-500 rounded-lg focus:outline-none focus:shadow-outline-gray">削除</button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </x-slot>
</x-app-layout>
