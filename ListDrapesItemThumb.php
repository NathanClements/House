<?php
include 'header.php';
permission_check("", "", "", "", "You do not have permission to view items!");
?>

<div class="fluid-row">
	<h3>Drapes</h3>
</div>

<div class="fluid-row">
<ul class="nav nav-tabs">
	<li><a href="ListDrapesItem.php">As Table</a></li>
	<li class="active"><a href="#">As Thumbnails</a></li>
</ul>

<?php
	displayThumb("drapes", "are not drapes");
?>
<?php
include 'footer.php';
?>