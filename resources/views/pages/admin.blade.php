<form action="/routes" method="POST">
    @csrf
    <input type="number" name="route_id" placeholder="Route_id">
    <input type="text" name="route_name" placeholder="route name">
    <button type="submit">Submit</button>
</form>