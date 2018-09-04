@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card rounded-0">
                    <div class="card-header">Панель управления</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                    @endif
                    <!-- Nav tabs -->
                        <div class="row">
                            <div class="col-xl-2">
                                <ul class="nav  xl-pills pills-primary flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#registered" role="tab">
                                            Зарегистрировавшиеся пользователи
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#approved" role="tab">
                                            Промодерированные пользователи
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-10" id="tabs">
                                @include('tables.tabs')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="checkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-id="">
        <div class="modal-dialog modal-notify modal-primary modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="heading lead">Проверка IMEI, даты и чека</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row m-0 p-0 d-flex justify-content-center align-content-center">
                        <div class="col-xl-6 p-0 text-center border-right border-light">
                            <p class="h6 text-uppercase font-weight-bold">Фото чека или гарантийного талона:</p>
                            <a href="" data-toggle="lightbox">
                                <img id="image" src="" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-xl-6 p-0 text-center d-flex justify-content-center align-content-center border-left border-light">
                            <div class="row m-0 p-0">
                                <div class="col-xl-12">
                                    <p class="h6 font-weight-bold text-uppercase d-inline-block m-auto align-self-center">IMEI:</p>
                                    <h4 class="text-uppercase align-self-center m-auto" id="imei"></h4>
                                </div>
                                <div class="col-xl-12">
                                    <p class="h6 font-weight-bold text-uppercase d-inline-block m-auto align-self-center">Номер чека:</p>
                                    <h4 class="text-uppercase align-self-center m-auto" id="registeredCheck"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <a class="btn btn-primary text-white" id="sendSMS">Отправить SMS</a>
                    <a class="btn btn-outline-primary waves-effect" data-dismiss="modal">Закрыть</a>
                </div>
            </div>

        </div>
    </div>

@endsection

