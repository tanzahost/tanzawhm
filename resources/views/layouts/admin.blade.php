@extends('layouts.master')

@section('title', 'Admin Panel')

@section('master')

<div class="antialiased bg-gray-50 dark:bg-gray-900">
    <nav
        class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
        @include('partials.topbar')
    </nav>

    <!-- Sidebar -->

    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav" id="drawer-navigation">
        @include('partials.sidebar')
    </aside>

    @yield('admin')
</div>


@endsection
