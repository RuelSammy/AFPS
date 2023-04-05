<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>ATW | Home </title>
</head>
<body>

    <header>
        <nav>
            <ul class="nav navbar justify-content-end">
                  <li class="nav-item">
                  <a class="nav-link" href="{{Route('history')}}"> History </a>
                  </li>
                  @auth
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('logout')}}">Log Out</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('routes')}}">Routes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('accounts')}}">Admin</a>
                  </li>

                  @endauth

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Balance</a>
                   <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Mpesa</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">E-Wallet</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Credit Card</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Other</a> 

                  </div>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
                </li> -->
              </ul>

        </nav>
    </header>
    

<form method="POST" action="/accounts"  class="route-container">
  @csrf
<!-- action="process_route.php" -->
      <label for="route" style="margin-left: 20px;">Select a route:</label>

      <select name="route" id="route">
        <optgroup label="Embassava">
          <option      data-id="30"   onclick="handleonclick(event)" value="town-jogoo">Town - Jogoo rd (30 sh)</option>
          <option      data-id="20"   onclick="handleonclick(event)" value="jogoo-buruburu">Jogoo rd - Buruburu (20 sh)</option>
          <option      data-id="50"   onclick="handleonclick(event)"value="town-buruburu">Town - Buruburu (50 sh)</option>
        </optgroup>
       <!-- <form method="POST" action="/accounts">
       @csrf
       <label for="balance">Balance:</label>
          <input type="text" name="balance">
          <button type="submit">Submit</button>
    </form> -->
       {{-- <optgroup label="Umoinner">
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
      </select>  --}}
       balance = {{$balance}}
       
      <input onclick="confirmDeduction(balance, 20)" type="submit" name="submit" value="Select Route">
    
    </form>

    <!-- <form method="POST" action="{{ route('accounts') }}">
        @csrf
        <label for="num_customers">Number of Customers:</label>
        <input type="number" id="dependents" name="num_customers" required>
        <button type="submit">Pay Fare</button>
     </form> -->

    <script> 
    // function showConfirmation() {
    //   let result = confirm("Are you sure you want to proceed?");
    //         if (result) {
    //           function deductFare(amount) {
    //       // Check if the user has enough balance
    //         if (balance >= amount) {
    //            balance -= amount;
    //            alert(`$${amount} deducted from your account. Your new balance is $${balance}.`);
    //           } else {
    //           alert("You don't have enough balance to make this transaction.");
    //            }
    //            }
    //          alert("Transaction successfull!");
    //          } else {
    //         alert(" Transaction cancelled.");
    //            }
    //         }

    //       //  $.get('/endpoint', function(data) {
    //        // do something with the data
    //        function deductFare(amount) {
    //       // Check if the user has enough balance
    //         if (balance >= amount) {
    //            balance -= amount;
    //          alert(`$${amount} deducted from your account. Your new balance is $${balance}.`);
    //         } else {
    //           alert("You don't have enough balance to make this transaction.");
    //          }
    //       }
    //   //  });



   @auth
    var balance= <?php echo json_encode($balance) ?>
    
    var deductionAmount = 20;
    @endauth
    
    @guest
    var balance = 0;
    
    @endguest
    
    function handleButtonClick(event) {
    // Get the id and code from the data attributes of the button
    var id = event.target.dataset.id;    
    // Do something with the id 
    var deductionAmount = id;
  }
      
  function confirmDeduction(balance, deductionAmount) {
  // Prompt the user to confirm the deduction
  var confirmed = confirm(`Are you sure you want to deduct ${deductionAmount} from your balance?`);
  // If the user confirmed, deduct the amount from the balance
  if (confirmed) {
    // Make sure the deduction amount is a positive number
    if (deductionAmount > 0) {
      // Make sure the balance is greater than or equal to the deduction amount
      if (balance >= deductionAmount) {
        balance -= deductionAmount;
        alert(`Deducted ${deductionAmount} from your balance. Your new balance is ${balance}.`);
         } else {
        alert(`Your balance (${balance}) is less than the deduction amount (${deductionAmount}). Deduction failed.`);
         }
         } else {
      alert(`Deduction amount must be a positive number.`);
      }
      } else {
    alert(`Deduction cancelled.`);
     }
  return balance;
    }

    
  </script>
    
</body>
</html>

