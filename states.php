<?php
$allTheStates="Mississippi Alabama Taxas Masschusetts Kansas";
$states1=explode(' ',$allTheStates);
$statesArray=[ ];
$i=0;

foreach($states1 as $state)
{
if (preg_match('/xas$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;

echo "<br> the states that begins with k end in s".$state;
}
}

foreach($states1 as $state)
{
if (preg_match('/^K.*s$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;

echo "<br> the states that begins with k end in s".$state;
}
}

foreach($states1 as $state)
{
if (preg_match('/^M.*s$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;

echo "<br> the states that begins with k end in s".$state;
}
}

foreach($states1 as $state)
{
if (preg_match('/a$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;

echo "<br> the states that begins with k end in s".$state;
}
}

foreach($statesArray as $element => $value)
{
print("<br/> index[".$element."] contains <strong>".$value."</strong>");
}
