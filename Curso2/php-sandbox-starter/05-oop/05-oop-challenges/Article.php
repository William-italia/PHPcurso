<!-- Desafio 1
Crie uma classe chamada Article que tenha as seguintes propriedades:
title (título)
content (conteúdo)
published (publicado)
A propriedade published deve ser private e ter um valor padrão de false (falso).

Crie um construtor que receba o title e o content como argumentos e defina os valores das propriedades.

Crie um método chamado publish (publicar) que altera o valor da propriedade published para true (verdadeiro).

Crie um método chamado isPublished (está publicado) que retorna o valor da propriedade published. Lembre-se, ela é privada, então não podemos acessá-la diretamente fora da classe.

Crie duas novas instâncias da classe Article e chame o método publish em uma delas, o que deverá definir a propriedade published como true. Em seguida, chame o método isPublished em ambos os artigos para ver se eles estão publicados.

Quando você imprimir o resultado do método isPublished, você pode envolvê-lo em uma função var_dump ou var_export para ver o valor verdadeiro ou falso real em vez de apenas 1 ou 0. -->

<?php

    class Article {

        private $title;
        private $content;
        private $published = false;

        public function __construct($title, $content) {
            $this->title = $title;
            $this->content = $content;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function getTitle() {
            return $this->title;
        }

        public function setContent($content) {
            $this->content = $content;
        }

        public function getContent() {
            return $this->content;
        }

        public function publish() {
            $this->published = true;
        }

        public function isPublished() {
            return $this->published;
        }
        
    }

    $article1 = new Article('A importancia de aprender PHP', 'Aprender PHP é essencial para quem deseja se tornar um desenvolvedor web. Como uma das linguagens mais utilizadas na criação de sites dinâmicos, oferece inúmeras oportunidades de carreira. Com o PHP, você pode criar desde simples páginas estáticas até complexos aplicativos da web. Além disso, o vasto ecossistema de frameworks, como Laravel, simplifica o desenvolvimento e permite criar rapidamente aplicativos robustos. Ter conhecimento em PHP também proporciona uma base sólida em programação, facilitando a transição para outras linguagens. Em resumo, dominar o PHP é um passo importante para quem busca se destacar no mundo do desenvolvimento web.');
    $article2 = new Article('Titulo do artigo 2', 'conteudo do artigo 2');


    $article2->publish();

    echo "Artigo 1 publicado: " . var_export($article1->isPublished(), true) . '<br>';
    if($article1->isPublished()) {
        echo "Artigo 1: " . '<br>' . $article1->getTitle() . '<br>' . $article1->getContent() . '<br>';
    }
    
    
    echo "Artigo 2 publicado: " . var_export($article2->isPublished(), true) . '<br>';
    if($article2->isPublished()) {
        echo "Artigo 1: " . '<br>' . $article2->getTitle() . '<br>' . $article2->getContent() . '<br>';
    }

?>