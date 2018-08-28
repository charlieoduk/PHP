<?php
/* A struct is a container of values which is typically
 * accessed using names
 * A struct is simply an associative array with keys as string
*/

$charles = [
    'name' => 'charles Oduk',
    'country' => 'Kenya',
    'age' => 30,
    'engagement' => 'Acumen'
];

$james = [
    'name' => 'James Njuguna',
    'country' => 'Kenya',
    'age' => 25,
    'engagement' => 'BBC'

];

/* A complex struct can be constructed using single or more
 * constructs as it's properties
*/

$andelans = [
    'firstAndelan' => $charles,
    'secondAndelan' => $james
];
