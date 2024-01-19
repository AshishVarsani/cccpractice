<?php
/*
    $arr=array(1,2,3,4);
    $arr2=[2,4,5,6];                //create an array
    print_r ($arr);       //print_r print array and var_dump print array and it's value's data type
    var_dump($arr2);    */

   /* $array1=array(1,2,3,4);
    $array2=array(5,6,7,8);
    print_r (array_merge($array1, $array2));  */ //merge two array

    /*
    $fname=array("ashish","meet","Jay");
    $age=array("22","21","20");
    $c=array_combine($fname,$age);
    print_r($c);     */
    // Creates an array by using one array for keys and another for its values.

/*
    $start=1;
    $end=10;
    print_r(range($start, $end, 1)); */
    //Creates an array containing a range of elements.



    // 2.Array modification



/*
    $arr=[1,2,3,4];
    array_push($arr,"5","6");
    print_r($arr);    */
    //- Adds one or more elements to the end of an array.

/*
    $array=[2,4,6,8,10];
    array_pop($array);
    var_dump($array);   */
    //- Removes the last element from an array.

     /*
    $array=[23,24,25,26];
    array_unshift($array,1,2,5,6);
    var_dump($array);   */
    //- Adds one or more elements to the beginning of an array

    /*
    $array=[1,2,3,4,5,6,7];
    array_shift($array);
    var_dump($array);   */
    // Removes the first element from an array.

   /*
    $array=[1,2,3,4,5,6,7];
    array_splice($array,3,2,["hi","hello","how","i"]);
    print_r($array);     */
    //- Removes a portion of the array and replaces it with something else.



    // 3.Array excess




   /* 
    $array=[1,2,3,4,5,6];
    print_r(count($array)); 
    echo "<br>";
    print_r(sizeof($array));  */
    //Counts the number of elements in an array.

/*
    $array=array("a"=>1,"b"=>2,"c"=>3,"d"=>4);
    var_dump(array_key_exists("e",$array));      */
    //Checks if the given key or index exists in the array.

/*
    $array=array("a"=>1,"bwew"=>2,"c"=>3,"d"=>4);
    var_dump(array_keys($array));      */
    // Returns all the keys or a subset of the keys of an array.

 /*
    $array=array("a"=>1,"bwew"=>2,"c"=>3.25,"d"=>4);
    var_dump(array_values($array));    */  
      // Returns all the values of an array.



      // 4. Array Search:



    /*
    $array=array(2,4,6,8,10);
    var_dump(in_array("10",$array)); */
    //  Checks if a value exists in an array.

/*
    $array=array("a"=>1,"b"=>2,"c"=>3,"d"=>4);
    var_dump(array_search("2",$array));  */
    //Searches an array for a given value and returns the corresponding key.

/*
    $array=array(2,4,6,8,10);
    var_dump(array_reverse($array)); */
    //Returns an array with elements in reverse order.



    //5.Array Sorting:



    /*
    $array=array(12,4,6,18,1);
    sort($array);
    print_r($array);  */
    // sort arrays in ascending order

    /*
    $array=array(12,4,6,18,1);
    rsort($array);
    print_r($array); */
    // sort arrays in descending order

  /*
    $array=array("a"=>4,"b"=>60,"c"=>2,"d"=>14);
    asort($array);
    print_r($array);    */
    // sort associative arrays in ascending order, according to the value

    /*
    $array=array("a"=>4,"ba"=>60,"bc"=>2,"ad"=>14);
    ksort($array);
    print_r($array);  */  
    // sort associative arrays in ascending order, according to the value

    /*
    $array=array("a"=>4,"b"=>60,"c"=>2,"d"=>14);
    arsort($array);
    print_r($array);    */
    //sort associative arrays in descending order, according to the value

    /*
    $array=array("a"=>4,"b"=>60,"c"=>2,"d"=>14);
    krsort($array);
    print_r($array);    */
    //sort associative arrays in descending order, according to the key




    //6. Array Filtering



    // $array=array(1,2,3,4,5,6,7,8);
    // $filterarray=array_filter($array,function($value)
    // {
    //     return $value%2==0;
    // });
    // print_r($filterarray);
    //// Filters elements of an array using a callback function.


    // $numbers = [0,1,3,5,6];
    // $square = function ($num)
    //  {
    // return $num * $num;
    //  };

    // $squaredNumbers = array_map($square, $numbers);
    // var_dump($squaredNumbers);
    // //- Applies a callback function to each element of an array.


    // $numbers = [1, 2, 3, 4, 5];
    // $sumCallback = function ($carry, $item)
    //  {
    //     $carry += $item;
    //     return $carry;
    //  };
    //  $sum = array_reduce($numbers, $sumCallback, 0);
    // var_dump($sum);



    //7.array slicing



    // $a=array("red","green","blue","yellow","brown");
    // print_r(array_slice($a,2,3,true));  //if it's false then it gives new array otherwise give old array but only length value shows
    // // - Extracts a portion of the array.

    
   /*
    $array=[1,2,3,4,5,6,7];
    array_splice($array,3,2,["hi","hello","how","i"]);
    print_r($array);     */
    //- Removes a portion of the array and replaces it with something else.

   
        



?>