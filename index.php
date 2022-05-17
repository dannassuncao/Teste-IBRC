<?php
//include("conexão.php");

?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Teste Ibrc</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container overflow-hidden">
      <!--multisteps-form-->
      <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="Idade" style="cursor:unset;" disabled>Idade</button>
              <button class="multisteps-form__progress-btn" type="button" title="Questões" style="cursor:unset;" disabled>Questões</button>
              <button class="multisteps-form__progress-btn" type="button" title="Finalizar" style="cursor:unset;" disabled>Finalizar</button>
            </div>
          </div>
        </div>
 
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
          <!--<form class="multisteps-form__form" name="formulario" action="pega_cadastro.php">-->
            <form class="multisteps-form__form" name="formulario" >

              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Idade</h3>
                <h5>Antes de começarmos a pesquisa, por gentileza nos informe sua idade:</h5>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                   <div class="center">
                    <div class="form-check">
                      <input class="form-check-input final" type="radio" value="1" name="idade" id="idade1">
                      <label class="form-check-label" for="idade1">
                        Menos de 18 anos
                      </label>
                      
                    </div>
                    <div class="form-check">
                      <input class="form-check-input questionario" type="radio" value="2" name="idade" id="idade2">
                      <label class="form-check-label" for="idade2">
                        De 18 a 20 anos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input questionario" type="radio" value="3" name="idade" id="idade3">
                      <label class="form-check-label" for="idade3">
                        De 21 a 30 anos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input questionario" type="radio" value="4" name="idade" id="idade4">
                      <label class="form-check-label" for="idade4">
                        De 31 a 40 anos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input questionario" type="radio" value="5" name="idade" id="idade5">
                      <label class="form-check-label" for="idade5">
                        De 41 a 50 anos
                      </label>
                    </div><div class="form-check">
                      <input class="form-check-input questionario" type="radio" value="6" name="idade" id="idade6">
                      <label class="form-check-label" for="idade6">
                        De 51 a 60 anos
                      </label>
                    </div><div class="form-check">
                      <input class="form-check-input questionario" type="radio" value="7" name="idade" id="idade7">
                      <label class="form-check-label" for="idade7">
                        Mas de 60 anos
                      </label>
                    </div>
                  </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next ques" type="button" style="display:none;" id="proximo" title="Next" >Próximo</button>
                    <button class="btn btn-primary ml-auto js-btn-next2 fim" style="display:none;" type="button" id="proximofim" title="Next" >Próximo</button>
                  </div>
                </div>
              </div>

   
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white " data-animation="scaleIn">
                <h3 class="multisteps-form__title">Questões</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <h6>1 - Quando pensa em plano de saúde, qual é o nome da operadora que primeiro lhe vem à cabeça?</h6>
                    <input class="multisteps-form__input form-control" type="text" list="operadora" 
                        placeholder="Digite a operadora:" name="operadora2" id="operadora2"/>
                <datalist id="operadora">
               <option value="Ameplan">Ameplan (Assistência Médica Planejada)</option>
               <option value="Alice">Alice</option>
               <option value="Allianz">Allianz</option>
               <option value="Amil / DIX / Medial / One Health">Amil / DIX / Medial / One Health</option>
               <option value="Assim Saúde">Assim Saúde</option>
               <option value="BioVida">BioVida</option>
               <option value="Bradesco">Bradesco</option>
               <option value="Care Plus">Care Plus</option>
               <option value="CCG">CCG (centro clínico gaúcho)</option>
               <option value="Clinipam">Clinipam</option>
               <option value="E-vida">E-vida</option>
               <option value="Golden Cross / Vision Med">Golden Cross / Vision Med</option>
               <option value="GreenLine">GreenLine</option>
               <option value="Hapvida/ São Francisco">Hapvida/ São Francisco</option>
               <option value="Ipasgo">Ipasgo</option>
               <option value="NotreDame Intermédica">NotreDame Intermédica</option>
               <option value="Omint">Omint</option>
               <option value="Porto Seguros / Itaú Saúde">Porto Seguros / Itaú Saúde</option>
               <option value="Prevent Senior">Prevent Senior</option>
               <option value="Pró Médica">Pró Médica</option>
               <option value="Sami">Sami</option>
               <option value="Saúde Caixa / Caixa Seguros /Rede Gama">Saúde Caixa / Caixa Seguros /Rede Gama</option>
               <option value="Saúde Sim">Saúde Sim</option>
               <option value="Sompo Saúde / Marítima">Sompo Saúde / Marítima</option>
               <option value="SulAmérica">SulAmérica</option>
               <option value="Trasmontano">Trasmontano</option>
               <option value="Unimed">Unimed</option>
               <option value="CNU">CNU (Central Nacional Unimed)</option>
               <option value="Seguros Unimed">Seguros Unimed</option>
               <option value="Qsaúde">Qsaúde</option>
               <option value="Vitallis">Vitallis</option>
               <option value="NA (Não Aplicável)">NA (Não Aplicável)</option>
            </datalist>
        </div>

            <h6 style="margin-top:10px;">2 - Por ordem de prioridade, peço que diga o que considera mais importante na gestão do seu plano de previdência, onde 1 é o mais importante e 5 é o menos importante?</h6>
                  <div class="centralizar">
                      <table id="priori">
                          <tr>
                              <td>
                  <b><h7>1º Mais importante</h7></b>
                </td>
                <td >
                  <select class="form-control" name="import1">
                    <option>Selecione:</option>
                    <option value="1">Resultado dos investimentos do plano</option>
                    <option value="2">Atendimento da área de relacionamento institucional</option>
                    <option value="3">Atendimento (e-mail, site, telefone )</option>
                    <option value="4">Compromisso com a Integridade</option>
                    <option value="5">Consultoria Previdenciária</option>
                    
                  </select>
