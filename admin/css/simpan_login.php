<?php
    ob_start();
    session_start();
    $user = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username']=$user;
        $_Open = mysql_connect("localhost", "root", "");
        if(!$Open){
            die("Koneksi MySQL gagal");
        }
        $koneksi = mysql_select_db("siwang");
        if(!$koneksi){
            die("Koneksi ke database gagal")
        }
        $sql = "SELECT * FROM admin where username='$user'";
        $query = mysql_query($query);
        $num = mysql_num_rows($query);
        $row = mysql_fetch_array($query);

        if ($num==0 OR $password!=$row['password']) {
            ?>
                <script language="JavaScript">
                    alert('Username atau Password tidak sesuai !');
                    document.location='utama.php';
                </script>
            <?php
            }
            else {
                $_SESSION['login']=1;
                header("Location: index.php");
            }
            mysql_close($Open); //Tutup koneksi engine MySQL
        ?>
        