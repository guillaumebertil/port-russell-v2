<div class="hero h-full flex flex-col items-center">
    <div class="hero-content text-accent-content text-center">
        <div class="max-w-md lg:max-w-3xl">
            <h1 class="mb-5 text-5xl font-bold">Présentations</h1>
            
            <p class="text-xl">
                Cette application permet à la capitainerie du Port de Plaisance Russell de gérer efficacement les réservations des catways (appontements pour bateaux).
            </p>
            <ul class="text-xl mb-5">
                <li class="list-item">- Gestion des catways (état, type, numéro)</li>
                <li class="list-item">- Gestion des réservations avec vérification des disponibilités</li>
                <li class="list-item">- Gestion des utilisateurs de la capitainerie</li>
            </ul>

            @auth
                <a href="/dashboard" class="btn btn-accent">Accéder au dashboard</a>
                @else
                    <a href="/login" class="btn btn-success">Se connecter</a>
            @endauth
        </div>
    </div>
</div>