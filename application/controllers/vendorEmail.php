<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendorEmail extends CI_Controller {

	
    public function send($vendorId)
{
    $to =  'warnasiri1996@gmail.com ';  // User email pass here
    $subject = 'Wedlio Customer Requests';

    $from = 'wedlioweddingplanners@gmail.com';              // Pass here your mail id

    $emailContent = '<!DOCTYPE><html><head></head><body><center>';

    $emailContent .= $this->input->post('subject');
    $emailContent .= "</center> <br> ";

    $emailContent .= "Customer Name : ";
    $emailContent .= $this->input->post('customerName'); 
    $emailContent .= "<br> ";

    $emailContent .= "Customer Mail : ";
    $emailContent .= $this->input->post('customerMail'); 
    $emailContent .= "<br> ";

    // $emailContent .= $this->input->post('vendorMail');

    $emailContent .= "Message : ";

    $emailContent .= $this->input->post('message'); 
    
    $emailContent .= "</body></html>";
                


    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.gmail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';

    $config['smtp_user']    = 'wedlioweddingplanners@gmail.com';    //Important
    $config['smtp_pass']    = '123!@#qwe';  //Important

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 

     

    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($emailContent);
    $this->email->send();

    $this->session->set_flashdata('msg',"Mail has been sent successfully");
    $this->session->set_flashdata('msg_class','alert-success');

    $customerId=$this->session->userdata('id');
    $cusEmail=$this->session->userdata('email');
    $this->load->model('Customer_model');
    $customer=$this->Customer_model->get_customer($customerId);
    $weddingDetails=$this->Customer_model->get_wedding_detail($customerId);

    $data['customerId']=$customerId;
    $data['vendorId']=$vendorId;
    $data['firstName']=$customer->firstName;
    $data['lastName']=$customer->lastName;
    $data['email']=$cusEmail;
    $data['weddingDate']=$weddingDetails->weddingDate;
    $data['weddingLocation']=$weddingDetails->weddingDistrict;

    $this->Customer_model->add_customer_requests($data);

    return redirect($this->agent->referrer());
}


}