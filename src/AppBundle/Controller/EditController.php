<?php

namespace AppBundle\Controller;

use AppBundle\Form\AnimalType;
use AppBundle\Form\BlogType;
use AppBundle\Form\RecipeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class EditController extends Controller
{
    public function blogAction(Request $request, $id)
    {
        $blog = $this->getDoctrine()->getRepository('AppBundle:Blog')->findOneBy(array(
            "id" => $id,
            "author" => $this->getUser()->getId()
        ));

        if($blog == null)
            return $this->redirectToRoute('home');

        $oldImagePath = $blog->getImage();

        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid())
        {
            $user = $this->getUser();
            $blog->setAuthor($user);
            $blog->setDate(new \DateTime());

            /** @var UploadedFile $image */
            $image = $blog->getImage();

            if($image != null)
            {
                $fileName = $this->generateUniqueFileName().'.'.$image->guessExtension();

                // moves the file to the directory where brochures are stored
                $image->move(
                    $this->getParameter('image.article.path'),
                    $fileName
                );

                unlink($oldImagePath);

                // updates the 'brochure' property to store the PDF file name
                // instead of its contents
                $blog->setImage($fileName);
            }

            $em = $this->getDoctrine()->getManager();

            $em->persist($blog);
            $em->flush();

            return $this->redirect($this->generateUrl('blog'));

        }

        return $this->render('@App/edit/blog.html.twig', array(
            "form" => $form->createView(),
        ));
    }

    public function productAction(Request $request, $id)
    {
        $animal = $this->getDoctrine()->getRepository('AppBundle:Animal')->findOneBy(array(
            "id" => $id,
            "author" => $this->getUser()->getId()
        ));

        if($animal == null)
            return $this->redirectToRoute('home');

        $oldImagePath = $animal->getImage();

        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid())
        {
            $user = $this->getUser();
            $animal->setAuthor($user);
            $animal->setDate(new \DateTime());

            /** @var UploadedFile $image */
            $image = $animal->getImage();

            if($image != null)
            {
                $fileName = $this->generateUniqueFileName().'.'.$image->guessExtension();

                // moves the file to the directory where brochures are stored
                $image->move(
                    $this->getParameter('image.article.path'),
                    $fileName
                );

                unlink($oldImagePath);

                // updates the 'brochure' property to store the PDF file name
                // instead of its contents
                $animal->setImage($fileName);
            }

            $em = $this->getDoctrine()->getManager();

            $em->persist($animal);
            $em->flush();

            return $this->redirect($this->generateUrl('profile_myproducts'));

        }
        return $this->render('@App/edit/product.html.twig', array(
            "form" => $form->createView(),
        ));
    }

    public function recipeAction(Request $request, $id)
    {
        $recipe = $this->getDoctrine()->getRepository('AppBundle:Recipe')->findOneBy(array(
            "id" => $id,
            "author" => $this->getUser()->getId()
        ));

        if($recipe == null)
            return $this->redirectToRoute('home');

        $oldImagePath = $recipe->getImage();

        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid())
        {
            $user = $this->getUser();
            $recipe->setAuthor($user);
            $recipe->setDate(new \DateTime());

            /** @var UploadedFile $image */
            $image = $recipe->getImage();
            if($image != null)
            {
                $fileName = $this->generateUniqueFileName().'.'.$image->guessExtension();

                // moves the file to the directory where brochures are stored
                $image->move(
                    $this->getParameter('image.article.path'),
                    $fileName
                );

                unlink($oldImagePath);

                // updates the 'brochure' property to store the PDF file name
                // instead of its contents
                $recipe->setImage($fileName);
            }

            $em = $this->getDoctrine()->getManager();

            $em->persist($recipe);
            $em->flush();

            return $this->redirect($this->generateUrl('explore_recipe'));

        }
        return $this->render('@App/edit/recipe.html.twig', array(
            "form" => $form->createView(),
        ));
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}
