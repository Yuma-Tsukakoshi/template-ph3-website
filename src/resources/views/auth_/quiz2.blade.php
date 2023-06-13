<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          自己紹介クイズ
      </h2>
      <a href="{{ route('questions2.create') }}">{{ __('新規作成') }}</a>
      <div class="max-w-7xl mx-auto px-6">
        @if (session('message'))
            <div class="text-red-600 border font-bold" role="alert">
                {{ session('message') }}
            </div>
        @endif
      </div>
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
                  <a href="{{route('questions2.edit',['id'=>$question->id])}}">
                    <x-primary-button>
                      {{ __('編集') }}
                    </x-primary-button>
                  </a>
                <form method="POST" action="{{route('question2.destroy',['id'=>$question->id])}}">
                  @csrf
                  {{-- @method('delete') --}}
                  <x-primary-button class="bg-red-700 ml-2 btn-dell" >
                    {{ __('削除') }}
                  </x-primary-button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </x-slot>

  @section('script')
  <script>
    $(function(){
      $(".btn-dell").click(function(){
        if(confirm("本当に削除しますか？")){
        //そのままsubmit（削除）
        }else{
        //cancel
        return false;
        }
      });
    });
  </script>
  @endsection

</x-app-layout>
