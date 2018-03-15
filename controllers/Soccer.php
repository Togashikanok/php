<?php
class Soccer extends Controller {
  public function index() {
    $this->ranking();
  }

  public function ranking() {
    $actions=['ranking'];



     $title = 'Classement de la ligue de football';

$this->loader->load('ranking', ['title'=>$title, 'team_names'=>$team_names, 'ranking'=>$ranking]);
$this->soccer->team_names();
$this->soccer->ranking();
     //$view = 'ranking';
     //include 'views/page.php';


    /* Code de l'action 'ranking'. */
  }

  public function team($id) {
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if ($id===null || $id === false || !file_exists("models/team_$id.php")) {
      throw new Exception();
    }
   $this->soccer->ranking();
   $this->soccer->team($id);
   $title=$this->soccer->team_names();

$this->loader->load('team', ['title'=>$title, 'team_names'=>$this->soccer->team_names(), 'team'=>$this->soccer->team($id)]);


    /* Code de l'action 'team'. */
  }

  public function game($id) {
      $id = filter_var($id, FILTER_VALIDATE_INT);
      if ($id===null || $id === false || !file_exists("models/game_$id.php")) {
      throw new Exception();
      }
     $this->soccer->team_names();
     $this->soccer->game($id);
     $title= $team_names[$game['teams'][0]]."-".$team_names[$game['teams'][1]];
    $this->loader->load('game',
    ['title'=>$title,
    'team_names'=>$this->soccer->team_names(),
    'game'=>$this->soccer->game($id)]);

    /* Code de l'action 'game'. */
  }

  private function goal_counts($game, $position) {
    $count = 0;
   foreach ($game['goals'] as $goal) {
      if ($goal['team']==$position) {
        $count++;
      }
    }
    return $count;
  }
}
