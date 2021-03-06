<?php

namespace AsyncTweets\TweetBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AsyncTweets\TweetBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user
            ->setId(3012301465)
            ->setName('Asynchronous tweets')
            ->setScreenName('AsyncTweets')
            ->setProfileImageUrl('http://abs.twimg.com/sticky/default_profile_images/default_profile_5_normal.png')
        ;

        $manager->persist($user);
        $manager->flush();
        
        $this->addReference('user', $user);
    }
    
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
