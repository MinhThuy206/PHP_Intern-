<?php
require_once 'User.php';
class UserRepository{
    public function save(User $user)
    {
        echo "Save user name ".$user->getName();
    }
}

$user = new User("Thuy");
$userRepository = new UserRepository();
$userRepository->save($user);