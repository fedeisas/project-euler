<?php
    function IsInteger($number)
    {
        $result = preg_match('/^-?[0-9]+$/', $number, $matches);
        return $result;
    }
 
    function IsEven($number)
    {
        return (($number % 2) == 0);
    }
     
    function IsPositive($number)
    {
        return $number >= 0;
    }
     
    function IsPerfectSquare($number)
    {
        return sqrt($number) == (int)sqrt($number);
    }
     
    function IsPalindrome($number)
    {
        return $number == strrev($number);
    }
     
    function PrimesFromErathosthenes($number)
    {
        $number = $number + 2; //Otherwise the actual number wouldn't be included in array of numbers
        $nlist = array();
        $sqrt = ceil(sqrt($number));
 
        $nlist[] = 2;
        $nlist[] = 3;
        for($i = 5 ; $i < $number ; $i += 2)
        {
            if($i % 3 != 0)
            {
                $nlist[] = $i;
            }
        }
         
        for($i=2,$divisor=5; $divisor < $sqrt ; $i++)
        {
            $count = count($nlist);
            $j = $i*$i;
            $nlist2 = array_slice($nlist,0,$j);
             
            for( ; $j < $count ; $j++)
            {
                $num = $nlist[$j];
                if($num % $divisor != 0)
                {
                    $nlist2[] = $num;
                }
            }
            unset($nlist);
            $nlist = $nlist2;
            $divisor = $nlist[$i+1];
        }
         
        $primes = $nlist;
        return $primes;
    }
     
    function IsPrime($number, $primeSource, $displayOption)
    {
        if(!IsInteger($number))
        {
            return false;
        }
        else
        {
            $number = (int) $number;
        }
        if(IsEven($number)){return false;}
         
        $primes;
         
        $IsInPrimesArray = false;
         
        if($primeSource == 'Sieve')
        {
            $primes = PrimesFromErathosthenes($number);
            if(in_array($number, $primes))
            {
                $IsInPrimesArray = true;
            }
            else
            {
                $IsInPrimesArray = false;  
            }
        }
         
        if($primeSource == 'File')
        {
            $primes = GetFirst100000PrimesFromFile();
            $number = "$number"."\r\n";
            if(in_array($number, $primes))
            {
                $IsInPrimesArray = true;
            }
            else
            {
                $IsInPrimesArray = false;
            }
        }
         
        if($displayOption == 'ShowPrimes')
        {
            echo "primes ".implode(" ", $primes)."<br />";
        }
         
        return $IsInPrimesArray;
    }
     
    function IsPalindromicPrime($number, $primeSource, $displayOption)
    {
        if(!IsPositive($number) || $number > 1318699)
        {
            return false;
        }
        if(!IsPalindrome($number))
        {
            return false;
        }
        else
        {
            if(IsPrime($number, $primeSource, $displayOption))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
     
    function GetFirst100000PrimesFromFile()
    {
        $primes = file('First100000Primes.txt');
        return $primes;
    }
     
?>