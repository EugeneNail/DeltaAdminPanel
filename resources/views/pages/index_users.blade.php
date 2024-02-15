@include('components.head')
<div class="page">
<div>

    <a href="/users/new" class="button new-user-button">Добавить</a>
    <table class="user-list" border="1">
        <tr>
                <th>Id</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Отчество</th>
                <th>Дата рождения</th>
                <th>Номер телефона</th>
                <th>E-mail</th>
                <th>Логин</th>
                <th>Пароль</th>
                <th>Фото</th>
                <th></th>
                <th></th>
            </tr>
              @foreach ($users as $user)
              <tr class="user-row">
                  <td>{{$user->id ?? 'NULL'}}</td>
                <td>{{$user->name ?? 'NULL'}}</td>
                <td>{{$user->last_name ?? 'NULL'}}</td>
                <td>{{$user->patronymic ?? 'NULL'}}</td>
                <td>{{$user->born_at ?? 'NULL'}}</td>
                <td>{{$user->phone_number ?? 'NULL'}}</td>
                <td>{{$user->email ?? 'NULL'}}</td>
                <td>{{$user->login ?? 'NULL'}}</td>
                <td>{{$user->password ?? 'NULL'}}</td>
                <td>
                    <a target="_blank" href="{{$user->photo_path ? asset('/storage/' . $user->photo_path) : 'NULL'}}">
                    {{$user->photo_path ?? 'NULL'}}</a>
                </td>
                <td><a href="/users/{{$user->id}}/edit" target="_blank" class="button">Изменить</a></td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="button">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{$users->links('pagination::bootstrap-4')}}
</div>
</div>
