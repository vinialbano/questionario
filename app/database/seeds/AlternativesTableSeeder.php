<?php

class AlternativesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('alternatives')->delete();

        //Aparece em mais de uma questão
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, de 1 a 5 dias no mês';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, de 6 a 19 dias no mês';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, 20 dias ou mais no mês';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Menos de 30 dias';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Mais de 30 dias e menos de um ano';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Mais de um ano';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, tem 1';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, tem 2';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, tem 3';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, tem 4';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Nunca tomei';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Nunca fumei';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Nunca cheirei';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Nunca experimentei';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Não lembro';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Não sei';
        $alternative->save();

        //Questão 1
        $alternative = new Alternative;
        $alternative->text = 'Masculino';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Feminino';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = '15 anos';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = '16 anos';
        $alternative->save();
        $alternative = new Alternative;
        $alternative->text = '17 anos';
        $alternative->save();
        $alternative = new Alternative;
        $alternative->text = '18 anos';
        $alternative->save();
        $alternative = new Alternative;
        $alternative->text = '19 anos';
        $alternative->save();
        $alternative = new Alternative;
        $alternative->text = '20 anos';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Liberdade Assistida';
        $alternative->save();
        
        $alternative = new Alternative;
        $alternative->text = 'Prestação de Serviços à Comunidade';
        $alternative->save();

        //Questão 2
        //A idade será inserida

        //Questão 3
        $alternative = new Alternative;
        $alternative->text = 'Pai';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Mãe';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Madrasta';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Padrasto';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Irmã(s) ou Irmão(s)';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Avó(s) ou Avô(s)';
        $alternative->save();

        //Outros serão inseridos

        //Questão 4
        $alternative = new Alternative;
        $alternative->text = 'Vivem juntos';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Vivem separados';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Um deles já morreu (ou os dois)';
        $alternative->save();

        //Questão 5
        $alternative = new Alternative;
        $alternative->text = 'Não faltei';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Faltei de 1 a 3 dias';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Faltei de 4 a 8 dias';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Faltei 9 dias ou mais';
        $alternative->save();

        //Questão 6-A
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 6-B
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca tomei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Eu tinha X anos';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não lembro';
        $alternative->save();
        */

        //Questão 6-C
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 6-D
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 1 a 5 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 6 a 19 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, 20 dias ou mais no mês';
        $alternative->save();
        */

        //Questão 6-E
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Já tentei, mas não consegui';
        $alternative->save();

        //Questão 6-F
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca tomei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Menos de 30 dias';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Mais de 30 dias e menos de um ano';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Mais de um ano';
        $alternative->save();
        */

        //Questão 7-A
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 7-B
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca tomei';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Não, nunca misturei com álcool';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, já misturei com álcool';
        $alternative->save();

        //Questão 8-A
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 8-B
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 8-C
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 1 a 5 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 6 a 19 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, 20 dias ou mais no mês';
        $alternative->save();
        */

        //Questão 8-D
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca fumei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Eu tinha X anos';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não lembro';
        $alternative->save();
        */

        //Questão 8-E
        $alternative = new Alternative;
        $alternative->text = 'Não fumo';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'De 1 a 10 cigarros por dia';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'De 11 a 20 cigarros por dia';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Mais de 20 cigarros por dia';
        $alternative->save();

        //Questão 9
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 10-A
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 10-B
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 10-C
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 1 a 5 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 6 a 19 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, 20 dias ou mais no mês';
        $alternative->save();
        */

        //Questão 10-D
        $alternative = new Alternative;
        $alternative->text = 'Não cheirei';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Loló/Lança';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Cola';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Éter';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Gasolina';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Tíner/Aguarrás/Tinta/Benzina';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Esmalte/Acetona';
        $alternative->save();

        //Inserir outros

        //Questão 10-E
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca cheirei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Eu tinha X anos';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não lembro';
        $alternative->save();
        */

        //Questão 10-F
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca cheirei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Menos de 30 dias';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Mais de 30 dias e menos de um ano';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Mais de um ano';
        $alternative->save();
        */

        //Questão 10-G
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca cheirei';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Tinha em minha casa';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Ganhei de amigos';
        $alternative->save();

        /*
        $alternative = new Alternative;
        $alternative->text = 'Não lembro';
        $alternative->save();
        */
        //Inserir outros

        //Questão 11-A
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 11-B
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 11-C
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 1 a 5 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 6 a 19 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, 20 dias ou mais no mês';
        $alternative->save();
        */

        //Questão 11-D
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca experimentei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Eu tinha X anos';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não lembro';
        $alternative->save();
        */

        //Questão 11-E
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca fumei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Menos de 30 dias';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Mais de 30 dias e menos de um ano';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Mais de um ano';
        $alternative->save();
        */

        //Questão 12-A
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir qual

        //Questão 12-B
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 12-C
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 1 a 5 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 6 a 19 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, 20 dias ou mais no mês';
        $alternative->save();
        */

        //Questão 12-D
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca tomei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Eu tinha X anos';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não lembro';
        $alternative->save();
        */

        //Questão 13
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Holoten';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Carpinol';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Medavane';
        $alternative->save();

        //Questão 14
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir qual

        //Questão 15-A
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 15-B
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 15-C
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 1 a 5 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 6 a 19 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, 20 dias ou mais no mês';
        $alternative->save();
        */

        //Questão 15-D
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca experimentei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Eu tinha X anos';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não lembro';
        $alternative->save();
        */

        //Questão 15-E
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca cheirei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Menos de 30 dias';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Mais de 30 dias e menos de um ano';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Mais de um ano';
        $alternative->save();
        */

        //Questão 16-A
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Crack';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Merla';
        $alternative->save();

        //Questão 16-B
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 16-C
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 1 a 5 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 6 a 19 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, 20 dias ou mais no mês';
        $alternative->save();
        */

        //Questão 16-D
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca experimentei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Eu tinha X anos';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não lembro';
        $alternative->save();
        */

        //Questão 16-E
        $alternative = new Alternative;
        $alternative->text = 'Nunca usei';
        $alternative->save();

        /*
        $alternative = new Alternative;
        $alternative->text = 'Menos de 30 dias';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Mais de 30 dias e menos de um ano';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Mais de um ano';
        $alternative->save();
        */

        //Questão 17-A
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Artane';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Bentyl';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Akineton';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Chá de Lírio';
        $alternative->save();

        //Questão 17-B
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 17-C
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 1 a 5 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, de 6 a 19 dias no mês';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim, 20 dias ou mais no mês';
        $alternative->save();
        */

        //Questão 17-D
        /*
        $alternative = new Alternative;
        $alternative->text = 'Nunca tomei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Eu tinha X anos';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não lembro';
        $alternative->save();
        */

        //Questão 18
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Heroína';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Ópio';
        $alternative->save();

        //Questão 19
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Morfina';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Tylex';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Setux';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sylador';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Tramal (Tramadol)';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Dolantina (Meperidina ou Petidina)';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Fentanil';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Dolosal';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Belacodid';
        $alternative->save();

        //Questão 20
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'LSD';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Chá de Cogumelo';
        $alternative->save();

        //Questão 21
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 22
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Sim';
        $alternative->save();
        */

        //Questão 23
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Anabole';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Androlone';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Androviron';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Decadurabolin';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Durabolin';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Durateston';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Equípoise';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Parabolan';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Primobolan';
        $alternative->save();

        //Questão 24
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir outros

        //Questão 25
        $alternative = new Alternative;
        $alternative->text = 'Nunca estudou';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Fez até a 1ª, 2ª ou 3ª série do ensino fundamental';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Fez até a 4ª, 5ª, 6ª ou 7ª série do ensino fundamental';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Fez até a 8ª série do ensino fundamental';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Fez até o 1ª ou 2ª série do ensino médio (1° ou 2° colegial)';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Terminou o ensino médio (3° colegial)';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Fez faculdade, mas não terminou o curso';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Fez faculdade completa (terminou o curso)';
        $alternative->save();

        /*
        $alternative = new Alternative;
        $alternative->text = 'Não sei';
        $alternative->save();
        */

        //Questão 26-A
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir quantos

        //Questão 26-B
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir quantos

        //Questão 26-C
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir quantos

        //Questão 26-D
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir quantos

        //Questão 26-E
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir quantos

        //Questão 26-F
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir quantos

        //Questão 26-G
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir quantos

        //Questão 26-H
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir quantos

        //Questão 26-I
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir quantos

        //Questão 26-J
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir quantos

        //Questão 27
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Sim, na minha escola';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, na minha família';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, na minha igreja ou grupo religioso';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, através da televisão ou rádio';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, através de livros ou revistas';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, através da internet';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Sim, através de amigos';
        $alternative->save();

        //Inserir outros

        //Questão 28
        $alternative = new Alternative;
        $alternative->text = 'Nada';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Conversaria com algum professor ou funcionário da minha escola';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Conversaria com alguém da minha família';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Conversaria com alguém da minha igreja ou grupo religioso';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Procuraria informações em livros ou revistas';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Procuraria informações na internet';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Conversaria com amigos';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Conversaria com algum profissional da saúde';
        $alternative->save();

        //Inserir outros

        //Questão 29
        $alternative = new Alternative;
        $alternative->text = 'Nenhuma';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Um pouco';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Mais ou menos';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Muito';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Muitíssimo';
        $alternative->save();

        //Questão 30
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não sei';
        $alternative->save();
        */

        $alternative = new Alternative;
        $alternative->text = 'Não recebe';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Bolsa Família';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Bolsa Escola';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Auxílio Gás';
        $alternative->save();

        $alternative = new Alternative;
        $alternative->text = 'Bolsa Alimentação';
        $alternative->save();

        //Questão 31
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não sei';
        $alternative->save();
        */
        /*
        $alternative = new Alternative;
        $alternative->text = 'Não';
        $alternative->save();
        */
        //Inserir qual

        //Fazer a tabela de comentários

    }

}
