@include('components.head')
<div class="page">
    <div class="content">
        @include('components.user_form', [
            'title' => 'Создать пользователя', 
            'action' => '/users', 
            'message' => 'Создать пользователя', 
            'method' => 'POST',
            'errors' => $errors
        ])
    </div>
</div>