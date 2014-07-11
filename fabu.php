<html>
<?php
require_once('DAO.php');
include("head.php");
?>
<div class="container">
	<div id="footlinks">
		<span style ="font-size:30px;color:red">请选择要发布信息的类别: </span>
	  <table>
		<tbody>
			<tr>
				
				<br>
				<td>
					<?php
                    $dao = new DAO();
                    $arr = $dao->getCategory();
					     $numInRow = 1;//每行多少个数据。
						foreach($arr as $eglishName =>$category)
							{$numInRow ++;
						   if($numInRow % 10 ==1)
						   	echo "<br>";
						   else
						  	echo "<a href='fabu_action.php?englishname=$eglishName' target='_blank' class='selected'>$category </a>";
						}
					?>
				</td>
			</tr>
		</tbody>
	   </table>
	</div>
</div>
</html>
