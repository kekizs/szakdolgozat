<?php

error_reporting(E_ERROR);

require_once './app/controller/controller.php';

class defaultController extends controller {

    public function run() {

        require_once './app/model/hirModel.php';
        $model1 = new hirModel;
        $hirek = $model1->kilista();

        require_once './app/model/termekekModel.php';
        $model2 = new termekekModel;
        $termekek = $model2->kilista();

        require_once './app/model/kategoriaModel.php';
        $model3 = new kategoriaModel;
        $kategoriak = $model3->kilista();

        /* require_once './app/model/hirlevelModel.php';
          $model4=new hirlevelModel;
          $hirlevelek=$model4->hirlevel($nev, $email); */

        require_once("./app/model/hirlevelModel.php");
        $level = new hirlevelModel();


        if (isset($_POST['kuldes'])) {
            $nev = strip_tags($_POST['nev']);
            $email = strip_tags($_POST['email']);

            $error = [];
            if ($nev == "") {
                $error[] = "Meg kell adni egy felhasználónevet !";
            } else if ($email == "") {
                $error[] = "Meg kell adni egy e-mail címet !";
            }
            $hirlevel = "Kedves " . $_POST['nev'] . "! <br><br>
		Ön sikeresen feliratkozott a TortaWebShop hírlevelére! <br><br>";
            //$hirlevel.="A küldés időpontja: ".$_POST['send_time']." <br>";
            //$hirlevel.="Az üzenet tárgya: ".$_POST['send_object']." <br>";
            //$hirlevel.="Az üzenet szövege:<pre> ".$_POST['send_text']." </pre><br><br>";
            $hirlevel .= "Üdvözlettel,<br>K.Andrea";
            //SENDING PROCESS
            require_once("./app/view/email/class.phpmailer.php");
            //set mailbox
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Host = "smtp.gmail.com"; //smtp server
            $mail->SMTPAuth = true; //smtp validate
            $mail->Port = 465; //smtp port
            $mail->Username = "csokolademanufakaktura@gmail.com";
            $mail->Password = "andi1969";
            $mail->SMTPSecure = 'ssl';
            $mail->WordWrap = 100;  //auto break
            $mail->isHTML(true); //küldés HTML e-mailként
            $mail->CharSet = "UTF-8";
            //set email

            $mail->SetFrom("csokolademanufakaktura@gmail.com", "TortaWebshop");
            $mail->Subject = "Hírlevél feliratkozás";
            $mail->Body = $hirlevel;
            $mail->AltBody = strip_tags($hirlevel);
            $mail->AddAddress($_POST['email'], $_POST['nev']); //user data
            //copy
            $mail->AddBCC("csokolademanufakaktura@gmail.com", "TortaWebshop");
            //emailküldés
            if (!$mail->Send()){
                print "Üzenetküldési hiba" . $mail->ErrorInfo;
            } else {
                print "Üzenet elküldve!";
                print $error;
                header("refresh:3;url=index.php");
            }
            
        
        }

        if ($level->hirlevel($nev, $email)) {
            $level->redirect('index.php');
        }

        $this->render('./app/view/index.php', ["hirek" => $hirek, "termekek" => $termekek, "kategoriak" => $kategoriak]);
    }
    
    public function hirlevel() {
        
    }

}
