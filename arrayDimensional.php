

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)

	if ($cars[$row][1]<stock): ?>
  		<?php for ($col = 0; $col < 3; $col++): ?>
  		<?php endfor ?>
  		</ul>
	<?php endif?>
<?php endfor ?>


