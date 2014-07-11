
<?php
require_once('DAO.php');
	include("head.php");
	//include("ps_pagination.php");
	global $category;
	if( isset($_GET['englishname']))
		 $category = $_GET['englishname'];

	//$a = new PS_Pagination("","");


?>

<span  style="border-top: 5px bolded #eee;">列表信息哦：</span>
<div class = "container">
 <div id="all-list" class="section">
 	<ul id="media" style="border-top: 1px dotted #eee;" class="sep">
 		<style> .weizhan-local { background-color: lightgreen; cursor: default; } .weizhan-collect { cursor: pointer; } .weizhan-collect-success { background-color: #dcba01; color: #fff; cursor: default; }</style>

	<?php
		    $dao = new DAO();
		    $listArray = $dao->getList($category);
		 
			foreach ($listArray as $value) {
				echo"<li>
									    	
					<a href='detail.php?category=$category&id=".$value['id']."'>". $value['标题']."</a></li>";
			}
   	       echo"</ul>";
		   echo "</div>";

		?>

</div>