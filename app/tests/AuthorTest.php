<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Entity\Author;

class AuthorTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testAuthorInsertion(): void
    {
        $author = new Author();
        $author->setName('Autor Teste');   
        
        $this->entityManager->persist($author);
        $this->entityManager->flush();
        
        $this->assertTrue($author->getId());
    }

    public function testAuthorEdit(): void
    {
        $author = new Author();
        $author->findBy(['name' => 'Autor Teste']);   
        $author->setName('Autor Teste 2');
        
        $this->entityManager->persist($author);
        $this->entityManager->flush();
        
        $this->assertEquals('Autor Teste 2', $author->getName());
    }

    public function testAuthorDelete(): void
    {
        $author = new Author();
        $author->findBy(['name' => 'Autor Teste 2']);   
        
        $this->entityManager->remove($author);
        $this->entityManager->flush();

        $author = new Author();
        $author->findBy(['name' => 'Autor Teste 2']);   
        
        $this->assertEquals(null, $author->getId());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->entityManager->close();
        $this->entityManager = null;
    }
}
