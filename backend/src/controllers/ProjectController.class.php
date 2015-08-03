<?php

require_once 'controllers/BaseController.class.php';

class ProjectController extends BaseController {

	private $projectId;
	private $pageUrl;
	private $teamMembers;
	//private $teamsDAO;

	function __construct ( $projectId){
		parent::__construct();	

		$this-> projectId = $projectId;
		$this-> pageUrl = $this -> baseUrl. "project/" . $projectId;
		//$this -> teamsDAO = $this -> DAOFactory-> getTeamsDAO();


	}

	function render (){

		$baseUrl = $this->baseUrl;
		if ( ! isset($this -> projectId) || $this -> projectId == "" ){
						header('Location: '. $baseUrl);
		}
		//loading other click event on the page should be done by ajax
		
		try{
			
			//imp: add $this -> projectId in paramenter in place of 3(project_id)

			//$projects = $this->projectsDAO->getByUserIdProjectId($this-> userId, $this-> projectId);
			

			if($this-> projectsDAO -> checkAuth($this->projectId,$this->userId)){
				$project = $this-> projectsDAO -> getByProjectId( $this -> projectId );
				
				$projectActivities = $this-> challengesDAO -> getProjectActivities( $this -> projectId , 0,10 );
				

				//$userProjects = $this->projectsDAO->getUserProjects($this->userId);
					
				//$UserLinks = $this->userInfoDAO->getUsersLinks($this->userId);
				//$projectTeams = $this-> teamsDAO -> queryAllTeamNames( $this -> projectId );
				$this-> teamMembers = $this-> teamsDAO -> queryAllTeamMembers($this -> projectId );

				if($project){
					if (isset($_SESSION['userId'])) 
						require_once 'views/project/project_page.php';
					else 
						require_once 'views/project/project.php';
				}
				else 
					require_once 'views/error/pages-404.php';				
			
			}
			else {
				require_once 'views/error/pages-404.php';				
			}

			

		} catch (Exception $e){
			echo "At Render() Error occur :500 <br>";
			$this -> logger -> error ("Error at : $e");
		}

	}

	function isProjectMember() {
		/*if ($this -> project->getUserId == $this -> userId)
			return true;
		*/
			//var_dump($this->teamMembers );
		foreach ($this->teamMembers as $key => $member) {
			//var_dump($member);
			if ( $this->userId == $member->getUserId()) {
				//echo "insode if ";
				return true;
			}
		}
		//echo "ouside for "; 
		//$this -> logger -> debug (" $this -> userId : is not a member of this project ");
		return false;
	}


	function getNextActivities(){
		$last = $_POST["last"];
		$top10Activities =  $this-> challengesDAO -> getProjectActivities( $this -> projectId , $last,5);
		
		
			//var_dump($top10Activities);
		require_once 'views/dashboard/activitiesView.php';
	}


	function createNewProject(){
		$baseUrl = $this->baseUrl;
		
		require_once 'views/project/createProject.php';
	}
	
	
	function createProject(){
		$this -> logger -> debug( "inside Crete Porject");
		if(isset($_POST['title'], $_POST['description'], $_POST['type'], $_POST['tech_skills'], $_POST['my_role'], $_POST['team_size'], $_POST['start'], $_POST['end'])){
			
			$newProject = new Project(
										$this->userId,
										0,
										$_POST['title'],
										$_POST['description'],
										$_POST['type'],
										1,
                            			0,
                            			date("Y-m-d H:i:s"),
                            			0,
										0,
										date("Y-m-d H:i:s"),
										$_POST['tech_skills'],
										$_POST['my_role'],
										$_POST['team_size'],
										date('Y-m-d', strtotime($_POST['start'])),
										date('Y-m-d', strtotime($_POST['end'])),
										null,
										null,
										null);
			$this -> logger -> debug( "project");
			
			try {
				$this -> projectId = $this -> projectsDAO -> insert($newProject) ;
				$this -> logger -> debug( "project id: " . $this->projectId);
				echo $this->baseUrl . "project/" . $this->projectId;
				//header("location: " . );
				
				$newMember = new Team(
									$this-> userId,
									$this-> projectId,
									'defaultteam',
									0,
									date("Y-m-d H:i:s"),
									1,
									0,
									1,
									null
								);
				
				$this -> teamsDAO -> insert($newMember) ;
				
			}
			catch (Exception $e){

				echo "Failed to post";
			}	
		}
		

	}

	function joinProject () {
		if(isset($_POST['join_project'])) {
			$newMember = new Team(
								$this-> userId,
								$this-> projectId,
								'defaultteam',
								0,
								date("Y-m-d H:i:s"),
								1,
								0,
								1,
								null
							);
			try {
				$this -> teamsDAO -> insert($newMember) ;
			}
			catch (Exception $e){
				if($e -> getCode() == 1011){
					$this -> render ();				
				}
				else
					var_dump($e); die();
			}	
		}
		$this -> render ();
	}

	
	function postProjectComment() {

		if (isset($_POST['comment'], $_POST['id']) && $_POST['id'] != '' && $_POST['comment'] != '') {
			$commentObj = new ProjectResponse (
											$this -> userId,
											$_POST['id'],
											1,
											$_POST['comment'],
											date("Y-m-d H:i:s")
										);
			try {
				$this -> projectResponsesDAO -> insert($commentObj);
				echo "Comment Posted";
			}
			catch (Exception $e) {
				$this -> logger -> error ("Error at : $e");
			}

		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Comment Field Can Not Be Empty";
		}
	}

}

?>