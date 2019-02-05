@extends("layouts/main")

@section('content')
    <div class="containerContent">
        <h3>Создание нового лота</h3>
        <form action="" class="formAuction" type="post" enctype="multipart/form-data">
            @csrf
            <div class="wrapLot">
                <div class="leftContainer cont">
                    <div class="input_line">
                        <label for="name">Название лота:</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="input_line">
                        <label for="priceStart">Стартовая цена:</label>
                        <input type="number" name="stPrice" id="priceStart" step="0.01" value="1.00">
                    </div>
                    <div class="input_line">
                        <label for="priceStep">Шаг ставки:</label>
                        <input type="number" name="step" id="priceStep" step="0.01" value="0.00">
                    </div>
                    <div class="input_line">
                        <label>Город:</label>
                        <input type="text" name="city" id="location">
                    </div>
                    <div class="input_line">
                        <label>Доставка:</label>
                        <input type="text" name="delivery" id="delivery">
                    </div>
                    <div class="input_line">
                        <label>Оплата:</label>
                        <input type="text" name="payment" id="payment">
                    </div>
                    <div class="input_line">
                        <label for="img_input">Фото:</label>
                        <input type="file" name="img" id="img_input" multiple>
                    </div>
                    <img id="upload-image" src="upload.svg">
                </div>

                <div class="rightContainer cont">
                    <div class="wrapContainerParams">
                        <div class="lineAddGoods">
                            <p>Добавить позицию</p>
                            <div class="add_tovar button">+</div>
                        </div>
                        <div class="wrap_new_good">
                            <div class="flex mb">
                                <label>Имя товара:
                                    <input type="text" name="goods_name" id="newGoodName">
                                </label>
                                <label >Выбирите категорию:
                                    <select name="category" class="category" required id="goodCategory">
                                        <option value="" class="catItem"></option>
                                        <option value="1" class="catItem">MTG</option>
                                        <option value="1" class="catItem">MTG</option>
                                    </select>
                                </label>
                            </div>

                            <div class="wrap_category_parameters">
                                <select name="select_name" class="attr_select">
                                    <option value="">издание</option>
                                    <option value="">издание_1</option>
                                    <option value="">издание_2</option>
                                </select>
                                <select name="select_name" class="attr_select">
                                    <option value="">цвет</option>
                                    <option value="">красный</option>
                                    <option value="">зеленый</option>
                                </select>
                                <select name="select_name" class="attr_select">
                                    <option value="">состояние</option>
                                    <option value="">убитое</option>
                                    <option value="">пользованое</option>
                                    <option value="">новое</option>
                                    <option value="">надкусаное</option>
                                </select>
                                <select name="select_name" class="attr_select">
                                    <option value="">издание</option>
                                    <option value="">издание_1</option>
                                    <option value="">издание_2</option>
                                </select>
                                <select name="select_name" class="attr_select">
                                    <option value="">цвет</option>
                                    <option value="">красный</option>
                                    <option value="">зеленый</option>
                                </select>
                                <select name="select_name" class="attr_select">
                                    <option value="">состояние</option>
                                    <option value="">убитое</option>
                                    <option value="">пользованое</option>
                                    <option value="">новое</option>
                                    <option value="">надкусаное</option>
                                </select>
                            </div>
                            <div class="line_buttons flex">
                                <div class="button" id="delPamams">delete</div>
                                <div class="button" id="addPamams">add</div>
                            </div>
                        </div>

                        <div class="line_tovar" >
                            <div class="tovar">
                                <p class="tovar_name line_elem">Souldger</p>
                                <p class="tovar_value line_elem">red</p>
                                <p class="tovar_value line_elem">foil</p>
                                <p class="tovar_value line_elem">Mint/NM</p>
                            </div>
                            <div class="button">delete</div>
                        </div>
                        <div class="line_tovar" >
                            <div class="tovar">
                                <p class="tovar_name line_elem">Souldger</p>
                                <p class="tovar_value line_elem">red</p>
                                <p class="tovar_value line_elem">foil</p>
                                <p class="tovar_value line_elem">Mint/NM</p>
                            </div>
                            <div class="button">delete</div>
                        </div>

                    </div>
                </div>



            </div>
            <p class="title">Описание:</p>
            <textarea name="description" id="about" >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis explicabo in minima quasi quidem recusandae rerum soluta tempore temporibus ullam! Accusamus beatae blanditiis dolor est, id odit placeat quas quo.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cupiditate dicta, dolorem fuga hic illum nihil nulla placeat recusandae sequi veniam veritatis! Cumque eaque eos impedit molestiae mollitia tempora!
        </textarea>
            <div class="line_button">
                <div class="button createLot">Create</div>
            </div>
        </form>
    </div>
@endsection