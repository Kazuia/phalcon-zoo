<?php

use Phalcon\Mvc\Controller;

class AddController extends Controller
{

	public function indexAction()
	{
    $this->view->addForm = new AddForm();
	}

	public function addAction()
	{

		$animal = new Animal();

		// Store and check for errors
		$success = $animal->save(
			$this->request->getPost(),
			array('name', 'specie', 'weight', 'mammal', 'shout')
		);

		if ($success) {
			echo "Thanks for registering!";
		} else {
			echo "Sorry, the following problems were generated: ";
			foreach ($animal->getMessages() as $message) {
				echo $message->getMessage(), "<br/>";
			}
		}

		$this->view->disable();
	}

}
