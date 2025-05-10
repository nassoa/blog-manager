<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Manager</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-200">
    @include('layouts.navigation')

    <div class="container mx-auto px-4 py-8">
        @if ($message = Session::get('success'))
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-lg mb-6" role="alert">
            <span class="block sm:inline">{{ $message }}</span>
        </div>
        @endif

        @yield('content')
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('.delete-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    if (!confirm('Êtes-vous sûr de vouloir supprimer cet article ?')) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</body>
</html>