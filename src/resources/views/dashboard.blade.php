<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white w-3/5 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <x-slot name="table">
        <table class="w-full whitespace-no-wrap">
            <tbody class="bg-white divide-y">
                <tr class="text-gray-700 text-3xl">
                    <td class="px-4 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="#">
                            <h2 class="ml-4">ITクイズ一覧へ</h2>
                        </a>
                    </td>
                    <td class="px-4 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="#">
                            <h2 class="ml-4">自己紹介クイズ一覧へ</h2>
                        </a>
                    </td>
                    <td class="px-4 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="#">
                            <h2 class="ml-4">ユーザー一覧へ</h2>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </x-slot>
</x-app-layout>
