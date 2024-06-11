<form action="{{ route('rayons.destroy', $rayon->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
