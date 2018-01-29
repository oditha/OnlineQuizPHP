<?php
session_start();
include("header.php");
include("database.php");

?>

    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Welcome to Quiz</h1>
        <div class="row center">
            <h5 class="header col s12 light">Select Subject to get Started</h5>
        </div
        <br><br>

    </div>

<div class="container">
    <ul class="collapsible popout" data-collapsible="accordion">

<?php
$rs = mysql_query("select * from mst_subject");

while ($row = mysql_fetch_row($rs)) {

    $subjectid = $row[0];

//    echo "<tr><td align=center ><a class='waves-effect' href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>"; ?>

    <li>
        <div class="collapsible-header"><i class="material-icons">whatshot</i><?php echo $row[1] ?></div>
        <div class="collapsible-body"><span><?php



                $rs0 = mysql_query("select * from mst_test where sub_id=$subjectid");
                if(mysql_num_rows($rs0)<1)
                {
                    echo "No Quiz for this Subject";

                }

                while($row0=mysql_fetch_row($rs0))
                {
                    echo "<tr><td align=center ><a href=quiz.php?testid=$row0[0]&subid=$subjectid><font size=4>$row0[2]</font></a><br>";
                }

                ?></span></div>
    </li>

<?php }




?>
    </ul>
</div>



<?php include("footer.php")?>