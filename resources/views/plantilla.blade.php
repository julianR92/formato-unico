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
                    <td style="width: 70%; padding:10px"><span class="titulos">FORMULARIO ÚNICO NACIONAL</span></td>
                    <td style="text-align: right;"><span class="titulos"
                            style="text-align: right; margin-right:5px;">PÁGINA</span></td>
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
                        <span class="type-normal">USO EXCLUSIVO CURADORES URBANOS – OFICINA DE PLANEACION O LA QUE HAGA
                            SUS VECES</span></td>
                    <td><span class="titulos">0.1 OFICINA RESPONSABLE:</span><br>
                        <span class="type-normal-cell">SECRETARIA DE PLANEACION</span>
                    </td>
                </tr>
                <tr>
                    <td><span class="titulos">0.2 No. DE RADICACIÓN:</span><br>
                        <span class="type-normal-cell">SECRETARIA DE PLANEACION</span>
                    </td>
                </tr>
                <tr>
                    <td><span class="titulos">0.3 DEPARTAMENTO – MUNICIPIO – FECHA</span><br>
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
                            formulario y las instrucciones contenidas en la Guía anexa, antes de diligenciarlo por medio
                            electrónico o a mano en letra imprenta, sin enmendaduras y en sistema de número
                            arábigo.</span></td>
                </tr>

            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>
                <tr class="bg-header">
                    <td colspan="2"><span class="sub-titulos">1. IDENTIFICACIÓN DE LA SOLICITUD</span></td>
                </tr>
                <tr>
                    <td style="text-align: center; width:50%"><span class="titulos">1.1 TIPO DE TRÁMITE</span></td>
                    <td style="text-align: center; width:50%"><span class="titulos">1.2 OBJETO DEL TRÁMITE</span></td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <div style="padding: 10px;">

                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_parcelacion"> A. LICENCIA DE PARCELACIÓN </label><input type="checkbox"
                                name="lic_parcelacion" id="lic_parcelacion" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_urb"> B. LICENCIA DE URBANIZACIÓN</label><input type="checkbox" name="lic_urb"
                                id="lic_urb" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_sub"> C. LICENCIA DE SUBDIVISIÓN </label><input type="checkbox" name="lic_sub"
                                id="lic_sub" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_cons"> D. LICENCIA DE CONSTRUCCIÓN </label><input type="checkbox"
                                name="lic_cons" id="lic_cons" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="lic_rec"> E. RECONOCIMIENTO DE LA EXISTENCIA DE UNA EDIFICACIÓN </label><input
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
                                for="modificacion">MODIFICACIÓN DE LICENCIA VIGENTE</label><input type="checkbox"
                                name="modificacion" id="modificacion" class="chk-inline-two-section"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="revalidacion">REVALIDACIÓN</label><input type="checkbox" name="revalidacion"
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
                            MODALIDAD LICENCIA DE URBANIZACIÓN</span></td>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.5
                            MODALIDAD LICENCIA DE CONSTRUCCIÓN</span></td>
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
                                for="reurbanizacion_lic"> C. REURBANIZACIÓN </label><input type="checkbox"
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
                                    de construcción sostenible a implementar</label><input type="checkbox"
                                    name="obra-nueva" id="obra-nueva" class="chk-inline-section-1-2"><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="ampliacion">b. AMPLIACIÓN</label><input type="checkbox" name="ampliacion"
                                    id="ampliacion" class="chk-inline-section-1-2"><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="adecuacion">c. ADECUACIÓN</label><input type="checkbox" name="adecuacion"
                                    id="adecuacion" class="chk-inline-section-1-2"><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="modificacion">d. MODIFICACIÓN</label><input type="checkbox"
                                    name="modificacion" id="modificacion" class="chk-inline-section-1-2"><br>
                                <label
                                    style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 12px;"
                                    for="restauracion">e. RESTAURACIÓN</label><input type="checkbox"
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
                                    for="demolicion">g. DEMOLICIÓN
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
                                    for="reconstruccion">h. RECONSTRUCCIÓN</label><input type="checkbox"
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
                            1.4 MODALIDAD LICENCIA DE SUBDIVISIÓN</span></td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <div style="padding: 10px;">
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="sub_rural"> A. SUBDIVISIÓN RURAL</label><input type="checkbox" name="sub_rural"
                                id="sub_rural" class="chk-inline"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                        font-size: 12px;"
                                for="sub_urbana"> B. SUBDIVISIÓN URBANA</label><input type="checkbox"
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
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.7 ÁREA
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
                                    style="display: inline">Otro, ¿Cuál?____</label>




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
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.9 BIEN DE INTERÉS CULTURAL</span></td>
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
                    <td colspan="2"  style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.10 REGLAMENTACIÓN DE CONSTRUCCIÓN SOSTENIBLE</td>
                </tr>
                <tr>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.10.1 DECLARACIÓN SOBRE MEDIDAS DE CONSTRUCCIÓN SOSTENIBLE</span></td>
                    <td style="text-align: center; width:50%"><span class="titulos" style="padding: 5px">1.10.2 ZONIFICACIÓN CLIMÁTICA</span></td>
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
                        <span class="type-normal">Al señalar cualquiera de estas casillas, no implica la presentación de documentos adicionales para el trámite de la licencia.</span>
                        </div>    
                    

                       
                    </td>
                    <td style="width:50%">
                        <div style="text-align:center; margin-top:-50px; display:block">
                            <span class="type-normal" style="margin-top: -25px;">Señale la zona Climática asignada de acuerdo al Anexo 2 de la Res. 549 de 2015</span>
                        </div>
                        <div style="position: relative; display:block"> 
                            <div style="position: absolute; left:10px;"><input type="checkbox" id="frio" name="frio" value="frio" style="display: inline"> <label for="frio"style="font-family: Arial, Helvetica, sans-serif;     
                          font-size: 13px;">Frio</label></div> 
                            <div style="position: absolute; left:70px;"><input type="checkbox" id="templado" name="templado" value="templado" style="display: inline"> <label for="templado"style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 13px;">Templado</label></div>
                            <div style="position: absolute; left:150px;"><input type="checkbox" id="calido_seco" name="calido_seco" value="calido_seco" style="display: inline"> <label for="calido_seco"style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 13px;">Cálido seco</label></div> 
                            <div style="position: absolute; left:240px;"><input type="checkbox" id="calido_humedo" name="calido_humedo" value="calido_humedo" style="display: inline"> <label for="calido_humedo"style="font-family: Arial, Helvetica, sans-serif;     
                                font-size: 13px;">Cálido húmedo</label></div> 
                      
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
                            <span class="type-normal">¿Su predio se encuentra en una zona climática distinta a la que le fue asignada?</span>
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
                              font-size: 13px;">¿Cual? ________</label>
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
                    <td colspan="2"><span class="sub-titulos">2. INFORMACIÓN SOBRE EL PREDIO <br> &nbsp; <small>(Marcar con una X en la casilla correspondiente y llenar los espacios con letra imprenta)</small></span></td>
                </tr>
                <tr>
                    <td style="text-align: left; width:50%;max-width: 344px!important;">
                        <span class="titulos" style="padding-top: 0!important;">2.1 DIRECCIÓN O NOMENCLATURA</span><br>
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
                        2.2 No. MATRÍCULA INMOBILIARIA</span>                       
                        <div style="padding: 4px;">
                            <p class="type-p">
                              12312312231231231
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:50%;max-width: 344px!important;">
                        <span class="titulos">
                            2.3 No. IDENTIFICACIÓN CATASTRAL</span>
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
                        2.4 CLASIFICACIÓN DEL SUELO</span>
                    
                    </td>
                    <td style="text-align: center; width:25%;max-width:122px!important;"><span class="titulos">
                        2.5 PLANIMETRÍA DEL LOTE</span> </td></td>
                    <td style="text-align: left; width:25%;max-width:122px!important;"><span class="titulos" style="padding: 0!important;">
                        BARRIO O URBANIZACIÓN</span><br>
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
                                for="expansion">c. DE EXPANSIÓN</label><input type="checkbox"
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
                                    for="plano_topografico">b. Plano Topográfico</label><input type="checkbox"
                                    name="plano_topografico" id="plano_topografico" class="chk-inline-2-2-1"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                            font-size: 12px;"
                                    for="otro_plano">c. Otro</label><input type="checkbox"
                                    name="otro_plano" id="otro_plano" class="chk-inline-2-2-1"><br>
                            <label style="font-family: Arial, Helvetica, sans-serif;     
                            font-size: 12px;"for="otro_plano">¿Cuál?___________________</label>
                            
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
                    <td colspan="2"><span class="sub-titulos">3. INFORMACIÓN DE VECINOS COLINDANTES</span></td>
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
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DEL PREDIO</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DEL PREDIO</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DE CORRESPONDENCIA</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DE CORRESPONDENCIA</label></td>
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
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DEL PREDIO</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DEL PREDIO</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DE CORRESPONDENCIA</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DE CORRESPONDENCIA</label></td>
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
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DEL PREDIO</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DEL PREDIO</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DE CORRESPONDENCIA</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DE CORRESPONDENCIA</label></td>
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
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DEL PREDIO</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DEL PREDIO</label></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DE CORRESPONDENCIA</label></td>
                    <td style="text-align:left; width:20%;max-width:112px!important;"><label style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding:5px; 5px 20px 0;">DIRECCIÓN DE CORRESPONDENCIA</label></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>
                <tr class="bg-header">
                    <td colspan="3"><span class="sub-titulos">4. LINDEROS, DIMENSIONES Y ÁREAS</span></td>
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
                    <td style="text-align: center; width:50%;max-width:244px!important;height:25px;background: #bfbfbf;" colspan="2"><span style="font-weight:bold;font-family:Arial, Helvetica, sans-serif;font-size:14px;">ÁREA TOTAL DEL PREDIO(S)</span></td>
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
                    <td colspan="3" style="text-align: center"><p class="type-p" style="font-size: 14px;font-family:Arial, Helvetica, sans-serif">Los firmantes titulares y profesionales responsables declaramos bajo la gravedad del juramento que nos responsabilizamos totalmente por los estudios y documentos correspondientes presentados con este formulario y por la veracidad de los datos aquí consignados. Así mismo, declaramos que conocemos las disposiciones vigentes que rigen la materia y las sanciones establecidas.</p></td>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">TELÉFONO /CELULAR</span>
                        <div style="padding: 2px;">
                            <p class="type-p">
                              3168706182
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO:</span>
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
                              ANDREA LIZETH MUÑOZ LARROTA
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">TELÉFONO /CELULAR</span>
                        <div style="padding: 2px;">
                            <p class="type-p">
                              31768012312
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO:</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">TELÉFONO /CELULAR</span>
                        <div style="padding: 2px;">
                            <p class="type-p">                              
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO:</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">TELÉFONO /CELULAR</span>
                        <div style="padding: 2px;">
                            <p class="type-p">                           
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO:</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">URBANIZADOR O CONSTRUCTOR RESPONSABLE <small>(Experiencia mínima 3 años)</small></span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                1098719559                             
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N° MATRICULA PROFESIONAL</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">ARQUITECTO PROYECTISTA <small>(Sin requisitos de experiencia mínima)</small></span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                1098719559                             
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N° MATRICULA PROFESIONAL</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO</span>
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
                    <td rowspan="2" style="text-align: left; width:25%;max-width:122px!important; height:40px"> <span class="type-normal-cell" style="padding: 2px;font-weight:bold">INGENIERO CIVIL ESTRUCTURAL <small>(Experiencia mínima 5 años o especialización)</small></span></td>
                    <td  style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                277900083                             
                            </p>
                        </div></td>
                    <td  style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N° MATRICULA PROFESIONAL</span>
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
                            Se hace necesaria la Supervisión Técnica
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left; width:62.5%;max-width:305px!important; height:40px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO</span>
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
                        GEOTECNISTA  <small>(Experiencia mínima 5 años o especialización)</small></span></td>
                    <td  style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                1098719559                             
                            </p>
                        </div></td>
                    <td  style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N° MATRICULA PROFESIONAL</span>
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
                            Se hace necesaria la Supervisión Técnica
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left; width:62.5%;max-width:305px!important; height:40px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">DISEÑADOR DE ELEMENTOS NO ESTRUCTURALES <small>(Experiencia mínima 3 años)</small></span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                1098719559                             
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N° MATRICULA PROFESIONAL</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">REVISOR DE LOS DISEÑOS ESTRUCTURALES <small>(Experiencia mínima 5 años)</small></span></td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 0px;font-weight:bold">CEDULA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                                                        
                            </p>
                        </div>
                    
                    </td>
                    <td style="text-align: left; width:25%;max-width:122px!important; height:60px">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N° MATRICULA PROFESIONAL</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">N° MATRICULA PROFESIONAL</span>
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO</span>
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
                              LUZ MARINA VARGAS CAÑAS                           
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
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">DIRECCIÓN PARA CORRESPONDENCIA</span>
                        <div style="padding: 2px;">
                            <p class="type-p"> 
                              CARRERA 8W 62-12 MUTIS EDIFICIO SAN MARTIN APTO 304                      
                            </p>
                        </div>
                    </td>
                    <td style="text-align: left; width:50%;max-width:244px!important;height:30px;">
                        <span class="type-normal-cell" style="padding: 2px;font-weight:bold">CORREO ELECTRÓNICO (S)</span>
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
                        <span class="sub-titulos">6. DOCUMENTOS QUE ACOMPAÑAN LA SOLICITUD.</span><br>
                        <span class="sub-titulos" style="font-size:12px;font-style: italic;
                        ">(Marcar con una X en la casilla de la izquierda)</span>
                    </td>
                </tr> 
                <tr>
                    <td colspan="4" style="text-align: left;background:#bfbfbf"><span class="titulos" style="padding: 3px;font-size:12px;">6.1 DOCUMENTOS COMUNES A TODA SOLICITUD</span> &nbsp;&nbsp; <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif, Geneva, Tahoma, sans-serif;font-weight:bold">*Los requisitos con asteriscos no se exigirán cuando se puedan consultar por medios electrónicos.</span></td>
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
                    <p class="type-p" style="padding: 2px;font-size:11px;">A. Copia del Certificado de tradición y libertad del inmueble o
                        inmuebles objeto de la solicitud, cuya expedición no sea superior a un mes antes de la fecha de la solicitud. Cuando el
                        predio no se haya desenglobado se podrá aportar el certificado del predio de mayor extensión.</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number">X</span>
                    </td>
                    <td style="text-align:justify; width:20%;max-width:112px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">C. Poder especial debidamente otorgado, ante notario o juez
                        de la república, cuando se actúe mediante apoderado o mandatario, con la correspondiente presentación personal.</p>
                    </td>
                    
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number">X</span>
                    </td>
                    <td style="text-align:justify; width:20%;max-width:112px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">B.El formulario único nacional para la solicitud de licencias
                        debidamente diligenciado por el solicitante.</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number">X</span>
                    </td>
                    <td style="text-align:justify; width:20%;max-width:112px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">D. Copia del documento o declaración privada del impuesto
                        predial del último año en relación con el inmueble o inmuebles objeto de la solicitud, donde figure la nomenclatura
                        alfanumérica o identificación del predio. Este requisito no se exigirá cuando exista otro documento oficial con base en el
                        cual se pueda establecer la dirección del predio o predios objeto de solicitud.</p>
                    </td>
                    
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">E. Copia del documento de identidad del solicitante cuando se trate de personas naturales o certificado de existencia y representación
                            legal, cuya fecha no sea superior a un mes, cuando se trate de personas jurídicas</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">F.La relación de la dirección de lo predios colindantes al proyecto objeto de la solicitud. Se entiende por predio colindante aquellos que
                            tienen un lindero común con el inmueble o inmuebles objeto de solicitud de licencia. Este requisito no se exigirá cuando se trate de
                            predios rodeados completamente por espacio público o ubicado en zonas rurales no suburbanas.</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">G.Copia de matrícula profesional de los profesionales intervinientes en el trámite de licencia urbanística y copia de las certificaciones
                            que acrediten su idoneidad y experiencia.</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">A las solicitudes de licencia de intervención y ocupación del espacio público solo se les exigirá el aporte de los documentos de que
                            tratan los numerales 3 y 4 del artículo 2.2.6.1.2.1.7 del Decreto 1077 de 2015.</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">A las solicitudes de Revalidación solamente se les exigirán los documentos de que tratan los numerales 1,2, 3,4 y 6 del artículo
                            2.2.6.1.2.1.7 del Decreto 1077 de 2015, no estarán sometidas al procedimiento de expedición de licencia y deberán resolverse en un
                            término máximo de 30 días hábiles contados a partir de la radicación de la solicitud en legal y debida forma.
                            </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td colspan="3" style="text-align:justify;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">En las ciudades, donde existan medios tecnológicos disponibles de consulta virtual o flujos de información electrónica, el curador
                            urbano o la autoridad municipal o distrital encargada del estudio, trámite y expedición de las licencias estarán en la obligación de
                            verificar por estos mismos medio, al momento de la radicación de la solicitud, la información pertinente contenida en los documentos
                            de que tratan los numerales 1,3 y 5 del artículo 2.2.6.1.2.1.7 del Decreto 1077 de 2015.Esta consulta de verificación sustituye la
                            presentación del documento a cargo del solicitante de la licencia, salvo que la información correspondiente no se encuentre disponible
                            por medios electrónicos. </p>
                    </td>
                </tr>
            </tbody>

        </table>
        <table style="width: 100%;" border="2">
            <tbody>                
                <tr>
                    <td  colspan="4" style="text-align: left;background:#bfbfbf"><span class="titulos" style="padding: 3px;font-size:12px;">6.2 DOCUMENTOS ADICIONALES EN LICENCIA DE URBANIZACIÓN</span> </td>
                </tr>
            </tbody>
        </table> 
        <table style="width: 100%;" border="2">
            <tbody>                
                <tr>
                    <td style="text-align: left;width:33%;max-width:163px;"><span class="titulos" style="padding: 3px;font-size:12px;">A. Modalidad Desarrollo </span> </td>
                    <td style="text-align: left;width:33%;max-width:163px;"><span class="titulos" style="padding: 3px;font-size:12px;">B. Modalidad Saneamiento </span> </td>
                    <td style="text-align: left;width:33%;max-width:163px;"><span class="titulos" style="padding: 3px;font-size:12px;">C. Modalidad Reurbanización
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
                    <p class="type-p" style="padding: 2px;font-size:11px;">Plano topográfico del Predio, predios o
                        parte del predio objeto de la solicitud, firmado por el o los profesionales responsables, en el cual se indique el área, los linderos y todas las reservas,
                        incluyendo, entre otras, áreas de amenaza, arbolado urbano, secciones
                        viales, afectaciones, incluyendo líneas de  alta tensión y redes de servicios públicos
                        domiciliarios, con limitaciones urbanísticas debidamente amojonadas y con indicación de coordenadas, el cual servirá de base para la presentación del proyecto y será elaborado de
                        conformidad con lo definido en el Plan de Ordenamiento Territorial, los instrumentos que lo desarrollen, y complementen y demás información pública disponible</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30%;max-width:150px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">Copia de licencias de urbanización, sus
                        modificaciones y revalidaciones junto con
                        los planos urbanísticos aprobados con los
                        que se ejecutó el 80% de la urbanización.</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30%;max-width:150px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">Copia de licencias de urbanización, sus
                        modificaciones y revalidaciones junto con  los planos urbanísticos aprobados o los
                        actos de legalización junto con los planos aprobados. </p>
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
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano de proyecto urbanístico
                            debidamente firmado por arquitecto con
                            matrícula profesional quien es el
                            responsable del diseño</p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:11px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano de proyecto urbanístico,
                            debidamente , debidamente firmado por un arquitecto con matrícula profesional
                            quien es el responsable del diseño en el cual se identifique la parte de la
                            urbanización ejecutada y la parte de la urbanización objeto de esta licencia, en el
                            cuadro de áreas en el que se diferencie lo ejecutado y lo que se desarrollará.
                            .</p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano del nuevo proyecto urbanístico
                            debidamente firmado por un arquitecto con matrícula profesional vigente quien es
                            el responsable del diseño en el cual se  identifique con claridad la nueva       conformación de áreas públicas y privadas. En el nuevo proyecto
                            urbanístico se podrán redistribuir las  áreas públicas existentes garantizando en
                            todo caso que se cumplan con las nuevas  exigencias de cesión y que en ningún caso
                            dichas áreas sean inferiores a las  aprobadas en la licencia o en el acto de
                            legalización con el cual se desarrolló el  predio que se pretende reurbanizar.
                            Igualmente se podrán incluir predios utilizados como servidumbres de uso
                            público que estén en dominio privado con el objeto de localizar allí áreas de cesión y
                            formalizar su entrega y escrituración a los municipios y distritos y predios o áreas
                            cuya sumatoria no excede de 2.000m2 que por su tamaño no son aptos para que
                            se expida licencia de urbanización en la modalidad de desarrollo.</p>
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
                        <p class="type-p" style="padding: 2px;font-size:11px;">Certificación expedida por las empresas
                            de servicio públicos domiciliarios, o autoridad municipal competentes, acerca
                            de la disponibilidad inmediata de servicios públicos en el predio o predios
                            objeto de la licencia, dentro del término de vigencia de la licencia. La
                            disponibilidad inmediata de servicios públicos es la viabilidad técnica de
                            conectar el predio o predios objeto de la licencia de urbanización a las redes
                            matrices de servicios públicos existentes.Los urbanizadores podrán asumir el costo
                            de las conexiones a las redes matrices que sean necesarias para dotar el
                            proyecto con servicios, de conformidad con lo previsto en la Ley 142 de 1994 y
                            las normas que lo adicionen, modifiquen o sustituyan. </p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Copia de solicitud de entrega y/o de
                            cesión de zonas públicas presentada ante las dependencias municipales o distritales
                            competentes.
                            
                            .</p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano Topográfico con el cual se tramitó
                            licencia o el acto de legalización del área objeto de reurbanización. En caso de que
                            existan planos topográficos posteriores que los modificaron se aportarán éstos
                            últimos. En el evento que no exista ningún plano topográfico las reservas y
                            afectaciones del nuevo proyecto se definirán con fundamento en los planos
                            urbanísticos o de legalización con los cuales se aprobó la urbanización o la
                            legalización, sin perjuicio de la posibilidad de adelantar la redistribución de las zonas
                            de uso público .</p>
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
                        <p class="type-p" style="padding: 2px;font-size:10px;">Cuando el predio esté ubicado en zonas
                            de amenaza y/o riesgo alto y medio de origen geotécnico o hidrológico, adjuntar
                            los estudios detallados de amenaza y riesgo por fenómenos de remoción en
                            masa e inundaciones, que permitan determinar la viabilidad del futuro
                            desarrollo, siempre y cuando se garantice  la mitigación de la amenaza y/o riesgo
                            En estos estudios deberá incluirse el  diseño de las medidas de mitigación y
                            serán elaborados y firmados por  profesionales idóneos en las materias,
                            quienes conjuntamente con el   urbanizador serán responsables de los
                            mismos, sin perjuicio de la  responsabilidad por la correcta ejecución
                            de las obras de mitigación. En todo caso las obras de mitigación deberán ser
                            ejecutadas por el urbanizador responsable, o en su defecto, por el
                            titular, durante la vigencia de la licencia. </p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:10px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Certificación suscrita por el solicitante de la licencia en la que manifieste bajo la gravedad de juramento que la  urbanización para la cual solicita esta licencia está ejecutada como mínimo el  80% del total de las áreas de cesión
                            pública aprobada en la licencia de  urbanización.                         
                            </p>
                        </td>
                        <td style="text-align:center; width:3%;max-width:11px!important;">
                            <span class="number"></span>
                        </td>
                        <td style="text-align:justify; width:30%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Cuando el predio esté ubicado en zonas
                            de amenaza y/o riesgo alto y medio de   origen geotécnico o hidrológico, se
                            deberán adjuntar los estudios de que  trata el literal (d) del numeral 1 del
                            artículo 2.2.6.1.2.1.8 del Decreto 1077 de  2015
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
                        LICENCIA DE SUBDIVISIÓN</span> </td>
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
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano topográfico del predio(s) objeto de
                            la solicitud, Firmado por profesional responsable
                        </p>
                    </td>
                    <td colspan="2" style="text-align: left;width:33.3%;max-width:163px;">
                        <span class="titulos" style="padding: 3px;font-size:12px;">A. Modalidad Subdivisión Urbana y Rural </span>
                    </td>
                    <td rowspan="2" style="text-align:center; width:3%;max-width:10px!important;"><span class="number">X</span></td>
                    <td rowspan="2"  style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano de levantamiento arquitectónico de
                            la construcción existente firmados por  arquitecto responsable. 
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span></td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano del proyecto de parcelación
                            debidamente firmado por arquitecto y el solicitante de la licencia.
                        </p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Plano del levantamiento topográfico el
                            antes y después de la subdivisión.
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
                            sustentan la prestación de los servicios    de agua potable, saneamiento básico y
                            demás autorizaciones ambientales
                        </p>
                    </td>
                    <td style="text-align: left;width:33.3%;max-width:163px;">
                        <span class="titulos" style="padding: 3px;font-size:12px;">B. Modalidad Reloteo </span>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;"><span class="number"></span></td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Declaración de la antigüedad de la
                            construcción, que se entiende bajo la gravedad de juramento (5 años mínimos). 
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
                            por fenómeno de remoción en masa e inundaciones ambientales que señalen
                            las medidas de mitigación de riesgos, en predios ubicados en zonas de amenaza
                            y/o riesgo alto y medio de origen geotécnico o hidrológico y permitan la
                            viabilidad de futuros desarrollos.
                        </p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;"><p class="type-p" style="padding: 2px;font-size:11px;">Plano de loteo aprobado o plano
                        topográfico aprobado que haya  incorporado urbanísticamente el predio
                    </p></td>
                    <td rowspan="2" style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td rowspan="2" style="text-align:justify; width:30.3%;max-width:150px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Copia del peritaje técnico que determine
                            la estabilidad de la construcción y  propuesta para las intervenciones y obras
                            a realizar (firmado por profesional matriculado y facultado).
                            
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30.3%;max-width:150px!important;"><p class="type-p" style="padding: 2px;font-size:11px;">Plano que señale los predios resultantes
                        de la división propuesta, debidamente amojonado y alinderado. </p></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>                
                <tr>
                    <td colspan="6" style="text-align: left;background:#bfbfbf"><span class="titulos" style="padding: 3px;font-size:12px;">6.6 DOCUMENTOS ADICIONALES EN LICENCIA DE CONSTRUCCIÓN</span> <br> <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif, Geneva, Tahoma, sans-serif;font-weight:bold">* Los requisitos con asterisco deben presentarse firmados y rotulados por profesional idóneo</span></td>
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
                        Copia de memoria de los cálculos estructurales*</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:30%;max-width:150px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">Copias de Memoria de diseño de los
                        elementos no estructurales*
                        
                        .</p>
                    </td>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number">X</span>
                    </td>
                    <td style="text-align:justify; width:30%;max-width:150px!important;">
                    <p class="type-p" style="padding: 2px;font-size:11px;">Copia de los estudios geotécnicos y de
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
                            (Para las solicitudes de licencia clasificadas bajo las categorías I Baja Complejidad y II Media Complejidad diseñada de acuerdo a lo
                            dispuesto en Título E Reglamento colombiano de Construcción Sismo resistente -NSR-10 y la norma que lo adicione, modifique o
                            sustituya, solo se requiere copia los Planos estructurales del Proyecto*)
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;"><b><u>Proyecto Arquitectónico:</u></b><br>
                            Copia en medio impreso del proyecto arquitectónico*
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Licencias anteriores y planos cuando la solicitud se presenta ante autoridad distinta a la que otorgó la licencia original, excepto para obra nueva. </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;"><b><u>Revisión Técnica:</u></b>
                            Memorial certificando el alcance de la revisión, en cumplimiento de las normas de sismo-resistencia y sus decretos reglamentarios (Cuando el área construida es mayor o igual a 2.000 m2)(Art. 15, Ley 400 de 2016).
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;"><b><u>Bien de Interés Cultural:</u></b>
                            Anteproyecto aprobado por el Ministerio de Cultura o la entidad competente. En intervenciones sobre patrimonio arqueológico, autorización expedida por la entidad competente.
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;"><b><u>Propiedad Horizontal:</u></b>
                            Copia del acta del órgano competente de administración de la propiedad horizontal o del documento que haga sus veces, según lo disponga el reglamento, autorizando la ejecución de las obras ampliación, adecuación, modificación, reforzamiento estructural, o demolición de inmuebles sometidos al régimen de propiedad horizontal.
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;"><b><u>Reforzamiento Estructural para edificaciones en riesgo por daños en la estructura:</u></b>
                            (Art. 2.2.6.1.2.1.1. Decreto 1077 de 2015 modificado por el Decreto 1547 de 2015) Concepto técnico expedido por la autoridad municipal o distrital encargada de la gestión del riesgo u
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
                            Para las solicitudes de licencia clasificadas bajo las categorías II Media Complejidad, que tengan 2.000m2 de área construida, III Media Alta Complejidad y IV Alta Complejidad, de que trata el artículo 2.2.6.1.2.1.4 del presente decreto, deberán allegar copia de la memoria de los cálculos y planos estructurales, firmados por el revisor independiente de los diseños estructurales, copia del memorial de revisión independiente de los diseños estructurales, de las memorias de diseño de los elementos no estructurales y de estudios geotécnicos y de suelos que sirvan para determinar el cumplimiento en estos aspectos del Reglamento Colombiano de Construcción Sismo resistente-NSR 10, y la norma que lo adicione, modifique o sustituya, firmados y rotulados por los profesionales facultados para este fin, quienes se harán responsables legalmente de los diseños y estudios, así como de la información contenida en ellos
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">
                            Para las solicitudes de licencia clasificados bajo las categorías II Media Complejidad, que tengan menos de 2.000m2 de área construida, y Baja Complejidad de que trata el artículo 2.2.6.1.2.1.4 del Decreto 1077 de 2015, se alegará copia de los planos estructurales del proyecto firmados y rotulados por el profesional que los elaboró
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">
                            Para las solicitudes de licencias de construcción que no alcancen los 2.000m2 de área construida y se exija supervisión técnica independiente por parte del diseñador estructural o ingeniero geotecnista, deberá allegarse memorial de la revisión independiente de los diseños estructurales, siendo obligación del revisor independiente firmar los planos y demás documentos técnicos como constancia de haber efectuado la revisión
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
                            Una copia en medio impreso del proyecto arquitectónico, elaborado de conformidad con las normas urbanísticas y de edificabilidad vigentes al momento de la solicitud debidamente rotulado y firmado por un arquitecto con matrícula profesional, quien se hará responsable legalmente de los diseños y de la información contenida en ellos. Los planos arquitectónicos deben contener como mínimo la siguiente información: (i)Localización, (ii)Plantas, (iii)Alzados o cortes de la edificación relacionados con la vía pública o privada a escala formal. Cuando el proyecto esté localizado en suelo inclinado, los cortes deberán indicar la inclinación real del terreno, (iv)Fachadas, (v)Plantas de Cubiertas, (vi)Cuadro de áreas
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">
                            Si la solicitud de licencia se presenta ante autoridad distinta a la que otorgó la licencia original, se adjuntarán las licencias anteriores, o el instrumento que hiciere sus veces junto con sus respectivos planos. Cuando estas no existan, se deberá gestionar el reconocimiento de la existencia de edificaciones regulado por el Capítulo 4 del Título 6 del presente decreto .Esta disposición no será aplicable tratándose de solicitudes de licencia de construcción en la modalidad de obra nueva.
                             </p>
                    </td>
                </tr>
              
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Anteproyecto aprobado por el Ministerio de Cultura si se trata de bienes de interés cultural del ámbito nacional o por la entidad competente si se trata de bienes de interés cultural de carácter departamental, municipal o distrital cuando el objeto de la licencia sea la intervención de un bien de interés cultural, en los términos que se definen en las Leyes 397 de 1997 y 1185 de 2008 y el Decreto único del sector Cultura.
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Cuando se trate de licencias para la ampliación, adecuación, modificación, reforzamiento estructural o demolición de inmuebles sometidos al régimen de propiedad horizontal, copia del acta u órgano competente que haga sus veces, según lo disponga el respectivo reglamento de
                            propiedad horizontal vigente, autorizando la ejecución de las obras solicitadas, Estas licencias deberán acoger lo establecido en los respectivos reglamentos
                             </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Cuando se trate de licencia de construcción en la modalidad de obra nueva para el desarrollo de equipamientos en suelo objeto de cesiones anticipadas en los términos del artículo 2.2.6.1.4.8 del Decreto 1077 de 2015, deberá adjuntar la certificación expedida por los prestadores de servicios públicos en la que conste que el predio cuenta con disponibilidad inmediata de servicios públicos. Además se debe presentar la información que soporte el acceso directo al predio objeto de cesión desde una vía pública vehicular en las condiciones de la norma urbanística correspondiente.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="2">
            <tbody>                
                <tr>
                    <td colspan="2" style="text-align: left;background:#bfbfbf"><span class="titulos" style="padding: 3px;font-size:12px;">6.7 DOCUMENTOS PARA LA MODIFICACION DE LICENCIAS VIGENTES DE URBANIZACION, CONSTRUCCION, SUBDIVISION Y PARCELACION
                        </span> <br> <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif, Geneva, Tahoma, sans-serif;font-weight:bold">* Los requisitos con asterisco deben presentarse firmados y rotulados por profesional idóneo</span></td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Para las solicitudes de licencia vigente de urbanización, construcción, subdivisión y parcelación se acompañarán de los documentos a que hacen referencia los numerales 1. 2, 3 y 4 del artículo 2.2.6.1.2.1.7 del Decreto 1077 de 2015.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Cuando la solicitud de modificación sea de licencias de intervención y ocupación del espacio público vigente, solo se acompañarán los
                            documentos exigido en los numerales 3 y 4 del mismo artículo 2.2.6.1.2.1.7 del Decreto 1077 de 2015.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">
                            A la solicitud de modificación de las licencias de urbanización y parcelación vigentes, adicionalmente se acompañará el proyecto arquitectónico ajustado con los requisitos indicados en el numeral 4 del artículo 2.2.6.1.2.1.11 del Decreto 1077 de 2015,. Si la modificación conlleva ajustes al proyecto estructural se aplicará, según el caso, lo previsto en los numerales 1,2 y 3 del artículo 2.2.6.1.2.1.11 del Decreto 1077 de 2015.

                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">En todos los casos deberá garantizarse la correspondencia entre los proyectos estructurales y arquitectónicos.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">Si la solicitud de modificación de la licencia se presenta ante una autoridad distinta a la que otorgó la licencia original, se adjuntarán las licencias anteriores, o el instrumento que haga sus veces junto con los respectivos planos.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; width:3%;max-width:10px!important;">
                        <span class="number"></span>
                    </td>
                    <td style="text-align:justify; width:97%;max-width:478px!important;">
                        <p class="type-p" style="padding: 2px;font-size:11px;">En las ciudades en donde existan los medios tecnológicos disponibles de consulta virtual o flujos de información electrónica, los curadores urbanos o la autoridad municipal o distrital competente para el estudio, trámite y expedición de las licencias estarán en la obligación de verificar por estos mismos medios, al momento de la radicación de la solicitud, la información pertinente contenida en los documentos de que tratan los numerales 1 y 3 del artículo 2.2.6.1.2.1.7 del Decreto 1077 de 2015.Esta consulta de verificación sustituye la presentación del documento a cargo del solicitante de la licencia, salvo que la información correspondiente no se encuentre disponible por medios electrónicos.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
    <small class="text-final">*Todos los planos y estudios especializados deben ir debidamente rotulados y firmados por profesional idóneo de acuerdo con el Título VI – Ley 400 de 1997</small>

   


   




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
