<?php

namespace App\Controller;


use App\Entity\Books;
use App\Form\BookType;
use App\Repository\BooksRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/book', name: 'app_book')]
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }

    #[Route('/listBooks', name: 'list_books')]
    public function listbook(BooksRepository $repository)
    {

        $books = $repository->findAll();
            return $this->render('book/books.html.twig', [
                'tabBooks' => $books]);

    }
    #[Route('/addbook', name: 'addbook')]
    public function add(ManagerRegistry $managerRegistry,Request $request)
    {
        $book= new Books();
        $form = $this->createForm(BookType::class,$book);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            //$book->setPublished('True');
            $nbrbooks=$book->getAuthor()->getNbrBooks();
            $book->getAuthor()->setNbrBooks($nbrbooks+1);
            $em= $managerRegistry->getManager();
            $em->persist($book);
            $em->flush();
            return $this->redirectToRoute("list_books");
        }
        return $this->renderForm("book/add.html.twig",
            array('bookForm'=>$form));
    }
    #[Route('/updateBook/{ref}', name: 'updateBooks')]
    public function update(ManagerRegistry $managerRegistry, $ref, BooksRepository $repository, Request $request)
    {
        $book = $repository->find($ref);
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $managerRegistry->getManager();
            $em->flush();
            return $this->redirectToRoute("list_books");
        }
        return $this->renderForm("book/updateBook.html.twig",
            array('bookForm' => $form));
    }
    #[Route('/deleteBook/{ref}', name: 'deleteBook')]
    public function deleteBook($ref, BooksRepository $repository, ManagerRegistry $managerRegistry)
    {
        $book = $repository->find($ref);
        $em = $managerRegistry->getManager();
            $em->remove($book);
            $em->flush();

        return $this->redirectToRoute("list_books");
    }
    #[Route('/showBook/{ref}', name: 'showBook')]
    public function showBook($ref, BooksRepository $repository){
        $book = $repository->find($ref);
        return $this->render('book/show.html.twig', [
            'book' => $book]);


    }
}
