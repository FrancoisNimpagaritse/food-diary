<?php

namespace Tests\AppBundle\Entity;

use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testFullnameMethodWorksFine()
    {
        $user = new User('George', 'Goerge Burchaga', 'george@gmail.com', null, null);

        $this->assertSame('Goerge Burchaga', $user->getFullname());
        
    }
}