</td>
</tr>
<tr>
    <td>
                  <b><h7>2º Mais importante</h7></b>
                  </td>
                  <td>
                  <select class="form-control"  name="import2" aria-label="Default select example">
                  <option>Selecione:</option>
                    <option value="1">Resultado dos investimentos do plano</option>
                    <option value="2">Atendimento da área de relacionamento institucional</option>
                    <option value="3">Atendimento (e-mail, site, telefone )</option>
                    <option value="4">Compromisso com a Integridade</option>
                    <option value="5">Consultoria Previdenciária</option>
                  </select>
                  </td>
                  </tr>
                  <tr>
                      <td>
                  <b><h7>3º Mais importante</h7></b>
</td>
<td>
                  <select class="form-control" name="import3"  aria-label="Default select example">
                  <option >Selecione:</option>
                    <option value="1">Resultado dos investimentos do plano</option>
                    <option value="2">Atendimento da área de relacionamento institucional</option>
                    <option value="3">Atendimento (e-mail, site, telefone )</option>
                    <option value="4">Compromisso com a Integridade</option>
                    <option value="5">Consultoria Previdenciária</option>
                  </select>
</td>
                  </tr>
                  <tr>
                      <td>
                  <b><h7>4º Mais importante</h7></b>
                  </td>
                  <td>
                  <select class="form-control" name="import4" aria-label="Default select example">
                  <option>Selecione:</option>
                    <option value="1">Resultado dos investimentos do plano</option>
                    <option value="2">Atendimento da área de relacionamento institucional</option>
                    <option value="3">Atendimento (e-mail, site, telefone )</option>
                    <option value="4">Compromisso com a Integridade</option>
                    <option value="5">Consultoria Previdenciária</option>
                  </select>
                  </td>
                  </tr>
                  <tr>
                      <td>
                  <b><h7>5º Mais importante</h7></b>
                  </td>
                  <td>
                  <select class="form-control" name="import5" aria-label="Default select example">
                  <option >Selecione:</option>
                    <option value="1">Resultado dos investimentos do plano</option>
                    <option value="2">Atendimento da área de relacionamento institucional</option>
                    <option value="3">Atendimento (e-mail, site, telefone )</option>
                    <option value="4">Compromisso com a Integridade</option>
                    <option value="5">Consultoria Previdenciária</option>
                  </select>
                  </td>
                  </tr>
