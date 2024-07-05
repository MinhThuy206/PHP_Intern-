<?php
interface Logger
{
    public function log($message);
}

class FileLogger implements Logger
{
    public function log($message)
    {
        // Code to log message to a file
    }
}

class DatabaseLogger implements Logger
{
    public function log($message)
    {
        // Code to log message to a database
    }
}

class UserController
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function createUser($userData)
    {
        // Code to create a user
        $this->logger->log("User created");
    }
}

// Usage
$fileLogger = new FileLogger();
$userController = new UserController($fileLogger);
$userController->createUser(['name' => 'John Doe']);


