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
        </tr>
      </thead>
      <tbody class="bg-white divide-y">
        @foreach ($users as $user)
          <tr class="text-gray-700">
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
          </tr>
        @endforeach
      </tbody>
    </table>
  </x-slot>
</x-app-layout>
