<?php

  $goals0 = 0;
  $goals1 = 0;
foreach ($game['goals'] as $game_id => $game_infos) {
  if ($game_infos['team']==0) {
    $goals0=$goals0+1;
    }
  elseif ($game_infos['team']==1) {
    $goals1=$goals1+1;
  }
}

?>

<table class="table">
 <tr class="active">
  <th><?=$game['date']?></th>
  <th><a href="/index.php/soccer/game/<?=$game['teams'][0]?>"><?=$team_names[$game['teams'][0]]?></a></th>
  <th><?=$goals0 ?> - <?=$goals1 ?></th>
  <th><a href="/index.php/soccer/game/<?=$game['teams'][1]?>"><?=$team_names[$game['teams'][1]]?></a></th>
 </tr>
 <?php foreach ($game['goals'] as $game_id => $game_infos) { ?>

<?php if ($game_infos['team']==0) {?>
  <tr>
   <td><?=$game_infos['time']?></td><td><?=$game_infos['player']?></td><td></td><td></td>
  </tr>
  <tr>
<?php } else { ?>
<tr>
 <td><?=$game_infos['time']?></td><td><td><td><?=$game_infos['player']?></td></td></td><td></td><td></td>
</tr>
<tr>
<?php } ?>
<?php } ?>

</table>
