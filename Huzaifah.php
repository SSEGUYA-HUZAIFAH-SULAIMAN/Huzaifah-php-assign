<?php

function call_name(): string{
  $name = "SSEGUYA HUZAIFAH SULAIMAN";

return $name;
}

function my_age($Current_year, $Dob): int{
  $age = $Current_year - $Dob;
return $age;
}

function Home_Address(): string{
  $address = "ZANA Town";
  return $address;
}
print ("Your welcome Mr.".call_name()."<br>in ".Home_Address().
"<br>"."Your now ".my_age(2024,2003). "Years old");

?>