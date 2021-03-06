<?php

namespace TRBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use Lthrt\UserBundle\Entity\Group;

/**
 * Generated by Webonaute\DoctrineFixtureGenerator.
 *
 */
class LoadGroup extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Set loading order.
     *
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $manager->getClassMetadata(Group::class)->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);

        $group1              = new Group();
        $group1->name        = 'Red';
        $group1->description = 'Red Group';
        $group1->active      = true;
        $group1->id          = 1;
        $this->addReference('_reference_LthrtEntityBundleGroup1', $group1);
        $this->addReference('red_group', $group1);
        $manager->persist($group1);

        $group2              = new Group();
        $group2->name        = 'Blue';
        $group2->description = 'Blue Group';
        $group2->active      = true;
        $group2->id          = 2;
        $this->addReference('_reference_LthrtEntityBundleGroup2', $group2);
        $this->addReference('blue_group', $group2);
        $manager->persist($group2);

        $group3              = new Group();
        $group3->name        = 'Purple';
        $group3->description = 'Purple Group';
        $group3->active      = true;
        $group3->id          = 3;
        $group3->addSubGroup($group1);
        $group3->addSubGroup($group2);
        $this->addReference('purple_group', $group3);
        $this->addReference('_reference_LthrtEntityBundleGroup3', $group3);
        $manager->persist($group3);

        $group4              = new Group();
        $group4->name        = 'White';
        $group4->description = 'White Group';
        $group4->active      = false;
        $group4->id          = 4;
        $this->addReference('white_group', $group4);
        $this->addReference('_reference_LthrtEntityBundleGroup4', $group4);
        $manager->persist($group4);

        $group5              = new Group();
        $group5->name        = 'Black';
        $group5->description = 'Black Group';
        $group5->active      = true;
        $group5->id          = 5;
        $this->addReference('black_group', $group5);
        $this->addReference('_reference_LthrtEntityBundleGroup5', $group5);
        $manager->persist($group5);

        $group6              = new Group();
        $group6->name        = 'Green';
        $group6->description = 'Green Group';
        $group6->active      = true;
        $group6->id          = 6;
        $this->addReference('green_group', $group6);
        $this->addReference('_reference_LthrtEntityBundleGroup6', $group6);
        $manager->persist($group6);

        $group7              = new Group();
        $group7->name        = 'Delete';
        $group7->description = 'Delete Group';
        $group7->active      = true;
        $group7->id          = 7;
        $this->addReference('delete_group', $group7);
        $this->addReference('_reference_LthrtEntityBundleGroup7', $group7);
        $manager->persist($group7);

        $manager->flush();
    }
}
