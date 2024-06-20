<div class="bounceInRight wow ">
<h2>Работяги</h2>
<center class='rabotyagi'>
<?php
$res = mysqli_query($connection, "SELECT * FROM `ss_employees`;");
while ($row = mysqli_fetch_assoc($res)) {
	echo "<div class='column-center'>";
	echo "<img  alt='$row[fio]' title='$row[fio]' src='images/e$row[id_employee].jpg' />";
	echo "<p><b>$row[fio]</b></p>";
	echo "</div>";
}

?>
</center>
</div>
