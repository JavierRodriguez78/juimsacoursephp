<?php
declare(strict_types=1);

namespace Juinsa\services;



use Juinsa\db\entities\User;

class UserService extends Service
{

    public function createUser(User $user):User
    {
        try{
            $this->doctrineManager->em->persist($user);
            $this->doctrineManager->em->flush();
            return $user;
        }catch (\Exception $e){
         $this->logManager->error($e->getMessage());
        }
        return null;
    }



}