<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formato Unico Nacional</title>
</head>
<style>
    @page {
        size: A4;
        margin: 2%auto;
    }

    @media print {

        html,
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            position: absolute;
            width: 210mm;
            height: 310mm;

        }
    }

    table,
    th,
    td,
    tr {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .div-principal {
        border-style: solid;
        border-width: 5px;
        position: relative;
    }

    .titulos {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        padding: 10px;
        font-size: 14px;
    }

    .sub-titulos {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        padding: 10px;
        font-size: 14px;
        color: #fff
    }

    .type-normal {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;


    }

    .type-normal-cell {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        padding: 10px;


    }

    .type-p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        padding-top: 5px; 
        overflow: hidden;
        margin: 0;
        white-space: initial;
       
    }

    .bg-header {
        background: #828587
    }

    .header {
        position: fixed;
        left: 62%;
        top: 0;
        right: 10%;
        height: 45px;
        bottom: 0;
        width: 100%;

    }

    .header-principal {
        position: fixed;
        left: 0%;
        top: 10%;
        right: 0;
        height: 50px;
        bottom: 0;
        width: 100%;

    }

    .contenedor {
            
        top:13.7%;  /* as the height of the other div is 30px */
        left:0;
        right:0;      
        position:absolute;
        border: 3px solid black;
    }
    .text-final {
            
        top:79%;  /* as the height of the other div is 30px */
        left:0;
        right:0;      
        position:absolute;
        font-size: 8px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold; 

     
    }

    .border-trl {
        border: 4px solid black;
    }

    .chk-inline {
        display: inline;
        position: absolute;
        left: 300px;
    }

    .chk-inline-two-section {
        display: inline;
        position: absolute;
        left: 600px;
    }

    .chk-inline-section-1-2 {
        display: inline;
        position: absolute;
        left: 520px;
    }

    .chk-inline-section-2-2 {
        display: inline;
        position: absolute;
        left: 500px;
    }

    .chk-inline-2-1 {
        display: inline;
        position: absolute;
        left: 150px;
    }
    .chk-inline-2-2-1 {
        display: inline;
        position: absolute;
        left: 320px;
    }

    .page-break {
        page-break-after: always;
    }

    .left-div {
        float: left;
        width: 30%;
    }

    .right-div {
        float: right;
        width: 30%;
    }

    .center-div {
        margin: 0 auto;
        width: 40%;
    }
    .number{
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;       
        font-size: 14px;
    }
</style>

