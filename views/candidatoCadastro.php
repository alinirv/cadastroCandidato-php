<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhe Conosco</title>
    <link rel="stylesheet" href="content/style/style.css" type="text/css">
</head>

<body>
    <div class="tabTitulo">
        <h1>Trabalhe Conosco</h1>
    </div>

    <div>
        <form action="" method="POST">
            <fieldset>
                <legend>Dados Pessoais</legend>
                <p>Nome:
                    <input name="txtNome" class="posCampos" type="text" size="100" maxlength="100" value=""><br>
                </p>
                <p>Endereço:
                    <input name="txtEndereco" class="posCampos" type="text" size="100" maxlength="100" value=""><br>
                </p>
                <p>Cidade:
                    <input name="txtCidade" class="posCampos" type="text" size="100" maxlength="100" value=""><br>
                </p>
                <p>Estado:
                    <select class="posCampos" name="txtUF">
                        <option value="">--</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select><br>
                </p>

            </fieldset>
            <br>
            <fieldset>
                <legend>Informações Profissionaisl</legend>
                <p>Ocupação:
                    <input name="txtOcupacao" class="posCampos" type="text" size="50" maxlength="50" value="">
                </p><br>
                <p>Cargo Pretendido:
                    <input  type="radio" id="cargo1" name="txtCargo" value="analista">&nbsp;
                    <label for="cargo1">Analista de sitemas</label>&nbsp;

                    <input  type="radio" id="cargo2" name="txtCargo" value="programadorAspNet">&nbsp;
                    <label for="cargo2">Programador ASP.Net</label>&nbsp;

                    <input type="radio" id="cargo3" name="txtCargo" value="programadorc#">&nbsp;
                    <label for="cargo1">Programador C#</label>&nbsp;

                    <input type="radio" id="cargo4" name="txtCargo" value="programadorcPhp">&nbsp;
                    <label for="cargo4">Programador PHP</label>&nbsp;
                </p><br>
                <p>Mini Curriculo
                    <textarea class="posCampos" name="txtCurriculo" id="" cols="100" rows="5"></textarea>
                </p>&nbsp;
                <br><br><br>
            </fieldset>
            <div class="centralizar">
                <p>
                    <input type="submit" name="btnOperacao" value="Salvar" />
                    &nbsp; &nbsp;
                    <input type="submit" name="btnOperacao" value="Exibir" />
                    &nbsp; &nbsp;
                    <input type="reset" name="btnOperacao" value="Apagar" />
                    &nbsp; &nbsp;
                </p>
            </div>
        </form>
    </div>

</body>

</html>