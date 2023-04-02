<!DOCTYPE html>
<html>

<form action="/routes" method="POST">
    @csrf
    <input type="number" name="route_id" placeholder="Route_id">
    <input type="text" name="psv_name" placeholder="psv name">
    <button type="submit">Submit</button>
</form>

</html>