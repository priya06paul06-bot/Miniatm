<?php

$balance = 50000;
$message = "";

if (isset($_POST['submit'])) {

    $operation = $_POST['operation'];
    $amount = (int)$_POST['amount'];

    if ($operation == "Balance Inquiry") {
        $message = "Your current balance is ₹" . $balance;
    }

    elseif ($operation == "Deposit") {
        $balance = $balance + $amount;
        $message = "Your current balance is ₹" . $balance;
    }

    elseif ($operation == "Withdraw") {

        if ($amount <= $balance && $amount > 0) {
            $balance = $balance - $amount;
            $message = "Your current balance is ₹" . $balance;
        }
        else {
            $message = "Insufficient balance";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Mini ATM Simulator</title>

<style>

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f5f6f7;
}

.container {
    width: 700px;
    margin: 70px auto;
    background: white;
    padding: 55px 65px 70px;
    border-radius: 18px;
    box-shadow: 0 4px 20px #ccc;
}

h1 {
    text-align: center;
    font-size: 40px;
    color: #18222d;
    margin-bottom: 55px;
}

label {
    display: block;
    text-align: center;
    font-size: 23px;
    font-weight: bold;
    margin-bottom: 15px;
}

select,
input {
    width: 100%;
    height: 65px;
    border: 2px solid #d5d9dd;
    border-radius: 10px;
    padding: 0 20px;
    font-size: 20px;
    margin-bottom: 30px;
}

select {
    border: 3px solid #3784d6;
}

button {
    width: 100%;
    height: 65px;
    border: none;
    border-radius: 10px;
    background: #20272e;
    color: white;
    font-size: 22px;
    font-weight: bold;
    cursor: pointer;
}

.message {
    margin-top: 35px;
    padding: 25px;
    text-align: center;
    border: 2px solid #b9dfbb;
    border-radius: 10px;
    background: #eef9ed;
    color: #29934c;
    font-size: 22px;
    font-weight: bold;
}

</style>

</head>

<body>

<div class="container">

<h1>MINI ATM SIMULATOR</h1>

<form method="post">

<label>Select Operation:</label>

<select name="operation">

<option>Balance Inquiry</option>
<option>Deposit</option>
<option>Withdraw</option>

</select>

<input
type="number"
name="amount"
placeholder="Enter Amount">

<button type="submit" name="submit">
Submit
</button>

</form>

<?php

if ($message != "") {
    echo "<div class='message'>$message</div>";
}

?>

</div>

</body>

</html>