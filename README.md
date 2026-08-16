# 🏢 Cadastro de Colaboradores — Lojas Brincos e Companhia

Sistema web simples para recepção e sanitização de dados de cadastro de colaboradores, desenvolvido com foco em HTML5 semântico, W3.CSS, CSS3 customizado e PHP nativo para processamento seguro no back-end.

---

## 🛠️ Tecnologias Utilizadas

- **Front-end:** HTML5, CSS3, [W3.CSS (via CDN)](https://www.w3schools.com/w3css/)
- **Back-end:** PHP (Processamento, validação e sanitização de dados)
- **Ferramentas:** VS Code / Code OSS, Terminal Linux

---

## 🔒 Destaques de Segurança e Boas Práticas

- **Sanitização contra XSS:** Tratamento das entradas do usuário via `filter_input()` com `FILTER_SANITIZE_SPECIAL_CHARS`.
- **Tipagem de dados:** Filtragem estrita de valores numéricos (`FILTER_SANITIZE_NUMBER_INT` e `FILTER_SANITIZE_NUMBER_FLOAT`).
- **Acessibilidade:** Marcação semântica com associação estrita entre `<label>` e `<input>` via atributos `id`/`for`.

---

## 🚀 Como Executar o Projeto Localmente

Como o projeto possui lógica em PHP (back-end), ele necessita de um ambiente com o interpretador PHP para ser executado corretamente.

### Pré-requisitos
- [PHP](https://www.php.net/) (versão 7.4 ou superior) instalado na máquina.

### Passo a Passo

1. **Clone o repositório:**
   ```bash
   git clone [https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git](https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git)
   cd SEU_REPOSITORIO
