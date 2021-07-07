<div class="mosn">
    <h1>Listagem de Usuarios</h1>

    <p>nome {{ $user->name }} COM O E-MAILS {{ $user->email }}</p>
    <p>nome {{ date('d/m/Y H:i', strtotime($user->created_at)) }}</p>
</div>



