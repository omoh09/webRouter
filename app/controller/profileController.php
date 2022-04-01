<?php
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class profleController extends AbstractController
{
    public function myProfile()
    {
        $name = 'Gabriel Ifoga';
        $username = 'omoh';
        $track = 'Backend';
        $tech = 'php';
        $data = [
            'Name' => $name,
            'Username' => $username,
            'Track' => $track,
            'Tech' => $tech
        ];
        return $data;
    }
}