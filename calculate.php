<?php
session_start();

if(!empty($_POST) && isset($_POST['orderButton'])){
  $foods = [
      'burger' => 50,
      'fries' => 75,
      'steak' => 150
  ];

    $foodname = $_POST['order']; 
    $quantity = intval($_POST['quantity']);
    $cash = floatval($_POST['cash']);

    $total = 0;
    $change = 0;

    if($foodname == 'burger'){
        $total = $quantity * $foods['burger']; 
    }elseif($foodname == 'fries'){
        $total = $quantity * $foods['fries'];
    }elseif($foodname == 'steak'){
        $total = $quantity * $foods['steak'];
    }

    if ($cash <= $total){
      echo'<div style="border: 2px dotted black; padding: 20px; margin: auto;">
    <h2 style="margin: 0; text-align: center;">Receipt</h2>
    <h2>Please provide more cash!</h2>';
    }else{
      echo '<div style="border: 2px dotted black; padding: 20px; margin: auto;">
    <h2 style="margin: 0; text-align: center;">Receipt</h2>
    <h2>Total Price: ' . $total . '</h2>
    <h2>You Paid: ' . $cash . '</h2>
    <h2>CHANGE: '.$change.'</h2>';

    $change = $cash - $total;

    date_default_timezone_set('Asia/Manila');
    $finishTime = date("m/d/Y h:i:s A");
    echo "<h2>$finishTime</h2>";
    }
    echo "<a href='index.php'><button type='button'>Back</button></a>";
    echo '</div>';
}
?>