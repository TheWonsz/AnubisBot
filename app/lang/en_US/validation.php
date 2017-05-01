<?php

// Any objects run through the validator will be
// run through here
return [
    // determine if a field is required
    'required'  => ':field is required',

    // check if a field matches another
    'match'     => ':field must match :match',

    // check if field is a valid email address
    'email'     => ':field is not a valid email address',

    // check if a field is a valid url
    'url'       => ':field is not a valid URL',

    // check if field meets the mimimum number of characters specified
    'min'       => ':field should be a minimum of :num characters',

    // check if field meets the mimimum number of characters specified
    'max'       => ':field should be a maximum of :num characters',

    // check if field is found in the database
    // from:TABLE:CELL
    // TABLE: Which table to look in
    // CELL: What's the name of the cell to look at?
    'from'      => ':field was not found in the database table :from',
];
