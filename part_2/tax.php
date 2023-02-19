<!doctype html>
<html>

<head>
   <link href="./part2.css" rel="stylesheet" />
</head>

<body><?php 
  $salary = (int)$_POST['salary'];
  $type = $_POST['type'];
  $taxfree =(int)$_POST['taxfree'];
  $tax=0;
  $NSSF=0;
if($type==="monthly"){$salary=$salary*12;}
  switch($salary){
    case $salary<=10000:
        $tax= 0;
        break;
    case $salary>10000 && $salary<=25000:
        $tax= $salary*0.11;
        break;
    case $salary>25000 && $salary<=50000:
        $tax=$salary*0.3;
        break;
    case $salary>50000:
        $tax=$salary*0.4;
        break;
  }
  if($salary>10000){$NSSF=$salary*0.04;}
  $net=$salary-$tax-$NSSF+$taxfree;
  echo "<table> <tr> <td>Total Salary</td><td> Tax Amount</td><td> </td><td> NSSF</td>Salary After Taxes </tr>
  <tr> <td>$salary</td><td>$tax</td><td> </td><td> $NSSF</td>$net</tr>
  </table>"

 
?>

   <form class="tax" method="post" action="./tax.php">
      <div>
         <label>Salary</label>
         <input type="number" name="salary" />
      </div>
      <div>
         <label>monthly</label>
         <input type="radio" value="monthly"name="type" />
         <label>yearly</label>
         <input type="radio" value="yearly"name="type" />
      </div>
      <div>
         <label>Tax-free Allowance</label>
         <input type="number" name="taxfree" />
      </div>
      
      <div> <button type="submit">Calculate</button></div>
   </form>
</body>

</html>