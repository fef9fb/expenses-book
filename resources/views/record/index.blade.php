<x-main-layout>
    <x-slot name="header">
        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="container">
        <div class="col-2">
            <div>
                <table>
                    <thead>
                    <tr>
                        <td>項目名</td>
                        <td>予算</td>
                        <td>実績</td>
                        <td>残</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                        record index
                </table>
            </div>
            <div>
                <form action="">
                    <button>
                        保存
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-main-layout>
