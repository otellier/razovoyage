<form method="post" action="/admin/voyages">
 @csrf
 <input type="text" name="titre" placeholder="titre">
 <input type="text" name="destination" placeholder="destination">
 <input type="number" name="prix" placeholder="cout">
 <input type="text" name="image" placeholder="image">
 <textarea name="description" placeholder="description"></textarea>
<input type="submit" value="save">
</form>
