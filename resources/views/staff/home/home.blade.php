@extends('layouts.app')

@section('title', 'Accueil')

@section('page_name', 'Accueil')

@section('content')
    <div class="notification is-info">
        <p>{{$tasksAwaitingNotation->count() }} tâche(s) en attente de notation</p>
    </div>
    <div class="notification is-info">
        <p>{{$projectAwaitingNotation->count() }} projet(s) en attente de notation</p>
    </div>
@endsection
