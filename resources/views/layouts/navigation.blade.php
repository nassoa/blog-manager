<nav class="bg-white shadow-sm border-b border-slate-200">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <a class="text-slate-800 font-bold text-xl" href="{{ route('articles.index') }}">Blog Manager</a>
            <a href="{{ route('articles.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                Nouvel Article
            </a>
        </div>
    </div>
</nav>