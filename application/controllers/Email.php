<?php 
	use PHPMailer\PHPMailer\PHPMailer;

	class Email extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function index(){
			$this->load->view('contact_form');
		}

		public function send_email(){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$from_address = "contact@jvlcode.com";//Sender email
			$to_address = "jvlcodevideos@gmail.com";//Receiver email
			$body = "<html>
						<style>
							table,th,td{
								border-collapse:collapse;
								border:1px solid black;
							}
						</style>
						<body>
							<p>Someone has contacted you!</p>
							<br><br>
							<h3>Sender Details<h3><br>
							<table>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Message</th>
								</tr>
								<tr>
									<td>".$name."</td>
									<td>".$email."</td>
									<td>".$message."</td>
								</tr>
							</table>
						</body>
					</html>";

			$mailer = new PHPMailer(true);
			try{
				$mailer->isSMTP();
				$mailer->Host="smtp.hostinger.com";
				$mailer->SMTPAuth =true;
				$mailer->Username="youremailusername";
				$mailer->Password="yourhostingpassword";
				$mailer->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;
				$mailer->Port="465";
				$mailer->setFrom($from_address);
				$mailer->addAddress($to_address);
				$mailer->Subject=$subject;
				$mailer->isHTML(true);
				$mailer->Body=$body;
				$mailer->send();
				echo "Mail has been sent";
			}catch(Exception $e){
				echo "Mail Error:".$mailer->ErrorInfo;
			}
			
			


		}
	}

?>
