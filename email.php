<?PHP

    $name = $_POST["name_touch"];
    $email = $_POST["email_touch"];
    $company = $_POST["company_name"];
    $industry = $_POST["industry_name"];
    $message = $_POST["msg_touch"];
    $to = "akumar@dronamaps.com";
    $subject = "Form Submission ";
    $msg = "Name :".$name."\n"."Comapany :".$company."\n"."Industry : ".$industry."\n"."Wrote the following:"."\n\n".$message  ;
    $headers = "From: $email\n";
    
    if(mail($to,$subject,$msg,$headers)){
       echo "<script>
             alert('Message sent succesfully'); 
             window.history.go(-1);
     </script>";
    }
?>