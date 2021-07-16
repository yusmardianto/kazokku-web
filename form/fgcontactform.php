<?PHP
/*
    Contact Form from HTML Form Guide

    This program is free software published under the
    terms of the GNU Lesser General Public License.

This program is distributed in the hope that it will
be useful - WITHOUT ANY WARRANTY; without even the
implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.

@copyright html-form-guide.com 2010
*/
require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailerAutoload.php';


/*
FGContactForm is a general purpose contact form class
It supports Captcha, HTML Emails, sending emails
conditionally, File atachments and more.
*/
class FGContactForm
{
    var $receipients;
    var $errors;
    var $error_message;
    var $name;
    var $email;
    var $message;
    var $from_address;
    var $form_random_key;
    var $conditional_field;
    var $captcha_handler;
    var $sender;
    var $mailer;

    function FGContactForm()
    {
      $this->fromName = 'Logique'; // set custom from name here, default : = $this->smtpUsername
      $this->fromEmail = 'info@kazokku.com'; // set custom from name here, default : = $this->smtpUsername
      $this->errors = array();
      $this->form_random_key = 'HTgsjhartag';
      $this->conditional_field='';

      $this->receipent = ['info@kazokku.com']; // set custom recipient here

      // Setting SMTP
      $this->smtpHost = 'smtp.postmarkapp.com';                       // Set the SMTP host, eq : smtp.gmail.com
      $this->smtpPort = 587;                      // Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
      $this->smtpEncryption = 'tls';              // Set the encryption system to use - ssl (deprecated) or tls
      $this->smtpAuth = true;                     // SMTP authentication ?
      $this->smtpUsername = "0d89a28b-12f2-488d-a65f-32c2d74027ca"; // Username to use for SMTP authentication - use full email address for gmail
      $this->smtpPassword = "0d89a28b-12f2-488d-a65f-32c2d74027ca";           // Password to use for SMTP authentication $phpmailer->isSMTP();


    }

    function EnableCaptcha($captcha_handler)
    {
        $this->captcha_handler = $captcha_handler;
        session_start();
    }

    function AddRecipient($email)
    {
        // $this->receipent = $email;
    }

    function SetFromAddress($email)
    {
        $this->from_address = $email;
    }
    function SetFormRandomKey($key)
    {
        $this->form_random_key = $key;
    }
    function GetSpamTrapInputName()
    {
        return 'sp'.md5('KHGdnbvsgst'.$this->GetKey());
    }
    function SafeDisplay($value_name)
    {
        if(empty($_POST[$value_name]))
        {
            return'';
        }
        return htmlspecialchars($_POST[$value_name], ENT_QUOTES);
    }
    function GetFormIDInputName()
    {
        $rand = md5('TygshRt'.$this->GetKey());

        $rand = substr($rand,0,20);
        return 'id'.$rand;
    }


    function GetFormIDInputValue()
    {
        return md5('jhgahTsajhg'.$this->GetKey());
    }

    function SetConditionalField($field)
    {
        $this->conditional_field = $field;
    }

    function ProcessForm()
    {
        if(!isset($_POST['submitted']))
        {
           return false;
        }
        if(!$this->Validate())
        {
            $this->error_message = implode('<br/>',$this->errors);
            return false;
        }
        $this->CollectData();

        $ret = $this->SendFormSubmission();

        return $ret;
    }

    function RedirectToURL($url)
    {
        header("Location: $url");
        exit;
    }

    function GetErrorMessage()
    {
        return $this->error_message;
    }
    function GetSelfScript()
    {
        return htmlentities($_SERVER['PHP_SELF']);
    }

    function GetName()
    {
        return $this->name;
    }
    function GetEmail()
    {
        return $this->email;
    }
    function GetMessage()
    {
        return htmlentities($this->message,ENT_QUOTES,"UTF-8");
    }

/*--------  Private (Internal) Functions -------- */


