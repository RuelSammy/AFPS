@extends ('layouts.main')

@section('content')
<form method="post" action="process_route.php" class="route-container">
      <label for="route">Select a route:</label>
      <select name="route" id="route">
        <optgroup label="Embassava">
          <option value="town-jogoo">Town - Jogoo rd (30 sh)</option>
          <option value="jogoo-buruburu">Jogoo rd - Buruburu (20 sh)</option>
          <option value="town-buruburu">Town - Buruburu (50 sh)</option>
        </optgroup>
        <optgroup label="Umoinner">
          <option value="town-kawangware">Town - Kawangware (40 sh)</option>
          <option value="westlands-kawangware">Westlands - Kawangware (30 sh)</option>
          <option value="town-kabiria">Town - Kabiria (50 sh)</option>
        </optgroup>
        <optgroup label="Rembo Shuttle">
          <option value="town-ngong">Town - Ngong (60 sh)</option>
          <option value="town-kitengela">Town - Kitengela (80 sh)</option>
          <option value="westlands-ngong">Westlands - Ngong (70 sh)</option>
        </optgroup>
        <optgroup label="Mogotio Line">
          <option value="town-rongai">Town - Rongai (50 sh)</option>
          <option value="town-madaraka">Town - Madaraka (30 sh)</option>
          <option value="town-syokimau">Town - Syokimau (70 sh)</option>
        </optgroup>
      </select>
      <input type="submit" name="submit" value="Select Route">
    </form>
    
@endsection