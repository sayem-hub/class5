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
                $numbers = array(12,34,2,6,78); //This is an indexed array.
                  $n = 0;

                  foreach($numbers as $value) {

                  for($i = 2; $i < $value; $i++) {
                    if($value % $i == 0){
                      $n++;
                      break;
                    }
                  }

                  if ($n == 2){
                    echo $value." is a prime number." . "<br>";
                  } else {
                    echo $value." is not a prime number." . "<br>";
                  }
                       }
                    /*Output
                    12 is not a prime number.
                    34 is a prime number.
                    2 is a prime number.
                    6 is not a prime number.
                    78 is not a prime number.
                     */

                     /* Question 02: 
                        Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.
                        Go to daraz website and pick any 5 products and make your array.
                        Must mention Which type of array you have made. */


                        echo "<h3>Question-2: Array of 5 products from Daraz website </h3>"; //HTML Headline
                        echo "<hr/>"; //HTML horizontal line

                         //Main code here
                         $products = array('Kitchen Appliances' => 'Samsung Top Mount Refrigerator', 'Mobiles' => 'Realme Narzo 30 - 6GB RAM/128GB ROM', 'Health & Beauty' => 'Baby Olive Oil - 100ml', 'Clothing' => 'Party Wear Gown', 'Beverages' => 'Tata Tea Premium Leaf '); //This is an Associative array
                        
                         foreach ($products as $key => $product) {
                           echo $key . ' - ' . $product;
                           echo "<br/>";
                         }


                         /* Question 03: 
                       This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 
                        Find the maximum value from this array.
                        Must use a foreach loop. */


                        echo "<h3>Question-3: Finding maximum value from array(0,10,80,67,60,89,91,56,45,30,95,83,99)</h3>"; //HTML Headline
                        echo "<hr/>"; //HTML horizontal line

                        //Main code here
                        $all_numbers = array(0,10,80,67,60,89,91,56,45,30,95,83,99);
                        $max_counter = 0;

                        foreach ($all_numbers as $key => $value) {
                          if ($value > $max_counter) {
                            $max_counter = $value;
                          }
                        }
                        echo "The maximum value is : " . $max_counter; // Idea found from https://stackoverflow.com/questions/6676768/php-get-highest-value-from-array



                          /* Question 04: 
                       Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3…. */


                        echo "<h3>Question-4: Traversing array(0,10,80,67,60,89,91,56,45,30,95,83,99) and printing 0 index then skip 1 index again print 2 skip 3…. </h3>"; //HTML Headline
                        echo "<hr/>"; //HTML horizontal line

                        //Main code here
                        $nums = array(0,10,80,67,60,89,91,56,45,30,95,83,99);

                          foreach ($nums as $key => $value) {

                          if($key%2 != 0) {
                            continue;
                          }

                            echo $value . "<br>";
                            
                          }

                          /*Output:    0
                                              80
                                              60
                                              91
                                              45
                                              95
                                              99 */              
                                                         

?>