    function SendFormSubmission()
    {
        $status = array(
            'message' => array(
                'subject' => 'Message From Kazokku.com Website',
                'header' => 'Submission from \'Hubungi Kami\' form:',
            ),
            'notification' => array(
                'subject' => 'Notification Message From Kazokku.com Website',
                'header' => 'Below are the data you\'ve sent through our website:',
            ),
        );
        foreach ($status as $key => $data) {
            $this->mailer = new PHPMailer();
            $this->mailer->CharSet = 'utf-8';
            
            if(!empty($this->smtpHost)){
              // using smtp
              $this->mailer->isSMTP();
              $this->mailer->Host = $this->smtpHost;
              $this->mailer->Port = $this->smtpPort;
              $this->mailer->SMTPSecure = $this->smtpEncryption;
              $this->mailer->SMTPAuth = $this->smtpAuth;
              $this->mailer->Username = $this->smtpUsername;
              $this->mailer->Password = $this->smtpPassword;
            }else{
              // default phpmailer : using localhost and localuser
            }

            if ($key == 'message') {
                if (is_array($this->receipent)) { // array (one or many emails)
                    foreach ($this->receipent as $key => $the_receipent) {
                        $this->mailer->addAddress($the_receipent);
                    }
                } else { // non array (only one email)
                    $this->mailer->addAddress($this->receipent);
                }
                $this->mailer->addReplyTo($this->email);
            } else {
                // You can change below value as static if needed
                $the_receipent = (is_array($this->receipent)) ? $this->receipent[0] : $this->receipent ;
                $this->mailer->addAddress($this->email, $this->name);
                $this->mailer->addReplyTo($the_receipent);
                
            }
            
            if(empty($this->fromName)){
              $this->mailer->FromName = empty($this->mailer->Username) ? $this->mailer->From : $this->mailer->Username;
            }else{
              $this->mailer->FromName = $this->fromName;
            }
            $this->mailer->SetFrom($this->fromEmail, $this->mailer->FromName);

            $this->mailer->Subject = $data['subject'];
            $message = $this->ComposeFormtoEmail($data['header']);

            $textMsg = trim(strip_tags(preg_replace('/<(head|title|style|script)[^>]*>.*?<\/\\1>/s','',$message)));
            $this->mailer->AltBody = @html_entity_decode($textMsg,ENT_QUOTES,"UTF-8");
            $this->mailer->MsgHTML($message);

            if(!$this->mailer->Send())
            {
                $this->add_error("Failed sending email!");
                return false;
            }
        }

        return true;
    }

    /*
    Internal variables, that you donot want to appear in the email
    Add those variables in this array.
    */
    function IsInternalVariable($varname)
    {
        $arr_interanl_vars = array('scaptcha',
                            'submitted',
                            $this->GetSpamTrapInputName(),
                            $this->GetFormIDInputName()
                            );
        if(in_array($varname,$arr_interanl_vars))
        {
            return true;
        }
        return false;
    }

    function FormSubmissionToMail()
    {
        $ret_str='';
        foreach($_POST as $key=>$value) {
            if (!$this->IsInternalVariable($key)) {
                if (in_array($key, array('company_name', 'name', 'phone', 'email'))) {
                    $value = htmlentities($value,ENT_QUOTES,"UTF-8");
                    $value = nl2br($value);
                    $key = ucfirst($key);
                    $ret_str .= "<div class='label'>$key :</div><div class='value'>$value </div>\n";
                }

                if (in_array($key, array('category'))) {
                    if(isset($_POST['category'])){
                        $html = '';
                        $i = 0;
                        foreach ($_POST['category'] as $value) {
                            $i++;
                            $html .= '<div style="margin-left:10px;">'.$i.". ".$value.'</div>';
                        }
                    }

                    $key = ucfirst($key);
                    $ret_str .= "<div class='label'>$key :</div><div class='value'>$html </div>\n";
                }

                if (in_array($key, array('message'))) {
                    $value = htmlentities($value,ENT_QUOTES,"UTF-8");
                    $value = nl2br($value);
                    $key = ucfirst($key);
                    $ret_str .= "<div class='label'>$key :</div><div class='value'>$value </div>\n";
                }
            }
        }

        return $ret_str;
    }

    function ExtraInfoToMail()
    {
        $ret_str='';

        $ip = $_SERVER['REMOTE_ADDR'];
        $ret_str = "<div class='label'>IP address of the submitter:</div><div class='value'>$ip</div>\n";

        return $ret_str;
    }

