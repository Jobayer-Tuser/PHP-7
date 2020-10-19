<select>
<?php 
for($year=1801 ; $year <= 2099 ; $year++)
{
	if($year==1901)
		$year=2000;
	
	if($year >=1901 && $year <=2000)
		continue; # break
	else
		echo "<option>$year</option>";
}
?>
</select>