<?php
	session_start();
	$Id=$_SESSION['Id'];
	
	echo '<table border=3 width=450 align=center>';
	echo '<tr align=center><td colspan=4><b>你購買的產品資訊如下</b></td></tr>';
	echo '<tr><td>項次</td><td>產品代號</td><td>產品名稱</td><td>價格</td></tr>';
	switch ($Id){
		case 'book1':
			//$_SESSION["ID"]='book1';
			$Name='超圖解 Arduino 互動設計入門 第3版';
			$Price='680';
			break;
		case 'book2':
			//$_SESSION["ID"]='book2';
			$Name='第一次學 Python 就上手！';
			$Price='480';
			break;
		case 'cd1':
			//$_SESSION["ID"]='cd1';
			$Name='LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A)';
			$Price='328';
			break;
		default:
			//$_SESSION["ID"]='cd2';
			$Name='李千娜 / 愛 到站了';
			$Price='459';
			break;
	}
	$total=0;
	$num=count($Id);
	if(isset($_SESSION["Id"])){
		for($i=0;$i<=$num;$i++){
			$count=$i+1;
			$total+=$Price[$i];
			echo "<tr><td>".$count."<td><td>".$Id[$i]."<td><td>".$Name[$i]."<td><td>".$Price[$i]."<td><td>";
		}
	}
	echo "<tr><td colspan='4' style='text-align:right'>總金額=".$total."元</td></tr>";
?>