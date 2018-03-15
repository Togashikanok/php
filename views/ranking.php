<table class='table'>
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
<?php foreach ($ranking as $team_id=>$team_info){ ?>

  <tr>
    <td><?=$team_id?></td>
     <td><a href="/index.php/soccer/team/<?=$team_id?>"><?=$team_names[$team_id]?></a></td>
     <td><?=$team_info['played']?></td>
     <td><?=$team_info['won']?></td>
     <td><?=$team_info['drawn']?></td>
     <td><?=$team_info['lost']?></td>
     <td><?=$team_info['goals_for']?></td>
     <td><?=$team_info['goals_against']?></td>
     <td><?=$team_info['goal_difference']?></td>
     <td><?=$team_info['points']?></td>
    </tr>

<?php } ?>
</table>
