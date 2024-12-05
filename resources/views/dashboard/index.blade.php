@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <ul>
        <li><a href="{{ route('attacker.show', ['submenu' => 'submenu1']) }}">Attacker - Submenu 1</a></li>
        <li><a href="{{ route('attacker.show', ['submenu' => 'submenu2']) }}">Attacker - Submenu 2</a></li>
        <li><a href="{{ route('attacker.show', ['submenu' => 'submenu3']) }}">Attacker - Submenu 3</a></li>
        <li><a href="{{ route('defender.show', ['submenu' => 'submenu1']) }}">Defender - Submenu 1</a></li>
        <li><a href="{{ route('defender.show', ['submenu' => 'submenu2']) }}">Defender - Submenu 2</a></li>
        <li><a href="{{ route('defender.show', ['submenu' => 'submenu3']) }}">Defender - Submenu 3</a></li>
        <li><a href="{{ route('sandbox.show', ['submenu' => 'submenu1']) }}">Sandbox - Submenu 1</a></li>
        <li><a href="{{ route('sandbox.show', ['submenu' => 'submenu2']) }}">Sandbox - Submenu 2</a></li>
        <li><a href="{{ route('sandbox.show', ['submenu' => 'submenu3']) }}">Sandbox - Submenu 3</a></li>
    </ul>
</div>
@endsection