</table>
             </div>
             <h7>3 - O quanto você se considera informado sobre as condições,  regras e informações do seu plano de previdência do IBRC?</h7>
                   <div class="centralizar">
                    <div class="form-check">
                      <input class="form-check-input seg" type="radio" name="condicoes" id="condicoes1">
                      <label class="form-check-label" for="condicoes1">
                        5 Muito bem informado
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input seg" type="radio" name="condicoes" id="condicoes2">
                      <label class="form-check-label" for="condicoes2">
                        4 Bem informado
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input seg" type="radio" name="condicoes" id="condicoes3">
                      <label class="form-check-label" for="condicoes3">
                        3 Mais ou menos informado
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input raz" type="radio" name="condicoes" id="condicoes4">
                      <label class="form-check-label" for="condicoes4">
                        2 Mal informado
                      </label>
                </div>
                <div class="form-check">
                      <input class="form-check-input raz" type="radio" name="condicoes" id="condicoes5">
                      <label class="form-check-label" for="condicoes5">
                        1 Muito mal informado
                      </label>
                </div>
                <div class="form-check">
                      <input class="form-check-input seg" type="radio" name="condicoes" id="condicoes6" required>
                      <label class="form-check-label" for="condicoes6">
                        0 NA(Não Aplicável)
                      </label>
                    </div>
                </div>

                <div class="razao" style="display:none;">

                <h7>4 - Por qual razão se sente mal informado em relação ao seu plano de previdência do IBRC?</h7>
                <div class="centralizar">
                <div class="form-check">
                    <input class="form-check-input avalplano" type="checkbox" name="razao[]"  value="1" id="razao1">
                    <label class="form-check-label" for="razao1">
                        Não sabe onde pode encontrar essas informações
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input avalplano" type="checkbox" name="razao[]" value="2" id="razao2" >
                    <label class="form-check-label" for="razao2">
                        Não tem interesse / Não quer saber
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input avalplano" type="checkbox" name="razao[]" value="3" id="razao3" >
                    <label class="form-check-label" for="razao3">
                        Acha muito confuso, os termos são muito técnicos
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input avalplano" type="checkbox" name="razao[]"  value="4" id="razao4" >
                    <label class="form-check-label" for="razao4">
                        É muito extenso, longo demais. Poderia ser menor
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input avalplano" type="checkbox" name="razao[]" value="5" id="razao5" >
                    <label class="form-check-label" for="razao5">
                        Está sempre mudando
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input avalplano" type="checkbox" name="razao[]" value="6" id="razao6" >
                    <label class="form-check-label" for="razao6">
                        Outro motivo
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input naplicavel" type="checkbox" name="razao[]" value="7" id="razao7" >
                    <label class="form-check-label" for="razao7">
                    NA (Não Aplicável)
                    </label>
                  </div>
           </div>
