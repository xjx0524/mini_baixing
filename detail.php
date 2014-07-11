
<?php
require_once('DAO.php');
	include("head.php");

?>

<span  style="border-top: 5px bolded #eee;">详细信息：</span>
<div class = "container">
 <div id="all-list" class="section">
 	<ul id="media" style="border-top: 1px dotted #eee;" class="sep">
 		<style> .weizhan-local { background-color: lightgreen; cursor: default; } .weizhan-collect { cursor: pointer; } .weizhan-collect-success { background-color: #dcba01; color: #fff; cursor: default; }</style>
	<?php
            if (!isset($_GET['id']) || !isset($_GET['category'])) {
                header('Location: index.php');
                exit;
            }
            $dao = new DAO();
		    $detailArray = $dao->getItem($_GET['category'], $_GET['id']);
	       	
	       	echo "<ul>";
			//页面索引
			foreach($detailArray as $key=> $value)
			{
				echo "<li>$key:
					  <br>
						$value				
					  </li>" ;		

			}

			echo "</ul>";
		?>

</div>