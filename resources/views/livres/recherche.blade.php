@if(isset($livres))
                <h2>Résultats de la recherche</h2>
                @if($livres->isEmpty())
                    <p>Aucun livre trouvé</p>
                @else
                    <ul>
                        @foreach($livres as $livre)
                            <li>{{ $livre->titre }} par {{ $livre->auteur }}</li>
                        @endforeach
                    </ul>
                @endif
            @endif