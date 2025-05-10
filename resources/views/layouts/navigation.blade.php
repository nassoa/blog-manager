<nav class="bg-white shadow-sm border-b border-slate-200">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <a class="text-slate-800 font-bold text-xl" href="{{ route('articles.index') }}">Blog Manager testsd</a>
            <div class="hidden md:flex space-x-4">
                <a class="text-slate-600 hover:text-slate-900 px-3 py-2 rounded-md text-sm font-medium" href="{{ route('articles.index') }}">Articles</a>
                <a class="text-slate-600 hover:text-slate-900 px-3 py-2 rounded-md text-sm font-medium" href="{{ route('articles.create') }}">Nouvel Article</a>
            </div>
        </div>
    </div>
</nav>