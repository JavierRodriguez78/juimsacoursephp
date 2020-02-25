<?php


namespace Juinsa\services;


use Juinsa\DoctrineManager;
use Juinsa\LogManager;

class Service
{

    protected $doctrineManager;
    protected $logManager;

    public function __construct(DoctrineManager $doctrineManager, LogManager $logManager)
    {
        $this->doctrineManager = $doctrineManager;
        $this->logManager= $logManager;
        $this->logManager->info("Service ->".get_class($this)." up");
    }
}