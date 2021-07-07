<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Entity\Book;

class BookTest extends KernelTestCase
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

    public function testBookInsertion(): void
    {
        $book = new Book();
        $book->setTitle('Livro Teste');
        $book->setDescription('Descrição do livro');
        $book->setPages(200);
        
        $this->entityManager->persist($book);
        $this->entityManager->flush();
        
        $this->assertTrue($book->getId());
    }

    public function testBookEdit(): void
    {
        $book = new Book();
        $book->findBy(['name' => 'Livro Teste']);   
        $book->setName('Livro Teste 2');
        
        $this->entityManager->persist($book);
        $this->entityManager->flush();
        
        $this->assertEquals('Livro Teste 2', $book->getName());
    }

    public function testBookDelete(): void
    {
        $book = new Book();
        $book->findBy(['name' => 'Livro Teste 2']);   
        
        $this->entityManager->remove($book);
        $this->entityManager->flush();

        $book = new Book();
        $book->findBy(['name' => 'Livro Teste 2']);   
        
        $this->assertEquals(null, $book->getId());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->entityManager->close();
        $this->entityManager = null;
    }
}
