<form class="form" action="{{$action}}" method="{{$method}}">
    @csrf
    <h1 class="form__title">{{$title}}</h1>
    <div class="form__group">
        <label class="form__label" for="name">Name</label>
        <input type="text" name="name" class="form__input" value="{{old('name')}}">
        <label class="form__label" for="last_name">Last name</label>
        <input type="text" name="last_name" class="form__input" value="{{old('last_name')}}">
        <label class="form__label" for="patronymic">Patronymic</label>
        <input type="text" name="patronymic" class="form__input" value="{{old('patronymic')}}">
        <label class="form__label" for="">Phone number</label>
        <input type="text" name="name" class="form__input" value="{{old('phone_number')}}">
    </div>
    <div class="form__group">
        <label class="form__label" for="email">Email</label>
        <input type="text" name="email" class="form__input">
        <label class="form__label" for="login">Login</label>
        <input type="text" name="login" class="form__input">
        <label class="form__label" for="password">Password</label>
        <input type="text" name="password" class="form__input">
        <label class="form__label" for="password_confirmation">Confirm password</label>
        <input type="text" name="password_confirmation" class="form__input">
    </div>
    <button class="button">{{$message}}</button>
</form>