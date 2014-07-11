<!DOCTYPE html>
<html>
<?php
require_once('DAO.php');
include("head.php");
?>
<div class="container">
	<div id="footlinks">
	  <table>
		<tbody>
			<tr>
				<th>类别目录: </th>
				<br>
				<td>
					<?php
                        $dao = new DAO();
						$arr = $dao->getCategory();
					    $numInRow = 1;//每行多少个数据。
						foreach($arr as $englishName =>$category)
							{$numInRow ++;
						   if($numInRow % 10 ==1)
						   	echo "<br>";
						   else
						  	echo "<a href='fenye.php?englishname=$englishName' target='_blank' class='selected'>$category </a>";
						}
					?>
				</td>
			</tr>
		</tbody>
	   </table>
	</div>
</div>

</html>