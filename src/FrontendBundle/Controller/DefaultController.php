<?php

namespace FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FrontendBundle\Entity\Film;
use FrontendBundle\Entity\Comment;
use Datetime;

class DefaultController extends Controller
{
	public function newFilmAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $film = new Film();

        $form = $this->createForm('FrontendBundle\Form\FilmType', $film);
        $form->handleRequest($request);
        
        if ($form->isValid()) 
        {
            $photo = $film->getFolder();
            $photoName = md5(uniqid()).'.'.$photo->guessExtension();
            $photoDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/film';
            $photo->move($photoDir, $photoName);

            $film->setFolder($photoName);

            $em->persist($film);
            $em->flush();
        }

        return $this->render('FrontendBundle:Default:newfilm.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $allMovie = $em->getRepository('FrontendBundle:Film')->findAll();

        return $this->render('FrontendBundle:Default:index.html.twig',
        	array (
        	'movies' => $allMovie,
        ));
    }

    public function articleAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
		
		return $this->render('FrontendBundle:Default:article.html.twig');
    }

    public function showAction(Request $request, $id)
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $thisMovie = $em->getRepository('FrontendBundle:Film')->findOneById($id);
        $thisMovieid = $thisMovie->getId();
        $listcomments = $em->getRepository('FrontendBundle:Comment')->findByIdfilm($thisMovieid);

        $comment = new Comment();
        $form = $this->createForm('FrontendBundle\Form\CommentType', $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $comment->setDate(new Datetime);
            $comment->setIdfilm($thisMovieid);
            $comment->setName($user);
            $em->persist($comment);
            $em->flush();

            $url = $this -> generateUrl('film_show', array( 'id'=>$thisMovieid ));
            $response = new RedirectResponse($url);
            return $response;
        }

        return $this->render('FrontendBundle:Default:show.html.twig',
        	array(
        		'movie' => $thisMovie,
                'form' => $form->createView(),
                'listcomments' => $listcomments,
        ));

    }
}
