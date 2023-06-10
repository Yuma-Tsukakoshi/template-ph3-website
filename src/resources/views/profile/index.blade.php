<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          ユーザー
      </h2>
  </x-slot>

  <x-slot name="table">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
          <th class="px-4 py-3">ユーザーID</th>
          <th class="px-4 py-3">名前</th>
          <th class="px-4 py-3">メールアドレス</th>
          <th class="px-4 py-3">登録日時</th>
          <th class="px-4 py-3">操作</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y">
        <tr class="text-gray-700">
          @foreach ($users as $user)
            <td class="px-4 py-3">
              <p class="font-semibold items-center text-sm">{{ $user->id }}</p>
            </td>
            <td class="px-4 py-3">
              <p class="font-semibold items-center text-sm">{{ $user->name}}</p>
            </td>
            <td class="px-4 py-3">
              <p class="font-semibold items-center text-sm">{{ $user->email}}</p>
            </td>
            <td class="px-4 py-3">
              <p class="font-semibold items-center text-sm">{{ $user->created_at}}</p>
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center space-x-4 text-sm">
                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-500 rounded-lg focus:outline-none focus:shadow-outline-gray"><a href="#">編集</a></button>
                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-gray-500 rounded-lg focus:outline-none focus:shadow-outline-gray"><a href="#">削除</a></button>
              </div>
            </td>
          @endforeach
        </tr>
      </tbody>
    </table>
  </x-slot>
</x-app-layout>
