<template>
    <footer class="bg-dark text-white pt-5 pb-4">
      <div class="container">
        <div class="row">
          <!-- Endereços -->
          <div class="col-md-4 mb-4">
            <h5 class="fw-bold">Rio Grande do Sul</h5>
            <p class="small mb-3">
              Praça XV de Novembro, 66, sala 406<br>
              Centro Histórico – CEP: 90.020‑080<br>
              Porto Alegre
            </p>
            <h5 class="fw-bold">Rio de Janeiro</h5>
            <p class="small mb-3">
              Rua Luiz Alberto Ramos Machado (antiga Rua K), 140 – Lote 5 – Quadra K<br>
              Centro – CEP: 24901‑060<br>
              Maricá
            </p>
            <h5 class="fw-bold">Bahia</h5>
            <p class="small">
              Rua Manuel Fernandes de Almeida, 154, Sala 02<br>
              Centro – CEP: 45.810‑000<br>
              Porto Seguro
            </p>
          </div>
          <!-- Menu e Contato -->
          <div class="col-md-4 mb-4">
            <h5 class="fw-bold">Menu</h5>
            <ul class="nav flex-column mb-3">
              <li class="nav-item"><a href="https://libresolucoes.com.br/#4" class="nav-link p-0 text-white">Início</a></li>
              <li class="nav-item"><a href="https://libresolucoes.com.br/#1" class="nav-link p-0 text-white">Empresa</a></li>
              <li class="nav-item"><a href="https://libresolucoes.com.br/#2" class="nav-link p-0 text-white">Soluções</a></li>
              <li class="nav-item"><a href="https://libresolucoes.com.br/#3" class="nav-link p-0 text-white">Contato</a></li>
              <li class="nav-item"><a href="https://libresolucoes.tomticket.com" class="nav-link p-0 text-white">Help Desk</a></li>
              <li class="nav-item"><a href="https://libresolucoes.com.br/index.php/login/" class="nav-link p-0 text-white">Educacional</a></li>
            </ul>
            <h5 class="fw-bold">Central de Relacionamento</h5>
            <p class="small mb-0"><i class="fas fa-phone-alt me-2"></i>(51) 2314‑2314</p>
          </div>
          <!-- Redes Sociais -->
          <div class="col-md-4 mb-4">
            <h5 class="fw-bold">Redes Sociais</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fab fa-facebook me-2"></i>Libre Soluções</li>
              <li class="mb-2"><i class="fab fa-instagram me-2"></i>@libresolucoes</li>
              <li><i class="fab fa-linkedin-in me-2"></i>Libre Soluções</li>
            </ul>
            <p class="mt-3"><a href="https://libresolucoes.com.br/index.php/politica-de-privacidade/" class="text-white text-decoration-none">Conheça nossa Política de Privacidade</a></p>
          </div>
        </div>
        <div class="row align-items-center mt-4">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <img src="https://libresolucoes.com.br/wp-content/uploads/2021/12/logo-libre-branco-1-e1641222335760.png"
                 alt="Logo Libre Soluções" class="img-fluid" style="max-height: 80px;">
          </div>
          <div class="col-md-6 text-center text-md-end">
            <small class="d-block">&copy; 2022 Todos os direitos reservados - LIBRE SOLUCOES EM TECNOLOGIA LTDA | CNPJ 05.200.012/0001‑83</small>
          </div>
        </div>
      </div>
    </footer>
  </template>

  <script>
  export default {
    name: 'FooterComponent'
  };
  </script>

  <style scoped>
    footer {
        border-top: 8px solid greenyellow;
    }
    footer a {
        color: #fff;
    }
    footer a:hover {
        text-decoration: underline;
    }
  </style>