</div>
           <h7>5 - Você é correntista do IBRC?</h7>
           <div class="centralizar">
           <div class="form-check">
            <input class="form-check-input cor" type="radio" value="Sim" name="correntista" id="correntista1">
            <label class="form-check-label" for="correntista1">
              Sim
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input cor2" type="radio" value="Não" name="correntista" id="correntista2">
            <label class="form-check-label" for="correntista2">
              Não
            </label>
          </div>
        </div>
        <div class="prods" style="display:none;">
        <h7>6 - Quais produtos você gostaria de ter uma oferta especial como correntista do IBRC?</h7>
        <div class="centralizar">
                <table>
                <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" name="ofertas[]" type="checkbox" value="1" id="ofertas1" >
                        <label class="form-check-label" for="ofertas1">
                            Capitalização
                        </label>
                    </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" name="ofertas[]" type="checkbox" value="2" id="ofertas2" >
                            <label class="form-check-label" for="ofertas2">
                                Financiamento imobiliário
                            </label>
                        </div>
                    </td>
                
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" name="ofertas[]" type="checkbox" value="3" id="ofertas3" >
                        <label class="form-check-label" for="ofertas3">
                            Cartão de crédito
                        </label>
                    </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" name="ofertas[]" type="checkbox" value="4" id="ofertas4" >
                            <label class="form-check-label" for="ofertas4">
                                Plano odontológico
                            </label>
                        </div>
                    </td>
                
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" name="ofertas[]" type="checkbox" value="5" id="ofertas5" >
                        <label class="form-check-label" for="ofertas5">
                            Consórcios
                        </label>
                    </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" name="ofertas[]" type="checkbox" value="6" id="ofertas6" >
                            <label class="form-check-label" for="ofertas6">
                                Seguro automóvel
                            </label>
                        </div>
                    </td>
                
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" name="ofertas[]" type="checkbox" value="7" id="ofertas7" >
                        <label class="form-check-label" for="ofertas7">
                            Conta Corrente
                        </label>
                    </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" name="ofertas[]" type="checkbox" value="8" id="ofertas8" >
                            <label class="form-check-label" for="ofertas8">
                                Seguro residencial
                            </label>
                        </div>
                    </td>
                
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" name="ofertas[]" type="checkbox" value="9" id="ofertas9" >
                        <label class="form-check-label" for="ofertas9">
                            Empréstimo
                        </label>
                    </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" name="ofertas[]" type="checkbox" value="10" id="ofertas10" >
                            <label class="form-check-label" for="ofertas10">
                                Outros
                            </label>
                        </div>
                    </td>
                
                </tr>

                </table>
        </div>

<div class="sugprod" style="display:none;">
        <h7>6.1 - Qual?</h7>
        <div class="row">
            <input class="multisteps-form__input form-control" type="text" name="outroProd" placeholder="Digite o produto:" />
        </div>        
</div>
</div>
<div class="ofeesp" style="display:none;">
        <h7>7 - Mesmo não sendo correntista do IBRC, para quais produtos você gostaria de ter uma oferta especial como cliente do IBRC?</h7>
        <div class="centralizar">
                <table>
                <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" name="ofertasEsp[]" type="checkbox" value="1" id="ofertasEsp1" >
                        <label class="form-check-label" for="ofertasEsp1">
                            Capitalização
                        </label>
                    </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" name="ofertasEsp[]" type="checkbox" value="2" id="ofertasEsp2" >
                            <label class="form-check-label" for="ofertasEsp2">
                                Financiamento imobiliário
                            </label>
                        </div>
                    </td>
                
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" name="ofertasEsp[]" type="checkbox" value="3" id="ofertasEsp3" >
                        <label class="form-check-label" for="ofertasEsp3">
                            Cartão de crédito
                        </label>
                    </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" name="ofertasEsp[]" type="checkbox" value="4" id="ofertasEsp4" >
                            <label class="form-check-label" for="ofertasEsp4">
                                Plano odontológico
                            </label>
                        </div>
                    </td>
                
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" name="ofertasEsp[]" type="checkbox" value="5" id="ofertasEsp5" >
                        <label class="form-check-label" for="ofertasEsp5">
                            Consórcios
                        </label>
                    </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" name="ofertasEsp[]" type="checkbox" value="6" id="ofertasEsp6" >
                            <label class="form-check-label" for="ofertasEsp6">
                                Seguro automóvel
                            </label>
                        </div>
                    </td>
                
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" name="ofertasEsp[]" type="checkbox" value="7" id="ofertasEsp7" >
                        <label class="form-check-label" for="ofertasEsp7">
                            Conta Corrente
                        </label>
                    </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" name="ofertasEsp[]" name="ofertasEsp" type="checkbox" value="8" id="ofertasEsp8" >
                            <label class="form-check-label" for="ofertasEsp8">
                                Seguro residencial
                            </label>
                        </div>
                    </td>
                
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" name="ofertasEsp[]" type="checkbox" value="9" id="ofertasEsp9" >
                        <label class="form-check-label" for="ofertasEsp9">
                            Empréstimo
                        </label>
                    </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input outros" name="ofertasEsp[]" type="checkbox" value="10" id="ofertasEsp10" >
                            <label class="form-check-label" for="ofertasEsp10">
                                Outros
                            </label>
                        </div>
                    </td>
                
                </tr>

                </table>
        </div>

