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

    <form action="Controller.php" onsubmit= "return validate_form(this)" id="validateform" method="post" class="form" novalidate="true">
	<?php
		echo "	<input name ='englishname' type ='hidden' value=$englishname>";
        $dao = new DAO();
		$fieldArray = $dao->getItemFields($englishname);
		foreach($fieldArray as $key=>$fieldName)
		echo
		" <div class='p-line' id='".$fieldName ."'>
			<label class='p-label'> $fieldName ：</label>
			<div class='publish-detail-item'>
				<input type='text' maxlength='25' name='".$fieldName."' order='1' title='标题' class='input input-60' data-parent='.p-line' required='required'>
			</div>
		</div>
		"
	?>
<p class="p-submit">
	<input type="submit" value="免费发布" id="fabu-form-submit" class="form-submit button button-green">
</p>
</form>
</div>
<script type="text/javascript">
    function validate_required(field,alerttxt)
    {
        with (field)
        {
            if (value==null||value=="")
            {
                alert(alerttxt);
                return false;
            }
            else {
                return true;
            }
        }
    }

    function validate_form(thisform)
    {

        var input = document.getElementsByTagName('input');
        for(var i =0;i<input.length;i++)
        {	if(!validate_required(input[i],"请输入完整信息"))
            return false;
        }
        return true;

    }

</script>
</html>