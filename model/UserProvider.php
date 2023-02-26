<?php
require_once 'User.php';
class UserProvider
{
    private array $accounts = [
        'root' => '123',
    ];

    public function getByUserNameAndPassword(string $username,
                                             string $password): ?User
    {
        $expectedPassword = $this->accounts[$username] ?? null;
        if ($expectedPassword === $password) {
            return new User($username);
        }
        return null;
    }
}