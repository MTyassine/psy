<?php

namespace SmartPsyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SmartPsyBundle\Entity\Test;
use SmartPsyBundle\Form\TestType;

/**
 * Test controller.
 *
 */
class TestController extends Controller
{

    /**
     * Lists all Test entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SmartPsyBundle:Test')->findAll();

        return $this->render('SmartPsyBundle:Test:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Test entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Test();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            //user connecter
            $user = $this->get('security.context')->getToken()->getUser();

            $entity->setPsy($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('test_show', array('id' => $entity->getId())));
        }

        return $this->render('SmartPsyBundle:Test:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Test entity.
     *
     * @param Test $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Test $entity)
    {
        $form = $this->createForm(new TestType(), $entity, array(
            'action' => $this->generateUrl('test_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Test entity.
     *
     */
    public function newAction()
    {
        $entity = new Test();
        $form   = $this->createCreateForm($entity);

        return $this->render('SmartPsyBundle:Test:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Test entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SmartPsyBundle:Test')->find($id);
        $question = $em->getRepository('SmartPsyBundle:Question')->findQuestion($entity);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Test entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SmartPsyBundle:Test:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'entities' => $question,
        ));
    }

    /**
     * Displays a form to edit an existing Test entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SmartPsyBundle:Test')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Test entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SmartPsyBundle:Test:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Test entity.
    *
    * @param Test $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Test $entity)
    {
        $form = $this->createForm(new TestType(), $entity, array(
            'action' => $this->generateUrl('test_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Test entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SmartPsyBundle:Test')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Test entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('test_edit', array('id' => $id)));
        }

        return $this->render('SmartPsyBundle:Test:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Test entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SmartPsyBundle:Test')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Test entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('test'));
    }

    /**
     * Creates a form to delete a Test entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('test_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
