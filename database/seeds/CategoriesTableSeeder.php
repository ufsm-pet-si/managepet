<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names_ensino = ['Café com especialista', 'English Day', 'GAPRO', 'Let\'s Talk English', 'Oficinas Práticas', 'Tutor Júnior'];
        $names_pesquisa = ['DivulgaPET', 'Manage PET', 'Nossas Pesquisas', 'Programa Aprendiz', 'Redigindo a Ciência', 'SI-Mostra'];
        $names_extensao = ['Doa PET', 'Empreender-"SI"', 'Oficinas de Jogos Educativos', 'PET Redação', 'PET Visita', 'Projeto Circulação', 'SAINF', 'UFSM Por um Dia'];
        
        $types_ensino = ['Externa', 'Interna', 'Externa', 'Externa', 'Externa', 'Externa'];
        $types_pesquisa = ['Externa', 'Interna', 'Interna', 'Interna', 'Interna', 'Externa'];
        $types_extensao = ['Interna', 'Externa', 'Interna', 'Externa', 'Interna', 'Externa', 'Externa', 'Externa'];

        $descriptions_ensino = [
            'Esta atividade ocorre através de encontros em forma de entrevista, onde são convidados profissionais vinculados a Tecnologia da Informação e áreas afins.',
            'Promover uma atividade interativa, com foco em elevar o conhecimento dos petianos na língua inglesa onde os próprios petianos deverão estabelecer temas e organizar a atividade.',
            'A atividade Grupo de Apoio a Programação (GAPro) consiste na apresentação de alguns tópicos relacionados às disciplinas de programação.',
            'Esta atividade visa organizar encontros entre os alunos do curso para desenvolver as habilidades de comunicação na Língua inglesa.',
            'Esta atividade será responsável pela realização de oficinas práticas que explorem temas diversos relacionados à computação.',
            'Nesta atividade os integrantes do PET irão tutorar os alunos ingressantes no curso, acompanhando o seu desenvolvimento durante os seus primeiros semestres na UFSM.'
        ];

        $descriptions_pequisa = [
            'Esta atividade é responsável pela realização de encontros com pesquisadores que atuam no âmbito de cursos na área da Computação, possibilitando que os mesmos divulguem suas atividades e temas de pesquisa aos alunos do curso de Sistemas de Informação.',
            'Projeto de desenvolvimento de um produto de software, que é gerido pelos próprios integrantes do grupo, sem a orientação direta de um professor quanto ao desenvolvimento do produto, ou seja, o projeto deve ser autogerenciável.',
            'Nesta atividade, os bolsistas organizarão e participarão como ouvintes e apresentadores de seminários, onde os alunos da graduação, do próprio grupo PET e da Pós-Graduação serão convidados a apresentar seus trabalhos de pesquisa.',
            'Neste programa, os petianos desenvolvem atividades de Iniciação Científica e Tecnológica, principalmente em conjunto com os grupos de pesquisa do Programa de Pós-Graduação em Informática (PPGI) ou com outros grupos de pesquisa de Programas de Pós-Graduação da instituição, se pertinente, sob orientação dos pesquisadores de cada grupo.',
            'Nesta atividade, os petianos desenvolverão a escrita de artigos científicos, relatando as experiências e os resultados obtidos das atividades desenvolvidas pelo programa de Iniciação Científica e Tecnológica, sob orientação dos pesquisadores de cada grupo de pesquisa.',
            'Nesta atividade, o PET irá proporcionar um espaço de divulgação dos trabalhos desenvolvidos pelos alunos do curso.'
        ];

        $descriptions_extensao = [
            'Doa PET é uma atividade que será realizada ao longo do ano, juntamente com outras atividades que arrecadem alimentos não perecíveis ou outros materiais úteis.',
            'Proporcionar palestras e discussões relacionadas a Administração e Empreendedorismo, ministradas por profissionais ligados à Administração e/ou empresários, para os alunos do curso de Sistemas de Informação.',
            'Nesta atividade os petianos irão desenvolver oficinas de jogos educativos com foco em lógica de programação.',
            'Nesta atividade, o grupo PET-SI disponibilizará para a comunidade, através de seu site, publicações em texto com um viés tecnológico de forma clara, breve e intuitiva.',
            'PET Visita é uma atividade que será realizada ao longo do ano, onde os petianos irão visitar entidades para realizar atividades de lazer como jogos, leitura de livros, cinema, etc.',
            'Esta atividade é de participação geral dos grupos PET da Universidade Federal de Santa Maria como forma de conscientizar a comunidade para a doação de sangue, plaquetas e medula óssea. ',
            'Organizada pelos alunos dos cursos de Sistemas de Informação e Ciência da Computação, a Semana Acadêmica da Informática é um evento que conta com palestras, workshops e maratona de programação, com todas suas atividades voltadas para a área da Tecnologia da Informação.',
            'Esta atividade será realizada em conjunto com os outros PETs da UFSM e tem por objetivo organizar um encontro com ações interativas para os estudantes de escolas de cidades próximas a Santa Maria.'
        ];

        for ($i = 0; $i < count($names_ensino); $i++)
            DB::table('categories')->insert([
                'name'          => $names_ensino[$i],
                'description'   => $descriptions_ensino[$i],
                'search_center' => 'Ensino',
                'type'          => $types_ensino[$i]
            ]);
            
        for ($i = 0; $i < count($names_pesquisa); $i++)
        DB::table('categories')->insert([
            'name'          => $names_pesquisa[$i],
            'description'   => $descriptions_pequisa[$i],
            'search_center' => 'Pesquisa',
            'type'          => $types_pesquisa[$i]
        ]);    
        
        
        for ($i = 0; $i < count($names_extensao); $i++)
            DB::table('categories')->insert([
                'name'          => $names_extensao[$i],
                'description'   => $descriptions_extensao[$i],
                'search_center' => 'Extensão',
                'type'          => $types_extensao[$i]
            ]);    
    }
}
