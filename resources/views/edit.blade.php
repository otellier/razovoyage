<form method="post" action="{{route('voyages.update', ['voyage' => $voyage->id])}}">
    @csrf
    @method('PUT')
<input type="text" name="titre" placeholder="titre" value="{{ $voyage->titre }}">
<input type="text" name="destination" placeholder="destination" value="{{ $voyage->destination }}">
<input type="text" name="pays" placeholder="pays" value="{{ $voyage->pays }}">
<input type="text" name="image" placeholder="image" value="{{ $voyage->image }}">
<textarea name="description" placeholder="description">{{ $voyage->description }}</textarea>
   <input type="submit" value="save">
   </form>
