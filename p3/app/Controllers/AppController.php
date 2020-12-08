<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $results = $this->app->old('results');

        return $this->app->view('index', [
           'results' => $results
        ]);
    }
    public function history()
    {
        $rounds = $this->app->db()->all('rounds');
         
        return $this->app->view('history', [
            'rounds' => $rounds
        ]);
    }

    public function round()
    {
        $id = $this->app->param('id');

        $round = $this->app  ->db()->findById('rounds', $id);
         
        return $this->app->view('round', [
            'round' => $round
        ]);
    }

    public function play()
    {
        $this->app->validate([
        'choice' => 'required'
    ]);

    
        $choice = $this->app->input('choice');
        
        #Save results to the database
        $moves = ['1', '2', '3', '4', '5', '6'];
        $playerAMove = $moves[rand(0, 5)];
        $playerBMove = $moves[rand(0, 5)];

        if ($playerAMove == $playerBMove) {
            $tie = true;
        } else {
            if ($playerAMove > $playerBMove) {
                $highRoller = 'Player A';
            } else {
                $highRoller = 'Player B';
            }

            if ($choice == $highRoller) {
                $winner = true;
            } else {
                $winner = false;
            }
        }

        $data = [
            'choice' => $choice,
            'winner' => $winner ? 1 : 0,  #covert the win value of true or false to numeric value of 1 or 0
            'time' => date('Y-m-d H:i:s'),
        ];

        $this->app->db()->insert('rounds', $data);

        # Redirect the user back to the home page with the form to play again
        $this->app->redirect('/', [
            'results' => [
                'choice' => $choice,
                'winner' => $winner,
                "Player A" => $playerAMove,
                "Player B" => $playerBMove,
                "Tie" => $tie,
                "High Roller" => $highRoller
            ]
        ]);
    }
}