<div class="ofeesp2" style="display:none;">
        <h7>7.1 - Qual?</h7>
        <div class="row">
            <input class="multisteps-form__input form-control" type="text" name="ofertasEsp2" placeholder="Digite o produto:" />
        </div>      
</div>
</div>
<div class="interesse" style="display:none;">
        <h7>8 - Você tem interesse em ter uma conta no IBRC??</h7>
        <div class="centralizar">
        <div class="form-check">
         <input class="form-check-input" type="radio" value="Sim" name="interesse" id="interesse1">
         <label class="form-check-label" for="interesse1">
           Sim
         </label>
       </div>
       <div class="form-check">
         <input class="form-check-input" type="radio" value="Não" name="interesse" id="interesse2">
         <label class="form-check-label" for="interesse2">
           Não
         </label>
       </div>
     </div>
</div>
<div class="probabilidade">
     <h7>9 - Por último, qual a probabilidade de você indicar a <b><span id="opera"></span></b> para um amigo ou parente? Dê uma nota de 10 a 0, onde 10 é altamente provável e 0 é nem um pouco provável.</h7>
     <div class="centralizar">
     <div class="form-check">
      <input class="form-check-input ruim" type="radio" value="0" name="indicacao" id="indicacao1">
      <label class="form-check-label" for="indicacao1">
        0
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input ruim" type="radio" value="1" name="indicacao" id="indicacao2">
      <label class="form-check-label" for="indicacao2">
        1
      </label>
    </div>
    <div class="form-check">
        <input class="form-check-input ruim" type="radio" value="2" name="indicacao" id="indicacao3">
        <label class="form-check-label" for="indicacao3">
          2
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input ruim" type="radio" value="3" name="indicacao" id="indicacao4">
        <label class="form-check-label" for="indicacao4">
          3
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input ruim" type="radio" value="4" name="indicacao" id="indicacao4">
        <label class="form-check-label" for="indicacao4">
          4
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input ruim" type="radio" value="5" name="indicacao" id="indicacao5">
        <label class="form-check-label" for="indicacao5">
          5
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input ruim" type="radio" value="6" name="indicacao" id="indicacao6">
        <label class="form-check-label" for="indicacao6">
          6
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input ruim" type="radio" value="7" name="indicacao" id="indicacao7">
        <label class="form-check-label" for="indicacao7">
          7
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input ruim" type="radio" value="8" name="indicacao" id="indicacao8">
        <label class="form-check-label" for="indicacao8">
          8
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input bom" type="radio" value="9" name="indicacao" id="indicacao9">
        <label class="form-check-label" for="indicacao9">
          9
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input bom" type="radio" value="10" name="indicacao" id="indicacao10">
        <label class="form-check-label" for="indicacao10">
          10
        </label>
      </div>
  </div>
</div>
  <div class="motivo" style="display:none;">
  <h7>9.1 - Por qual motivo?</h7>
        <div class="row">
            <input class="multisteps-form__input form-control" type="text" name="motivo" placeholder="Digite o motivo:" />
        </div>  
</div>
        <h7>10 - A quanto tempo trabalha no IBRC? </h7>
        <div class="centralizar">
        <div class="row">
            <label for="">Anos:</label>
            <input class="multisteps-form__input form-control" type="number" name="anosTrb" style="width:30%;" placeholder="Digite os anos:" />
        </div>  
        <div class="row">
            <label for="meses">Meses:</label>
            <input class="multisteps-form__input form-control" type="number" name="mesesTrb" style="width:30%;" placeholder="Digite os meses:" required />
        </div> 

                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" id="anterior" title="Prev">Anterior</button>
                      <button class="btn btn-success ml-auto js-btn-next" form="formulario" type="submit" id="proximo2" title="Next">Enviar</button>
                      
                    </div>
                  </div>
                
            
                </div>
            
            </div>
    </div>
    </form>        




  
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Finalizar</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                      <div class="menor">
                  <div style="display:flex; justify-content:center;"> 
                  <h2 style="margin-bottom:50px !important;">Não é possivel responder o formulário com menos de 18 anos !</h2>
                  </div> 
                  <div style="margin-left:60px;display:flex; justify-content:center;">
                  <br/><img src="imgs/form_end.png" name="teste" width="30%">
