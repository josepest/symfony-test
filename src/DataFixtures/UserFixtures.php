<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class UserFixtures extends Fixture
{
    private $encoderFactory;

    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('josepe@gmail.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->encoderFactory->getEncoder(User::class)->encodePassword(
            'oMPOLO010',
            null
        ));

        $manager->persist($user);
        $manager->flush();
    }
}
