<?php

namespace ToDoBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Util\Codes;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Tests\Controller;
use Symfony\Component\Routing\RouterInterface;
use ToDoBundle\Entity\Entity\Task;
use ToDoBundle\Form\Type\TaskType;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class HomeController extends FOSRestController
{
    /**
     * Collection get action
     * @var Request $request
     * @return array
     *
     * @Rest\View()
     */
    public function getAction()
    {

        return $this->responseToJSON();
    }


    public function indexAction()
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);

        return $this->render(
            'ToDoBundle:Home:get.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    /**
     * Collection post action
     * @var Request $request
     * @return View|array
     */
    public function postAction(Request $request)
    {
        $task = new Task();
        $em = $this->getDoctrine()->getManager();

        $task->setName($request->get('name'));
        $task->setUser($request->get('user'));
        $task->setCategory($request->get('category'));

        $em->persist($task);
        $em->flush();

        return $this->responseToJSON();

    }

    public function pullEntitiesData() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('ToDoBundle:Entity\Task')->findAll();

        return $entities;
    }

    public function responseToJSON() {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $response = new Response($serializer->serialize($this->pullEntitiesData(), 'json'));
        return $response;
    }
}