    function GetMailStyle()
    {
        $retstr = "\n<style>".
        "body,.label,.value { font-family:Arial,Verdana; } ".
        ".label {font-weight:bold; margin-top:5px; font-size:1em; color:#333;} ".
        ".value {margin-bottom:15px;font-size:0.8em;padding-left:5px;} ".
        "</style>\n";

        return $retstr;
    }
    function GetHTMLHeaderPart()
    {
         $retstr = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">'."\n".
                   '<html><head><title></title>'.
                   '<meta http-equiv=Content-Type content="text/html; charset=utf-8">';
         $retstr .= $this->GetMailStyle();
         $retstr .= '</head><body>';
         return $retstr;
    }
    function GetHTMLFooterPart()
    {
        $retstr ='</body></html>';
        return $retstr ;
    }

    function ComposeFormtoEmail($header_message)
    {
        $header = $this->GetHTMLHeaderPart();
        $formsubmission = $this->FormSubmissionToMail();
        $extra_info = $this->ExtraInfoToMail();
        $footer = $this->GetHTMLFooterPart();

        $message = $header.$header_message."<p>{$formsubmission}</p><hr/>".$extra_info.$footer;

        return $message;
    }

    function GetFromAddress()
    {
        if(!empty($this->from_address))
        {
            return $this->from_address;
        }

        $host = $_SERVER['SERVER_NAME'];

        $from ="nobody@$host";
        return $from;
    }

    function Validate()
    {
        $ret = true;
        //security validations
        if(empty($_POST[$this->GetFormIDInputName()]) ||
          $_POST[$this->GetFormIDInputName()] != $this->GetFormIDInputValue() )
        {
            //The proper error is not given intentionally
            $this->add_error("Automated submission prevention: case 1 failed");
            $ret = false;
        }

        //This is a hidden input field. Humans won't fill this field.
        if(!empty($_POST[$this->GetSpamTrapInputName()]) )
        {
            //The proper error is not given intentionally
            $this->add_error("Automated submission prevention: case 2 failed");
            $ret = false;
        }

        //email validations
        if(empty($_POST['email']))
        {
            $this->add_error("Please provide your email address");
            $ret = false;
        }
        else
        if(strlen($_POST['email'])>50)
        {
            $this->add_error("Email address is too big!");
            $ret = false;
        }
        else
        if(!$this->validate_email($_POST['email']))
        {
            $this->add_error("Please provide a valid email address");
            $ret = false;
        }

        //country validaions
        /*if(!$this->validate_country($_POST['country']))
        {
            $this->add_error("Please provide a valid country name");
            $ret = false;
        }*/

        //message validaions
        if(strlen($_POST['message'])>2048)
        {
            $this->add_error("Message is too big!");
            $ret = false;
        }

        //captcha validaions
        if(isset($this->captcha_handler))
        {
            if(!$this->captcha_handler->Validate())
            {
                $this->add_error($this->captcha_handler->GetError());
                $ret = false;
            }
        }
        return $ret;
    }

    function StripSlashes($str)
    {
        if(get_magic_quotes_gpc())
        {
            $str = stripslashes($str);
        }
        return $str;
    }
    /*
    Sanitize() function removes any potential threat from the
    data submitted. Prevents email injections or any other hacker attempts.
    if $remove_nl is true, newline chracters are removed from the input.
    */
    function Sanitize($str,$remove_nl=true)
    {
        $str = $this->StripSlashes($str);

        if($remove_nl)
        {
            $injections = array('/(\n+)/i',
                '/(\r+)/i',
                '/(\t+)/i',
                '/(%0A+)/i',
                '/(%0D+)/i',
                '/(%08+)/i',
                '/(%09+)/i'
                );
            $str = preg_replace($injections,'',$str);
        }

        return $str;
    }

    /*Collects clean data from the $_POST array and keeps in internal variables.*/
    function CollectData()
    {
        $this->name = $this->Sanitize($_POST['name']);
        $this->email = $this->Sanitize($_POST['email']);
        $this->phone = $this->Sanitize($_POST['phone']);
        $this->phone = $this->Sanitize($_POST['category']);
        //$this->country = $this->Sanitize($_POST['country']);
        
        /*newline is OK in the message.*/
        $this->message = $this->StripSlashes($_POST['message']);
    }

    function add_error($error)
    {
        array_push($this->errors,$error);
    }
    function validate_email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/i", $email);
    }

    function validate_country($country)
    {
        return !preg_match("/[^\w\s]/i", $country);
    }

    function GetKey()
    {
        return $this->form_random_key.$_SERVER['SERVER_NAME'].$_SERVER['REMOTE_ADDR'];
    }

}

?>
