@extends('layouts.global')

@section('content')
    @include('components.navbar')
    <div class="flex flex-col items-center justify-center align-center py-20">

        <div class="text-green-600 text-center">
            @if (session('error'))
                {{ session('error') }}
            @elseif (session('success'))
                {{ session('success') }} <br>
                Go to <a href="{{ route('login') }}" class="underline"> login page</a> to sign in to your account.
            @endif

        </div>

        <form action="{{ route('sign-up.action') }}" method="post" class="flex flex-col box-border w-[40%] h-fit">
            @csrf
            <h1 class="text-2xl font-bold text-tuna text-center mb-5"> Sign Up</h1>

            <label for="username">Username</label>
            @include('components.input', [
                'id' => 'username',
                'name' => 'username',
                'placeholder' => 'Username',
                'type' => 'text',
            ])
            <label for="name">Name</label>
            @include('components.input', [
                'id' => 'name',
                'name' => 'name',
                'placeholder' => 'Name',
                'type' => 'text',
            ])
            <label for="confirm" class="mt-2">Confirm Password</label>
            @include('components.input', [
                'id' => 'confirm',
                'name' => 'confirm',
                'placeholder' => 'Confirm Password',
                'type' => 'password',
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
                    'label' => 'Sign Up',
                    'type' => 'submit',
                ])
            </div>

        </form>


    </div>


    @include('components.footer')
@endsection
