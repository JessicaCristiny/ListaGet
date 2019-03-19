<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
     
        <title>Filmes</title>
    </head>
    <body>
        
        
        
        <?php

        
            
            $filme = $_GET ["id"];
            
            if ($filme == "1") {
                echo "O primeiro filme de herói com estreia para 2018 nos conta mais sobre  o personagem T’Challa (Chadwick Boseman), que retorna para sua casa após os trágicos eventos de Capitão América: Guerra Civil para assumir o lugar de seu falecido pai. Porém, sua posição de líder é desafiada por conflitos internos criados pelo vilão Erik Killmonger, que busca vingança por acontecimentos de seu passado.";
          } elseif ($filme == "2") {
              
              echo "O primeiro bom motivo para assistir a Homem de Ferro, caso você ainda não o tenha feito, é justamente por ser o primeiro longa do estúdio. O bilionário e genial inventor Tony Stark é sequestrado e forçado a construir uma arma devastadora. Mas usando sua inteligência e engenhosidade, Tony constrói uma armadura blindada de alta tecnologia e escapa ao cativeiro. Ao voltar para os EUA, Stark aprimora a armadura e a utiliza para combater o crime.";
              
            } elseif ($filme == "3") {
                echo "O filme apresenta o herói de uma forma completamente diferente, em um clima divertido. Thor (Chris Hemsworth) está preso do outro lado do universo. Ele precisa correr contra o tempo para voltar a Asgard e parar o Ragnarok, a destruição de seu mundo, que está nas mãos da poderosa e implacável vilã Hela (Cate Blanchett).";
                
            } elseif ($filme == "4") {
                
             echo "Depois de atuar ao lado dos Vingadores, o ‘pequeno’ Peter Parker volta para casa e para a sua vida, já não mais tão normal. Lutando diariamente contra pequenos crimes nas redondezas, ele pensa ter encontrado a missão de sua vida quando o terrível vilão Abutre surge amedrontando a cidade. O problema é que a tarefa não será tão fácil como ele imaginava.";
             
            } elseif ($filme == "5") {
                
                echo "O longa com maior arrecadação em bilheterias da Marvel até hoje (mais de 1,5 bilhão). Loki retorna à Terra enviado pelos chitauri, uma raça alienígena que pretende dominar os humanos. Com a promessa de que será o soberano do planeta, ele rouba o cubo mágico dentro de instalações da S.H.I.E.L.D. e adquire grandes poderes. Loki os usa para controlar o Dr. Erik Selvig e Clint Barton/Gavião Arqueiro, que passam a trabalhar para ele. No intuito de contê-los, Nick Fury convoca um grupo de pessoas com grandes habilidades, mas que jamais haviam trabalhado juntas: Tony Stark/Homem de Ferro, Steve Rogers/Capitão América, Thor, Bruce Banner/Hulk e Natasha Romanoff/Viúva Negra. Mas não é tão simples assim conter o ego e os interesses de cada um deles para que possam agir em grupo.";
               
            }  elseif ($filme == "6") {
                
                echo "Quando o governo cria um órgão para supervisionar os Vingadores, o super time de heróis se divide em dois. Um liderado por Steve Rogers e seu desejo em manter os Vingadores livres para defender a humanidade sem interferência do governo, e o outro que segue a surpreendente decisão de Tony Stark em apoiar o governo na fiscalização de seus atos.  Pela primeira vez vimos a humanidade se voltar contra os ‘heróis’ e o caos causado por eles sempre que tentam salvar o mundo.";
            }   elseif ($filme == "7") {
                
                echo "Guardiões da Galáxia, de 2014, é um grande sucesso do estúdio. No filme, Peter Quill é abduzido do planeta Terra ainda pequeno, levando como lembrança apenas seu walkman. O aventureiro do espaço torna-se presa de caçadores de recompensas depois que rouba a esfera de um vilão traiçoeiro, Ronan. Para escapar do perigo, ele faz uma aliança com um grupo de quatro extraterrestres. Quando Quill descobre que a esfera roubada possui um poder capaz de mudar os rumos do universo, ele e seu grupo deverão proteger o objeto para salvar o futuro da galáxia.";
            }  elseif ($filme == "8") {
                
                echo "Stephen Strange leva uma vida bem sucedida como neurocirurgião. Tudo muda completamente quando sofre um acidente de carro e fica com as mãos debilitadas. Devido a falhas da medicina tradicional, ele parte para um lugar inesperado em busca de cura e esperança, um misterioso enclave chamado Kamar-Taj, localizado em Katmandu. Lá, descobre que o local não é apenas um centro medicinal, mas também a linha de frente contra forças malignas místicas que desejam destruir nossa realidade. Passando a treinar, adquire poderes mágicos, mas precisa decidir se vai voltar para sua vida comum ou defender o mundo.";
            }   elseif ($filme == "9") {
            
                echo "Captain Marvel (no Brasil, Capitã Marvel; em Portugal, Captain Marvel (Capitão Marvel)) é um filme estadunidense de super-herói de 2019, baseado na personagem Carol Danvers da Marvel Comics, produzido pela Marvel Studios e distribuído pela Walt Disney Studios Motion Pictures, sendo o vigésimo primeiro filme do Universo Cinematográfico Marvel. Dirigido por Anna Boden e Ryan Fleck, e escrito por Geneva Robertson-Dworet, é estrelado por Brie Larson, Samuel L. Jackson, Ben Mendelsohn, Djimon Hounsou, Lee Pace, Lashana Lynch, Gemma Chan, Algenis Perez Soto, Rune Temte, Mckenna Grace, Clark Gregg e Jude Law. Em 1995, a história segue Danvers quando ela se torna a Captain Marvel depois que a Terra é pego no centro de um conflito galáctico entre dois mundos alienígenas.";
            }  elseif ($filme == "10") {
            
                echo "O Hulk, por vezes referido como O Incrível Hulk (The Incredible Hulk, no original em inglês) é um personagem de quadrinhos/banda desenhada do gênero super-herói, propriedade da Marvel Comics, editora pela qual as histórias do personagem são publicados desde sua criação, nos anos 1960. Concebido pelo roteirista Stan Lee (1922-2018) e pelo desenhista Jack Kirby (1917-1994), teve sua primeira aparição junto ao público original dos Estados Unidos na revista The Incredible Hulk n°1, lançada no mercado americano pela Marvel Comics em maio de 1962, um título solo do personagem, garantindo-lhe o acesso ao que mais tarde seria popularmente conhecido como Universo Marvel dos quadrinhos/banda desenhada. A partir de então, o Hulk tem aparecido, protagonizando ou não, diversas histórias da editora, se tornando um dos mais visualmente reconhecíveis da mesma, tendo o universo entorno do personagem se expandido continuadamente ao longo das últimas décadas.";
                }
            
        ?>
    </body>
</html>

