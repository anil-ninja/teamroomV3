<?php

require_once 'controllers/BaseController.class.php';

class SettingController extends BaseController {

	function __construct ( ){
		
		parent::__construct();
		
		
	}

	function render (){

		$baseUrl = $this->baseUrl;

		if ( ! isset($this -> userId) || $this -> userId == ""){
			header('Location: '. $baseUrl);
		}
		//loading other click event on the page should be done by ajax

	// hang on complete profile page untill profile is not completed
		$this -> isProfileCompleted();
	// hang on complete profile page untill profile is not completed



		try{

			//var_dump($this->userId);
			
			$userProfile = $this -> userInfoDAO-> load($this->userId);
			$userSkills = $this -> userSkillDAO-> getUserSkills( $this-> userId );

			$allSkills = $this -> userSkillDAO-> availableUserSkills( $this-> userId );
			
			$allLocations = $this -> jobLocationsDAO-> availableJobLocations( $this-> userId );

			$userEducation = $this -> userEducationDAO -> queryByUserId($this -> userId);			
			
			$userTechStrength = $this -> userTechStrengthDAO -> queryByUserId($this -> userId);
			$userWorkExperience = $this -> userWorkHistoryDAO -> queryByUserId($this -> userId);
			
			$userJobPreference = $this -> userJobPreferenceDAO -> getUserJobPreference($this -> userId);

			$userPreferredJobLocations = $this -> jobLocationsDAO -> getUserJobPreferredJobLocations($this -> userId);

			$userSocialLinks = $this -> userSocialLinksDAO -> getUserSocialLinks($this -> userId);

			require_once 'views/setting/setting.php';
		
		} catch (Exception $e){
			require_once 'views/error/pages-404.php';	
			$this->logger->error("Error occur :500 ".json_encode($e) );
		}

	}

