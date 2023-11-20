
<?php
session_start();
include("../conecta.php");
$id = $_SESSION["id_paciente"];

$esco_1 = 0;
$esco_2 = 0;
$esco_3 = 0;
$esco_4 = 0;
$esco_5 = 0;
$esco_6 = 0;
$esco_7 = 0;
$esco_8 = 0;
$esco_9 = 0;
$esco_10 = 0;
$esco_11 = 0;
$esco_12 = 0;
$esco_13 = 0;
$esco_14 = 0;
$esco_15 = 0;
$esco_16 = 0;
$esco_17 = 0;
$esco_18 = 0;
$esco_19 = 0;
$esco_20 = 0;
$esco_21 = 0;
$esco_22 = 0;
$esco_23 = 0;
$esco_24 = 0;
$esco_25 = 0;
$esco_26 = 0;
$esco_27 = 0;
$esco_28 = 0;
$esco_29 = 0;
$esco_30 = 0;
$esco_31 = 0;
$esco_32 = 0;
$esco_33 = 0;
$esco_34 = 0;
$esco_35 = 0;
$esco_36 = 0;
$esco_37 = 0;
$esco_38 = 0;
$esco_39 = 0;
$esco_40 = 0;
$esco_41 = 0;

if (isset($_POST['enviar'])) {
    if (isset($_POST['esco_1'])) {

        $esco_1 = 1;

    }

    if (isset($_POST['esco_2'])) {

        $esco_2 = 1;

    }

    if (isset($_POST['esco_3'])) {

        $esco_3 = 1;

    }

    if (isset($_POST['esco_4'])) {

        $esco_4 = 1;

    }

    if (isset($_POST['esco_5'])) {

        $esco_5 = 1;

    }
    
    if (isset($_POST['esco_6'])) {

        $esco_6 = 1;

    }

    if (isset($_POST['esco_7'])) {

        $esco_7 = 1;

    }

    if (isset($_POST['esco_8'])) {

        $esco_8 = 1;

    }

    if (isset($_POST['esco_9'])) {

        $esco_9 = 1;

    }

    if (isset($_POST['esco_10'])) {

        $esco_10 = 1;

    }

    if (isset($_POST['esco_11'])) {

        $esco_11 = 1;

    }

    if (isset($_POST['esco_12'])) {

        $esco_12 = 1;

    }

    if (isset($_POST['esco_13'])) {

        $esco_13 = 1;

    }

    if (isset($_POST['esco_14'])) {

        $esco_14 = 1;
    }

    if (isset($_POST['esco_15'])) {

        $esco_15 = 1;

    }

    if (isset($_POST['esco_16'])) {

        $esco_16 = 1;

    }

    if (isset($_POST['esco_17'])) {

        $esco_17 = 1;

    }

    if (isset($_POST['esco_18'])) {

        $esco_18 = 1;

    }

    if (isset($_POST['esco_19'])) {

        $esco_19 = 1;

    }
    
    if (isset($_POST['esco_20'])) {

        $esco_20 = 1;

    }

    if (isset($_POST['esco_21'])) {

        $esco_21 = 1;

    }

    if (isset($_POST['esco_22'])) {

        $esco_22 = 1;

    }

    if (isset($_POST['esco_23'])) {

        $esco_23 = 1;

    }

    if (isset($_POST['esco_24'])) {

        $esco_24 = 1;

    }

    if (isset($_POST['esco_25'])) {

        $esco_25 = 1;

    }

    if (isset($_POST['esco_26'])) {

        $esco_26 = 1;

    }

    if (isset($_POST['esco_27'])) {

        $esco_27 = 1;

    }

    if (isset($_POST['esco_28'])) {

        $esco_28 = 1;

    }

    if (isset($_POST['esco_29'])) {

        $esco_29 = 1;

    }

    if (isset($_POST['esco_30'])) {

        $esco_30 = 1;

    }

    if (isset($_POST['esco_31'])) {

        $esco_31 = 1;

    }

    if (isset($_POST['esco_32'])) {

        $esco_32 = 1;

    }

    if (isset($_POST['esco_33'])) {

        $esco_33 = 1;
    }

    if (isset($_POST['esco_34'])) {

        $esco_34 = 1;

    }

    if (isset($_POST['esco_35'])) {

        $esco_35 = 1;

    }

    if (isset($_POST['esco_36'])) {

        $esco_36 = 1;

    }

    if (isset($_POST['esco_37'])) {

        $esco_37 = 1;

    }

    if (isset($_POST['esco_38'])) {

        $esco_38 = 1;

    }

    if (isset($_POST['esco_39'])) {

        $esco_39 = 1;

    }

    if (isset($_POST['esco_40'])) {

        $esco_40 = 1;

    }

    $esco_41 = $_POST["esco_41"];

    $comando = $pdo->prepare("INSERT INTO sinais_e_sintomas(abdomen_sensivel_ou_rigido, afundamento_de_cranio, agitacao, amnesia, angina_de_peito, apineia, bradicardia, bradipneia, bronco_aspirando, cafalea, cianose_labios, convulsao, decorticacao, deformidade, descerebracao, desmaio, desvio_de_traqueia, dor_local, edema_generalizado, enfisema_subcutaneo, face_palida, hemorragia, hipertensao, hipotensao, nauseas_e_vomitos, nasoragia, obito, otorreia, o_v_a_c_e, parada_cardiaca_ou_respiratoria, priaprismo, prurido_na_pele, pupilas, sede, sinal_de_battle, sinal_de_guaxinim, sudorese, taquipneia, taquicardia, tontura, outro_sinais_e_sintomas, id_paciente) VALUES('$esco_1', '$esco_2', '$esco_3', '$esco_4', '$esco_5', '$esco_6', '$esco_7', '$esco_8', '$esco_9', '$esco_10', '$esco_11', '$esco_12', '$esco_13', '$esco_14', '$esco_15', '$esco_16', '$esco_17', '$esco_18', '$esco_19', '$esco_20', '$esco_21', '$esco_22', '$esco_23', '$esco_24', '$esco_25', '$esco_26', '$esco_27', '$esco_28', '$esco_29', '$esco_30', '$esco_31', '$esco_32', '$esco_33', '$esco_34', '$esco_35', '$esco_36', '$esco_37', '$esco_38', '$esco_39', '$esco_40', '$esco_41', $id)");
	$resultado = $comando->execute();

}
?>