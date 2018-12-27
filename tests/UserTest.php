<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
    public function testValidObject()
    {
        $addressMock = $this->getMockBuilder('App\Address')
                            ->disableOriginalConstructor()
                            ->getMock();

        $fakeAddress = '10 rue test 75005 PARIS, France';
        $addressMock->method('getFullAddress')->willReturn($fakeAddress);

        $user = new User("t", "t", "l", $addressMock);

        $this->assertInstanceOf(
            User::class,
            $user
        );

        $this->assertEquals($fakeAddress, $user->getAddress()->getFullAddress());
    }

    public function testCannotCreateWithLessArguments()
    {
        $this->expectException(ArgumentCountError::class);

        new User();
    }
    
    public function testCannotCreateWithInvalidArguments()
    {
        $this->expectException(TypeError::class);

        new User([], "toto", 4);
    }
}
