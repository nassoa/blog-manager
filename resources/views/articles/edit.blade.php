@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-lg shadow-sm border border-slate-200">
        <div class="border-b border-slate-200 p-6">
            <h2 class="text-2xl font-semibold text-slate-800">Modifier l'Article</h2>
        </div>
        
        <div class="p-6">
            @if ($errors->any())
            <div class="bg-red-50 text-red-800 rounded-lg p-4 mb-6">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('articles.update', $article->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="space-y-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-slate-700 mb-1">Titre</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}"
                            class="w-full rounded-lg border-slate-200 focus:border-blue-500 focus:ring focus:ring-blue-200"
                            required maxlength="255">
                    </div>

                    <div>
                        <label for="author" class="block text-sm font-medium text-slate-700 mb-1">Auteur</label>
                        <input type="text" id="author" name="author" value="{{ old('author', $article->author) }}"
                            class="w-full rounded-lg border-slate-200 focus:border-blue-500 focus:ring focus:ring-blue-200"
                            required maxlength="255">
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-slate-700 mb-1">Contenu</label>
                        <textarea id="content" name="content" rows="10"
                            class="w-full rounded-lg border-slate-200 focus:border-blue-500 focus:ring focus:ring-blue-200"
                            required>{{ old('content', $article->content) }}</textarea>
                    </div>

                    <div class="flex justify-between pt-6">
                        <a href="{{ route('articles.index') }}" 
                            class="px-4 py-2 text-slate-600 hover:text-slate-800">
                            Annuler
                        </a>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition-colors">
                            Mettre à jour
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection