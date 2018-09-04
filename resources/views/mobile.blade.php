{{--<div class="container-fluid m-0 p-0">
    <div class="row m-0 p-0 d-flex justify-content-center align-content-center" id="registration">
        <div class="align-self-center m-auto col-6">
            <div class="row m-0 p-0">
                <div class="col-7 m-0 p-0">
                    <div class="row m-0 p-0">
                        <div class="col-12 mb-2">
                            <input type="text" id="name" class="form-control" placeholder="Фамилия Имя Отчество" required>
                        </div>
                        <div class="col-12 mb-2">
                            <input type="email" id="email" class="form-control" placeholder="Адрес электронной почты" required>
                        </div>
                        <div class="col-12 mb-2">
                            <input type="text" id="phone" class="form-control" placeholder="Мобильный номер телефона" required>
                        </div>
                        <div class="col-4 col-sm-4 col-4 mb-2">
                            <input type="text" id="index" class="form-control" placeholder="Индекс" required>
                        </div>
                        <div class="col-8 col-sm-8 col-8 mb-2">
                            <input type="text" id="address" class="form-control" placeholder="Полный адрес (область, район, населенный пункт)" required>
                        </div>
                        <div class="col-8 col-sm-8 col-12 mt-2">
                            <div class="form-check d-flex align-content-center pl-0">
                                <input type="checkbox" class="form-check-input" id="agreement" value="disagree">
                                <label class="form-check-label" for="agreement"></label>
                                <small class="align-self-center ml-3">Я подтверждаю свое согласие на участие в рекламной игре</small>
                            </div>
                        </div>
                        <div class="col-8 col-sm-8 col-12 mt-2">
                            <div class="form-check d-flex align-content-center pl-0">
                                <input type="checkbox" class="form-check-input" id="rules" value="disagree">
                                <label class="form-check-label" for="rules"></label>
                                <small class="align-self-center ml-3">Я подтверждаю изучение <a href="/rules" class="text-danger">правил рекламной игры</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row m-0 p-0">
                        <div class="col-12 mb-2">
                            <input type="text" id="check" class="form-control" placeholder="Номер кассового чека" required>
                        </div>
                        <div class="col-12 mb-2">
                            <input type="text" id="date" class="form-control" placeholder="Дата приобретения товара" required>
                        </div>
                        <div class="col-12 mb-2">
                            <input type="text" id="imei" class="form-control" placeholder="IMEI" required>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="md-form">
                                <div class="file-field">
                                    <div class="form-control pl-3">
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
                <div class="col-12 text-center p-5">
                    <button class="btn btn-primary btn-lg" id="register">
                        Зарегистрироваться
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@extends('layout')
@section('content')
    <div class="container-fluid m-0 p-0" id="main">
        <div class="row m-0 p-0">
            <div class="container col-12 p-0">
                <nav class="navbar navbar-expand-xl navbar-dark bg-transparent z-depth-0">
                    <a class="navbar-brand text-white mr-0 ml-0 mb-0 mt-1 pt-1" href="/">
                        <img src="{{asset('assets/images/logo-mobile.png')}}" alt="" class="img-fluid">
                    </a>
                    <button class="hamburger hamburger--spin" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                          </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item animated item-1 ml-auto pr-2 pl-2">
                                <a class="nav-link text-white p-xl-0" href="{{asset('document/rules.pdf')}}" target="_blank" style="font-size: large" data-rule>Правила</a>
                            </li>
                            <li class="nav-item animated item-2 ml-auto pr-2 pl-2">
                                <a class="nav-link text-white" href="#" style="font-size: large" data-to="register">Регистрация</a>
                            </li>
                            <li class="nav-item animated item-3 ml-auto pr-2 pl-2">
                                <a class="nav-link text-white" href="#" style="font-size: large" data-to="faq">FAQ</a>
                            </li>
                            <li class="nav-item animated item-4 ml-auto pr-2 pl-2">
                                <a class="nav-link text-white" href="#" style="font-size: large" data-to="feedback">Обратная связь</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-12 m-0 p-0 text-center">
                <img src="{{asset('assets/images/slogan-mobile.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-10 mx-auto m-0 p-0 text-center participateOneMobile">
                <button class="btn btn-primary" data-to="register">
                    участвовать
                </button>
            </div>
            <div class="col-10 mx-auto m-0 pt-4 text-white text-justify description">
                <small>С 15 августа по 15 сентября совершите покупку смартфона HONOR 7C в магазинах сетей: «5-й элемент», «На связи», «Евросеть», «Алло», «Связной», на территории Республики Беларусь и участвуйте в розыгрыше 3-х квадрокоптеров.</small>
            </div>
        </div>
        <div class="row m-0 mb-5 p-0">
            <div class="col-10 mx-auto mt-5 p-0 text-center" style="z-index: 0" data-rule>
                <span class="h3 rules-honor">ПРАВИЛА УЧАСТИЯ</span>
            </div>
        </div>
        <div class="row m-0 p-0 mb-5 pt-5 position-relative d-flex align-content-center justify-content-center">
            <div class="col-12 mx-auto m-0 mt-5 p-0 text-center align-self-center position-absolute" style="z-index: 0">
                <img src="{{asset('assets/images/shapes1.png')}}" alt="" class="img-fluid" >
            </div>
            <div class="col-12 mx-auto m-0 mt-5 p-0 align-self-center position-absolute" style="z-index: 3">
                <div class="row m-0 p-0">
                    <div class="col-6 mx-auto m-0 p-0 text-center">
                        <img src="{{asset('assets/images/phones-mobile.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 mx-auto m-0 p-0 d-flex align-content-center justify-content-center">
                        <div class="row p-0 text-center align-self-center m-auto">
                            <div class="col-12 text-center">
                                <img src="{{asset('assets/images/buy-honor.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 text-white">
                                <span>в любом из магазинов <strong>партнеров<sup>*</sup></strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 p-0 mt-5 pt-5 position-relative d-flex align-content-center justify-content-center">
            <div class="col-12 mx-auto m-0 mt-5 p-0 text-center align-self-center position-absolute" style="z-index: 0">
                <img src="{{asset('assets/images/shapes2.png')}}" alt="" class="img-fluid" >
            </div>
            <div class="col-12 mx-auto m-0 mt-2 p-0 align-self-center position-absolute" style="z-index: 3">
                <div class="row m-0 p-0">
                    <div class="col-6 mx-auto m-0 p-0 d-flex align-content-center justify-content-center">
                        <div class="row text-center align-self-center m-auto">
                            <div class="col-12 text-center">
                                <img src="{{asset('assets/images/register-honor.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 text-white">
                                <span>на сайте <br> igra-honor.by</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mx-auto m-0 p-0 text-center">
                        <img src="{{asset('assets/images/check.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 p-0 mt-5 pt-5 position-relative d-flex align-content-center justify-content-center">
            <div class="col-12 mx-auto m-0 mt-5 p-0 text-center align-self-center position-absolute" style="z-index: 0">
                <img src="{{asset('assets/images/shapes3.png')}}" alt="" class="img-fluid" >
            </div>
            <div class="col-12 mx-auto m-0 mt-3 p-0 align-self-center position-absolute" style="z-index: 3">
                <div class="row m-0 p-0">
                    <div class="col-6 mx-auto m-0 p-0 text-center">
                        <img src="{{asset('assets/images/kopter.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 mx-auto m-0 p-0 d-flex align-content-center justify-content-center">
                        <div class="row text-center align-self-center m-auto">
                            <div class="col-12 text-center">
                                <img src="{{asset('assets/images/participate-honor.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 text-white">
                                <span>
                                    3-х квадрокоптеров <br>
                                    DJI Mavic Air <br>
                                    Arctic White
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5">
            <div class="col-10 mx-auto p-0 text-center participateTwoMobile" style="z-index: 0">
                <button class="btn btn-primary" data-to="register">
                    участвовать
                </button>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-10 mx-auto m-0 p-0 text-center" style="z-index: 0" data-register>
                <span class="h3 register-honor">РЕГИСТРАЦИЯ</span>
            </div>
            <div class="col-10 mx-auto m-0 mt-2 p-0 text-center text-white" style="z-index: 0">
            <span>Заполните все указанные поля <br>
            в регистрационной форме ниже.</span>
            </div>
        </div>
        <div class="row m-0 mb-2 mt-2 d-flex align-content-center position-relative" id="registration">
            <div class="col-12 m-auto p-0 align-self-center position-absolute waves" style="z-index: 0">
                <img src="{{asset('assets/images/waves-two-mobile.png')}}" alt="" class="img-fluid" >
            </div>
            <div class="col-10 mx-auto m-0 p-0" style="z-index: 3">
                <div class="row m-0 p-0">
                    <div class="col-12 m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-12 mb-2">
                                <input type="text" id="name" class="form-control" placeholder="Фамилия Имя Отчество" required>
                            </div>
                            <div class="col-12 mb-2">
                                <input type="email" id="email" class="form-control" placeholder="Адрес электронной почты" required>
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" id="phone" class="form-control" placeholder="Мобильный номер телефона" required>
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" id="index" class="form-control" placeholder="Индекс" required>
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" id="address" class="form-control" placeholder="Почтовый адрес" required>
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" id="check" class="form-control" placeholder="Номер кассового чека" required>
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" id="date" class="form-control" placeholder="Дата приобретения товара" required>
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" id="imei" class="form-control" placeholder="IMEI*" required>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="md-form m-0">
                                    <div class="file-field">
                                        <div class="form-control pl-3 bg-white">
                                            <span id="photoFilename" style="font-weight: bolder; color: rgb(117,130,137)">Загрузить фото чека</span>
                                            <input type="file" id="photo" name="photo" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="form-check d-flex align-content-center pl-0">
                                    <label class="container"><small class="align-self-center ml-3 text-white">Я подтверждаю свое согласие на участие в рекламной игре</small>
                                        <input type="checkbox" id="agreement" value="disagree">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="form-check d-flex align-content-center pl-0">
                                    <label class="container"><small class="align-self-center ml-3 text-white">Я подтверждаю изучение <a href="{{asset('document/rules.pdf')}}" target="_blank" class="text-danger">правил рекламной игры</a></small>
                                        <input type="checkbox" id="rules" value="disagree">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 mx-auto m-0 mt-2 pr-3 pl-3 text-justify text-white" style="z-index: 0">
                    <span><small style="font-size: smaller; line-height: 1em">*Указание идентификатора мобильного оборудования для смартфона, сокращенно именуемого IMEI, который написан на боковой поверхности коробки со смартфоном. IMEI  также можно узнать по запросу по телефону *#06#.</small></span>
                </div>
                <div class="row m-0 mt-3 p-0">
                    <div class="col-12 text-center ">
                        <button class="btn btn-primary register-button" id="register">
                            Зарегистрироваться
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row mt-5 p-0">
            <div class="col-10 mx-auto m-0 p-0 text-center" style="z-index: 0" data-faq>
                <span class="h3 faq-honor">FAQ</span>
            </div>
        </div>
        <div class="row mt-5 p-0">
            <div class="col-10 mx-auto m-0 p-0 questions" style="z-index: 1">
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
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row m-0 mb-5 mt-5"></div>
        <div class="row mt-5 p-0">
            <div class="col-10 mx-auto m-0 mb-4 p-0 text-center" style="z-index: 0" data-feedback>
                <span class="h3 faq-honor">ОБРАТНАЯ СВЯЗЬ</span>
            </div>
            <div class="col-10 mx-auto m-0 mb-4 p-0 text-center" style="z-index: 0" data-feedback>
                <span class="text-white">Телефон горячей линии: <a href="tel:+375296081949">+375 29 608 19 49</a> работает с 14:00 до 17:00 в будние и выходные дни</span>
            </div>
            <div class="col-10 mx-auto m-0 p-0 feedback-form-mobile" style="z-index: 0">
                <div class="row m-0 p-0">
                    <div class="col-12 mb-3">
                        <input type="text" id="feedbackName" class="form-control" placeholder="Имя" required>
                    </div>
                    <div class="col-12 mb-3">
                        <input type="text" id="feedbackPhoneOrEmail" class="form-control" placeholder="Телефон/E-mail" required>
                    </div>
                    <div class="col-12 mb-3">
                        <textarea type="text" id="question" class="form-control" rows="4" placeholder="Ваш вопрос" required></textarea>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center p-2">
                <button class="btn btn-primary button-send-feedback" id="sendQuestion">
                    отправить
                </button>
            </div>
        </div>
        <div class="row m-0 mb-2 mt-5"></div>
        <div class="row m-0 p-0 position-absolute" style="bottom: 0">
            <div class="col-12 m-0 p-0 position-relative d-flex align-content-center justify-content-center" style="z-index: 0">
                <img src="{{asset('assets/images/footer-mobile.png')}}" class="img-fluid position-absolute align-self-center" alt="">
                <small class="align-self-center m-auto text-white text-center" style="z-index: 3; font-size: .4em">Рекламная игра &laquo;Получай больше с HONOR&raquo; зарегистрирована в Министерстве антимонопольного регулирования и торговли Республики Беларусь, свидетельство №3349 от 08.08.2018.
                    <br>Организатор: Издательско-производственное частное унитарное предприятие &laquo;Проспектпресс&raquo;, 220050, г. Минск, ул. Интернациональная, д.16., УНП 101520868.
                    <br>Срок проведения рекламной игры: 15.08.2018 – 10.11.2018 г.
                </small>
            </div>
        </div>
    </div>
@endsection