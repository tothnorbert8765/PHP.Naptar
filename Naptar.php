<h1>Naptár</h1>

<table border=2>
<tr>
<?php

		date_default_timezone_set("Europe/Budapest");
		$napnev= array("","hétfő","kedd","szerda","csütörtök","péntek","szombat","vasárnap");
		$s=date("N");
		print "ma van a hét" .$s. "napja";
		print "<br>";
		print "Hétfő: ". date("Y.m.d" , time()-($s-1)*24*60*60)."<hr>";
		$hetfo= time()-($s-1)*24*60*60;
		
		for($i=0;$i<=6;$i++)
		{
		print"<td>" date("Y.m.d",$hetfo + $i*24*60*60)."</td>";


		}

?>
</tr>
</table>