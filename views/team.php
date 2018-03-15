<h3><a href="?">Classement</a></h3><br>

<table class="table">
 <tr>
  <th>N°</th>
  <th>Équipe</th>
  <th>MJ</th>
  <th>G</th>
  <th>N</th>
  <th>P</th>
  <th>BP</th>
  <th>BC</th>
  <th>DB</th>
  <th>PTS</th>
 </tr>
 <tr class="active">
  <td><?=$team['ranking']?></td>
  <td><b><?=$team_names[$id]?></b></td>
  <td><?=$team['played']?></td>
  <td><?=$team['won']?></td>
    <td><?=$team['drawn']?></td>
  <td><?=$team['lost']?></td>
    <td><?=$team['goals_for']?></td>
    <td><?=$team['goals_against']?></td>
    <td><?=$team['goal_difference']?></td>
      <td><?=$team['points']?></td>
 </tr>
</table>



<h3>Matchs</h3><br>

<table class="table table-hover">

   <?php foreach ($team['games'] as $game_id => $game_infos){ ?>
<tr>
  <td><?=$game_infos['date']?></td>
  <?php if ($game_infos['goal_counts'][0]>$game_infos['goal_counts'][1]) { ?>
  <td><a href="/index.php/soccer/team/<?=$game_infos['teams'][0]?>"><b><?=$team_names[$game_infos['teams'][0]]?></a></b></td>
  <td><a href="/index.php/soccer/game/<?=$game_id ?>"><b><?=$game_infos['goal_counts'][0]?></b> - <?=$game_infos['goal_counts'][1]?></a></td>
  <td><?=$team_names[$game_infos['teams'][1]]?></td>
  <?php  } ?>
<?php if ($game_infos['goal_counts'][1]>$game_infos['goal_counts'][0]) { ?>
  <td><a href="/index.php/soccer/team/<?=$game_infos['teams'][0]?>"><?=$team_names[$game_infos['teams'][0]]?></a></td>
  <td><b><a href="/index.php/soccer/game/<?=$game_id ?>"></b><?=$game_infos['goal_counts'][0]?> - <b><?=$game_infos['goal_counts'][1]?></b></a></td>
<td><b><?=$team_names[$game_infos['teams'][1]]?></b></td>
<?php } ?>
<?php if ($game_infos['goal_counts'][1]==$game_infos['goal_counts'][0]) { ?>
<td><a href="/index.php/soccer/team/<?=$game_infos['teams'][0]?>"><b><?=$team_names[$game_infos['teams'][0]]?></a></b></td>
<td><b><a href="/index.php/soccer/game/<?=$game_id ?>"><b><?=$game_infos['goal_counts'][0]?></b> - <b><?=$game_infos['goal_counts'][1]?></a></td>
<td><b><?=$team_names[$game_infos['teams'][1]]?></b></td>
<?php  } ?>

 </tr>
 <?php } ?>
</table>
