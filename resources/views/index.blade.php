@extends('layout.app')

<main class="login">
    <div class="centraliza text-center">
        <form method="POST" action="{{ route('usuarios') }}" class="form-group col-md-4" >
            @csrf
            <h2 class="form-label">Login</h2>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="user" id="floatingInput" placeholder="User" required>
                <label for="floatingInput">User</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="col-md-12 ">
                <button class="third" type="submit">LOGAR</button>
            </div>	
        </form>
    </div>         
</main>
