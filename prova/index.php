<?php
    session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Prova</title>
        <link href="css/css.css" type="text/css" rel="stylesheet" bgcolor="#000">
    </head>

    <body class="corpo">
        <form action="php/prova.php" method="POST">
            <table border="1" align="center" width="90%" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <p class="top">
                            <center>
                                <h1><strong>Sistema de Créditos em Celular</strong></h1>
                            </center>
                        </p>
                        <p><strong>Escolha a operadora e digote o valor dos créditos:</strong></p>
                        <input type="radio" name="operadora" value="1"><img src="img/tim.png" width="50">
                        <input type="radio" name="operadora" value="2"><img src="img/claro.jpg" width="35">
                        <input type="radio" name="operadora" value="3"><img src="img/oi.png" width="35">
                        <input type="radio" name="operadora" value="4"><img src="img/vivo.png" width="35">
                        <br/>
                        <label>Número:</label>
                        <input type="text" name="numero" /><br/>
                        <label>Valor da Recarga</label>
                        <input type="text" name="recarga" />
                        <input type="submit" name="ok" value="Recarregar" />
                        <p></p>
                    </td>
                </tr>

        </form>
        <tr>
            <td>
                <div class="esqd">
                    <label>Tim - 40%</label>
                    <hr width="<?php
                        if(isset($_SESSION['tim'])){
                            echo $_SESSION['tim'];
                                unset($_SESSION['tim']);	
                        }else{
                            echo "40%";
                        }
                    ?>" align="left" color="blue" size="05" />

                    <label>Claro - 30%</label>
                    <hr width="<?php
                        if(isset($_SESSION['claro'])){
                            echo $_SESSION['claro'];
                                unset($_SESSION['claro']);	
                        }else{
                            echo "30%";
                        }
                    ?>" align="left" color="red" size="05" />

                    <label>OI - 15%</label>
                    <hr width="<?php
                        if(isset($_SESSION['oi'])){
                            echo $_SESSION['oi'];
                                unset($_SESSION['oi']);	
                        }else{
                            echo "15%";
                        }
                    ?>" align="left" color="sandybrown" size="05" />

                    <label>Vivo - 15%</label>
                    <hr width="<?php
                        if(isset($_SESSION['vivo'])){
                            echo $_SESSION['vivo'];
                                unset($_SESSION['vivo']);	
                        }else{
                            echo "15%";
                        }
                    ?>"  align="left" color="rebeccapurple" size="05" />
                </div>
                <p>O número: <strong><?php
                        if(isset($_SESSION['numero'])){
                            echo $_SESSION['numero'];
                                unset($_SESSION['numero']);	
                        }
                    ?> fez uma regarga na <strong>Claro</strong> de <strong>30</strong> reais;</p>
            </td>
        </tr>
        </table>
    </body>

    </html>