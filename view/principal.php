<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--w3schools-->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
<title>Enlatados Juarez</title>   
<style>
    .w3-sidebar {
        width: 120px;
    }

    body,h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<nav class="w3-sidebar w3-bar-block w3-center w3-blue">

<a href="#home" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey"><i class="fa fa-home w3-xxlarge"></i>
<p>HOME</p>
</a>

<a href="#dPessoais" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey"><i class="fa fa-address-book w3-xxlarge"></i>
<p>Dados Pessoais</p>
</a>


<a href="#formacao" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey"><i class="fa fa-mortar-board w3-xxlarge"></i>
<p>Formação</p>
</a>


</nav>

<div class="w3-padding-large" id="main">

<header class="w3-container w3-padding-32 w3-center " id="home">
  <h1>

  <img src="#" alt="Logo" class="w3-image" width="50%">
  <br>

  </h1>

  <a class="w3-text-cyan" href="http://www.freepik.com">Designed by brgfx/ freepik</a>
  <br>
  <h1 class="w3-text-cyan">
    SISTEMA DE CURRICULOS
  </h1>

</header>


  


</div>

<div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
    <h2 class="w3-text-cyan">Dados Pessoais</h2>

    <form action="" method="$_POST"
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="first" type="text" placeholder="Nome">
            </div>

            <br>

            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="last" type="date" placeholder="dd/mm/aa">
            </div>

            <br>

            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-drivers-license"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="last" type="text" placeholder="Carteira de motorista">
            </div>

            <br>

            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="last" type="text" placeholder="Email">
            </div>

            <br>

                
            <div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
    <h2 class="w3-text-cyan"> Formações</h2>
    <br>
   </div>
 
<form action="" method="post" class="w3-row w3-ligth-grey w3-text-blue w3-margin" style="width:70% ;"     >

<div class="w3-row w3-center">
<div class="w3-col" style="width: 50%;">
Data inicial
</div>
<div class="w3-res">
    Data Final
</div>
</div>
<div class="w3-row w3-section">
    <div class="w3-row w3-col w3-section" style="width: 45%;">
        <div class="w3-col" style="width: 15%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
    </div>
    <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtinicioFA" type="date" placeholder="">
    </div>
</div>


    <div class="w3-row  w3-section w3-rest">
        <div class="w3-col w3-margin-left " style="width: 13%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
    </div>
    <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtfimFA" type="date" placeholder="">
    </div></div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width: 7%;">
            <i class="w3-xxlarge fa fa-align-justify"></i>
        </div><div class="w3-rest">
            <input class="w3-input w3-border w3-round-large " name="txtDescFA" type="text"
            placeholder="Descrição ex: Técnico em Densenvolvimento de sistemas - Centro Paula Souza">
        </div>
    </div>
    <div class="w3-row w3-section">
        <div class="w3-center">
            <button name="btnAddformacao" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
            <i class="w3-xxlarge fa fa-user-plus"></i>
            </button>
        </div>
    </div>
</form>   
<div class="w3-container">
    <table class="w3-table-all w3-centered">
    <thead>
    <tr class="w3-center w3-blue">
   
    <th>Início</th>
    <th>Fim</th>
    <th>Descrição</th>
    <th>Apagar</th>
    </tr><thead>

    </table>
    </div> 

    <div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
    <h2 class="w3-text-cyan">Outras Formações</h2>
   </div>
<form action="" method="post" class="w3-row w3-ligth-grey  " style="width:100% ;"     >

<div class="w3-row w3-center">
<div class="w3-col" style="width: 50%;">
Data inicial
</div>
<div class="w3-res">
    Data Final
</div>
</div>
<div class="w3-row w3-section">
    <div class="w3-row w3-col w3-section" style="width: 45%;">
        <div class="w3-col" style="width: 15%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
    </div>
    <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtinicioFA" type="date" placeholder="">
    </div>
</div>


    <div class="w3-row  w3-section w3-rest">
        <div class="w3-col w3-margin-left " style="width: 13%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
    </div>
    <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtfimFA" type="date" placeholder="">
    </div></div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width: 7%;">
            <i class="w3-xxlarge fa fa-align-justify"></i>
        </div><div class="w3-rest">
            <input class="w3-input w3-border w3-round-large " name="txtDescFA" type="text"
            placeholder="Descrição ex: Técnico em Densenvolvimento de sistemas - Centro Paula Souza">
        </div>
    </div>
    <div class="w3-row w3-section">
        <div class="w3-center" >
            <button name="btnAddformacao" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
            <i class="w3-xxlarge fa fa-user-plus"></i>
            </button>
        </div>
    </div>
</form>   
<div class="w3-container">
    <table class="w3-table-all w3-centered">
    <thead>
    <tr class="w3-center w3-blue">
   
    <th>Início</th>
    <th>Fim</th>
    <th>Descrição</th>
    <th>Apagar</th>
    </tr><thead>

    </table>
    </div> 
            


</div>









</body>
</html>