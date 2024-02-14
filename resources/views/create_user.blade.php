@include('components.head')
<div class="page">
    @include('components.menu')
    <div class="content">
        @include('components.user_form', [
            'title' => 'Create user', 
            'action' => '/users', 
            'message' => 'Create user', 
            'method' => 'POST'
        ])
    </div>
</div>