@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-semibold text-slate-800">Liste des Articles</h1>
    <a href="{{ route('articles.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
        Nouvel Article
    </a>
</div>

@if ($articles->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($articles as $article)
        <div class="bg-white rounded-lg shadow-sm border hover:shadow-md transition-shadow">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-slate-800 mb-2">{{ $article->title }}</h2>
                <p class="text-sm text-slate-600 mb-2">Par {{ $article->author }}</p>
                <p class="text-slate-700 mb-4">{{ Str::limit($article->content, 100) }}</p>
                <p class="text-sm text-slate-500 mb-4">
                    Créé le {{ $article->created_at->format('d/m/Y à H:i') }}
                </p>
                <div class="flex justify-between items-center">
                    <a href="{{ route('articles.show', $article->id) }}" class="text-blue-500 hover:text-blue-600">Voir</a>
                    <div class="flex space-x-2">
                        <a href="{{ route('articles.edit', $article->id) }}" class="text-slate-600 hover:text-slate-800">Modifier</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-600">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $articles->links() }}
    </div>
@else
    <div class="bg-blue-50 text-blue-800 rounded-lg p-6">
        Aucun article n'a été créé. <a href="{{ route('articles.create') }}" class="text-blue-600 hover:text-blue-800 underline">Créez votre premier article</a>.
    </div>
@endif
@endsection