<?php include('depdataphp.php')?>
<!DOCTYPE html>
<html>
<title>PAYMENT PARAMETERS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-black w3-large"
  onclick="w3_close()">Close &times;</button>
  <a class="w3-bar-item w3-button w3-black" href="home.php">HOME</a>
  <a class="w3-bar-item w3-button w3-black" href="department.php">DEPARTMENT</a>
  <a class="w3-bar-item w3-button w3-black" href="employee.php">EMPLOYEE</a>
  <a class="w3-bar-item w3-button w3-black" href="employee-payment.php">PAYMENT PARAMETERS</a>
  <a class="w3-bar-item w3-button w3-black" href="employee-payslip.php">PAY SLIP</a>
  <a class="w3-bar-item w3-button w3-black" href="employee-setsalary.php">SET SALARY</a>
  <a class="w3-bar-item w3-button w3-black" href="employee-payhistory.php">PAYMENT HISTORY</a>
  <a href="index.php"><Button class="w3-bar-item w3-button w3-black" > LOGOUT</Button></a>
</div>

<div id="main">

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</button>
  <div class="w3-container">
    <h1>PAYMENTS</h1>
  </div>
</div>
 
 

 
<div class="w3-container">
           
      <div class="w3-container" style="padding: 50px 200px 20px 200px">
      <form class="w3-panel w3-card-4" action="emp-payphp.php" method="post">
          
          <p><label>Employee id</label>
               <input class="w3-input w3-light-grey w3-animate-input" type="number" name="empid"></p>
          <p>
              <label>Select Year</label>
               <input class="w3-input w3-light-grey w3-animate-input" type="number" name="year"></p>
         <p> <label>Select Month</label>
          <select class="w3-input w3-light-grey w3-animate-input" name="month">
           <option value="january">january</option>
            <option value="february">february</option>
            <option value="march">march</option>
             <option value="april">april</option>
               <option value="may">may</option>
              <option value="june">june</option>
              <option value="july">july</option>
              <option value="august">august</option>
              <option value="september">september</option>
              <option value="october">october</option>
              <option value="november">november</option>
              <option value="december">december</option>
       </select>
   </p>
         <p>
              <label>Absence</label>
               <input class="w3-input w3-light-grey w3-animate-input" type="number" name="absence"></p>
         <p>
              <label>Overtime</label>
                <input class="w3-input w3-light-grey w3-animate-input" type="number" name="overtime"></p>
        <p><label>Seasonal Bonus</label>
               <input class="w3-input w3-light-grey w3-animate-input" type="number" name="sbonus"></p>
   
        <p><label>Other Bonus</label>
               <input class="w3-input w3-light-grey w3-animate-input" type="number" name="obonus"></p>
          
          <P> 
              <input type="submit" value="Submit" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
              </P>     

          
        
     </form>
      
      </div>
   
      
<div class="w3-teal w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p></div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>



 

  
 
      
          
   