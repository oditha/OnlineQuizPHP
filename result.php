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

<?php
extract($_SESSION);
$rs=mysql_query("select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$login'",$cn) or die(mysql_error());

echo "<h1> Result </h1>";
if(mysql_num_rows($rs)<1)
{
    echo "<br><br><h1> You have not given any quiz</h1>";
    exit;
}
echo "<table class='responsive-table' align=center><tr><td width=300>Test Name <td> Total<br> Question <td> Score";
while($row=mysql_fetch_row($rs))
{
    echo "<tr><td>$row[0] <td align=center> $row[1] <td align=center> $row[3]";
}
echo "</table>";
?>

<?php include("footer.php")?>