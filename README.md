# Project Login

Sistema simples de **login e cadastro de usuários** desenvolvido em PHP puro com MySQL. Projeto mais antigo, criado como estudo dos fundamentos de autenticação web: sessões, formulários, conexão com banco de dados e proteção de rotas.

## ✨ Funcionalidades

- **Cadastro de usuário** (nome, e-mail, senha, telefone e data de nascimento)
- **Login** com validação de usuário e senha no banco
- **Sessão** (`$_SESSION`) para manter o usuário autenticado
- **Página protegida** (`home.php`), acessível apenas a usuários logados
- **Logout**, destruindo a sessão ativa

## 🛠️ Tecnologias

- PHP (puro, sem framework)
- MySQL / MySQLi + PDO
- HTML/CSS
- [Bootstrap](https://getbootstrap.com/) e [Font Awesome](https://fontawesome.com/) via CDN

## 📁 Estrutura do projeto

```
login/
├── config/
│   ├── connect.php    # Conexão com o banco (MySQLi e PDO)
│   ├── create.php      # Processa o cadastro de novos usuários
│   ├── valida.php      # Processa o login
│   └── protect.php     # Middleware simples de proteção de rota
├── templetes/
│   └── header.php      # Cabeçalho HTML comum às páginas
├── css/
│   └── style.css
├── index.php           # Tela de login
├── cadastra.php         # Tela de cadastro
├── home.php             # Página protegida (pós-login)
├── logout.php           # Encerra a sessão
└── sucesso.php          # Feedback de cadastro concluído
```

## 📌 Notas do projeto

Este é um projeto de estudo, mais antigo, focado em aprender os conceitos básicos de autenticação com PHP e MySQL. Por isso, alguns pontos merecem atenção caso o projeto seja utilizado:

- As senhas são armazenadas **em texto puro** no banco — em um cenário real, seria essencial usar `password_hash()`/`password_verify()`.
- A validação de login (`valida.php`) usa MySQLi com escaping manual, enquanto o cadastro (`create.php`) usa PDO com prepared statements — vale padronizar em uma única abordagem.
- As credenciais do banco estão hardcoded em `connect.php` — em produção, o ideal seria usar variáveis de ambiente.

## 👤 Autor

Desenvolvido por [**Luedukar**](https://github.com/Luedukar) (ME)

