@extends('layouts/main')

@section('content')
    @push('scripts')
        <script src="{{asset('js/script.js')}}"></script>
    @endpush

    <h3>Личный кабинет</h3>
    <div class="commonContainer">
        <nav>
            <ul class="privateMenu">
                <li class="item "><a href="" class="item_link after">Сообщения</a>
                    <ul class="submenu">
                        <li class="item_2"><a href="" class="item_link2"> - входящие</a></li>
                        <li class="item_2 "><a href="" class="item_link2">отправленные</a></li>
                        <li class="item_2"><a href="" class="item_link2">новое</a></li>
                    </ul>
                </li>
                <li class="item"><a href="" class="item_link after">Мои лоты</a>
                    <ul class="submenu">
                        <li class="item_2"><a href="" class="item_link2">активные</a></li>
                        <li class="item_2"><a href="" class="item_link2">архивные</a></li>
                        <li class="item_2"><a href="" class="item_link2">все</a></li>
                    </ul>
                </li>
                <li class="item"><a href="" class="item_link after">Мои ставки</a>
                    <ul class="submenu">
                        <li class="item_2"><a href="" class="item_link2">активные</a></li>
                        <li class="item_2"><a href="" class="item_link2">архивные</a></li>
                        <li class="item_2"><a href="" class="item_link2">все</a></li>
                    </ul>
                </li>
                <li class="item" ><a href="" class="item_link profile">Профиль</a></li>
                <li class="item"><a href="{{route('newAuction')}}" class="item_link n_lot">Создать новый лот</a></li>
            </ul>
        </nav>
        <div class="menuContent">
            <div class="pageContent reddd " data-class="red">
                <h5>сообщения</h5>
                <div class="wrapContent"></div>
            </div>
            <div class="pageContent gren">
                <h5>Лоты</h5>
                <div class="wrapContent"></div>
            </div>
            <div class="pageContent blue">
                <h5>Ставки</h5>
                <div class="wrapContent"></div>
            </div>
            <div class="pageContent reddd">
                <h5>Profile</h5>
                <div class="wrapContent"></div>
            </div>
        </div>
    </div>
    <div class="red"></div>

@endsection