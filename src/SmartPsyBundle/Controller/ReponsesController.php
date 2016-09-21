<?php

namespace SmartPsyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SmartPsyBundle\Entity\Reponses;
use SmartPsyBundle\Form\ReponsesType;

/**
 * Reponses controller.
 *
 */
class ReponsesController extends Controller
{

    /**
     * Lists all Reponses entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SmartPsyBundle:Reponses')->findAll();

        return $this->render('SmartPsyBundle:Reponses:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Reponses entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Reponses();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reponses_show', array('id' => $entity->getId())));
        }

        return $this->render('SmartPsyBundle:Reponses:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Reponses entity.
     *
     * @param Reponses $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Reponses $entity)
    {
        $form = $this->createForm(new ReponsesType(), $entity, array(
            'action' => $this->generateUrl('reponses_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Reponses entity.
     *
     */
    public function newAction()
    {
        $entity = new Reponses();
        $form   = $this->createCreateForm($entity);

        return $this->render('SmartPsyBundle:Reponses:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Reponses entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SmartPsyBundle:Reponses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reponses entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SmartPsyBundle:Reponses:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Reponses entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SmartPsyBundle:Reponses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reponses entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SmartPsyBundle:Reponses:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Reponses entity.
    *
    * @param Reponses $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Reponses $entity)
    {
        $form = $this->createForm(new ReponsesType(), $entity, array(
            'action' => $this->generateUrl('reponses_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Reponses entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SmartPsyBundle:Reponses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reponses entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reponses_edit', array('id' => $id)));
        }

        return $this->render('SmartPsyBundle:Reponses:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Reponses entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SmartPsyBundle:Reponses')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reponses entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reponses'));
    }

    /**
     * Creates a form to delete a Reponses entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reponses_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
