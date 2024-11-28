@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Home Page</h1>
    <p>Welcome to the product listing page!</p>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach (['Product 1', 'Product 2', 'Product 3', 'Product 4'] as $product)
            <div style="border: 1px solid #ccc; padding: 20px; width: 200px;">
                <img src="{{ asset('/images/icons/icon-72x72.png') }}" alt="{{ $product }}">
                <h3>{{ $product }}</h3>
                <p>Price: ${{ rand(10, 100) }}</p>
            </div>
        @endforeach
    </div>

    <!-- User Table -->
    <h2 style="margin-top: 40px;">User List</h2>
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">No users found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- <form action="{{ route('search') }}" method="post">
        @csrf
        <input type="text" name="search" placeholder="Search...">
        <button type="submit">Search</button>
    </form> --}}
@endsection
