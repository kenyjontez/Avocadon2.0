<!DOCTYPE html>
<html>
<body>
 <style>
    align:center;
</style>	
	
<form>
<style>
h1   {color: green;}
h2   {color: orange;}
</style>
<h1><b>Avocado Payroll </b></h1> <p>
<h3>By KenzTech </h3>
<p>Avocados are good for your health<br>
  They are mainly grown in central areas with cool humidity and warm temparatures<br>
  The span growth takes around  5years 6 months after tree planting from the nursery producing high production.<br>
  Production mainly occurs when there is a high season mainly june-july and  medium during parts of september,december and january.<br>
  Before harvesting the buyers contact the farmer and set a date to view the farm and access precise location after which  harvesting
  happens at a later date as per the agreement of a contract if its a company in which they give a deposit to the farmer before actual harvest date.<br>
  The harvesting of the fruits mainly takes place at a farmers farm when a buyers comes and they get to terms on the price per fruit.<br>
  After the negotiations the harvesting is done and sums calculated while being ferried in the vans of the buyer or the company.<br>
  The avocado is later taken to the factory and graded based on size ,quality and weight and once done it is exported.<br>
  Payment may happen one to one basis at the farmers location or at a later date if sold in kilograms at but at a good price.<br>
  </p>
<form action="/newdata.php">
   <form method="POST" action="dbconnect.php">
   <h2><b><u>infodata</u></b></h2>
   <fieldset>
   <label for="Name">Name:</label><br>
   <input type="text"id="Name"name="Name"><br><br>
   <label for="GENDER">GENDER:</label><br>
   <select gender="text" id="gender"><p>
	<option value="">--- Choose a gender---</option>
	<option value="red">male</option>
	<option value="green">female</option>
	<option value="blue">rather not say</option>
   </select><br><br>
   <label for="contact">contact:</label><br>
   <input type="text"id="Telephone "name="Telephone"><br><br>
   <label for="dob">dob:</label><br>
   <input type="text"id="dob"name="dob"><br><br>
   <label for="identity">identity:</label><br>
   <input type="text"id="identity"name="identity"><br><br>
   <label for="location">location:</label><br>
   <input type="text"id="location"name="location"><br><br>
   <button type="button">SUBMIT</button><br><br>
   </fieldset>
   </form>
   <form>
   <form method="POST" action="dbconnect.php">
   <h2><b><u>exporter</u></b></h2>
   <fieldset>
    <label for="admission">admission:</label><br>
    <input type="admission"id="admssion"name="admission"><br><br>
	<label for="contract">contract:</label><br>
    <input type="text"id="contract"name="contract"><br><br>
	<label for="location">location:</label><br>
    <input type="text"id="location"name="location"><br><br>
	<label for="duration">Duration:</label><br>
    <input type="text"id="duration"name="Duration"><br><br>
	<label for="telephone">telephone:</label><br>
    <input type="text"id="telephone"name="telephone"><br><br>
	<label for="market">market:</label><br>
    <input type="text"id="market"name="market"><br><br>
    <button  type="button">SUBMIT</button><br><br>
    </fieldset>
	<form>
   <form method="POST" action="dbconnect.php">
   <h2><b><u>retailer</u></b></h2>
   <fieldset>
   <label for="Name">Name:</label><br>
   <input type="text"id="Name"name="Name"><br><br>
   <label for="contact">contact:</label><br>
   <input type="text"id="contact"name="contact"><br><br>
   <label for="type">type:</label><br>
   <input type="text"id="type"name="type"><br><br>
   <label for="date">date:</label><br>
   <input type="text"id="date"name="date"><br><br>
   <label for="price">price:</label><br>
   <input type="text"id="price"name="price"><br><br>
   <label for="location">location:</label><br>
   <input type="text"id="location"name="location"><br><br>
   
   </form>
	<form action="searchprime.php" method="post">
        <div class="input-group">
        <input type="search" id="query" name="valueToSearch" placeholder="Type here to Search...">
        <button class="form-control"  name="search"  title="Search"><i class="bi bi-search"></i>Search</button>
        </div>
    </form>
	 
	<p>AVOCADOS ARE SWEET.....YUMMY!!!!!</p>
	
	<p>
	<b>Avocados have a few benefits when as a fruit or when processed.</b><br>
	   They provide lots of vitamins to the body when consumed .<br>
	   When processed avocados may be used to make oils and other products in the market today.<br>
	</p>   
   

</body>
</html>
   
   