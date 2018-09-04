@extends('layout')
@section('content')
    <div class="container-fluid m-xl-0 p-xl-0">
        <div class="row m-xl-0 p-xl-0 mb-xl-5" data-one>
            <div class="col-xl-12 m-xl-0 p-xl-0">
                <div class="row m-0 p-0">
                    <div class="container col-xl-6 p-xl-0">
                        <nav class="navbar navbar-expand-xl navbar-dark bg-transparent z-depth-0 p-xl-0" >
                            <a class="navbar-brand text-white mr-xl-0 ml-xl-0 mb-xl-0 mt-xl-3 pt-xl-2" href="/">
                                <img src="{{asset('assets/images/logo-desktop.png')}}" alt="" class="img-fluid">
                            </a>
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav ml-xl-auto" data-nav>
                                    <li class="nav-item pr-xl-1 pl-xl-2">
                                        <a class="nav-link text-white p-xl-0" href="{{asset('document/rules.pdf')}}" target="_blank" style="font-size: large" data-rule>Правила</a>
                                    </li>
                                    <li class="nav-item pr-xl-1 pl-xl-2">
                                        <a class="nav-link text-white p-xl-0" href="#" style="font-size: large" data-to="register">Регистрация</a>
                                    </li>
                                    <li class="nav-item pr-xl-1 pl-xl-2">
                                        <a class="nav-link text-white p-xl-0" href="#" style="font-size: large" data-to="faq">FAQ</a>
                                    </li>
                                    <li class="nav-item pr-xl-1 pl-xl-2">
                                        <a class="nav-link text-white p-xl-0" href="#" style="font-size: large" data-to="feedback">Обратная связь</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row m-xl-0 p-xl-0" data-first>
                    <div class="col-xl-12 m-xl-0 p-xl-0" >
                        <div class="row m-xl-0 p-xl-0 d-flex align-content-center position-relative">
                            <div class="col-xl-10 m-xl-0 p-xl-0">
                                <img src="{{asset('assets/images/slogan-desktop.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-xl-12 m-xl-0 p-xl-0 position-absolute align-self-center button-to-register-one">
                                <button class="btn btn-primary btn-lg" data-to="register">участвовать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-xl-0 p-xl-0">
                    <div class="col-xl-6 mx-auto text-white text-justify p-xl-0" >
                <span>
                    С 15 августа по 15 сентября совершите покупку смартфона HONOR 7C в магазинах сетей: «5-й элемент», «На связи», «Евросеть», «Алло», «Связной», на территории Республики Беларусь и участвуйте в розыгрыше 3-х квадрокоптеров.
                </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-two data-rule>
            <div class="col-xl-12 m-xl-0 p-xl-0">
                <div class="row m-xl-0 p-xl-0 mt-xl-3">
                    <div class="col-xl-6 mx-auto text-white text-center p-xl-0" >
                        <p class="h1 rules-honor text-uppercase">
                            правила участия
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="row" >
                    <div class="col-xl-12 text-center">
                        <img src="{{asset('assets/images/rules-and-wave.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row m-xl-0 mt-xl-1 p-xl-0">
                    <div class="col-xl-8 p-xl-0 mx-auto">
                        <div class="row m-xl-0 p-xl-0">
                            <div class="col-xl-4 text-center text-white">
                                <p class="h4">
                                    в любом <br>из магазинов <br><strong>партнёров<sup>*</sup></strong>
                                </p>
                            </div>
                            <div class="col-xl-4 text-center text-white">
                                <p class="h4">
                                    на сайте <br>
                                    igra-honor.by
                                </p>
                            </div>
                            <div class="col-xl-4 text-center text-white">
                                <p class="h4">
                                    3-х квадрокоптеров <br>
                                    DJI Mavic Air <br>
                                    Arctic White
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 mt-xl-3 p-xl-0 mx-auto button-to-register-two">
                        <button class="btn btn-primary btn-lg" data-to="register">участвовать</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="row m-xl-0 p-xl-0 d-flex align-content-center position-relative" data-three data-register>
            <div class="col-xl-12 m-xl-0 p-xl-0 mb-xl-2">
                <div class="row m-xl-0 p-xl-0 mt-xl-3">
                    <div class="col-xl-6 mx-auto text-white text-center p-xl-0" >
                        <p class="h1 register-honor text-uppercase">
                            Регистрация
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 m-xl-0 p-xl-0">
                <div class="row m-xl-0 p-xl-0 mt-xl-3 mb-xl-3">
                    <div class="col-xl-6 mx-auto text-white text-center p-xl-0" >
                        <p class="h4 text-white">
                            Заполните все указанные поля в регистрационной форме ниже.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 m-auto p-xl-0 align-self-center position-absolute">
                <div class="row m-xl-0 p-xl-0">
                    <div class="col-xl-12 m-xl-0 p-xl-0">
                        <img src="{{asset('assets/images/waves-two.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-xl-8 mx-auto mt-xl-2 p-xl-0" id="registration">
                <div class="row m-0 p-0">
                    <div class="col-xl-7 m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-12 col-sm-12 col-xl-12 mb-2">
                                <input type="text" id="name" class="form-control" placeholder="Фамилия Имя Отчество" required>
                            </div>
                            <div class="col-12 col-sm-12 col-xl-12 mb-2">
                                <input type="email" id="email" class="form-control" placeholder="Адрес электронной почты" required>
                            </div>
                            <div class="col-12 col-sm-12 col-xl-12 mb-2">
                                <input type="text" id="phone" class="form-control" placeholder="Мобильный номер телефона" required>
                            </div>
                            <div class="col-4 col-sm-4 col-xl-4 mb-2">
                                <input type="text" id="index" class="form-control" placeholder="Индекс" required>
                            </div>
                            <div class="col-8 col-sm-8 col-xl-8 mb-2">
                                <input type="text" id="address" class="form-control" placeholder="Почтовый адрес" required>
                            </div>
                            <div class="col-8 col-sm-8 col-xl-12 mt-2">
                                <div class="form-check d-flex align-content-center pl-0">
                                    <label class="container"><small class="align-self-center ml-3 text-white">Я подтверждаю свое согласие на участие в рекламной игре</small>
                                        <input type="checkbox" id="agreement" value="disagree">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-8 col-sm-8 col-xl-12 mt-2">
                                <div class="form-check d-flex align-content-center pl-0">
                                    <label class="container"><small class="align-self-center ml-3 text-white">Я подтверждаю изучение <a href="{{asset('document/rules.pdf')}}" target="_blank" class="text-danger">правил рекламной игры</a></small>
                                        <input type="checkbox" id="rules" value="disagree">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row m-0 p-0">
                            <div class="col-12 col-sm-12 col-xl-12 mb-2">
                                <input type="text" id="check" class="form-control" placeholder="Номер кассового чека" required>
                            </div>
                            <div class="col-12 col-sm-12 col-xl-12 mb-2">
                                <input type="text" id="date" class="form-control" placeholder="Дата приобретения товара" required>
                            </div>
                            <div class="col-12 col-sm-12 col-xl-12 mb-2">
                                <input type="text" id="imei" class="form-control" placeholder="IMEI*" required>
                            </div>
                            <div class="col-12 col-sm-12 col-xl-12 mb-2">
                                <div class="md-form m-xl-0">
                                    <div class="file-field">
                                        <div class="form-control pl-3 bg-white">
                                            <span id="photoFilename" style="font-weight: bolder; color: rgb(117,130,137)">Загрузить фото чека</span>
                                            <input type="file" id="photo" name="photo" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-xl-12 text-center p-5">
                        <button class="btn btn-primary btn-lg register-button" id="register" data-send>
                            Зарегистрироваться
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-xl-0 p-xl-0 d-flex align-content-center position-relative" data-four data-faq>
            <div class="col-xl-12 m-xl-0 p-xl-0 mb-xl-2">
                <div class="row m-xl-0 p-xl-0 mt-xl-3">
                    <div class="col-xl-6 mx-auto text-white text-center p-xl-0" >
                        <p class="h1 register-honor text-uppercase">
                            FAQ
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 mx-auto p-xl-0 text-center" style="z-index: 1">
                <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card mb-2">
                        <div class="card-header" role="tab" id="headingOne">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="mb-0">
                                    Кто может участвовать в рекламной игре?
                                </span>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                            <div class="card-body">
                                К участию в игре допускаются: <br>
                                -	граждане Республики Беларусь, постоянно проживающие в Республике Беларусь;<br>
                                -	иностранные лица и лица без гражданства, имеющие вид на жительство на территории Республики Беларусь, постоянно проживающие в Республике Беларусь<br>
                                Участниками рекламной игры не могут быть члены комиссии, а также лица, состоящие в трудовых отношениях с организатором, их супруги, их близкие родственники и лица, находящиеся с ними в отношениях свойства.

                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="mb-0">
                                    Если я выиграл, как я об этом узнаю?
                                </span>
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                            <div class="card-body">
                                Вам позвонят по телефону, указанному при регистрации в игре. Также вам отправят заказное письмо с уведомлением о доставке по адресу, который вы указали при регистрации
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header" role="tab" id="headingThree">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="mb-0">
                                    Где я могу купить смартфон Honor 7С?
                                </span>
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx">
                            <div class="card-body">
                                Смартфон Honor 7С вы можете купить в магазинах сетей: «5-й элемент», «На связи», «Евросеть», «Алло», «Связной», на территории Республики Беларусь. Точные адреса магазинов смотрите в правилах рекламной игры.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header" role="tab" id="headingFour">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="mb-0">
                                    Когда и где будет проходить розыгрыш призов?
                                </span>
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionEx">
                            <div class="card-body">
                                Розыгрыш всех призов будет проводиться 20 сентября 2018 года в 14:00 по адресу: г. Минск, пр-т Дзержинского 5 (БЦ «Rubin Plaza», офисный блок №1).
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-xl-0 p-xl-0 d-flex align-content-center position-relative" data-five data-feedback>
            <div class="col-xl-12 m-xl-0 p-xl-0 mb-xl-1">
                <div class="row m-xl-0 p-xl-0 mt-xl-1">
                    <div class="col-xl-6 mx-auto text-white text-center p-xl-0" >
                        <p class="h1 feedback-honor text-uppercase">
                            обратная связь
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 mx-auto mb-xl-2 mt-xl-2 text-center" style="z-index: 0">
                <span class="text-white">Телефон горячей линии: <a href="tel:+375296081949" style="color: inherit">+375 29 608 19 49</a> работает с 14:00 до 17:00 в будние и выходные дни</span>
            </div>
            <div class="col-xl-8 mx-auto p-xl-0" style="z-index: 0">
                <div class="row m-0 p-0">
                    <div class="col-12 col-sm-12 col-xl-4 mb-3">
                        <input type="text" id="feedbackName" class="form-control" placeholder="Имя" required>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-8 mb-3">
                        <input type="text" id="feedbackPhoneOrEmail" class="form-control" placeholder="Телефон/E-mail" required>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-12 mb-3">
                        <textarea type="text" id="question" class="form-control" rows="4" placeholder="Ваш вопрос" required></textarea>
                    </div>
                    <div class="col-xl-12 text-center p-2">
                        <button class="btn btn-primary btn-lg w-25 button-send-feedback" id="sendQuestion" data-send>
                            отправить
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-six>
            <div class="col-xl-12">
                <nav class="navbar navbar-expand-xl navbar-dark bg-transparent z-depth-0">
                    <div class="collapse navbar-collapse" id="navbarNavFooter">
                        <ul class="navbar-nav mx-xl-auto">
                            <li class="nav-item pr-xl-2 pl-xl-2">
                                <a class="nav-link text-white p-xl-0" href="{{asset('document/rules.pdf')}}" target="_blank" style="font-size: large" data-rule>Правила</a>
                            </li>
                            <li class="nav-item pr-xl-2 pl-xl-2">
                                <a class="nav-link text-white" href="#" style="font-size: large" data-to="register">Регистрация</a>
                            </li>
                            <li class="nav-item pr-xl-2 pl-xl-2">
                                <a class="nav-link text-white" href="#" style="font-size: large" data-to="faq">FAQ</a>
                            </li>
                            <li class="nav-item pr-xl-2 pl-xl-2">
                                <a class="nav-link text-white" href="#" style="font-size: large" data-to="feedback">Обратная связь</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-xl-12 text-center text-white" style="z-index: 1; line-height: 1em">
                <small>Рекламная игра &laquo;Получай больше с HONOR&raquo; зарегистрирована в Министерстве антимонопольного регулирования и торговли Республики Беларусь, свидетельство №3349 от 08.08.2018.
                    <br>Организатор: Издательско-производственное частное унитарное предприятие &laquo;Проспектпресс&raquo;, 220050, г. Минск, ул. Интернациональная, д.16., УНП 101520868.
                    <br>Срок проведения рекламной игры: 15.08.2018 – 10.11.2018 г.
                </small>
            </div>
        </div>
    </div>
@endsection