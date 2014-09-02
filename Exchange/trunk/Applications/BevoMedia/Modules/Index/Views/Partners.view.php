	<h2>BevoMedia Exchange Partners</h2>
	
	<?php 
		foreach ($this->Networks as $Network)
		{
			if ($Network->id==1109) continue;
	?>
		<img src="http://beta.bevomedia.com/Themes/BevoMedia/img/networklogos/uni/<?=$Network->id?>.png" width="150" />
	<?php 
		}
	?>