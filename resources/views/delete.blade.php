<form method="post" action="{{route('voyages.destroy', ['voyage' => $voyage->id])}}">
    @csrf
    @method('delete')
   <input type="submit" value="delete">
   </form>
