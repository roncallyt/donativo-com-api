<p align="center"><img src="https://raw.githubusercontent.com/roncallyt/donativo-com-api/master/public/images/logo-3.png" width="300"></p>

## Sobre

Donativo com API é um projeto de cunho educacional com o objetivo de introduzir os formandos aos conceitos de orientação à objeto. Neste projeto iremos construir uma API para o site/blog, com as funcionalidades padrões de CRUD.

## Instalação

Clone o repositório para sua máquina utilizando o comando abaixo ou faça o download do código fonte.

```bash
git clone https://github.com/roncallyt/donativo-com-api.git donativo
```

Use o [composer](https://getcomposer.org/) para instalar as dependências necessárias do projeto.

```bash
composer install
```

Após a instalação das dependências, deve-se fazer as alterações necessárias no arquivo ```.env``` de acordo com o seu ambiente de desenvolvimento e por fim executar o seguinte comando na raiz do seu projeto:

```bash
php artisan migrate --seed
```

Esse comando vai criar toda estrutura necessária no seu banco de dados e alimentá-lo com dados iniciais necessários para o funcionamento. 

Esse repositório possui 4 tags principais que indicam o passo a passo do desenvolvimento:

1. A tag ```passo-1``` refere-se à instalação e configuração do Laravel Sanctum.
2. A tag ```passo-2``` refere-se à criação do método de autenticação.
3. A tag ```passo-3``` refere-se à criação do módulo de Categorias, contendo Controller, Form Request, Eloquent Resource e Rotas.
4. A tag ```passo-4``` refere-se à criação do módulo de Posts, content Controller, Form Request, Eloquent Resource e Rotas.

Para dar checkout em uma tag específica utilize o comando abaixo:

```bash
git checkout passo-4
```

## Licença
[MIT](https://choosealicense.com/licenses/mit/)
