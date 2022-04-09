<?php
        /* 
        Question 01: 
	    	We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.
            Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)
            Step 2: Then check the total number of factors of that number
            Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. Because When a number is divisible by only one and itself, then it is a prime number.
        */

           echo "<h3>Question-1: Finding prime numbers from array:  array [12,34,2,6,78] </h3>"; //HTML Headline
           echo "<hr/>"; //HTML horizontal line


            //Main code here

                $numbers = array (12,34,2,6,78) ; //This is an Indexed array

               foreach ($numbers as $key => $value) {

                if ($value % >=  1) {
                
                echo ++$key . '-' . $value ."is a prime" ;
                echo "<br>";
                } 

                else 
                echo ++$key. '-' . $value . "is not a prime" ;
                 echo "<br>";

               }
            
                    /*Output
                     */

                     /* Question 02: 
                        Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.
                        Go to daraz website and pick any 5 products and make your array.
                        Must mention Which type of array you have made. */


                        echo "<h3>Question-1: Finding prime numbers from array:  array [12,34,2,6,78] </h3>"; //HTML Headline
                        echo "<hr/>"; //HTML horizontal line

                         //Main code here

?>