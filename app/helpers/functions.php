<?php 

function transactionStatusText($value)
{
  if(!$value || $value == "" || $value == 0 || $value == 1)
  {
    return "Pending";
  }
  elseif($value == 2)
  {
    return "Confirmed";
  }
  elseif($value == 3)
  {
    return "Shipped";
  }
  elseif($value == 4)
  {
    return "Delivered";
  }
  elseif($value == 5)
  {
    return "Cancelled";
  }
}

?>