<?php 
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Validação de preenchimento de todos os campos
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // Validação de email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
            //  Verifica existência do email no BD
            if(mysqli_num_rows($sql) > 0){
                echo "$email - Este email já existe";
            } else{
                $status = "Online";
                $random_id = rand(time(), 10000000);
                $sql2 = mysqli_query($conn,"INSERT INTO users (unique_id, fname, lname, email, password, status)
                                                          VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$status}')");
                if($sql2){
                    $sql3 = mysqli_query($conn,"SELECT * FROM users WHERE email = '{$email}'");
                    if(mysqli_num_rows($sql3) > 0){
                        $row = mysqli_fetch_assoc($sql3);
                        $_SESSION['unique_id'] = $row['unique_id'];
                        echo "success";
                    }
                } else{
                    echo "Algo deu errado";
                }
            }
        } else{
            echo "$email - Email inválido";
        }

    } else{
        echo "Todos os campos são obrigatórios";
    }

?>