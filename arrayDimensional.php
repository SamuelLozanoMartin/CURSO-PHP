

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  ); 

  define("stock",20); 
	for ($row = 0; $row < 4; $row++):
	if ($cars[$row][1]<stock): ?>
		 <p><b>Row number <?php echo $row ?> </b></p><ul>
  		<?php for ($col = 0; $col < 3; $col++): ?>
    		<li> <?php echo $cars[$row][$col] ?> </li>
  		<?php endfor ?>
  		</ul>
	<?php endif?>
<?php endfor ?>


