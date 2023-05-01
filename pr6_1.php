<?php
function compute_notes($amount) {
  // define the denominations of notes
  $denominations = array(100, 50, 20, 10, 5, 2, 1);
  
  // initialize an array to store the number of notes for each denomination
  $notes = array();
  
  // loop through the denominations and compute the number of notes needed
  foreach ($denominations as $denomination) {
    // compute the number of notes of this denomination needed for the given amount
    $count = floor($amount / $denomination);
    
    // store the number of notes in the notes array
    $notes[$denomination] = $count;
    
    // update the remaining amount
    $amount -= $count * $denomination;
  }
  
  // return the notes array
  return $notes;
}

$notes = compute_notes(237);
print_r($notes);
?>