<body>
    <div class="header">
        <table width="100%" style="border: hidden">
            <tbody>
                <tr>
                    <td><img src="{{ asset('img/logo-formato-4.png') }}" width="270px" height="95px"></td>

                </tr>
            </tbody>
        </table>
    </div><br><br>

    <div class="header-principal">
        <table style="width: 100%;" class="border-trl">
            <tbody>
                <tr style="">
                    <td style="width: 70%; padding:10px"><span class="titulos">FORMULARIO ??NICO NACIONAL</span></td>
                    <td style="text-align: right;"><span class="titulos"
                            style="text-align: right; margin-right:5px;">P??GINA</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="contenedor">
        <table style="width: 100%;" border="2">
            <tbody>
                <tr class="bg-header">
                    <td colspan="2"><span class="sub-titulos">0. DATOS GENERALES</span></td>

                </tr>
                <tr>
                    <td rowspan="3" style="background: #bfbfbf;vertical-align :middle;text-align:center; width:40%">
                        <span class="type-normal">USO EXCLUSIVO CURADORES URBANOS ??? OFICINA DE PLANEACION O LA QUE HAGA
                            SUS VECES</span></td>
                    <td><span class="titulos">0.1 OFICINA RESPONSABLE:</span><br>
                        <span class="type-normal-cell">SECRETARIA DE PLANEACION</span>
                    </td>
                </tr>
                <tr>
                    <td><span class="titulos">0.2 No. DE RADICACI??N:</span><br>
                        <span class="type-normal-cell">SECRETARIA DE PLANEACION</span>
                    </td>
                </tr>
                <tr>
                    <td><span class="titulos">0.3 DEPARTAMENTO ??? MUNICIPIO ??? FECHA</span><br>
                        <span class="type-normal-cell">SANTANDER -BUCARAMANGA - {{ date('Y-m-d') }}</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td colspan="2" style="vertical-align :middle;text-align:center; padding:5px;"><span
                            style="font-size:12px;text-align:center;font-style: italic;">Lea cuidadosamente este
                            formulario y las instrucciones contenidas en la Gu??a anexa, antes de diligenciarlo por medio
                            electr??nico o a mano en letra imprenta, sin enmendaduras y en sistema de n??mero
                            ar??bigo.</span></td>
                </tr>

            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>
                <tr class="bg-header">
                    <td colspan="2"><span class="sub-titulos">1. IDENTIFICACI??N DE LA SOLICITUD</span></td>
                </tr>
                <tr>
                    <td style="text-align: center; width:50%"><span class="titulos">1.1 TIPO DE TR??MITE</span></td>
                    <td style="text-align: center; width:50%"><span class="titulos">1.2 OBJETO DEL TR??MITE</span></td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <div style="padding: 10px;">

                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_parcelacion"> A. LICENCIA DE PARCELACI??N </label><input type="checkbox"
                                name="lic_parcelacion" id="lic_parcelacion" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_urb"> B. LICENCIA DE URBANIZACI??N</label><input type="checkbox" name="lic_urb"
                                id="lic_urb" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_sub"> C. LICENCIA DE SUBDIVISI??N </label><input type="checkbox" name="lic_sub"
                                id="lic_sub" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_cons"> D. LICENCIA DE CONSTRUCCI??N </label><input type="checkbox"
                                name="lic_cons" id="lic_cons" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_rec"> E. RECONOCIMIENTO DE LA EXISTENCIA DE UNA EDIFICACI??N </label><input
                                type="checkbox" name="lic_rec" id="lic_rec" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_otras"> F. OTRAS ACTUACIONES</label><input type="checkbox" name="lic_otras"
                                id="lic_otras" class="chk-inline"><br>



                        </div>
                    </td>
                    <td style="width:50%">
                        <div style="padding: 20px 10px 10px ">
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="incial">INICIAL</label><input type="checkbox" name="incial" id="incial"
                                class="chk-inline-two-section"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="prorroga">PRORROGA</label><input type="checkbox" name="prorroga" id="prorroga"
                                class="chk-inline-two-section"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="modificacion">MODIFICACI??N DE LICENCIA VIGENTE</label><input type="checkbox"
                                name="modificacion" id="modificacion" class="chk-inline-two-section"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="revalidacion">REVALIDACI??N</label><input type="checkbox" name="revalidacion"
                                id="revalidacion" class="chk-inline-two-section"><br>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.3
                            MODALIDAD LICENCIA DE URBANIZACI??N</span></td>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.5
                            MODALIDAD LICENCIA DE CONSTRUCCI??N</span></td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <div style="padding: 10px;">
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="desarrollo-urb"> A. DESARROLLO</label><input type="checkbox"
                                name="desarrollo-urb" id="desarrollo-urb" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="sanemiento-urb"> B. SANEAMIENTO</label><input type="checkbox"
                                name="sanemiento-urb" id="sanemiento-urb" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="reurbanizacion_lic"> C. REURBANIZACI??N </label><input type="checkbox"
                                name="reurbanizacion_lic" id="reurbanizacion_lic" class="chk-inline"><br>


                        </div>

                    </td>
                    <td style="width:50%" rowspan="3">
                        <div style="padding:5px; width:100%; margin-top:-80px">
                            <div style="float: left; width:55%">
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="obra-nueva">a. OBRA NUEVA <br> *Indicar en el numeral 1.8 el tipo de medidas
                                    de construcci??n sostenible a implementar</label><input type="checkbox"
                                    name="obra-nueva" id="obra-nueva" class="chk-inline-section-1-2"><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="ampliacion">b. AMPLIACI??N</label><input type="checkbox" name="ampliacion"
                                    id="ampliacion" class="chk-inline-section-1-2"><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="adecuacion">c. ADECUACI??N</label><input type="checkbox" name="adecuacion"
                                    id="adecuacion" class="chk-inline-section-1-2"><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="modificacion">d. MODIFICACI??N</label><input type="checkbox"
                                    name="modificacion" id="modificacion" class="chk-inline-section-1-2"><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="restauracion">e. RESTAURACI??N</label><input type="checkbox"
                                    name="restauracion" id="restauracion" class="chk-inline-section-1-2"><br>
                            </div>
                            <div style="float: right; width:45%; margin-left:10px;">
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="reforzamiento-estructural">f. REFORZAMIENTO ESTRUCTURAL</label><input
                                    type="checkbox" name="reforzamiento-estructural" id="reforzamiento-estructural"
                                    class="chk-inline-section-2-2"><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="demolicion">g. DEMOLICI??N
                                    <ul>
                                        <li>
                                            TOTAL <input type="checkbox" name="total-demolicion"
                                                class="chk-inline-section-2-2">
                                        </li>
                                        <li>
                                            PARCIAL <input type="checkbox" name="parcial-demolicion"
                                                class="chk-inline-section-2-2">
                                        </li>
                                    </ul>
                                </label><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="reconstruccion">h. RECONSTRUCCI??N</label><input type="checkbox"
                                    name="reconstruccion" id="reconstruccion" class="chk-inline-section-2-2"><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="cerramiento">i. CERRAMIENTO</label><input type="checkbox" name="cerramiento"
                                    id="cerramiento" class="chk-inline-section-2-2"><br>
                            </div>



                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">
                            1.4 MODALIDAD LICENCIA DE SUBDIVISI??N</span></td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <div style="padding: 10px;">
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="sub_rural"> A. SUBDIVISI??N RURAL</label><input type="checkbox" name="sub_rural"
                                id="sub_rural" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="sub_urbana"> B. SUBDIVISI??N URBANA</label><input type="checkbox"
                                name="sub_urbana" id="sub_urbana" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="reloteo"> C. RELOTEO</label><input type="checkbox" name="reloteo"
                                id="reloteo" class="chk-inline"><br>


                        </div>

                    </td>
                </tr>
            </tbody>
        </table>

        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.6
                            USOS</span></td>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.7 ??REA
                            CONSTRUIDA</span></td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <div style="padding: 5px; width:100%;">
                            <div style="width: 25%;display:inline">
                                <input type="checkbox" id="vivienda" name="vivienda" value="vivienda"
                                    style="display: inline">
                                <label for="vivienda"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">Vivienda</label>
                            </div>

                            <div style="width: 45%;display:inline">
                                <input type="checkbox" id="comercio" name="comercio" value="comercio"
                                    style="display: inline;">
                                <label for="comercio"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">Comercio
                                    y/o Servicios</label>

                            </div>

                            <div style="width: 30%;display:inline; float:right">
                                <input type="checkbox" id="institucional" name="institucional" value="institucional"
                                    style="display: inline">
                                <label for="institucional"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">Institucional</label>
                            </div><br>
                            <label for="industrial"
                                style="font-family: Arial, Helvetica, sans-serif;     
                            font-size: 13px; padding-left:35px;">
                                <input type="checkbox" id="industrial" name="industrial" value="industrial"
                                    style="display: inline">Industrial</label>
                            <label for="industrial"
                                style="font-family: Arial, Helvetica, sans-serif;     
                            font-size: 13px; padding-left:20px;">
                                <input type="checkbox" id="industrial" name="industrial" value="industrial"
                                    style="display: inline">Otro, ??Cu??l?____</label>




                        </div>

                    </td>
                    <td style="width:50%">
                        <div style="padding: 5px; width:100%; clear:both; margin-top:-5px;">

                            <div class="left-div">
                                <input type="checkbox" id="igual_mayor" name="igual_mayor" value="igual_mayor"
                                    style="display: inline">
                                <label for="igual_mayor"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">Igual
                                    o Mayor a 2.000 m2</label>
                            </div>
                            <div class="right-div">
                                <input type="checkbox" id="suceptible_dosmil" name="suceptible_dosmil"
                                    value="suceptible_dosmil" style="display: inline">
                                <label for="suceptible_dosmil"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">Susceptible
                                    a alcanzar o superar los 2.000 m2</label>
                            </div>

                            <div class="center-div">
                                <input type="checkbox" id="menor_dosmil" name="menor_dosmil" value="menor_dosmil"
                                    style="display: inline">
                                <label for="menor_dosmil"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">Menor
                                    a 2.000 m2</label>
                            </div>
                        </div><br><br>


                    </td>
                </tr>

            </tbody>
        </table>

        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.8 TIPO DE VIVIENDA</span></td>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.9 BIEN DE INTER??S CULTURAL</span></td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <div style="padding: 5px; width:100%; clear:both;">

                            <div class="left-div">
                                <input type="checkbox" id="VIP" name="VIP" value="VIP"
                                    style="display: inline">
                                <label for="VIP"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">VIP</label>
                            </div>
                            <div class="right-div">
                                <input type="checkbox" id="NO_VIS" name="NO_VIS"
                                    value="NO_VIS" style="display: inline">
                                <label for="NO_VIS"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">No VIS</label>
                            </div>

                            <div class="center-div">
                                <input type="checkbox" id="VIS" name="VIS" value="VIS"
                                    style="display: inline">
                                <label for="VIS"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">VIS</label>
                            </div>
                        </div>
                       
                    </td>
                    <td style="width:50%">
                        <div style="padding: 5px; width:100%;text-align: center;">
                            
                                <div>
                                <input type="checkbox" id="interes_si" name="interes_si" value="interes_si"
                                    style="display:inline;margin-left:40px;">
                                <label for="interes_si"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">SI</label>                          
                                                     
                                <input type="checkbox" id="interes_no" name="interes_no"
                                    value="interes_no" style="display:inline;">
                                <label for="interes_no"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">NO</label>
                              </div>
                         
                            

                            
                        </div>


                    </td>
                </tr>

            </tbody>
        </table>

        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td colspan="2"  style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.10 REGLAMENTACI??N DE CONSTRUCCI??N SOSTENIBLE</td>
                </tr>
                <tr>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.10.1 DECLARACI??N SOBRE MEDIDAS DE CONSTRUCCI??N SOSTENIBLE</span></td>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.10.2 ZONIFICACI??N CLIM??TICA</span></td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <div style="padding: 5px; width:100%; clear:both;">

                            <div class="left-div">
                                <input type="checkbox" id="medidas_pasivas" name="medidas_pasivas" value="medidas_pasivas"
                                    style="display: inline">
                                <label for="medidas_pasivas"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">Medidas Pasivas</label>
                            </div>
                            <div class="right-div">
                                <input type="checkbox" id="medidas_acti_pasi" name="medidas_acti_pasi"
                                    value="medidas_acti_pasi" style="display: inline">
                                <label for="medidas_acti_pasi"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">Medidas Activas y Pasivas</label>
                            </div>

                            <div class="center-div">
                                <input type="checkbox" id="medidas_activas" name="medidas_activas" value="medidas_activas"
                                    style="display: inline">
                                <label for="medidas_activas"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">Medidas Activas</label>
                            </div>
                        </div><br>
                        <div style="padding: 5px; text-align:center">
                        <span class="type-normal">Al se??alar cualquiera de estas casillas, no implica la presentaci??n de documentos adicionales para el tr??mite de la licencia.</span>
                        </div>    
                    

                       
                    </td>
                    <td style="width:50%">
                        <div style="text-align:center; margin-top:-50px; display:block">
                            <span class="type-normal" style="margin-top: -25px;">Se??ale la zona Clim??tica asignada de acuerdo al Anexo 2 de la Res. 549 de 2015</span>
                        </div>
                        <div style="position: relative; display:block"> 
                            <div style="position: absolute; left:10px;"><input type="checkbox" id="frio" name="frio" value="frio" style="display: inline"> <label for="frio"style="font-family: Arial, Helvetica, sans-serif;     
                          font-size: 13px;">Frio</label></div> 
                            <div style="position: absolute; left:70px;"><input type="checkbox" id="templado" name="templado" value="templado" style="display: inline"> <label for="templado"style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 13px;">Templado</label></div>
                            <div style="position: absolute; left:150px;"><input type="checkbox" id="calido_seco" name="calido_seco" value="calido_seco" style="display: inline"> <label for="calido_seco"style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 13px;">C??lido seco</label></div> 
                            <div style="position: absolute; left:240px;"><input type="checkbox" id="calido_humedo" name="calido_humedo" value="calido_humedo" style="display: inline"> <label for="calido_humedo"style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 13px;">C??lido h??medo</label></div> 
                      
                        </div>


                    </td>
                </tr>

            </tbody>
        </table>


    </div>
    <div class="page-break"></div>
    <div class="contenedor">
        <table style="width: 100%;">
            <tbody>
                
                <tr>
                    <td style="text-align: center; width:50%"></td>
                    <td style="text-align: center; width:50%">
                        <div style="text-align:center;">
                            <span class="type-normal">??Su predio se encuentra en una zona clim??tica distinta a la que le fue asignada?</span>
                        </div>
                        <div style="width:100%; clear:none;">

                            <div class="left-div">
                                <input type="checkbox" id="ZONA_SI" name="ZONA_SI" value="ZONA_SI"
                                    style="display: inline">
                                <label for="ZONA_SI"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">SI</label>
                            </div>
                            <div class="right-div">
                                <label for="ZONA_NO"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">??Cual? ________</label>
                            </div>

                            <div class="center-div">
                                <input type="checkbox" id="ZONA_NO" name="ZONA_NO" value="ZONA_NO"
                                    style="display: inline">
                                <label for="ZONA_NO"
                                    style="font-family: Arial, Helvetica, sans-serif;     
                              font-size: 13px;">NO</label>
                            </div>
                        </div>
                    
                    </td>
                       
                </tr>
                
            </tbody>
        </table>       
        <table style="width: 100%;" border="2">
            <tbody>
                <tr class="bg-header">
                    <td colspan="2"><span class="sub-titulos">2. INFORMACI??N SOBRE EL PREDIO <br> &nbsp; <small>(Marcar con una X en la casilla correspondiente y llenar los espacios con letra imprenta)</small></span></td>
                </tr>
                <tr>
                    <td style="text-align: left; width:50%;max-width: 344px!important;">
                        <span class="titulos" style="padding-top: 0!important;">2.1 DIRECCI??N O NOMENCLATURA</span><br>
                        <span class="type-normal-cell" style="padding: 4px">ACTUAL:</span>
                        <div style="padding: 4px;">
                            <p class="type-p">
                              CARRERA 28 # 19-19 SAN ALONSO BUCARAMANGA 
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:50%;max-width: 344px!important;"><br>
                            <span class="type-normal-cell">ANTERIOR(ES):</span>
                            <div style="padding: 4px;">
                                <p class="type-p">
                                  CARRERA 8W # 62 -12 CONJUNTO RESIDENCIAL ARCORIS TORRE B-103 BARRIO MUTIS BUCARAMANGA
                                </p>
                            </div></td>
                </tr>
                <tr>
                    <td style="text-align: left; width:50%;max-width: 344px!important;"><span class="titulos">
                        2.2 No. MATR??CULA INMOBILIARIA</span>                       
                        <div style="padding: 4px;">
                            <p class="type-p">
                              12312312231231231
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:50%;max-width: 344px!important;">
                        <span class="titulos">
                            2.3 No. IDENTIFICACI??N CATASTRAL</span>
                            <div style="padding: 4px;">
                                <p class="type-p">
                                68012312312312312312
                                </p>
                            </div></td>
                </tr>             
            </tbody>
        </table>
        <table  style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td style="text-align: center; width:25%;max-width:122px!important;"><span class="titulos">
                        2.4 CLASIFICACI??N DEL SUELO</span>
                    
                    </td>
                    <td style="text-align: center; width:25%;max-width:122px!important;"><span class="titulos">
                        2.5 PLANIMETR??A DEL LOTE</span> </td></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span class="titulos" style="padding: 0!important;">
                        BARRIO O URBANIZACI??N</span><br>
                        <div style="padding: 4px;">
                            <p class="type-p">
                              SAN ALONSO
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:25%;max-width: 122px!important;"><span class="titulos" style="padding: 0!important;">
                        VEREDA</span>
                        <div style="padding: 4px;">
                            <p class="type-p">
                              NO REGISTRA
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3" style="text-align: left; width:25%;max-width:122px!important;"><div style="padding: 5px;">

                        <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="urbano">a. URBANO</label><input type="checkbox"
                                name="urbano" id="urbano" class="chk-inline-2-1"><br>
                        <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="rural">b. RURAL</label><input type="checkbox"
                                name="rural" id="rural" class="chk-inline-2-1"><br>
                        <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="expansion">c. DE EXPANSI??N</label><input type="checkbox"
                                name="expansion" id="expansion" class="chk-inline-2-1"><br>
                    </div></td>
                    <td rowspan="3" style="text-align: left; width:25%;max-width:122px!important;">
                        <div style="padding: 5px;">

                            <label style="font-family: Arial, Helvetica, sans-serif;     
                            font-size: 12px;"
                                    for="plano_loteo">a. Plano del Loteo</label><input type="checkbox"
                                    name="plano_loteo" id="plano_loteo" class="chk-inline-2-2-1"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                            font-size: 12px;"
                                    for="plano_topografico">b. Plano Topogr??fico</label><input type="checkbox"
                                    name="plano_topografico" id="plano_topografico" class="chk-inline-2-2-1"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                            font-size: 12px;"
                                    for="otro_plano">c. Otro</label><input type="checkbox"
                                    name="otro_plano" id="otro_plano" class="chk-inline-2-2-1"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                            font-size: 12px;"for="otro_plano">??Cu??l?___________________</label>
                            
                        </div>



                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span class="titulos" style="padding: 0!important;">
                        COMUNA</span>
                        <div style="padding: 4px;">
                            <p class="type-p">
                              COMUNA 12
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span class="titulos" style="padding: 0!important;">
                        SECTOR</span>
                        <div style="padding: 4px;">
                            <p class="type-p">
                              NO REGISTRA
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span class="titulos" style="padding: 0!important;">
                        ESTRATO</span>
                        <div style="padding: 4px;">
                            <p class="type-p">
                              NO REGISTRA
                            </p>
                        </div>
                    </td>
                    <td><span class="titulos" style="padding: 0!important;">
                        CORREGIMIENTO</span>
                        <div style="padding: 4px;">
                            <p class="type-p">
                              NO REGISTRA
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span class="titulos" style="padding: 0!important;">
                        MANZANA No.</span>
                        <div style="padding: 4px;">
                            <p class="type-p">
                              NO REGISTRA
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span class="titulos" style="padding: 0!important;">
                        LOTE No.</span>
                        <div style="padding: 4px;">
                            <p class="type-p">
                              NO REGISTRA
                            </p>
                        </div></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>
                <tr class="bg-header">
                    <td colspan="2"><span class="sub-titulos">3. INFORMACI??N DE VECINOS COLINDANTES</span></td>
                </tr>                            
            </tbody>
        </table>
        <table style="width: 100%;" border="3">
            <tbody>
                <tr>
                    <td rowspan="3" style="text-align:center; width:3%;max-width:10px!important;"><span class="number">1</span></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">NOMBRE</label><br></td>
                    <td rowspan="3" style="text-align:center; width:3%;max-width:10px!important;"><span class="number">2</span></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">NOMBRE</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DEL PREDIO</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DEL PREDIO</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DE CORRESPONDENCIA</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DE CORRESPONDENCIA</label></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="3">
            <tbody>
                <tr>
                    <td rowspan="3" style="text-align:center; width:3%;max-width:10px!important;"><span class="number">3</span></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">NOMBRE</label><br></td>
                    <td rowspan="3" style="text-align:center; width:3%;max-width:10px!important;"><span class="number">4</span></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">NOMBRE</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DEL PREDIO</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DEL PREDIO</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DE CORRESPONDENCIA</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DE CORRESPONDENCIA</label></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="3">
            <tbody>
                <tr>
                    <td rowspan="3" style="text-align:center; width:3%;max-width:10px!important;"><span class="number">5</span></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">NOMBRE</label><br></td>
                    <td rowspan="3" style="text-align:center; width:3%;max-width:10px!important;"><span class="number">6</span></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">NOMBRE</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DEL PREDIO</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DEL PREDIO</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DE CORRESPONDENCIA</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DE CORRESPONDENCIA</label></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="3">
            <tbody>
                <tr>
                    <td rowspan="3" style="text-align:center; width:3%;max-width:10px!important;"><span class="number">7</span></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">NOMBRE</label><br></td>
                    <td rowspan="3" style="text-align:center; width:3%;max-width:10px!important;"><span class="number">8</span></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">NOMBRE</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DEL PREDIO</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DEL PREDIO</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DE CORRESPONDENCIA</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCI??N DE CORRESPONDENCIA</label></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>
                <tr class="bg-header">
                    <td colspan="3"><span class="sub-titulos">4. LINDEROS, DIMENSIONES Y ??REAS</span></td>
                </tr> 
                <tr>
                   <td style="text-align: left; width:25%;max-width:122px!important;">
                    <span class="titulos">LINDEROS</span>
                  </td>
                   <td style="text-align: left; width:25%;max-width:122px!important;">
                    <span class="titulos">LONGITUD  <small>(Metros lineales)</small></span>
                  </td>
                   <td style="text-align: left; width:50%;max-width:244px!important;">
                    <span class="titulos">COLINDA CON <small></span>
                  </td>
                </tr> 
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span style="font-weight:bold;font-family:Arial, Helvetica, sans-serif;font-size:13px; padding-left:10px;">NORTE</span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"></td>

                </tr>                          
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>

                </tr>                          
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>

                </tr>                          
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>

                </tr>  
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span style="font-weight:bold;font-family:Arial, Helvetica, sans-serif;font-size:13px; padding-left:10px;">SUR</span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"></td>

                </tr>
                                      
            </tbody>
        </table>
        
    </div>
    <div class="page-break"></div>
    <div class="contenedor">
        <table style="width: 100%;" border="2">
            <tbody>                                 
               
                                       
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:15px"></td>

                </tr>                         
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:15px"></td>

                </tr>                         
                                       
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:15px"></td>

                </tr>  
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span style="font-weight:bold;font-family:Arial, Helvetica, sans-serif;font-size:13px; padding-left:10px;">ORIENTE</span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;"></td>

                </tr>
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:15px"></td>

                </tr>                         
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:15px"></td>

                </tr>                         
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:15px"></td>

                </tr>                         
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span style="font-weight:bold;font-family:Arial, Helvetica, sans-serif;font-size:13px; padding-left:10px;">OCCIDENTE</span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;"></td>

                </tr>
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:15px"></td>

                </tr>                         
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:15px"></td>

                </tr>                         
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;height:15px"></td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:15px"></td>

                </tr>   
                <tr>
                    <td style="text-align: center; width:50%;max-width:244px!important;height:25px;background: #bfbfbf;" colspan="2"><span style="font-weight:bold;font-family:Arial, Helvetica, sans-serif;font-size:14px;">??REA TOTAL DEL PREDIO(S)</span></td>
                    <td style="text-align: right; width:50%;max-width:244px!important;height:25px;background: #bfbfbf;"><span style="font-weight:bold;font-family:Arial, Helvetica, sans-serif;font-size:14px; padding-right:5px;">M2</span></td>
                </tr>                      
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>
                <tr class="bg-header">
                    <td colspan="3"><span class="sub-titulos">5. TITULARES Y PROFESIONALES RESPONSABLES</span></td>
                </tr> 
                <tr>
                    <td colspan="3" style="text-align: center"><p class="type-p" style="font-size: 14px;font-family:Arial, Helvetica, sans-serif">Los firmantes titulares y profesionales responsables declaramos bajo la gravedad del juramento que nos responsabilizamos totalmente por los estudios y documentos correspondientes presentados con este formulario y por la veracidad de los datos aqu?? consignados. As?? mismo, declaramos que conocemos las disposiciones vigentes que rigen la materia y las sanciones establecidas.</p></td>
                </tr>
            </tbody>
        </table>

        <table style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td style="text-align: center; width:25%;max-width:122px!important;">
                    <span class="titulos">TITULAR(ES) DE LA LICENCIA</span></td>
                    <td style="text-align: center; width:25%;max-width:122px!important;">
                        <span class="titulos">C.C. O NIT</span></td>
                    <td style="text-align: center; width:50%;max-width:244px!important;">
                        <span class="titulos">FIRMA (S)</span></td>

                </tr>                
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: center; width:25%;max-width:122px!important; height:30px">
                        <div style="padding: 4px;">
                            <p class="type-p">
                              OSCAR JULIAN RINCON VARGAS
                            </p>
                        </div>
                    </td>
                    <td style="text-align: center; width:25%;max-width:122px!important;height:40px"> <div style="padding: 4px;">
                        <p class="type-p">
                          1098719559
                        </p>
                    </div></td>
                    <td style="text-align: center; width:50%;max-width:244px!important;height:40px">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">TEL??FONO /CELULAR</span>
                        <div style="padding: 2px;">
                            <p class="type-p">
                              3168706182
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO:</span>
                        <div style="padding: 2px;">
                            <p class="type-p">
                              julianrincon9230@gmail.com
                            </p>
                        </div></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: center; width:25%;max-width:122px!important; height:30px">
                        <div style="padding: 4px;">
                            <p class="type-p">
                              ANDREA LIZETH MU??OZ LARROTA
                            </p>
                        </div>
                    </td>
                    <td style="text-align: center; width:25%;max-width:122px!important;height:40px"> <div style="padding: 4px;">
                        <p class="type-p">
                          1098699832
                        </p>
                    </div></td>
                    <td style="text-align: center; width:50%;max-width:244px!important;height:40px">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">TEL??FONO /CELULAR</span>
                        <div style="padding: 2px;">
                            <p class="type-p">
                              31768012312
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO:</span>
                        <div style="padding: 2px;">
                            <p class="type-p">
                              andreawzoe@gmail.com
                            </p>
                        </div></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: center; width:25%;max-width:122px!important; height:30px">
                        <div style="padding: 4px;">
                            <p class="type-p">
                             
                            </p>
                        </div>
                    </td>
                    <td style="text-align: center; width:25%;max-width:122px!important;height:40px"> <div style="padding: 4px;">
                        <p class="type-p">                        
                        </p>
                    </div></td>
                    <td style="text-align: center; width:50%;max-width:244px!important;height:40px">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">TEL??FONO /CELULAR</span>
                        <div style="padding: 2px;">
                            <p class="type-p">                              
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO:</span>
                        <div style="padding: 2px;">
                            <p class="type-p">                            
                            </p>
                        </div></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: center; width:25%;max-width:122px!important; height:30px">
                        <div style="padding: 4px;">
                            <p class="type-p">                            
                            </p>
                        </div>
                    </td>
                    <td style="text-align: center; width:25%;max-width:122px!important;height:40px"> <div style="padding: 4px;">
                        <p class="type-p">                    
                        </p>
                    </div></td>
                    <td style="text-align: center; width:50%;max-width:244px!important;height:40px">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left; width:25%;max-width:122px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">TEL??FONO /CELULAR</span>
                        <div style="padding: 2px;">
                            <p class="type-p">                           
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO:</span>
                        <div style="padding: 2px;">
                            <p class="type-p">                           
                            </p>
                        </div></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td colspan="4" style="text-align: center;">
                        <span style="font-size:14px;font-weight:bold;font-family:Arial, Helvetica, sans-serif">PROFESIONALES RESPONSABLES</span>                        
                    </td>                   
                </tr>             
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: left; width:25%;max-width:122px!important; height:40px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">URBANIZADOR O CONSTRUCTOR RESPONSABLE <small>(Experiencia m??nima 3 a??os)</small></span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                1098719559                             
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N?? MATRICULA PROFESIONAL</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                123123123-1231FS                             
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">FIRMA
                            <div style="padding: 2px;">
                                <p class="type-p"> 
                                                              
                                </p>
                            </div>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left; width:75%;max-width:366px!important; height:30px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                               arquitecto@gmail.com                           
                            </p>
                        </div>
                    
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="page-break"></div>
    <div class="contenedor">
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: left; width:25%;max-width:122px!important; height:40px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">ARQUITECTO PROYECTISTA <small>(Sin requisitos de experiencia m??nima)</small></span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                1098719559                             
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N?? MATRICULA PROFESIONAL</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                123123123-1231FS                             
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">FIRMA
                            <div style="padding: 2px;">
                                <p class="type-p"> 
                                                              
                                </p>
                            </div>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left; width:75%;max-width:366px!important; height:30px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                               arquitecto@gmail.com                           
                            </p>
                        </div>
                    
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: left; width:25%;max-width:122px!important; height:40px"> <span class="type-normal-cell" style="padding: 2px;font-weight:bold">INGENIERO CIVIL ESTRUCTURAL <small>(Experiencia m??nima 5 a??os o especializaci??n)</small></span></td>
                    <td  style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                277900083                             
                            </p>
                        </div></td>
                    <td  style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N?? MATRICULA PROFESIONAL</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                123123123-1231FS                             
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:12.5%;max-width:61px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">FIRMA
                            <div style="padding: 2px;">
                                <p class="type-p"> 
                                                              
                                </p>
                            </div>
                        </span>
                    </td>
                    <td style="text-align: center; width:12.5%;max-width:61px!important; height:60px">
                        <p class="type-p">
                            Se hace necesaria la Supervisi??n T??cnica
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left; width:62.5%;max-width:305px!important; height:40px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                               ingeniero@gmail.com                           
                            </p>
                        </div>
                    </td>
                    <td style="text-align: center; width:12.5%;max-width:61px!important; height:40px;">
                          
                    <span style="display: inline-block; margin-top:8px"><input type="checkbox" id="si_supervision" name="si_supervision"><br>Si </span>              
               
                       
                     <span style="display: inline-block; margin-top:8px"> <input type="checkbox" id="no_supervision" name="no_supervision" value="one"><br>No</span>
               
           
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: left; width:25%;max-width:122px!important; height:40px"> <span class="type-normal-cell" style="padding: 2px;font-weight:bold">INGENIERO CIVIL
                        GEOTECNISTA  <small>(Experiencia m??nima 5 a??os o especializaci??n)</small></span></td>
                    <td  style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                1098719559                             
                            </p>
                        </div></td>
                    <td  style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N?? MATRICULA PROFESIONAL</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                123123123-1231FS                             
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:12.5%;max-width:61px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">FIRMA
                            <div style="padding: 2px;">
                                <p class="type-p"> 
                                                              
                                </p>
                            </div>
                        </span>
                    </td>
                    <td style="text-align: center; width:12.5%;max-width:61px!important; height:60px">
                        <p class="type-p">
                            Se hace necesaria la Supervisi??n T??cnica
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left; width:62.5%;max-width:305px!important; height:40px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                               ingeniero-geotecnista@gmail.com                           
                            </p>
                        </div>
                    </td>
                    <td style="text-align: center; width:12.5%;max-width:61px!important; height:40px;">
                          
                    <span style="display: inline-block; margin-top:8px"><input type="checkbox" id="si_supervision" name="si_supervision"><br>Si </span>              
               
                       
                     <span style="display: inline-block; margin-top:8px"> <input type="checkbox" id="no_supervision" name="no_supervision" value="one"><br>No</span>
               
           
                    </td>
                </tr>
            </tbody>
        </table>
        
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: left; width:25%;max-width:122px!important; height:40px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">DISE??ADOR DE ELEMENTOS NO ESTRUCTURALES <small>(Experiencia m??nima 3 a??os)</small></span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                1098719559                             
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N?? MATRICULA PROFESIONAL</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                123123123-1231FS                             
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">FIRMA
                            <div style="padding: 2px;">
                                <p class="type-p"> 
                                                              
                                </p>
                            </div>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left; width:75%;max-width:366px!important; height:30px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                                  
                            </p>
                        </div>
                    
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: left; width:25%;max-width:122px!important; height:40px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">REVISOR DE LOS DISE??OS ESTRUCTURALES <small>(Experiencia m??nima 5 a??os)</small></span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                                        
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N?? MATRICULA PROFESIONAL</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                                           
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">FIRMA
                            <div style="padding: 2px;">
                                <p class="type-p"> 
                                                              
                                </p>
                            </div>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left; width:75%;max-width:366px!important; height:30px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                                  
                            </p>
                        </div>
                    
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align: left; width:25%;max-width:122px!important; height:40px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">OTROS PROFESIONALES ESPECIALISTAS</span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                                        
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N?? MATRICULA PROFESIONAL</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                                           
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">FIRMA
                            <div style="padding: 2px;">
                                <p class="type-p"> 
                                                              
                                </p>
                            </div>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left; width:75%;max-width:366px!important; height:30px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                                  
                            </p>
                        </div>
                    
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:30px;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">NOMBRE RESPONSABLE DE LA SOLICITUD</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                              LUZ MARINA VARGAS CA??AS                           
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:30px;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">TELEFONO (S)</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                              3003218560                          
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:30px;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">DIRECCI??N PARA CORRESPONDENCIA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                              CARRERA 8W 62-12 MUTIS EDIFICIO SAN MARTIN APTO 304                      
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:30px;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTR??NICO (S)</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                              julianrincon9230@gmail.com                          
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="page-break"></div>
    <div class="contenedor">
        <table style="width: 100%;" border="2">
            <tbody>
                <tr class="bg-header">
                    <td colspan="4" style="text-align:center">
                        <span class="sub-titulos">6. DOCUMENTOS QUE ACOMPA??AN LA SOLICITUD.</span><br>
                        <span class="sub-titulos" style="font-size:12px;font-style: italic;
                        ">(Marcar con una X en la casilla de la izquierda)</span>
                    </td>
                </tr> 
                <tr>
                    <td colspan="4" style="text-align: left;background:#bfbfbf"><span class="titulos" style="padding: 3px;font-size:12px;">6.1 DOCUMENTOS COMUNES A TODA SOLICITUD</span> &nbsp;&nbsp; <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif, Geneva, Tahoma, sans-serif;font-weight:bold">*Los requisitos con asteriscos no se exigir??n cuando se puedan consultar por medios electr??nicos.</span></td>
                </tr>
            </tbody>
        </table>  
        <table style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number">X</span>
                    </td>
                    <td style="text-align:justify; width:20%;max-width:112px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">A. Copia del Certificado de tradici??n y libertad del inmueble o
                        inmuebles objeto de la solicitud, cuya expedici??n no sea superior a un mes antes de la fecha de la solicitud. Cuando el
                        predio no se haya desenglobado se podr?? aportar el certificado del predio de mayor extensi??n.</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number">X</span>
                    </td>
                    <td style="text-align:justify; width:20%;max-width:112px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">C. Poder especial debidamente otorgado, ante notario o juez
                        de la rep??blica, cuando se act??e mediante apoderado o mandatario, con la correspondiente presentaci??n personal.</p>
                    </td>
                    
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number">X</span>
                    </td>
                    <td style="text-align:justify; width:20%;max-width:112px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">B.El formulario ??nico nacional para la solicitud de licencias
                        debidamente diligenciado por el solicitante.</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number">X</span>
                    </td>
                    <td style="text-align:justify; width:20%;max-width:112px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">D. Copia del documento o declaraci??n privada del impuesto
                        predial del ??ltimo a??o en relaci??n con el inmueble o inmuebles objeto de la solicitud, donde figure la nomenclatura
                        alfanum??rica o identificaci??n del predio. Este requisito no se exigir?? cuando exista otro documento oficial con base en el
                        cual se pueda establecer la direcci??n del predio o predios objeto de solicitud.</p>
                    </td>
                    
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">E. Copia del documento de identidad del solicitante cuando se trate de personas naturales o certificado de existencia y representaci??n
                            legal, cuya fecha no sea superior a un mes, cuando se trate de personas jur??dicas</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">F.La relaci??n de la direcci??n de lo predios colindantes al proyecto objeto de la solicitud. Se entiende por predio colindante aquellos que
                            tienen un lindero com??n con el inmueble o inmuebles objeto de solicitud de licencia. Este requisito no se exigir?? cuando se trate de
                            predios rodeados completamente por espacio p??blico o ubicado en zonas rurales no suburbanas.</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">G.Copia de matr??cula profesional de los profesionales intervinientes en el tr??mite de licencia urban??stica y copia de las certificaciones
                            que acrediten su idoneidad y experiencia.</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">A las solicitudes de licencia de intervenci??n y ocupaci??n del espacio p??blico solo se les exigir?? el aporte de los documentos de que
                            tratan los numerales 3 y 4 del art??culo 2.2.6.1.2.1.7 del Decreto 1077 de 2015.</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">A las solicitudes de Revalidaci??n solamente se les exigir??n los documentos de que tratan los numerales 1,2, 3,4 y 6 del art??culo
                            2.2.6.1.2.1.7 del Decreto 1077 de 2015, no estar??n sometidas al procedimiento de expedici??n de licencia y deber??n resolverse en un
                            t??rmino m??ximo de 30 d??as h??biles contados a partir de la radicaci??n de la solicitud en legal y debida forma.
                            </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">En las ciudades, donde existan medios tecnol??gicos disponibles de consulta virtual o flujos de informaci??n electr??nica, el curador
                            urbano o la autoridad municipal o distrital encargada del estudio, tr??mite y expedici??n de las licencias estar??n en la obligaci??n de
                            verificar por estos mismos medio, al momento de la radicaci??n de la solicitud, la informaci??n pertinente contenida en los documentos
                            de que tratan los numerales 1,3 y 5 del art??culo 2.2.6.1.2.1.7 del Decreto 1077 de 2015.Esta consulta de verificaci??n sustituye la
                            presentaci??n del documento a cargo del solicitante de la licencia, salvo que la informaci??n correspondiente no se encuentre disponible
                            por medios electr??nicos. </p>
                    </td>
                </tr>
            </tbody>

        </table>
        <table style="width: 100%;" border="2">
            <tbody>                
                <tr>
                    <td  colspan="4" style="text-align: left;background:#bfbfbf"><span class="titulos" style="padding: 3px;font-size:12px;">6.2 DOCUMENTOS ADICIONALES EN LICENCIA DE URBANIZACI??N</span> </td>
                </tr>
            </tbody>
        </table> 
        <table style="width: 100%;" border="2">
            <tbody>                
                <tr>
                    <td style="text-align: left;width:33%;max-width:163px;"><span class="titulos" style="padding: 3px;font-size:12px;">A. Modalidad Desarrollo </span> </td>
                    <td style="text-align: left;width:33%;max-width:163px;"><span class="titulos" style="padding: 3px;font-size:12px;">B. Modalidad Saneamiento </span> </td>
                    <td style="text-align: left;width:33%;max-width:163px;"><span class="titulos" style="padding: 3px;font-size:12px;">C. Modalidad Reurbanizaci??n
                    </span> </td>
                </tr>
            </tbody>
        </table> 
        <table style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30%;max-width:150px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">Plano topogr??fico del Predio, predios o
                        parte del predio objeto de la solicitud, firmado por el o los profesionales responsables, en el cual se indique el ??rea, los linderos y todas las reservas,
                        incluyendo, entre otras, ??reas de amenaza, arbolado urbano, secciones
                        viales, afectaciones, incluyendo l??neas de  alta tensi??n y redes de servicios p??blicos
                        domiciliarios, con limitaciones urban??sticas debidamente amojonadas y con indicaci??n de coordenadas, el cual servir?? de base para la presentaci??n del proyecto y ser?? elaborado de
                        conformidad con lo definido en el Plan de Ordenamiento Territorial, los instrumentos que lo desarrollen, y complementen y dem??s informaci??n p??blica disponible</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30%;max-width:150px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">Copia de licencias de urbanizaci??n, sus
                        modificaciones y revalidaciones junto con
                        los planos urban??sticos aprobados con los
                        que se ejecut?? el 80% de la urbanizaci??n.</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30%;max-width:150px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">Copia de licencias de urbanizaci??n, sus
                        modificaciones y revalidaciones junto con  los planos urban??sticos aprobados o los
                        actos de legalizaci??n junto con los planos aprobados. </p>
                    </td>
                    
                    
                </tr>
                
            </tbody>

        </table>
    </div>
        <div class="page-break"></div>
    <div class="contenedor">
            <table style="width: 100%;" border="2">
                <tbody>
                    <tr>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano de proyecto urban??stico
                            debidamente firmado por arquitecto con
                            matr??cula profesional quien es el
                            responsable del dise??o</p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:11px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano de proyecto urban??stico,
                            debidamente , debidamente firmado por un arquitecto con matr??cula profesional
                            quien es el responsable del dise??o en el cual se identifique la parte de la
                            urbanizaci??n ejecutada y la parte de la urbanizaci??n objeto de esta licencia, en el
                            cuadro de ??reas en el que se diferencie lo ejecutado y lo que se desarrollar??.
                            .</p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano del nuevo proyecto urban??stico
                            debidamente firmado por un arquitecto con matr??cula profesional vigente quien es
                            el responsable del dise??o en el cual se  identifique con claridad la nueva       conformaci??n de ??reas p??blicas y privadas. En el nuevo proyecto
                            urban??stico se podr??n redistribuir las  ??reas p??blicas existentes garantizando en
                            todo caso que se cumplan con las nuevas  exigencias de cesi??n y que en ning??n caso
                            dichas ??reas sean inferiores a las  aprobadas en la licencia o en el acto de
                            legalizaci??n con el cual se desarroll?? el  predio que se pretende reurbanizar.
                            Igualmente se podr??n incluir predios utilizados como servidumbres de uso
                            p??blico que est??n en dominio privado con el objeto de localizar all?? ??reas de cesi??n y
                            formalizar su entrega y escrituraci??n a los municipios y distritos y predios o ??reas
                            cuya sumatoria no excede de 2.000m2 que por su tama??o no son aptos para que
                            se expida licencia de urbanizaci??n en la modalidad de desarrollo.</p>
                        </td>
                        
                        
                    </tr>
                    
                </tbody>
    
            </table>
            <table style="width: 100%;" border="2">
                <tbody>
                    <tr>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Certificaci??n expedida por las empresas
                            de servicio p??blicos domiciliarios, o autoridad municipal competentes, acerca
                            de la disponibilidad inmediata de servicios p??blicos en el predio o predios
                            objeto de la licencia, dentro del t??rmino de vigencia de la licencia. La
                            disponibilidad inmediata de servicios p??blicos es la viabilidad t??cnica de
                            conectar el predio o predios objeto de la licencia de urbanizaci??n a las redes
                            matrices de servicios p??blicos existentes.Los urbanizadores podr??n asumir el costo
                            de las conexiones a las redes matrices que sean necesarias para dotar el
                            proyecto con servicios, de conformidad con lo previsto en la Ley 142 de 1994 y
                            las normas que lo adicionen, modifiquen o sustituyan. </p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Copia de solicitud de entrega y/o de
                            cesi??n de zonas p??blicas presentada ante las dependencias municipales o distritales
                            competentes.
                            
                            .</p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano Topogr??fico con el cual se tramit??
                            licencia o el acto de legalizaci??n del ??rea objeto de reurbanizaci??n. En caso de que
                            existan planos topogr??ficos posteriores que los modificaron se aportar??n ??stos
                            ??ltimos. En el evento que no exista ning??n plano topogr??fico las reservas y
                            afectaciones del nuevo proyecto se definir??n con fundamento en los planos
                            urban??sticos o de legalizaci??n con los cuales se aprob?? la urbanizaci??n o la
                            legalizaci??n, sin perjuicio de la posibilidad de adelantar la redistribuci??n de las zonas
                            de uso p??blico .</p>
                        </td>
                        
                        
                    </tr>
                    
                </tbody>
    
            </table>
            <table style="width: 100%;" border="2">
                <tbody>
                    <tr>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:10px;">Cuando el predio est?? ubicado en zonas
                            de amenaza y/o riesgo alto y medio de origen geot??cnico o hidrol??gico, adjuntar
                            los estudios detallados de amenaza y riesgo por fen??menos de remoci??n en
                            masa e inundaciones, que permitan determinar la viabilidad del futuro
                            desarrollo, siempre y cuando se garantice  la mitigaci??n de la amenaza y/o riesgo
                            En estos estudios deber?? incluirse el  dise??o de las medidas de mitigaci??n y
                            ser??n elaborados y firmados por  profesionales id??neos en las materias,
                            quienes conjuntamente con el   urbanizador ser??n responsables de los
                            mismos, sin perjuicio de la  responsabilidad por la correcta ejecuci??n
                            de las obras de mitigaci??n. En todo caso las obras de mitigaci??n deber??n ser
                            ejecutadas por el urbanizador responsable, o en su defecto, por el
                            titular, durante la vigencia de la licencia. </p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Certificaci??n suscrita por el solicitante de la licencia en la que manifieste bajo la gravedad de juramento que la  urbanizaci??n para la cual solicita esta licencia est?? ejecutada como m??nimo el  80% del total de las ??reas de cesi??n
                            p??blica aprobada en la licencia de  urbanizaci??n.                         
                            </p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:11px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Cuando el predio est?? ubicado en zonas
                            de amenaza y/o riesgo alto y medio de   origen geot??cnico o hidrol??gico, se
                            deber??n adjuntar los estudios de que  trata el literal (d) del numeral 1 del
                            art??culo 2.2.6.1.2.1.8 del Decreto 1077 de  2015
                            </p>
                        </td>
                        
                        
                    </tr>
                    
                </tbody>
    
            </table>
    </div>
    <div class="page-break"></div>
    <div class="contenedor">
        <table style="width: 100%;" border="2">
            <tbody>                
                <tr>
                    <td style="text-align: center;width:33%;max-width:163px;background:#bfbfbf;"><span class="titulos" style="padding: 3px;font-size:12px;">6.3 DOCUMENTOS ADICIONALES
                        LICENCIA DE PARCELACION</span> </td>
                    <td style="text-align: center;width:33%;max-width:163px;background:#bfbfbf;"><span class="titulos" style="padding: 3px;font-size:12px;">6.4 DOCUMENTOS ADICIONALES
                        LICENCIA DE SUBDIVISI??N</span> </td>
                    <td style="text-align: center;width:33%;max-width:163px;background:#bfbfbf;"><span class="titulos" style="padding: 3px;font-size:12px;">6.5 DOCUMENTOS RECONOCIMIENTO
                        EDIFICACIONES</span> </td>
                </tr>
            </tbody>
        </table> 
        <table style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number">X</span>
                    </td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano topogr??fico del predio(s) objeto de
                            la solicitud, Firmado por profesional responsable
                        </p>
                    </td>
                    <td colspan="2" style="text-align: left;width:33.3%;max-width:163px;">
                        <span class="titulos" style="padding: 3px;font-size:12px;">A. Modalidad Subdivisi??n Urbana y Rural </span>
                    </td>
                    <td rowspan="2" style="text-align:center; width:3%;max-width:10px!important;"><span class="number">X</span></td>
                    <td rowspan="2"  style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano de levantamiento arquitect??nico de
                            la construcci??n existente firmados por  arquitecto responsable. 
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span></td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano del proyecto de parcelaci??n
                            debidamente firmado por arquitecto y el solicitante de la licencia.
                        </p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano del levantamiento topogr??fico el
                            antes y despu??s de la subdivisi??n.
                        </p>
                    </td>
                   
                </tr>
                
            </tbody>
        </table>       

        <table style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Copias de las autorizaciones que
                            sustentan la prestaci??n de los servicios    de agua potable, saneamiento b??sico y
                            dem??s autorizaciones ambientales
                        </p>
                    </td>
                    <td style="text-align: left;width:33.3%;max-width:163px;">
                        <span class="titulos" style="padding: 3px;font-size:12px;">B. Modalidad Reloteo </span>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;"><span class="number"></span></td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Declaraci??n de la antig??edad de la
                            construcci??n, que se entiende bajo la gravedad de juramento (5 a??os m??nimos). 
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td rowspan="2" style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td rowspan="2" style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Estudios detallados de amenaza y riesgo
                            por fen??meno de remoci??n en masa e inundaciones ambientales que se??alen
                            las medidas de mitigaci??n de riesgos, en predios ubicados en zonas de amenaza
                            y/o riesgo alto y medio de origen geot??cnico o hidrol??gico y permitan la
                            viabilidad de futuros desarrollos.
                        </p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;"><p class="type-p" style="padding: 2px;font-size:11px;">Plano de loteo aprobado o plano
                        topogr??fico aprobado que haya  incorporado urban??sticamente el predio
                    </p></td>
                    <td rowspan="2" style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td rowspan="2" style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Copia del peritaje t??cnico que determine
                            la estabilidad de la construcci??n y  propuesta para las intervenciones y obras
                            a realizar (firmado por profesional matriculado y facultado).
                            
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;"><p class="type-p" style="padding: 2px;font-size:11px;">Plano que se??ale los predios resultantes
                        de la divisi??n propuesta, debidamente amojonado y alinderado. </p></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>                
                <tr>
                    <td colspan="6" style="text-align: left;background:#bfbfbf"><span class="titulos" style="padding: 3px;font-size:12px;">6.6 DOCUMENTOS ADICIONALES EN LICENCIA DE CONSTRUCCI??N</span> <br> <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif, Geneva, Tahoma, sans-serif;font-weight:bold">* Los requisitos con asterisco deben presentarse firmados y rotulados por profesional id??neo</span></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30%;max-width:150px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;"><b>Proyecto Estructural:</b><br>
                        Copia de memoria de los c??lculos estructurales*</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30%;max-width:150px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">Copias de Memoria de dise??o de los
                        elementos no estructurales*
                        
                        .</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number">X</span>
                    </td>
                    <td style="text-align:justify; width:30%;max-width:150px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">Copia de los estudios geot??cnicos y de
                        suelos*</p>
                    </td>
                    
                    
                </tr>
               
                
            </tbody>

        </table>
        <table  style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Copia de los planos estructurales del proyecto*<br>
                            (Para las solicitudes de licencia clasificadas bajo las categor??as I Baja Complejidad y II Media Complejidad dise??ada de acuerdo a lo
                            dispuesto en T??tulo E Reglamento colombiano de Construcci??n Sismo resistente -NSR-10 y la norma que lo adicione, modifique o
                            sustituya, solo se requiere copia los Planos estructurales del Proyecto*)
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;"><b><u>Proyecto Arquitect??nico:</u></b><br>
                            Copia en medio impreso del proyecto arquitect??nico*
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Licencias anteriores y planos cuando la solicitud se presenta ante autoridad distinta a la que otorg?? la licencia original, excepto para obra nueva. </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;"><b><u>Revisi??n T??cnica:</u></b>
                            Memorial certificando el alcance de la revisi??n, en cumplimiento de las normas de sismo-resistencia y sus decretos reglamentarios (Cuando el ??rea construida es mayor o igual a 2.000 m2)(Art. 15, Ley 400 de 2016).
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;"><b><u>Bien de Inter??s Cultural:</u></b>
                            Anteproyecto aprobado por el Ministerio de Cultura o la entidad competente. En intervenciones sobre patrimonio arqueol??gico, autorizaci??n expedida por la entidad competente.
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;"><b><u>Propiedad Horizontal:</u></b>
                            Copia del acta del ??rgano competente de administraci??n de la propiedad horizontal o del documento que haga sus veces, seg??n lo disponga el reglamento, autorizando la ejecuci??n de las obras ampliaci??n, adecuaci??n, modificaci??n, reforzamiento estructural, o demolici??n de inmuebles sometidos al r??gimen de propiedad horizontal.
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;"><b><u>Reforzamiento Estructural para edificaciones en riesgo por da??os en la estructura:</u></b>
                            (Art. 2.2.6.1.2.1.1. Decreto 1077 de 2015 modificado por el Decreto 1547 de 2015) Concepto t??cnico expedido por la autoridad municipal o distrital encargada de la gesti??n del riesgo u
                            orden judicial o administrativa que ordene reforzar el inmueble.
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">
                            Para las solicitudes de licencia clasificadas bajo las categor??as II Media Complejidad, que tengan 2.000m2 de ??rea construida, III Media Alta Complejidad y IV Alta Complejidad, de que trata el art??culo 2.2.6.1.2.1.4 del presente decreto, deber??n allegar copia de la memoria de los c??lculos y planos estructurales, firmados por el revisor independiente de los dise??os estructurales, copia del memorial de revisi??n independiente de los dise??os estructurales, de las memorias de dise??o de los elementos no estructurales y de estudios geot??cnicos y de suelos que sirvan para determinar el cumplimiento en estos aspectos del Reglamento Colombiano de Construcci??n Sismo resistente-NSR 10, y la norma que lo adicione, modifique o sustituya, firmados y rotulados por los profesionales facultados para este fin, quienes se har??n responsables legalmente de los dise??os y estudios, as?? como de la informaci??n contenida en ellos
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">
                            Para las solicitudes de licencia clasificados bajo las categor??as II Media Complejidad, que tengan menos de 2.000m2 de ??rea construida, y Baja Complejidad de que trata el art??culo 2.2.6.1.2.1.4 del Decreto 1077 de 2015, se alegar?? copia de los planos estructurales del proyecto firmados y rotulados por el profesional que los elabor??
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">
                            Para las solicitudes de licencias de construcci??n que no alcancen los 2.000m2 de ??rea construida y se exija supervisi??n t??cnica independiente por parte del dise??ador estructural o ingeniero geotecnista, deber?? allegarse memorial de la revisi??n independiente de los dise??os estructurales, siendo obligaci??n del revisor independiente firmar los planos y dem??s documentos t??cnicos como constancia de haber efectuado la revisi??n
                             </p>
                    </td>
                </tr>
                               
              
            </tbody>

        </table>

        
    </div>
    <div class="page-break"></div>
    <div class="contenedor">
        <table  style="width: 100%;" border="2">
            <tbody>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">
                            Una copia en medio impreso del proyecto arquitect??nico, elaborado de conformidad con las normas urban??sticas y de edificabilidad vigentes al momento de la solicitud debidamente rotulado y firmado por un arquitecto con matr??cula profesional, quien se har?? responsable legalmente de los dise??os y de la informaci??n contenida en ellos. Los planos arquitect??nicos deben contener como m??nimo la siguiente informaci??n: (i)Localizaci??n, (ii)Plantas, (iii)Alzados o cortes de la edificaci??n relacionados con la v??a p??blica o privada a escala formal. Cuando el proyecto est?? localizado en suelo inclinado, los cortes deber??n indicar la inclinaci??n real del terreno, (iv)Fachadas, (v)Plantas de Cubiertas, (vi)Cuadro de ??reas
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">
                            Si la solicitud de licencia se presenta ante autoridad distinta a la que otorg?? la licencia original, se adjuntar??n las licencias anteriores, o el instrumento que hiciere sus veces junto con sus respectivos planos. Cuando estas no existan, se deber?? gestionar el reconocimiento de la existencia de edificaciones regulado por el Cap??tulo 4 del T??tulo 6 del presente decreto .Esta disposici??n no ser?? aplicable trat??ndose de solicitudes de licencia de construcci??n en la modalidad de obra nueva.
                             </p>
                    </td>
                </tr>
              
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Anteproyecto aprobado por el Ministerio de Cultura si se trata de bienes de inter??s cultural del ??mbito nacional o por la entidad competente si se trata de bienes de inter??s cultural de car??cter departamental, municipal o distrital cuando el objeto de la licencia sea la intervenci??n de un bien de inter??s cultural, en los t??rminos que se definen en las Leyes 397 de 1997 y 1185 de 2008 y el Decreto ??nico del sector Cultura.
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Cuando se trate de licencias para la ampliaci??n, adecuaci??n, modificaci??n, reforzamiento estructural o demolici??n de inmuebles sometidos al r??gimen de propiedad horizontal, copia del acta u ??rgano competente que haga sus veces, seg??n lo disponga el respectivo reglamento de
                            propiedad horizontal vigente, autorizando la ejecuci??n de las obras solicitadas, Estas licencias deber??n acoger lo establecido en los respectivos reglamentos
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Cuando se trate de licencia de construcci??n en la modalidad de obra nueva para el desarrollo de equipamientos en suelo objeto de cesiones anticipadas en los t??rminos del art??culo 2.2.6.1.4.8 del Decreto 1077 de 2015, deber?? adjuntar la certificaci??n expedida por los prestadores de servicios p??blicos en la que conste que el predio cuenta con disponibilidad inmediata de servicios p??blicos. Adem??s se debe presentar la informaci??n que soporte el acceso directo al predio objeto de cesi??n desde una v??a p??blica vehicular en las condiciones de la norma urban??stica correspondiente.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>                
                <tr>
                    <td colspan="2" style="text-align: left;background:#bfbfbf"><span class="titulos" style="padding: 3px;font-size:12px;">6.7 DOCUMENTOS PARA LA MODIFICACION DE LICENCIAS VIGENTES DE URBANIZACION, CONSTRUCCION, SUBDIVISION Y PARCELACION
                        </span> <br> <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif, Geneva, Tahoma, sans-serif;font-weight:bold">* Los requisitos con asterisco deben presentarse firmados y rotulados por profesional id??neo</span></td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Para las solicitudes de licencia vigente de urbanizaci??n, construcci??n, subdivisi??n y parcelaci??n se acompa??ar??n de los documentos a que hacen referencia los numerales 1. 2, 3 y 4 del art??culo 2.2.6.1.2.1.7 del Decreto 1077 de 2015.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Cuando la solicitud de modificaci??n sea de licencias de intervenci??n y ocupaci??n del espacio p??blico vigente, solo se acompa??ar??n los
                            documentos exigido en los numerales 3 y 4 del mismo art??culo 2.2.6.1.2.1.7 del Decreto 1077 de 2015.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">
                            A la solicitud de modificaci??n de las licencias de urbanizaci??n y parcelaci??n vigentes, adicionalmente se acompa??ar?? el proyecto arquitect??nico ajustado con los requisitos indicados en el numeral 4 del art??culo 2.2.6.1.2.1.11 del Decreto 1077 de 2015,. Si la modificaci??n conlleva ajustes al proyecto estructural se aplicar??, seg??n el caso, lo previsto en los numerales 1,2 y 3 del art??culo 2.2.6.1.2.1.11 del Decreto 1077 de 2015.

                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">En todos los casos deber?? garantizarse la correspondencia entre los proyectos estructurales y arquitect??nicos.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Si la solicitud de modificaci??n de la licencia se presenta ante una autoridad distinta a la que otorg?? la licencia original, se adjuntar??n las licencias anteriores, o el instrumento que haga sus veces junto con los respectivos planos.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">En las ciudades en donde existan los medios tecnol??gicos disponibles de consulta virtual o flujos de informaci??n electr??nica, los curadores urbanos o la autoridad municipal o distrital competente para el estudio, tr??mite y expedici??n de las licencias estar??n en la obligaci??n de verificar por estos mismos medios, al momento de la radicaci??n de la solicitud, la informaci??n pertinente contenida en los documentos de que tratan los numerales 1 y 3 del art??culo 2.2.6.1.2.1.7 del Decreto 1077 de 2015.Esta consulta de verificaci??n sustituye la presentaci??n del documento a cargo del solicitante de la licencia, salvo que la informaci??n correspondiente no se encuentre disponible por medios electr??nicos.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
    <small class="text-final">*Todos los planos y estudios especializados deben ir debidamente rotulados y firmados por profesional id??neo de acuerdo con el T??tulo VI ??? Ley 400 de 1997</small>

   


   




    <script type="text/php">if (isset($pdf))
        {
            $x = 548;
            $y = 120;            
            $text = "{PAGE_NUM}";
            $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "bold");
            $size = 14;
            $color = array(0,0,0);
            $word_space = 0.0;  //  default
            $char_space = 0.0;  //  default
            $angle = 0.0;   //  default
            $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        }</script>

</body>

</html>