	function updateSocialLinks() {
		
		if(isset($_POST['facebook_url']) && $_POST['facebook_url'] != "") {
		
			$fbLinkObj = new UserSocialLink(
					$this -> userId,
					$_POST['facebook_url'],
					null,
					null,
					null,
					'Facebook',
					$_POST['id']
				);

			if(isset($_POST['id']) && $_POST['id'] != '') {
				try {
					$this -> userSocialLinksDAO -> updateSocialLink( $this-> userId, $_POST['facebook_url'], 'Facebook' );
				} 
				catch (Exception $e) {
					$this -> logger -> error ("Error at : $e");
					echo "Failed..";
				}
				echo "Updated Successfully";
			}
			else {
				try {
					$this -> userSocialLinksDAO ->insert($fbLinkObj);
				}
				catch (Exception $e) {
					echo "Failed.." . var_dump($e);
				}
				echo "Added Successfully";
			}
		}

		if(isset($_POST['twitter_url']) && $_POST['twitter_url'] != "") {
			$twitterLinkObj = new UserSocialLink(
					$this -> userId,
					$_POST['twitter_url'],
					null,
					null,
					null,
					'Twitter',
					$_POST['id']
				);

			if(isset($_POST['id']) && $_POST['id'] != '') {
				$this -> userSocialLinksDAO -> updateSocialLink( $this-> userId, $_POST['twitter_url'], 'Twitter' );
				
			}
			else {
				$this -> userSocialLinksDAO ->insert($twitterLinkObj);
				
			}
		}

		if(isset($_POST['likedin_url']) && $_POST['likedin_url'] != "") {
			$linkedinLinkObj = new UserSocialLink(
					$this -> userId,
					$_POST['likedin_url'],
					null,
					null,
					null,
					'Linkedin',
					$_POST['id']
				);

			if(isset($_POST['id']) && $_POST['id'] != '') {
				$this -> userSocialLinksDAO -> updateSocialLink( $this-> userId, $_POST['likedin_url'], 'Linkedin' );
				
			}
			else {
				$this -> userSocialLinksDAO ->insert($linkedinLinkObj);
				
			}
		}
		
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Social Link Fields Can Not Be Empty";
		}
		
	}


	function updateTechStrength() {
		
		if(isset($_POST['tech_strength']) && $_POST['tech_strength'] != "") {
			$tech_strength = new TechnicalStrength(
					$this->userId,
					$_POST['tech_strength'],
					date("Y-m-d H:i:s"),
					date("Y-m-d H:i:s"),
					$_POST['id']
				);

			if(isset($_POST['id'])) {
				$newTechStrength = $this -> userTechStrengthDAO ->update($tech_strength);
				echo "Updated Successfully";
			}
			else {
				$newTechStrength =  $this -> userTechStrengthDAO ->insert($tech_strength);
				echo $newTechStrength;
			}
			if ($newTechStrength) {
		    	try {
		            $this -> userPushFormsInsertDAO -> deleteByFormIdUserId($this->userId, 2);
				}
		    	catch(Exception $e) {
					$this->logger->error("Error occur :500 ,Failed to detele user form tech strength".json_encode($e) );
		    	}
		    }
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Field Can Not Be Empty";
		}
		
	}


	function updateJobPreference() {
		
		if(isset($_POST['current_ctc'], $_POST['expected_ctc'], $_POST['notice_period'])) {	
		
			if((isset($_POST['id'])) && $_POST['id'] != undefined) {
				
				$jobPreferenceObj = new JobPreference(
												$this -> userId,
												$_POST['current_ctc'],
												$_POST['expected_ctc'],
												$_POST['notice_period'],
												null,
												date("Y-m-d H:i:s"),
												$_POST['id']
											);
		
				try {

					if ($this -> userJobPreferenceDAO ->update($jobPreferenceObj))
						echo "Added Successfully";
					else
						echo "Failed to Add, Try Again";
				}
				catch (Exception $e) {
					echo "Failed: ". var_dump($e);
				}
				echo "Updated Successfully";
			}
			else {
				$jobPreferenceObj = new JobPreference(
											$this -> userId,
											$_POST['current_ctc'],
											$_POST['expected_ctc'],
											$_POST['notice_period'],
											date("Y-m-d H:i:s"),
											null,
											null
										);
				
				try {
					if ($this -> userJobPreferenceDAO ->insert($jobPreferenceObj))
						echo "Added Successfully";
					else
						echo "Failed to Add, Try Again";
				}
				catch (Exception $e) {

				}
			}		
			
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Job Preference fields Can Not Be Empty";
		}
			
	}


	function updateUserInfo() {
		
		//var_dump($_POST); die();
		
		if(isset($_POST['first_name'], $_POST['last_name'], $_POST['phone'], $_POST['living_place'], $_POST['about_user'])) {
		
			if(isset($_POST['collaborateAs']) && $_POST['collaborateAs'] !=null) {
				$collaborateAsArray = explode(',', $_POST['collaborateAs']);
				foreach ($collaborateAsArray as $key => $collaborateAs) {
					
					$collaborateAsObj = new UserCollaborativeRole(
												$this-> userId,
												$collaborateAs,
												date("Y-m-d H:i:s"),
												date("Y-m-d H:i:s")
												);
					try{
						$this -> collaborativeRoleDAO -> insert($collaborateAsObj);
					} 
					catch(Exception $e) {
						$this->logger->error("Error occur :500 ".json_encode($e) );
					}
				}
			}

	        if (! isset($this -> userId)) {
	            $warnings_payload [] = 'PUT call to /user must be succeeded ' . 
	                                    'by /userId i.e. PUT /user/userId';
	            throw new UnsupportedResourceMethodException();
	        }

	        if (! isset($_POST))
	            throw new MissingParametersException('No fields specified for updation');

	        $userObj = $this -> userInfoDAO -> load($this -> userId);
	        
	        if(! is_object($userObj)) 
	            return array('code' => '2004');

	        $newFirstName= $_POST ['first_name'];
	        if (isset($newFirstName)) {
	            if ($newFirstName != $userObj -> getFirstName()) {
	                $update = true;
	                $userObj -> setFirstName($newFirstName);
	            }
	        }

	        $newLastName= $_POST ['last_name'];
	        if (isset($newLastName)) {
	            if ($newLastName != $userObj -> getLastName()) {
	                $update = true;
	                $userObj -> setLastName($newLastName);
	            }
	        }

	        $newPhone= $_POST ['phone'];
	        if (isset($newPhone)) {
	            if ($newPhone != $userObj -> getPhone()) {
	                $update = true;
	                $userObj -> setPhone($newPhone);
	            }
	        }

	        $newLivingTown= $_POST ['living_place'];
	        if (isset($newLivingTown)) {
	            if ($newLivingTown != $userObj -> getLivingTown()) {
	                $update = true;
	                $userObj -> setLivingTown($newLivingTown);
	            }
	        }

	        $newAboutUser= $_POST ['about_user'];
	        if (isset($newAboutUser)) {
	            if ($newAboutUser != $userObj -> getAboutUser()) {
	                $update = true;
	                $userObj -> setAboutUser($newAboutUser);
	            }
	        }

	        if ($update) {
	            $this -> userInfoDAO -> update($userObj);

	            $newUserInfo = $this -> userInfoDAO -> load($this -> userId);

        		$_SESSION['first_name'] = $newUserInfo->getFirstName();
				$_SESSION['last_name'] = $newUserInfo->getLastName() ;
	        }
			
			echo "Updated Successfully";
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Profiles fileds Can Not Be Empty";
		}
	}

	function updateWorkExp() {

		if(isset($_POST['company_name'], $_POST['designation'], $_POST['from'], $_POST['to'])) {
	
			$workExpObj = new WorkingHistory(
									$this -> userId,
									$_POST['company_name'],
									$_POST['designation'],
									date('Y-m-d', strtotime($_POST['from'])),
									date('Y-m-d', strtotime($_POST['to'])),
									date("Y-m-d H:i:s"),
									date("Y-m-d H:i:s"),
									$_POST['id']
								);
			

			if(isset($_POST['id'])) {
				try {
					$newWorkExp = $this -> userWorkHistoryDAO ->update($workExpObj);
					echo "Updated Successfully";					
				}
				catch(Exception $e) {
					$this->logger->error("Error occur :500 , Failed to update work exp".json_encode($e) );
		    	}

			}
			
			else {
				try {
					$newWorkExp = $this -> userWorkHistoryDAO ->insert($workExpObj);
					echo $newWorkExp;
				}
				catch(Exception $e) {
					$this->logger->error("Error occur :500 , Failed to insert work exp".json_encode($e) );
		    	}
			}
			if ($newWorkExp) {
		    	try {
		            $this -> userPushFormsInsertDAO -> deleteByFormIdUserId($this->userId, 3);
				}
		    	catch(Exception $e) {
					$this->logger->error("Error occur :500 , Failed to detele user form work exp".json_encode($e) );
		    	}
		    }
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Work Experience fields can Not Be Empty";
		}
	}

	function updateEducation() {
		if(isset($_POST['institute'], $_POST['degree'], $_POST['branch'], $_POST['from'], $_POST['to'])) {
			
			$educationObj = new Education(
									$this -> userId,
									$_POST['institute'],
									$_POST['degree'],
									$_POST['branch'],
									$_POST['from'],
									$_POST['to'],
									date("Y-m-d H:i:s"),
									date("Y-m-d H:i:s"),
									$_POST['id']
								);

			if(isset($_POST['id'])) {
				$newEducation = $this -> userEducationDAO ->update($educationObj);
				echo "Updated Successfully";
			}
			else {
				$newEducation = $this -> userEducationDAO ->insert($educationObj);
				echo $newEducation;
			}
			if ($newEducation) {
		    	try {
		            $this -> userPushFormsInsertDAO -> deleteByFormIdUserId($this->userId, 4);
				}
		    	catch(Exception $e) {
					$this->logger->error("Error occur :500 , Failed to detele user form education".json_encode($e) );
		    	}
		    }
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Education fields can Not Be Empty";
		}
	}


	function updatePassword() {
		
		if(isset($_POST['old_password'], $_POST['new_password_1'], $_POST['new_password_2'])) {

			try {
				$userObj = $this -> userInfoDAO -> load($this -> userId);				
			}
			catch (Exception $e) {
				echo "Error occurred: " . var_dump($e);
			}
			
			$oldPassword = md5 ($_POST['old_password']);
			
			$oldPassCheck = $this -> userInfoDAO -> load($this -> userId);


			$oldPasswordVerify = $oldPassCheck -> getPassword();

			
			if ( $oldPasswordVerify == $oldPassword  ){

				if (($_POST['new_password_1']) == ($_POST['new_password_2'])) {
				
					$newPassword = md5($_POST['new_password_1']);
				
					try {				
						$this -> userInfoDAO -> updateNewPassword($newPassword, $this -> userId);
					
					}
					catch (Exception $e) {
						echo "Error occurred: " . var_dump($e);
					}

					echo "Updated Successfully";

				}	

				else{
					header('HTTP/1.1 500 Internal Server Error');
					echo "New Password do not match, Try Again";
				}
				
			}

			else{
				header('HTTP/1.1 500 Internal Server Error');
				echo "Old password do not match, Try Again";
			}

		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Password fields can Not Be Empty";
		}
		
	}

	function updateSkills() {

		if((isset($_POST['skills']) && $_POST['skills'] != '') || (isset($_POST['new_skills']) && $_POST['new_skills'] != '') ) {

			$skillIds = explode(',', $_POST['skills']);
			foreach ($skillIds as $skill_id) {
				$skillsObj = new UserSkill( $this -> userId, $skill_id);
				try {
					$this -> userSkillsInsertDAO ->insert($skillsObj);
				}
				catch (Exception $e) {
					$this->logger->error("Error occur :500 ".json_encode($e) );
				}
			}

			$newSkills = explode(',', $_POST['new_skills']);
			foreach ($newSkills as $skillName) {	
				$newSkillObj = new Skill( $skillName );
				try {
					$newSkillId = $this -> userSkillDAO ->insert($newSkillObj);
				}
				catch (Exception $e) {
					$this->logger->error("Error occur :500 ".json_encode($e) );
				}
				if ($newSkillId) {
					$newSkillsObj = new UserSkill( $this -> userId, $newSkillId );
					try {
						$this -> userSkillsInsertDAO ->insert($newSkillsObj);
						$this->logger->debug("insert new skill to userskills");
					}
					catch (Exception $e) {
						$this->logger->error("Error occur :500 ".json_encode($e) );
					}
				}
			}
			echo "Updated Successfully";
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Skills field can Not Be Empty";
		}
	}

	function removeSkill() {
		if(isset($_POST['skill_id']) && $_POST['skill_id'] != '') {
			try {
				$this -> userSkillsInsertDAO ->delete($_POST['skill_id']);
				$this->logger->debug("remove skill");
			}
			catch (Exception $e) {
				$this->logger->error("Error occur :500 , In removing skill".var_dump(json_encode($e) ));
			}
			echo "Skill removed Successfully";
		}
		else
			echo "Skill cannot be removed";
	}

	function removeLocation() {
		if(isset($_POST['location_id']) && $_POST['location_id'] != '') {
			try {
				$this -> userPreferredLocationsDAO ->delete($_POST['location_id']);
				$this->logger->debug("remove location");
			}
			catch (Exception $e) {
				$this->logger->error("Error occur :500 , In removing location".var_dump(json_encode($e) ));
			}
			echo "Location removed Successfully";
		}
		else
			echo "Location cannot be removed";
	}

	function updateLocations() {

		if(isset($_POST['locations']) && $_POST['locations'] != '') {

			$locationIds = explode(',', $_POST['locations']);

			$priority = 1;
			
			foreach ($locationIds as $location_id) {
				
				$locationsObj = new UserLocation(
									$this -> userId,
									$location_id,
									$priority
								);

				try {
					$this -> userPreferredLocationsDAO ->insert($locationsObj);
				}
				catch (Exception $e) {

				}
				$priority++;
			}
			echo "Updated Successfully";
		}
		
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Locations field can Not Be Empty";
		}
	}
}

?>