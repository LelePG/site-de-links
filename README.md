## Site de links pessoais
<p align = "center"> <img src= "imagens/projeto.png" width = "400"> </p>

## O que é este projeto?
Este projeto é um site de links pessoal inspirado pelo projeto desenvolvido pela [Levxyca](https://github.com/levxyca/links). Neste projeto, estou reunindo todos os links que acho relevantes sobre minha vida na internet e também aproveitando pra aplicar alguns conceitos que estou estudando ultimamente.

## Como este projeto foi estruturado?
No arquivo index.php se encontra o código responsável pela interface visual do site. Neste arquivo, é importado o TailwindCSS através de um CDN e o PHP é utilizado para criar uma classe com todas as informações necessárias para cada link da lista de itens e também para renderizá-la através de um foreach. Inicialmente, a abordagem que eu estava pensando em utilizar para gerar a lista dinâmicamente era uma instância Vue, mas neste caso o PHP conseguiu resolver o problema de uma maneira muito mais rápida.

Na pasta imagens, estão disponíveis todas as imagens utilizadas no projeto. A minha imagem de perfil e a imagem mostrada neste README se encontram diretamente na pasta imagens e os logos utilizados nos links se encontram na pasta logos, geralmente em uma resolução de 40X40 que foi a resolução recomendada pela auditoria que fiz no site tendo dispositivos mobile em mente.

## Quais tecnologias foram utilizadas neste projeto?
* PHP -> O motivo principal para utilizar esta linguagem, é que no momento de desenvolvimento deste projeto, eu estou estudando PHP, e queria poder gerar uma estrutura de lista através de um for.
* Tailwind CSS -> Um framework CSS que basicamente já possui a implementação de diversas classes CSS, assim ao invés de implementar as classes na mão, é possível só adicionar as classes que já existem no framework para obter o resultado desejado.
* Lighthouse -> Inspetor de sites do devtools, utilizado para melhorar a acessibilidade, boas práticas e performance do site.

## Links úteis 
* [Documentação TailwindCSS](https://tailwindcss.com/docs/installation)
