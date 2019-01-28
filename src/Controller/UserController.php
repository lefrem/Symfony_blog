<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use App\Form\UserType;
use App\Form\LoginUserType;
use App\Repository\UserRepository;


class UserController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     * @Route("/Edit_User/{id}", name="Edit_User")
     */
    public function index(Request $request, UserRepository $userRepository, UserPasswordEncoderInterface $passwordEncoder, User $user = null)
    {
        if(!$user){
            $user = new User();
        }
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // $this->redirectToRoute(‘register_sucess’);
            $this->addFlash( 'notice', 'You register now!');
            return $this->redirectToRoute('login');
        }

        return $this->render('user/index.html.twig', array(
            'form' => $form->createView(),
            ));
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $user = new User();
        $form = $this->createForm(LoginUserType::class, $user);

        return $this->render('user/index.html.twig', [
        'error' => $authenticationUtils->getLastAuthenticationError(),
        'form' => $form->createView()
        ]);
    }

    /**
    * @Route("/user/{id}", name="user_id")
    */
    public function user(Request $request, UserRepository $userRepository, int $id)
    {

    }



}
