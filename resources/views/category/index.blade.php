<x-main-layout>
    <x-slot name="header">
        <div class="container">
            <h2>
                設定
            </h2>
        </div>
    </x-slot>

    <div class="container">
        <div class="flex">
            <div class="col-side inner-wrapper">
                @include('layouts.setting_side')
            </div>
            <div class="col-main inner-wrapper">
                <h3>カテゴリー設定</h3>
                <form method="post" action="{{ route('categories.store') }}">
                    @csrf
                    <label for="">
                        カテゴリー名
                        <input type="text" name="name">
                    </label>
                    <div>
                        <label>
                            <input type="radio" name="is_expenditure" value="1">
                            <span>支出</span>
                        </label>
                        <label>
                            <input type="radio" name="is_expenditure" value="0">
                            <span>収入</span>
                        </label>
                    </div>

                    <button>
                        保存
                    </button>
                </form>

                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>カテゴリー名</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <th>{{ $category->name }}</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
