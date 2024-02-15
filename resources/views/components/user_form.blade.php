<form class="form form_horizontal" action="{{$action}}" method="{{$method}}" enctype="multipart/form-data">
    @csrf
    <h1 class="form__title">{{$title}}</h1>
    <div class="form__horizontal-wrapper">

        <div class="form__group">
            @include('components.field', [
                'name' => 'name',
                'label' => 'Имя',
                'errors' => $errors,
            ])
            @include('components.field', [
            'name' => 'last_name',
            'label' => 'Фамилия',
            'errors' => $errors,
            ])
            @include('components.field', [
            'name' => 'patronymic',
            'label' => 'Отчество',
            'errors' => $errors,
            ])
            @include('components.field', [
                'name' => 'born_at',
                'label' => 'Дата рождения',
                'errors' => $errors,
                'type' => 'date'
            ])
            </div>
        <div class="form__group">
            @include('components.field', [
                'name' => 'phone_number',
                'label' => 'Телефон (в формате 0 000 000-00-00)',
                'errors' => $errors,
            ])
            @include('components.field', [
                'name' => 'email',
                'label' => 'E-mail',
                'errors' => $errors,
            ])
            @include('components.field', [
                'name' => 'login',
                'label' => 'Логин',
                'errors' => $errors,
            ])
            @include('components.field', [
                'name' => 'password',
                'label' => 'Пароль',
                'errors' => $errors,
                'type' => 'password'
            ])
            @include('components.field', [
                'name' => 'photo',
                'label' => 'Фотография',
                'errors' => $errors,
                'type' => 'file',
            ])
            </div>
        </div>
        <div class="form__button-group">
            <a href="/users" class="button button_light">Назад</a>
            <button class="button">{{$message}}</button>
        </div>
    </form>
