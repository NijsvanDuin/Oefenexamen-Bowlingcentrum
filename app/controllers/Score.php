<?php
class Score extends Controller
{
    private $scoreModel;

    public function __construct()
    {
        $this->$scoreModel = $this->model('ScoreModel');
    }
}
