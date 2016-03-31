<?php
/**
 * Created by PhpStorm.
 * User: a609848
 * Date: 30/03/2016
 * Time: 15:34
 */

namespace Screenfony\DemoBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Screenfony\DemoBundle\Entity\User;

class LoadUserData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $alice = new User();
        $alice->setUsername('alice');
        $alice->setPassword('passAlice');
        $alice->setEmail('alice@gmail.com');

        $bob = new User();
        $bob->setUsername('bob');
        $bob->setPassword('passBob');
        $bob->setEmail('bob@gmail.com');

        $manager->persist($alice);
        $manager->persist($bob);

        $manager->flush();
    }
}