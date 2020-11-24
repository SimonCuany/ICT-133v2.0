<h2>Partie basique</h2>
<?php echo "First date : " . date("l d F Y"); ?><br><!-- Première date  -->
<?php echo "Twice date : " . date("M dS Y"); ?><br><!-- Deuxième date -->
<?php echo "Third date : " . date("d/m/y h:i"); ?><br><!-- Troisième date -->
<?php echo "Fourth date : " . date("d M Y, h:i:s"); ?><br><!-- Quatrième date -->
<?php echo "Fifth date : " . date("r"); ?><br><!-- Cinquième date -->

<h2>Partie simulée</h2>

<?php echo "First date : " . date("l d F Y", strtotime("+ 1 Year")); ?><br><!-- Première date  -->
<?php echo "Twice date : " . date("M dS Y", strtotime("- 1 Year")); ?><br><!-- Deuxième date -->
<?php echo "Third date : " . date("d/m/y h:i",strtotime("+ 10 Year")); ?><br><!-- Troisième date -->
<?php echo "Fourth date : " . date("d M Y, h:i:s",strtotime("- 25 Year")); ?><br><!-- Quatrième date -->
<?php echo "Fifth date : " . date("r",strtotime("- 1000 Year")); ?><br><!-- Cinquième date -->