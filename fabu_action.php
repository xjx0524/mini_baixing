<?php
require_once('DAO.php');
	include("head.php");
	global $englishname;
	if(isset($_GET['englishname']))
	{
		$englishname = $_GET['englishname'];
	}

?>
<html>
<javascript>

</javascript>
	<div id="publish" class="publish-detail"><div class="separate">请填写基本信息：</div>
	
    <form action="Controller.php" id="validateform" method="post" class="form" novalidate="true">
	<?php
		echo "	<input name ='englishname' type ='hidden' value=$englishname>";
        $dao = new DAO();
		$fieldArray = $dao->getItemFields($englishname);
		foreach($fieldArray as $key=>$fieldName)
		echo
		" <div class='p-line' id='".$fieldName ."'>
			<label class='p-label'> $fieldName ：</label>
			<div class='publish-detail-item'>
				<input type='text' maxlength='25' name='".$fieldName."' order='1' title='标题' class='input input-60' data-parent='.p-line' value=''>
			</div>
		</div>
		"		
	?>
<p class="p-submit">
	<input type="submit" value="免费发布" id="fabu-form-submit" class="form-submit button button-green">
</p>
</form>
</div>
</html>