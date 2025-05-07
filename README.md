# EstBank - Projeto Web

Este é um site web da EstBank desenvolvido com **Laravel**, utilizando **Blade** como motor de templates. O sistema oferece uma interface responsiva com diversos módulos da EstBank.

## ✅ Pré-requisitos

Antes de iniciar, certifique-se de ter instalado:

* [PHP 8.1+](https://www.php.net/)
* [Composer](https://getcomposer.org/)
* [Node.js + npm](https://nodejs.org/)
* \[MySQL ou outro banco configurado no `.env`]

> 💡 **Dica:** Verifique se a extensão `ext-fileinfo` está habilitada no PHP.

## 🚀 Como rodar o projeto

1️⃣ **Clone o repositório:**

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
```

2️⃣ **Instale as dependências do PHP:**

```bash
composer install
```

3️⃣ **Instale as dependências do frontend:**

```bash
npm install
```

4️⃣ **Configure o ambiente:**

Copie o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

Configure seu banco de dados e outras variáveis no arquivo `.env`.

5️⃣ **Migre as tabelas (se houver banco):**

```bash
php artisan migrate
```

6️⃣ **Compile os assets (CSS/JS):**

```bash
npm run dev
```

7️⃣ **Rode o servidor local:**

```bash
php artisan serve
```

O sistema estará disponível em: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🛠 Comandos úteis

* **Atualizar dependências:**

  ```bash
  composer update
  npm update
  ```

* **Compilar assets para produção:**

  ```bash
  npm run build
  ```

* **Limpar caches:**

  ```bash
  php artisan optimize:clear
  ```

---

## 📂 Estrutura de Pastas (Simplificada)

```
app/                # Código backend (Laravel)
resources/views/    # Templates Blade (HTML)
public/             # Assets públicos (CSS, JS, Imagens)
routes/web.php      # Arquivo de rotas principais
```

---

## 🤝 Contribuição

* Fork o projeto.
* Crie uma branch: `git checkout -b minha-feature`
* Commit suas alterações: `git commit -m 'Minha nova feature'`
* Push para a branch: `git push origin minha-feature`
* Abra um Pull Request.

---

## 📝 Licença

Este projeto está sob licença proprietária EstBank. Todos os direitos reservados.

---
