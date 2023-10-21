<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorType;
use App\Repository\AuthorRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {

        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }


    #[Route('/home/{name}', name: 'show_author')]
    public function show($name): Response
    {
        return $this->render('author/show.html.twig', [
            'controller_name' => 'AuthorController', 'name' => $name
        ]);
    }

    #[Route('/listAuthor', name: 'list_author')]
    public function list(): Response
    {
        $authors = array(array('id' => 1, 'picture' => '/image/Victor-Hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/image/william-shakespeare.jpg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200),
            array('id' => 3, 'picture' => '/image/Taha-Hussein.jpg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        return $this->render('author/list.html.twig', [
            'controller_name' => 'AuthorController', 'tabAuthors' => $authors]);

    }

    #[Route('/detailsAuthor/{id}', name: 'details_author')]
    public function auhtorDetails($id): Response
    {
        $authors = array(array('id' => 1, 'picture' => 'image/Victor-Hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100),
            array('id' => 2, 'picture' => 'image/william-shakespeare.jpg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200),
            array('id' => 3, 'picture' => 'image/Taha-Hussein.jpg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        return $this->render('author/showAuthor.html.twig', [
            'controller_name' => 'AuthorController', 'id' => $id, 'tabAuthors' => $authors
        ]);
    }

    #[Route('/listAuthors', name: 'list_authors')]
    public function listauthor(AuthorRepository $repository)
    {

        $authors = $repository->findAll();
        return $this->render('author/authors.html.twig', [
            'tabAuthors' => $authors]);

    }
    //add sans formulaire
    /*#[Route('/addauthor', name: 'add_authors')]
    public function addAuthor(ManagerRegistry $managerRegistry)
    {
        $author = new Author();
        $author->setUsername("nawres");
        $author->setEmail("nawres@gmail.com");
        $em = $managerRegistry->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute("list_authors");
    } */
    #[Route('/add', name: 'add')]
    public function add(ManagerRegistry $managerRegistry, Request $request)
    {
        $author = new Author();
        $form = $this->createForm(AuthorType::class, $author);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $managerRegistry->getManager();
            $em->persist($author);
            $em->flush();
            return $this->redirectToRoute("list_authors");
        }
        return $this->renderForm("author/add.html.twig",
            array('authorForm' => $form));
    }

    /* sans formulaire
    #[Route('/delete/{id}', name: 'delete')]
    public function deleteAuthor($id,AuthorRepository $repository,ManagerRegistry $managerRegistry)
    {
        $author=$repository->find($id);
        $em=$managerRegistry->getManager();
        $em->remove($author);
        $em->flush();
        return $this->redirectToRoute("list_authors");
    }
    sans formulaire
   #[Route('/update/{id}', name: 'update')]
public function update(ManagerRegistry $managerRegistry,$id,AuthorRepository $repository)
{
  $author=$repository->find($id);
  $author->setUsername("Nawresellafi");
  $author->setEmail("nawres.ellafi@gmail.com");
  $em=$managerRegistry->getManager();
  $em->flush();
  return $this->redirectToRoute("list_authors");
}
*/
    #[Route('/update1/{id}', name: 'update1')]
    public function update(ManagerRegistry $managerRegistry, $id, AuthorRepository $repository, Request $request)
    {
        $author = $repository->find($id);
        $form = $this->createForm(AuthorType::class, $author);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $managerRegistry->getManager();
            $em->flush();
            return $this->redirectToRoute("list_authors");
        }
        return $this->renderForm("author/updateAuthor.html.twig",
            array('authorForm' => $form));
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function deleteAuthor($id, AuthorRepository $repository, ManagerRegistry $managerRegistry)
    {
        $author = $repository->find($id);
        if($author->getNbrBooks()==0) {
            $em = $managerRegistry->getManager();
            $em->remove($author);
            $em->flush();
        }
        else{
            return new  Response("error");
        }
        return $this->redirectToRoute("list_authors");
    }
}