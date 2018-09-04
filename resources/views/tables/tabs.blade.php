<div class="tab-content vertical">
    <div class="tab-pane fade in show active" id="registered" role="tabpanel">
        <div class="row m-0 p-0">
            <div class="col-xl-12 col-xl-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Фамилия, имя, отчество</th>
                        <th>E-mail</th>
                        <th>Адрес</th>
                        <th>Номер телефона</th>
                        <th>Номер чека</th>
                        <th>Дата покупки</th>
                    </tr>
                    </thead>
                    <tbody>
                    @include('tables.registered')
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="approved" role="tabpanel">
        <div class="row m-0 p-0">
            <div class="col-xl-12 col-xl-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Фамилия, имя, отчество</th>
                        <th>E-mail</th>
                        <th>Адрес</th>
                        <th>Номер телефона</th>
                        <th>Номер чека</th>
                        <th>Дата покупки</th>
                        <th>Игровой номер</th>
                        <th>Проверить статус отправки</th>
                    </tr>
                    </thead>
                    <tbody>
                    @include('tables.approved')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>