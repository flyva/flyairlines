<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Gvausers Controller
 *
 * @property Gvauser $Gvauser
 */
class GvausersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Gvauser->recursive = 1;
		$this->set('gvausers', $this->paginate());
		
		
	}
	
	public function indexinactive() {
		$this->Gvauser->recursive = 0;
		$this->set('gvausers', $this->paginate());
		
	}	
	
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Gvauser->exists($id)) {
			throw new NotFoundException(__('Invalid gvauser'));
		}
		$options = array('conditions' => array('Gvauser.' . $this->Gvauser->primaryKey => $id));
		$this->set('gvauser', $this->Gvauser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Gvauser->create();
			if ($this->Gvauser->save($this->request->data)) {
				$this->flash(__('Gvauser saved.'), array('action' => 'index'));
			} else {
			}
		}
		$fleettypes = $this->Gvauser->Fleettype->find('list');
		$this->set(compact('fleettypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
		if (!$this->Gvauser->exists($id)) {
			throw new NotFoundException(__('Invalid gvauser'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
            // VAM send email with callsign to the user BEGIN
            include ('../../../vam/db_login.php');
            $senderemail='';
            $db = new mysqli($db_host , $db_username , $db_password , $db_database);
			$db->set_charset("utf8");
			if ($db->connect_errno > 0) {
				die('Unable to connect to database [' . $db->connect_error . ']');
			}
			$sql = "select * from config_emails";
			if (!$result = $db->query($sql)) 
			{
				die('There was an error running the query  [' . $db->error . ']');
			}
			while ($row = $result->fetch_assoc()) 
			{
				$senderemail = $row['staff_email'];
			}

            $callsign=$this->data['Gvauser']['callsign'];
            $callsign_old=$this->data['Gvauser']['callsign_prev'];
            if ($callsign<>$callsign_old)
            {
                $callsign=$this->data['Gvauser']['callsign'];
                $name= $this->data['Gvauser']['name'];
                $pilotmail= $this->data['Gvauser']['email'];
                $emailbody = 'Dear '. $name.', <p> Your new callsign is '. $callsign .' <p> Best regards. <p>Email generated by the Virtual Airlines Manager system';
                $email = new CakeEmail('default');
                $email -> emailFormat('html');
                $email -> sender($senderemail, 'VAM system');
                $email -> to($pilotmail);
                $email -> subject('VAM - New Callsign / Pilot Activation');
                $email -> send($emailbody);

            }


            // VAM send email with callsign to the user END
			if ($this->Gvauser->save($this->request->data)) {
				$this->Session->setFlash(__('The User has been saved'));
				$this->redirect(array('action' => 'index'));
				
				// VAM $this->flash(__('The gvauser has been saved.'), array('action' => 'index'));
				
			} else {
			}
		} else {
			$options = array('conditions' => array('Gvauser.' . $this->Gvauser->primaryKey => $id));
			$this->request->data = $this->Gvauser->find('first', $options);
		}
		$fleettypes = $this->Gvauser->Fleettype->find('list');
		$this->set(compact('fleettypes'));
				
		$hubs = $this->Gvauser->Hub->find('list');
		$this->set(compact('hubs'));
		
		$ranks = $this->Gvauser->Rank->find('list');
		$this->set(compact('ranks'));
		
		$userTypes = $this->Gvauser->UserType->find('list');
		$this->set(compact('userTypes'));

	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Gvauser->id = $id;
		if (!$this->Gvauser->exists()) {
			throw new NotFoundException(__('Invalid gvauser'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Gvauser->delete()) {
			$this->flash(__('Gvauser deleted'), array('action' => 'index'));
		}
		$this->flash(__('Gvauser was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	
/**
 * inactivate method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function inactivate($id = null) {
		$this->Gvauser->id = $id;
		if (!$this->Gvauser->exists()) {
			throw new NotFoundException(__('Invalid gvauser'));
		}	
		$this->request->data['Gvauser']['activation'] = 2; // VAM 2 is the value for inactivated pilots
		if ($this->Gvauser->save($this->request->data)) {
			$this->flash(__('Gvauser deleted'), array('action' => 'index'));
		}
		$this->flash(__('Gvauser was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}


}
