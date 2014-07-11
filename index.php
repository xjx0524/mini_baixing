<!DOCTYPE html>
<html>
<?php include("head.php");require_once('DAO.php');?>
<div class="container">
    <div id="footlinks">
        <span style ="font-size:30px;color:red">类别目录: </span>
        <table>
            <tbody>
            <?php
            $numInRow = 0;//每行多少个数据。
            $dao = new DAO();
            $arr = $dao->getCategory();
            foreach($arr as $eglishName =>$category)
            {

                if($numInRow%8 == 0)
                {
                    echo "<tr>";
                }
                $numInRow ++;

                echo "<td width ='100px'><a href='fenye.php?englishname=$eglishName' target='_blank' class='selected'>$category </a></td> ";
                if($numInRow % 8 ==0)
                    echo "</tr> \n";
            }


            ?>
            </tbody>
        </table>
    </div>
</div>
</html>