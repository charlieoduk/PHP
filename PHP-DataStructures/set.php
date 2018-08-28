<?php
/* A set is a collection of values without any 
 * particular order. It can contain any
 * data type and we can run different set 
 * operations such as union, intersection, compliment...
 */
$odd = $even = [];

$odd[] = 1;
$odd[] = 3;
$odd[] = 5;
$odd[] = 7;
$odd[] = 9;

$even[] = 2;
$even[] = 4;
$even[] = 6;
$even[] = 8;

/* In order to check existence of a value inside
 * the set along with union, intersection and compliment,
 * we can use the following example
 */

 if (in_array(2, $even)) {
     echo '2 is an even number';
 }

 $union = array_merge($odd, $even);
 $intersection = array_intersect($even, $odd);
 $compliment = array_diff($even, $odd);


/* Since a set is not ordered in any way, searching using
 *in_array() and using array_merge() could have a complexity
 *of 0(n) in a worst case scenario. We can solve by doing this
 */

 $odd[1] = true;
 $odd[3] = true;
 $odd[5] = true;
 $odd[7] = true;
 $odd[9] = true;
 
 $even[2] = true;
 $even[4] = true;
 $even[6] = true;
 $even[8] = true;

 if (isset($prime[2])) {
    echo '2 is an even number';
 }

 $union = $even + $odd;
 $intersection = array_intersect_key($even, $odd);
 $compliment = array_diff_key($even, $odd);
 