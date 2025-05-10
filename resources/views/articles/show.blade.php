@extends('layouts.app')

@section('content')
<div class="mb-6">
    <a href="{{ route('articles.index') }}" class="text-slate-600 hover:text-slate-800 flex items-center">
        ← Retour à la liste
    </a>
</div>

<article class="bg-white rounded-lg shadow-sm border border-slate-200">
    <div class="p-8">
        <h1 class="text-3xl font-semibold text-slate-800 mb-4">{{ $article->title }}</h1>
        
        <div class="flex justify-between items-center mb-6">
            <p class="text-slate-600">Par <span class="font-medium">{{ $article->author }}</span></p>
            <p class="text-slate-500">Publié le {{ $article->created_at->format('d/m/Y à H:i') }}</p>
        </div>
        
        <div class="prose max-w-none text-slate-700 mb-8">
            {{ $article->content }}
        </div>
        
        <div class="flex justify-end gap-x-5 items-center pt-6 border-t border-slate-200">
            <a href="{{ route('articles.edit', $article->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                Modifier
            </a>
            
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors">
                    Supprimer
                </button>
            </form>
        </div>
    </div>
</article>
@endsection