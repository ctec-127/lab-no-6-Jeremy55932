<?php 
// function to calculate converted temperature
    function convertTemp($temp, $unit1, $unit2) { 

        if($unit1 == 'celsius') {
            if ($unit2 == 'fahrenheit') {
                $value = $temp * 9/5 + 32; 
            }
            elseif ($unit2 == 'kelvin') {
                $value = $temp + 273.15;
            
            }
            elseif ($unit2 == 'celsius') {
                $value = $temp;
            }}
        if($unit1 == 'fahrenheit') {
            if ($unit2 == 'celsius') {
                $value = ($temp - 32) * 5/9;
            }
            elseif ($unit2 == 'kelvin') {
                $value = ($temp + 459.67) * 5/9;
            }
            elseif ($unit2 == 'fahrenheit') {
                $value = $temp;
            }}

        if($unit1 == 'kelvin') {
            if ($unit2 == 'fahrenheit') {
                $value = $temp * 9/5 - 459.67;
            }
            elseif ($unit2 == 'celsius') {
                $value = $temp - 273.15;

            }
            elseif ($unit2 == 'kelvin') {
                $value = $temp;
            }
        }
            if($unit1 == '--Select--') {
                if($unit2 == '--Select--'){
                $value = $temp;}
        }
        return $value;
            // conversion formulas
        // Celsius to Fahrenheit = T(°C) × 9/5 + 32
        // Celsius to Kelvin = T(°C) + 273.15
        // Fahrenheit to Celsius = (T(°F) - 32) × 5/9
        // Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
        // Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
        // Kelvin to Celsius = T(K) - 273.15

        // You need to develop the logic to convert the temperature based on the selections and input made
    } // end function
    

    // function getSelect($originalunit) {
    //     if (isset($_POST['submitted'])) {
	
    //         $originalUnit = $_POST['originalunit'];
    //         $conversionUnit = $_POST['conversionunit'];
    //         return $originalUnit,$conversionUnit;
    //     }
    // }