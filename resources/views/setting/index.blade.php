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
            <div class="col-side">
                <div class="col-side__block">
                    <ul>
                        <li>
                            <a href="{{ route('setting.index') }}">基本設定</a>
                        </li>
                        <li>
                            <a href="#">カテゴリー設定</a>
                        </li>
                        <li>
                            <a href="#">予算設定</a>
                        </li>
                        <li>
                            <a href="#">固定費</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-main inner-wrapper">
                <form action="">
                    <label for="">
                        月の開始日
                        <input type="number" name="start_date">
                    </label>
                    <button>
                        保存
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>
