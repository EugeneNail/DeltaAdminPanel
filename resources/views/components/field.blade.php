<div class="field">
    <label class="field__label" for="{{$name}}">{{$label}}</label>
    <input type="{{$type ?? 'text'}}" name="{{$name}}" class="field__input" value="{{old($name) ?? $initial ?? ""}}" accept="{{$accept ?? ''}}">
    @foreach ($errors->get($name) as $error) <p class="field__error">{{$error}}</p> @endforeach
</div>