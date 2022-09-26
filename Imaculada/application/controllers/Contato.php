<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {
    
    function __construct() {
        parent::__construct();        
        
        $this->load->library('form_validation');
		$this->load->model("cadastrados_model");
    }
    
    public function index(){
        $data = $formData = array();  	
		
        if($this->input->post()){
            
           
            $formData = $this->input->post();
            
            // Form field validation rules
            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('whatsapp', 'Whatsapp', 'required');

			//print_r($this->form_validation->run() == true);
			
            
            // Validate submitted form data
            if($this->form_validation->run() == true){	
				
                
                // Define email data
                $mailData = array(
                    'nome' => $formData['nome'],
                    'email' => $formData['email'],
                    'whatsapp' => $formData['whatsapp']
                );
                
                // Send an email to the site admin
                $send = $this->send($mailData);
				
                
                // Check email sending status
                if($send){					
                    // Unset form data
                    $formData = array();

					$nome = explode(" ",$mailData['nome']);
                    
                    $data['status'] = array(
                        'type' => 'success',
                        'msg' => "Agradecemos seu interesse,".$nome[0]."!!! Aguarde o retorno da nossa paróquia para confirmar pagamento da sua inscrição."
                    );

					$this->cadastrados_model->insert_entry();
					redirect("Contato/obrigado");
                }else{
                    $data['status'] = array(
                        'type' => 'error',
                        'msg' => 'Algo de errado ocorreu, tente novamente por favor.'
                    );
					redirect("Home");
                }
            }
        }
        
        // Pass POST data to view
        $data['postData'] = $formData;
        
        // Pass the data to view
        $this->load->view('contato/obrigado', $data);
    }   
    

	function send($mailData){

        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'wellingtonfinazzi@gmail.com';
        $mail->Password = 'ymjqvittccdfhlis';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('wellingtonfinazzi@gmail.com', 'CodexWorld');
        $mail->addReplyTo('wellingtonfinazzi@gmail.com', 'CodexWorld');

        // Add a recipient
        $mail->addAddress('wellingtonfinazzi@gmail.com');

        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Email subject
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        // $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
        //     <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $this->load->view('email/email_marketing', '' , TRUE);

        // Send email
        // if(!$mail->send()){
        //     echo 'Message could not be sent.';
        //     echo 'Mailer Error: ' . $mail->ErrorInfo;
        // }else{
        //     redirect("Contato/obrigado");
        // }
		return $mail->send();
    }

	public function obrigado(){
		$this->load->view("contato/obrigado");
	}
    
}