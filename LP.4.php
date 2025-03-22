<?php

/**
 * This PHP script demonstrates the use of regular expressions and exception handling.
 * It validates a phone number format entered by the user.
 */

function validatePhoneNumber($phone) {
    /**
     * This function checks if the given phone number matches the standard format.
     * It allows formats like (123) 456-7890, 123-456-7890, or 123.456.7890.
     */
    $pattern =findPhoneNumber();
    return preg_match($pattern, $phone);
}

function getPhoneNumberInput() {
    /**
     * This function prompts the user for a phone number and validates it.
     * It handles exceptions if the input is empty or incorrectly formatted.
     */
    try {
        echo "Enter your phone number: ";
        $phone = trim(fgets(STDIN));

        if (empty($phone)) {
            throw new Exception("Phone number cannot be empty.");
        }

        if (validatePhoneNumber($phone)) {
            echo "Valid phone number.\n";
        } else {
            echo "Invalid phone number format. Please use (123) 456-7890 or similar formats.\n";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

// Execute the function
getPhoneNumberInput();

?>
