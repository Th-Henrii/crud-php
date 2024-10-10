<style>
    nav{
        height:100px;
    }
    .title-header{
        position:Relative;
        left:10%;
        font-family:Arial;
        color:white;
    }
      .homologacao{
        padding:12px;
        position:Relative;
        left:5%;
        background-color:red;
        font-family:Arial;
        font-size: 15px;
        color:white;
        border-radius:9px;
        box-shadow:2px 2px 2px gray;
    }
    .container-fluid{
      position:Relative;
      left:30%;
    }
    .nav-item1{
      position:Relative;
      left:0%;
      margin-right:5px;
    }
    @media screen and (min-width: 1024px) and (max-width: 1366px) {
    
    .title-header {
        position: relative;
        padding: 10px;
    }

    /* Botão de homologação */
    .homologacao {
        padding: 10px;
        position: relative;
        left: 3%; 
        background-color: red;
        font-family: Arial;
        font-size: 14px; 
        color: white;
        border-radius: 8px;
        box-shadow: 1px 1px 1px gray; 
    }

    /* Container principal */
    .container-fluid {
        position: relative;
        left: 20%; 
        width: 60%;
    }
    .nav-item{
        position: relative;
        left:-30%;
        display:inline-block;
    }
    .nav-item1{
        position: relative;
        left:0%;
        display:inline-block;
    }
}
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <h1 class="homologacao"><em>HOMOLOGAÇÃO</em></h1>
      <h6 class="title-header"><em>PROJETO SITE</em></h6>
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novo" target="_blank">Cadastrar OP's</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar" target="_blank">Lista de OP's</a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item1">
            <a class="nav-link" href="?page=login" target="_blank">Login</a>
          </li>
          <li class="nav-item1">
            <a class="nav-link" href="?page=register" target="_blank">Registrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>