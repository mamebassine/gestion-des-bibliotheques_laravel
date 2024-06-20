<form action="{{ route('categorie.destroy', $categorie->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
