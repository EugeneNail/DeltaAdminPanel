<form class="form form_horizontal" action="{{$action ?? route($route, $user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method ?? 'POST')
    <h1 class="form__title">{{$title}}</h1>
    <div class="form__horizontal-wrapper">

        <div class="form__group">
            @include('components.field', [
                'name' => 'name',
                'label' => 'Имя',
                'errors' => $errors,
                'initial' => $user->name ?? null,
            ])
            @include('components.field', [
                'name' => 'last_name',
                'label' => 'Фамилия',
                'errors' => $errors,
                'initial' => $user->last_name ?? null
            ])
            @include('components.field', [
                'name' => 'patronymic',
                'label' => 'Отчество',
                'errors' => $errors,
                'initial' => $user->patronymic ?? null
            ])
            @include('components.field', [
                'name' => 'born_at',
                'label' => 'Дата рождения',
                'errors' => $errors,
                'type' => 'date',
                'initial' => $user->born_at ?? null
            ])
            </div>
        <div class="form__group">
            @include('components.field', [
                'name' => 'phone_number',
                'label' => 'Телефон (в формате 0 000 000-00-00)',
                'errors' => $errors,
                'initial' => $user->phone_number ?? null
            ])
            @include('components.field', [
                'name' => 'email',
                'label' => 'E-mail',
                'errors' => $errors,
                'initial' => $user->email ?? null
            ])
            @include('components.field', [
                'name' => 'login',
                'label' => 'Логин',
                'errors' => $errors,
                'initial' => $user->login ?? null
            ])
            @include('components.field', [
                'name' => 'password',
                'label' => 'Пароль',
                'errors' => $errors,
                'type' => 'password',
                'initial' => $user->password ?? null
            ])
            @include('components.field', [
                'name' => 'photo',
                'label' => 'Фотография',
                'errors' => $errors,
                'type' => 'file',
                'initial' => $user->photo_path ?? null
            ])
            </div>
        </div>
        <div class="form__button-group">
            <a href="/users" class="button button_light">Назад</a>
            <button class="button">{{$message}}</button>
        </div>
    </form>