</div> 
</div>

<div class="maior">
                  <div style="display:flex; justify-content:center;"> 
                  <h2 style="margin-bottom:50px !important;">Teste enviado com sucesso clique no botão para fazer novo teste !</h2>
                  </div> 
                  <div style="margin-left:60px;display:flex; justify-content:center;">
                  <br/><img src="imgs/enviar.png" name="teste" width="30%">
</div> 
</div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    
                    <button class="btn btn-success ml-auto novo" type="button" onClick="window.location.reload();" title="New">Novo Teste</button>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script  src="js/script.js"></script>
<script  src="js/jquery.js"></script>
<script>
   $(document).ready(function() {
    $('.final').click(function(){  
      $(".fim").show();  
      
      $(".ques").hide(); 
      
        
      $(".maior").hide();
      $(".menor").show();                                        
      
     });
     $('.questionario').click(function(){  
      $(".fim").hide();                                             
      $(".ques").show();
     
      
        
      $(".menor").hide(); 
      $(".maior").show(); 
     });
});

$(document).ready(function() {
    $('.raz').click(function(){  
      $(".razao").show();  
                                              
       
     });
     $('.seg').click(function(){  
      $(".razao").hide();                                             
        
     });
});

$(document).ready(function () {
    $("input[name='razao']").change(function () {
        var maxpermitido = 3;
        var cnt = $("input[name='razao']:checked").length;
        if (cnt > maxpermitido) {
            $(this).prop("checked", "");
            alert('O maximo de campos selecionados permitidos é: ' + maxpermitido +' !');
        }
    });
});

$(document).ready(function() {
    $('.cor').click(function(){  
      $(".prods").show();  
      $(".interesse").hide(); 
          
      $(".ofeesp").hide(); 

                                               
       
     });
     $('.cor2').click(function(){  
        $(".prods").hide();  
        $(".interesse").show();
      $(".ofeesp").show();                                              
        
     });
});


$(document).ready(function() {
    $('#ofertasEsp10').change(function()
      {
        if ($(this).is(':checked')) {
            $(".ofeesp2").show();  
        }else{$(".ofeesp2").hide(); };
        
      });
    });
    
 $(document).ready(function() {
    $('#ofertas10').change(function()
      {
        if ($(this).is(':checked')) {
            $(".sugprod").show();  
        }else{$(".sugprod").hide(); };
        
      });
    });

$(document).ready(function() {
    $('.ruim').click(function(){  
      $(".motivo").show();  
                                              
       
     });
     $('.bom').click(function(){  
      $(".motivo").hide();                                             
        
     });
});


$(document).ready(function() {
    $('#razao7').change(function()
      {
        if ($(this).is(':checked')) {
            $(".avalplano").attr("disabled", 'disabled');  
        }else{$(".avalplano").removeAttr('disabled'); };
        
      });
    });

$(document).ready(function() {
    $('#operadora2').change(function(e)
      {
    e.preventDefault();
    var input = $(this).val();
    $("#opera").html(input);
      });
});
 
$("select").change(function()
 {

        $("select option").removeAttr("disabled",""); //enable everything
     
     //collect the values from selected;
     var  arr = $.map
     (
        $("select option:selected"), function(n)
         {
              return n.value;
          }
      );
    

    $("select option").filter(function()
    {
             
        return $.inArray($(this).val(),arr)>-1;
     }).attr("disabled","disabled");   

});
var btn = $("#proximo");

btn.click(function() {
  $('html, body').animate({scrollTop:0}, 'slow');
});

var btn = $("#proximo2");

btn.click(function() {
  $('html, body').animate({scrollTop:0}, 'slow');
});


var btn = $("#anterior");

btn.click(function() {
  $('html, body').animate({scrollTop:0}, 'slow');
});

$('document').ready(function() {
   $(window).scrollTop(0);
});

</script>
</body>
</html>
