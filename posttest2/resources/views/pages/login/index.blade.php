@extends('layouts.global')

@section('content')
    @include('components.navbar')
    <div class="flex justify-center align-center py-20">
        <form action="" class="flex flex-col box-border w-[40%] h-fit">
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

            <div class="pt-5 flex justify-center">
                @include('components.btn', [
                    'mode' => 'light',
                    'name' => 'Login',
                    'route' => route('dashboard'),
                ])
            </div>

        </form>


    </div>
    @include('components.footer')
@endsection
