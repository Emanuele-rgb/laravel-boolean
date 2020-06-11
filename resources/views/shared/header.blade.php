<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Boolean</title>
</head>
<body>

<header class="main-header">
    <nav class="navbar">
        <a href="{{ route('static-page.home') }}" class="navbar-brand">Boolean</a>

        <ul>
        <li><a href="{{ route('static-page.home') }}">Home</a></li>
            <li><a href="#">Corso</a></li>
            <li><a href="{{ route('student.index') }}">Dopo il corso</a></li>
            <li><a href="#">Lezione gratuita</a></li>
            <li><a href="#">Candidatura</a></li>
        </ul>
    </nav>
</header>