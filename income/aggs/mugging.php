<?
$show = ( isset( $_POST['mug'] ) ) ? $continue : false;
?>
<div style="width: 50%; max-width: 100%;">

	<div class="title">
		<div style="margin-left: 10px;">Mugging</div>
	</div>
	<div class="content">
	<p>You are about to mug a person. Will the thrill of succeeding your mug weigh up to the misery of failing it? Remember, you can still go <a href="agg_crimes.php">back</a>!</p>
	<form action="agg_crimes.php" method="post">
		<table>
		<tr>
			<td style="width: 20%; text-align: left;">
				<strong>Victim:</strong>
			</td><td>
				<input type="text" class="std_input" name="victim" style="width: 130px;" />
			</td>
		</tr>
		</table><br />
		<input type="submit" class="std_input" name="mug" value="Mug!" />
		<input type="hidden" name="submit" />
		<input type="hidden" name="agg_crime" value="mugging" />
	</form>
	</div>
	
</div>