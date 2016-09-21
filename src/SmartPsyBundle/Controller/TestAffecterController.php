<?php

namespace SmartPsyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SmartPsyBundle\Entity\TestAffecter;
use SmartPsyBundle\Form\TestAffecterType;

/**
 * TestAffecter controller.
 *
 */
class TestAffecterController extends Controller
{

    /**
     * Lists all TestAffecter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SmartPsyBundle:TestAffecter')->findAll();

        return $this->render('SmartPsyBundle:TestAffecter:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TestAffecter entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TestAffecter();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('testaffecter_show', array('id' => $entity->getId())));
        }

        return $this->render('SmartPsyBundle:TestAffecter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TestAffecter entity.
     *
     * @param TestAffecter $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TestAffecter $entity)
    {
        $form = $this->createForm(new TestAffecterType(), $entity, array(
            'action' => $this->generateUrl('testaffecter_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TestAffecter entity.
     *
     */
    public function newAction()
    {
        $entity = new TestAffecter();
        $form   = $this->createCreateForm($entity);

        return $this->render('SmartPsyBundle:TestAffecter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TestAffecter entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SmartPsyBundle:TestAffecter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TestAffecter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SmartPsyBundle:TestAffecter:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TestAffecter entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SmartPsyBundle:TestAffecter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TestAffecter entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SmartPsyBundle:TestAffecter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TestAffecter entity.
    *
    * @param TestAffecter $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TestAffecter $entity)
    {
        $form = $this->createForm(new TestAffecterType(), $entity, array(
            'action' => $this->generateUrl('testaffecter_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TestAffecter entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SmartPsyBundle:TestAffecter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TestAffecter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('testaffecter_edit', array('id' => $id)));
        }

        return $this->render('SmartPsyBundle:TestAffecter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TestAffecter entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SmartPsyBundle:TestAffecter')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TestAffecter entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('testaffecter'));
    }

    /**
     * Creates a form to delete a TestAffecter entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('testaffecter_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
