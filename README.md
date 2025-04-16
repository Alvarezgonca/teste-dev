# Cadastro de Contatos - Processo Seletivo

## Sobre o Projeto

Este é um projeto desenvolvido para o processo seletivo da **Libre Soluções de Governo**. O objetivo do projeto é criar uma aplicação para **gerenciamento de contatos**, permitindo a listagem, cadastro, edição e exclusão de contatos, bem como o gerenciamento de seus endereços.

Ao final terá os requisitos/regras deste teste prático.

## Tecnologias Utilizadas

- **Backend**: Laravel 11
- **Banco de Dados**: PostgreSQL
- **Frontend**: Vue.js
- **Ambiente de Desenvolvimento**: Docker (com Laravel Sail)
- **Gerenciamento de Dependências**: Composer, npm

## Como Rodar o Projeto

### Pré-Requisitos:

- **Docker**: A aplicação usa Docker para configurar os containers necessários.
- **Laravel Sail**: O ambiente de desenvolvimento é gerenciado pelo Laravel Sail.
- **Composer**: Gerenciador de dependências PHP.
- **npm**: Gerenciador de pacotes Node.

### Passos para Rodar:

1. **Clone este repositório**:

    `git clone https://github.com/Alvarezgonca/teste-dev.git`

2. **Navegue até o diretório do projeto**:

    `cd teste-pratico`

3. **Inicie os containers do Docker: O comando abaixo irá rodar o Laravel Sail em segundo plano, criando e inicializando os containers necessários**.

    `sail up -d`

4. **Execute as migrações do banco de dados: Para garantir que a estrutura do banco de dados esteja configurada corretamente, execute:**

    `sail artisan migrate`

5. **Acesse o Projeto: Abra seu navegador e acesse o aplicativo em:**

    `http://localhost`



# Libre Soluções de Governo
## Processo Seletivo - Desenvolvimento

### Instruções Gerais

1. **Fork do Repositório:** Faça um fork **PÚBLICO** deste repositório.
2. **Tecnologias a serem utilizadas:**
   - **Backend:** Laravel 11
   - **Banco de Dados:** PostgreSQL
   - **Ambiente:** Livre (preferencialmente uso do Docker, mas não é obrigatório)
   - **Frontend:** Utilize um framework de sua preferência ou, se preferir, HTML5, JavaScript e CSS.

### Projeto: Cadastro de Contatos

#### Requisitos do Projeto

- **Página Principal:**
  - Exibir uma lista de contatos com os seguintes campos:
    - Sequencial
    - Nome
    - Telefone
    - Idade
  - Incluir uma barra de pesquisa para filtrar a lista de contatos.
  - Implementar paginação para a listagem.
  - Incluir um botão para cadastrar novos contatos.
  - Ao lado de cada contato, fornecer três botões de ação:
    - **Exibir Endereço:** Ao clicar, abrir um modal com o endereço do contato.
    - **Editar:** Permitir editar as informações do contato.
    - **Deletar:** Remover o contato da lista.

- **Tela de Cadastro:**
  - Permitir o cadastro de um novo contato, incluindo os campos de:
    - Nome
    - Telefone
    - Idade
    - Endereço (cep, rua, número, complemento, cidade, estado)

### Estilo e Design

- O estilo do site (cores, fontes e disposição dos elementos) é livre. Sinta-se à vontade para usar sua criatividade e refletir sua visão de design.

### Entrega

- Tempo de execução: 5 dias corridos (o tempo será contabilizado a partir da criação do Fork).
