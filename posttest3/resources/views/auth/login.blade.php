@extends('layouts.global')

@section('content')
    @include('components.navbar')
    <div class="flex justify-center align-center py-20">
        <form action="{{ route('login.action') }}" method="post" class="flex flex-col box-border w-[40%] h-fit">
            @csrf

            <h1 class="text-2xl font-bold text-tuna text-center mb-5"> Login</h1>
            <label for="username">Username</label>
            @include('components.input', [
                'id' => 'username',
                'name' => 'username',
                'placeholder' => 'Username',
                'type' => 'text',
            ])
            <label for="password" class="mt-2">Password</label>
            @include('components.input', [
                'id' => 'password',
                'name' => 'password',
                'placeholder' => 'Password',
                'type' => 'password',
            ])

            <a href="{{ route('login.action') }}" class="pt-5 flex justify-center">
                @include('components.btn', [
                    'mode' => 'light',
                    'label' => 'Login',
                    'type' => 'submit',
                ])
            </a>

        </form>


    </div>
    @include('components.footer')
@endsection
