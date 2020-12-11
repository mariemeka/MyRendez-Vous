<?php
namespace App\DataFixtures;

use App\Entity\MicroPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class MicroPostFixture extends Fixture
{

public function load(ObjectManager $manager){
    for($i=0; $i<10; $i++){
        $microPost = new MicroPost();
        $microPost->setText("text aleatoire".rand(0,100));
        $microPost->setTime( new \DateTime('2019-05-03'));
        $microPost->setTitle("text aleatoire".rand(0,100));
        $manager->persist($microPost);
       
    }
    $manager->flush();
}

}

?>