<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ATHIA Projeto</title>
    <link rel="stylesheet" href="../css/index.css" />
  </head>
  <body>
    <nav>
      <section class="nav__main">
        <section class="nav__img">
          <img
            src="../assets/icon/empresa.png"
            class="img__sigame"
            alt="Logo do sistema"
          />
        </section>

        <section>
          <h1>Gerenciamento de Empresas</h1>
          <h1>Candidato: Felipe Shicasho de Toledo</h1>
        </section>

        <h1><a href="login.html"> - SAIR - </a></h1>
      </section>
    </nav>

    <main>
      <aside>
        <ul>
          <li class="li__principal">
            <section class="li__button">
              <img
                src="../assets/icon/empresa.png"
                class="li__icon"
                alt="Ícone da empresa"
              />
              Empresa:
            </section>
            <ul>
              <li class="li__link li__menu">
                <img
                  class="li__icon__button"
                  src="../assets/icon/add.png"
                  alt=""
                /><a href="">Adicionar Empresa</a>
              </li>
              <li class="li__link li__menu">
                <img
                  class="li__icon__button"
                  src="../assets/icon/updated.png"
                  alt=""
                /><a href="">Modificar Empresa</a>
              </li>
              <li class="li__link li__menu">
                <img
                  class="li__icon__button"
                  src="../assets/icon/remove.png"
                  alt=""
                /><a href="">Remover Empresa</a>
              </li>
              <li class="li__link li__menu">
                <img
                  class="li__icon__button"
                  src="../assets/icon/view.png"
                  alt=""
                /><a href="">Visualizar Empresa</a>
              </li>
              <li class="li__link li__menu">
                <img
                  class="li__icon__button"
                  src="../assets/icon/view.png"
                  alt=""
                />
                <a href="">Visualizar Setores da Empresa</a>
              </li>
            </ul>
          </li>
          <li class="li__principal">
            <section class="li__button">
              <img
                src="../assets/icon/setor.png"
                class="li__icon"
                alt="Ícone do setor"
              />
              Setor:
            </section>
            <ul>
              <li class="li__link li__menu">
                <img
                  src="../assets/icon/add.png"
                  class="li__icon__button"
                  alt=""
                /><a href="">Adicionar Setor</a>
              </li>
              <li class="li__link li__menu">
                <img
                  src="../assets/icon/updated.png"
                  class="li__icon__button"
                  alt=""
                /><a href="">Modificar Setor</a>
              </li>
              <li class="li__link li__menu">
                <img
                  src="../assets/icon/remove.png"
                  class="li__icon__button"
                  alt=""
                /><a href="">Remover Setor</a>
              </li>
              <li class="li__link li__menu">
                <img
                  src="../assets/icon/view.png"
                  class="li__icon__button"
                  alt=""
                /><a href="">Visualizar Setor</a>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
      <section>
        <section class="forms__input">
          <h1>Adicionar Empresa</h1>
          <form action="../../data/processamento.php" method="POST" class="forms__section">
            <label for="razaoSocial" class="forms__input">
              Razão Social
              <input type="text" placeholder="Razão Social" name="inputRazaoSocial" class="form__text"/>
            </label>
            <label for="nome_fantasia" class="forms__input">
              Nome Fantasia
              <input type="text" placeholder="Nome Fantasia" name="inputNomeFantasia" class="form__text"/>
            </label>
            <label for="cnpj" class="forms__input">
              CNPJ
              <input type="text" placeholder="CNPJ" name="inputCnpj" class="form__text"/>
            </label>
            <input type="submit" value="Cadastrar" class="form__button">
          </form> 
        </section>
      </section>
    </main>

    <script src="../js/script.js"></script>
  </body>
</html>