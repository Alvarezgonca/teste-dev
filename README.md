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

    `cd nome-do-diretório`

3. **Instale as dependências do Laravel:**

    `composer install`

4. **Instale as dependências do frontend (npm):**

    `npm install`

5. **Copie o arquivo `.env.example` e crie o `.env`:**

    `cp .env.example .env`

6. **Execute a chave da aplicação:**

    `php artisan key:generate`

7. **Configure corretamente as credenciais do banco de dados no arquivo `.env`:**

    ```
        DB_CONNECTION=pgsql
        DB_HOST=pgsql
        DB_PORT=5432
        DB_DATABASE=laravel
        DB_USERNAME=sail
        DB_PASSWORD=password
    ```

8. **(Opcional) Ao final tem uma explicação de como criar um alias para reduzir os códigos.**
    
9. **OBS: Rode os comandos com "sail" caso tenha criado o alias. Caso contrário, utilize "./vendor/bin/sail"**

10. **Inicie os containers do Docker: O comando abaixo irá rodar o Laravel Sail em segundo plano, criando e inicializando os containers necessários**.

    `sail up -d`

    ### ou

    `./vendor/bin/sail up -d`

11. **Execute as migrações do banco de dados: Para garantir que a estrutura do banco de dados esteja configurada corretamente, execute:**

    `sail artisan migrate`

    ### ou

    `./vendor/bin/sail artisan migrate`

12. **Execute os seeders: O comando abaixo vai criar os seeds caso deseje.**

    `sail artisan db:seed`

    ### ou

    `./vendor/bin/sail artisan db:seed`

13. **Compile os assets com Vite:**

    `sail npm run dev`

    ### ou

    `./vendor/bin/sail npm run dev`

14. **Acesse o Projeto: Abra seu navegador e acesse o aplicativo em:**

    `http://localhost`

15. **(Opcional) Criar um Alias para o Sail. Se você usa Zsh, edite ~/.zshrc; se usa Bash, edite ~/.bashrc:**

    `nano ~/.zshrc`
    
    ### ou

    `nano ~/.bashrc`

16. **Adicione ao final do arquivo:**

    `alias sail='./vendor/bin/sail'`

17. **Salve (Ctrl+O + Enter) e saia (Ctrl+X). Em seguida, recarregue o shell:**

    `source ~/.zshrc`

    ### ou

    `source ~/.bashrc`



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
