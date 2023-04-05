<?php
if( empty($_POST) && empty($_FILES)):
    die('You shouldn\'t be here.');
else:
    require_once 'config/config.php';
    require_once ROOT.'/phpxlsx/SimpleXLSX.php';

    /* Login */
    if( isset($_POST['login']) ):
        $details = [ $_POST['email'], md5($_POST['password']) ];
        $result = $contents->loginUser($details);
        if( count($result) > 0 ):
            $_SESSION['loggedUser'] = json_encode([ 'name'=>$result['name'], 'username'=>$result['email'], 'uid'=>$result['id'] ]);
            header('Location:/');
        else:
            echo '<script type="text/javascript">alert("This user is not registered.");location.href="index.php";</script>';
        endif;
    endif;

    /* Upload via AJAX */
    if( !empty($_FILES['xlsxfilename']) ):
        $allowed = ['xls','xlsx'];
        $maxSize = 5000000;
        $file = pathinfo(basename($_FILES['xlsxfilename']['name']));
        if( in_array($file['extension'], $allowed) ):
            if( $_FILES['xlsxfilename']['size'] < $maxSize ):
                $data = $contents->parseExcelFile($_FILES['xlsxfilename']['tmp_name']);
                $sdata = sizeof($data);
                for( $d=0; $d<$sdata; $d++ ):
                    $customerData = $contents->addCustomer($data[$d]);
                endfor;
                echo 'OK';
            endif;
        else:
            echo 'Error';
        endif;
    endif;

endif;
