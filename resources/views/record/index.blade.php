<x-main-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </x-slot>
    <x-slot name="header">
        <div class="container">
            <h2>
                入力
            </h2>
        </div>
    </x-slot>

    <div class="container">
        <div class="flex">
            <div class="col-2 inner-wrapper">
                <h3>実績</h3>
                <table class="table">
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
            <div class="col-2 inner-wrapper">
                <h3>入力</h3>
                <form method="post" action="">
                    @csrf
                    <div class="form__controller">
                        <label for="date">日付
                            <input type="text" name="date" id="price">
                        </label>
                    </div>

                    <div class="form__controller">
                        <label for="price">金額
                            <input type="text" name="price" id="price">
                        </label>
                    </div>

                    <div class="form__controller--checkbox">
                        <label class="form__radio">
                            <input type="radio" name="category_id">
                            <span>Category</span>
                        </label>
                    </div>

                    <div class="form__controller">
                        <label>
                            メモ
                            <textarea name="detail" id="" cols="30" rows="10"></textarea>
                        </label>

                    </div>

                    <button>
                        保存
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-main-layout>
