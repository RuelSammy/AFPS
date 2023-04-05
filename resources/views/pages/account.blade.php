<!DOCTYPE html>
<html>

<!-- $users = App\Models\User::all(); -->
<style>
.payment-form {
  max-width: 500px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.payment-form h2 {
  margin-top: 0;
}

.payment-form form {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.payment-form .form-group {
  flex-basis: calc(50% - 10px);
  margin-bottom: 20px;
}

.payment-form label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.payment-form input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

.payment-form button {
  display: block;
  width: 100%;
  margin-top: 20px;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.payment-form button:hover {
  background-color: #0062cc;
}


</style>



<div class="payment-form">
  <h2>Payment Details</h2>
  
  <form action='/accounts' method="POST">
    @csrf
    <div class="form-group">
      <label for="User Name">Name</label>
      <input type="text" id="name" name="name" placeholder="name">
    </div>
   
    <div class="form-group">
      <label for="balance">Amount</label>
      <input type="text" id="amount" name="balance" placeholder="Enter amount">
    </div>
    <button type="submit">Credit Account</button>

  </form>
</div>
</html>

