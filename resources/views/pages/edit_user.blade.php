@include('components.head')
<div class="page">
    <div class="content">
        @include('components.user_form', [
            'title' => 'Изменить пользователя',
            'message' => 'Изменить пользователя',
            'method' => 'PUT',
            'errors' => $errors,
            'user' => $user,
            'route' => 'users.update'
        ])
    </div>
</div>
