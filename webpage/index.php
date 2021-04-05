<?php  
   $name="";
   $emal="";
   $username="";
   $password="";
   $conpass="";
   $dob="";
   $gender="";
   $ms="";
   $address="";
   $city="";
   $pc="";
   $hp="";
   $mp="";
   $ccn="";
   $cced="";
   $ms="";
   $wu="";
   $og="";

   if ($_SERVER["REQUEST_METHOD"]=="POST") {
         if(!preg_match($POST["name"], '/^[^\d]{2,}$/')){
             $name="it  should  be  bigger than  2 ";
		 }
		 if(!preg_match($POST["email"], '/^\b[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i')){
			$email="Enter  the  valid  email";
		}
		if(!preg_match($POST["username"], '/^.{5,}$/i')){
			$username="Enter  proper  username";
		}
		if(!preg_match($POST["password"], '/^.{8,}$/i')){
			$password="Enter  proper  password";
		}
		if(!preg_match($POST["conpass"], '/^$password/')){
			$conpass="Passowrd  do  not  match";
		}
		if(!preg_match($POST["dob"],'/^\d{2}\.\d{2}\.\d{4}$/')){
			$dob="Enter  the valid  date";
		}
		
		if(!preg_match($POST["city"],'/^.+$/')){
			$city="Enter  the  valid  city  name";
		}
		if(!preg_match($POST["pc"],'/^\d{6}$/')){
			$pc="Enter  the  proper postall  code";
		}
		if(!preg_match($POST["hp"],'/^\d{2}[ -]\d{7}$/')){
			$hp="Enter  the  valid  home  phone";
		}
		if(!preg_match($POST["mp"],'/^\d{2}[ -]\d{7}$/')){
			$mp="Enter  the  valid mobile  phone";
		}
		if(!preg_match($POST["ccn"],'/^(\d{4}[ -]){3}\d{4}$/')){
			$cc="Enter  the  valid  credit  card  number";
		}
		if(!preg_match($POST["cced"],'/^\d{2}\.\d{2}\.\d{4}$/')){
			$cced="Enter  the  valid enter  the  proper credit  card  expiry  date";
		}
		if(!preg_match($POST["ms"],'/^UZS \d{0,3}(,\d{3})*\.\d{2}$/i')){
			$ms="Enter  the  valid  monthly  salary";
		}
		if(!preg_match($POST["og"],'/^[0-3]\.*[0-9]*$/')){
			$wu="Enter  the  valid website  url";
		}


   }

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<dt>Name</dt>
			<dd>
			<input  type="text"  name="name" value="<? $name ?>" required/>
			</dd>
			
			<dt>Email</dt>
			<dd>
			<input  type="email"  name="email"   value="<? $email ?>" required/>
			</dd>
		

		    <dt>Username</dt>
			<dd>
			<input  type="text"   name="username"   value="<? $username ?>" required/>
			</dd>


			<dt>Password</dt>
			<dd>
			<input  type="password"  name="password"  value="<? $password ?>"  required/>
			</dd>
      
			<dt>Confirm password</dt>
			<dd>
			<input  type="password"   name="conpass"  value="<? $conpass ?>" required/>
			</dd>

            <dt>Date  of  birth</dt>
			<dd>
			<input  type="date"   name="dob"  value="<? $dob ?>"required/>
			</dd>
     
			<dt>Gender</dt>
			<dd>
		       <select   name="gender">
	          	<option  value="male">Male</option>
	          	<option  value="female">Female</option>
		       </select>
			</dd>


			<dt>Marital  status</dt>
			<dd>
		       <select  name="ms">
	          	<option  value="single">Single</option>
	          	<option  value="married">Married</option>
				  <option  value="divorced">Divorced</option>
	          	<option  value="widowed">Widowed</option>
		       </select>
			</dd>

			<dt>Address</dt>
			<dd>
			<input  type="text"   value="<? $address ?>"  name="address" required/>
			</dd>


			<dt>City</dt>
			<dd>
			<input  type="text"  name="city"  value="<? $city ?>"  required/>
			</dd>
 
			<dt>Postal  code</dt>
			<dd>
			<input  type="text" name="pc"  value="<? $pc ?>" required/>
			</dd>


			<dt>Home  phone</dt>
			<dd>
			<input  type="tel"  name="hp"  value="<? $hp ?>"  required/>
			</dd>
      
			<dt>Mobile phone</dt>
			<dd>
			<input  type="tel"  name="mp"  value="<? $mp ?>"  required/>
			</dd>


            <dt>Credit  card  number</dt>
			<dd>
			<input  type="text"   name="ccn"  value="<? $ccn ?>" required/>
			</dd>

			<dt>Credit  card  expity  date</dt>
			<dd>
			<input  type="date"  name="cced"  value="<? $cced ?>"  required/>
			</dd>
            

			<dt>Monthly  salary</dt>
			<dd>
			<input  type="text"  name="ms"   value="<? $ms ?>" required/>
			</dd>

			<dt>website  url</dt>
			<dd>
			<input  type="url"  name="wu"   value="<? $wu ?>" required/>
			</dd>

			<dt>Overal gpa</dt>
			<dd>
			<input  type="phone"  name="og"  value="<? $og ?>" required/>
			</dd>


		</dl>
		
		<div>
			Register
		</div>
	</body>
</html>