<?php

class QuestionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('questions')->delete();

        $question = new Question;
        $question->text         = 'Sexo:';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 1;
        $question->save();

        $a = Alternative::where('text','=','Masculino')->first()->id;
        $b = Alternative::where('text','=','Feminino')->first()->id;
        $question->alternatives()->sync( array($a, $b) );


        $question = new Question;
        $question->text         = 'Quantos anos você tem?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text = "Adicionar idade";
        $question->scene = 1;
        $question->save();


        $question = new Question;
        $question->text         = 'Com quem você mora?';
        $question->display_text = '';
        $question->multianswer  = true;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar outros";
        $question->scene = 2;
        $question->save();

        $a = Alternative::where('text','=','Pai')->first()->id;
        $b = Alternative::where('text','=','Mãe')->first()->id;
        $c = Alternative::where('text','=','Madrasta')->first()->id;
        $d = Alternative::where('text','=','Padrasto')->first()->id;
        $e = Alternative::where('text','=','Irmã(s) ou Irmão(s)')->first()->id;
        $f = Alternative::where('text','=','Avó(s) ou Avô(s)')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e, $f ) );


        $question = new Question;
        $question->text         = 'Seus pais:';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar outros";
        $question->scene = 2;
        $question->save();

        $a = Alternative::where('text','=','Vivem juntos')->first()->id;
        $b = Alternative::where('text','=','Vivem separados')->first()->id;
        $c = Alternative::where('text','=','Um deles já morreu (ou os dois)')->first()->id;
        $d = Alternative::where('text','=','Outros')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'De um mês pra cá, ou seja, nos últimos 30 dias, quantos dias você faltou a alguma aula sem autorização dos seus pais ou responsáveis?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 3;
        $question->save();

        $a = Alternative::where('text','=','Não faltei')->first()->id;
        $b = Alternative::where('text','=','Faltei de 1 a 3 dias')->first()->id;
        $c = Alternative::where('text','=','Faltei de 4 a 8 dias')->first()->id;
        $d = Alternative::where('text','=','Faltei 9 dias ou mais')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Você já experimentou alguma bebida alcoólica? Exemplos: cerveja, chopp, vinho, pinga, caipirinha, aperitivos, sidra, outras.';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 3;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Que idade você tinha quando tomou bebida alcoólica pela primeira vez?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text = "Adicionar idade";
        $question->scene = 3;
        $question->save();

        $a = Alternative::where('text','=','Nunca tomei')->first()->id;
        $b = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um ano pra cá, ou seja, nos últimos 12 meses, você tomou alguma bebida alcoólica?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 3;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um mês pra cá, ou seja, nos últimos 30 dias, você tomou alguma bebida alcoólica?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 3;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Você já comprou pessoalmente alguma bebida alcoólica (mesmo que não tenha sido para você)?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 3;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $c = Alternative::where('text','=','Já tentei, mas não consegui')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );


        $question = new Question;
        $question->text         = 'Quando foi a primeira vez que você tomou bebida alcoólica?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 3;
        $question->save();

        $a = Alternative::where('text','=','Nunca tomei')->first()->id;
        $b = Alternative::where('text','=','Menos de 30 dias')->first()->id;
        $c = Alternative::where('text','=','Mais de 30 dias e menos de um ano')->first()->id;
        $d = Alternative::where('text','=','Mais de um ano')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Você já tomou alguma bebida energética? Exemplos: Red Bull, Flash Power, Flying Horse, Bad Boy, Blue Energy, Burn.';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 4;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Se você já tomou alguma bebida energética, alguma vez foi misturada com álcool?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 4;
        $question->save();

        $a = Alternative::where('text','=','Nunca tomei')->first()->id;
        $b = Alternative::where('text','=','Não, nunca misturei com álcool')->first()->id;
        $c = Alternative::where('text','=','Sim, já misturei com álcool')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );


        $question = new Question;
        $question->text         = 'Você já fumou cigarro?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 4;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um ano pra cá, ou seja, nos últimos 12 meses, você fumou algum cigarro?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 4;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um mês pra cá, ou seja, nos últimos 30 dias, você fumou algum cigarro?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 4;
        $question->save();

        $a = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $b = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );


        $question = new Question;
        $question->text         = 'Que idade você tinha quando fumou cigarro pela primeira vez?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text = "Adicionar idade";
        $question->scene = 4;
        $question->save();

        $a = Alternative::where('text','=','Nunca fumei')->first()->id;
        $b = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Se você fuma, quanto cigarros você fuma por dia?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 4;
        $question->save();

        $a = Alternative::where('text','=','Não fumo')->first()->id;
        $b = Alternative::where('text','=','De 1 a 10 cigarros por dia')->first()->id;
        $c = Alternative::where('text','=','De 11 a 20 cigarros por dia')->first()->id;
        $d = Alternative::where('text','=','Mais de 20 cigarros por dia')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Você já fumou em narguile (narguilê, arguile, nargas)?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 4;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Você ja cheirou algum produto para se sentir "alterado/diferente"? Exemplos: loló, lança, cola, éter, removedor de tinta, gasolina, benzina, acetona, tíner, esmalte, aguarrás, tinta. (Não vale cocaína)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um ano pra cá, ou seja, nos últimos 12 meses, você cheirou algum produto para se sentir "alterado/diferente"?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um mês pra cá, ou seja, nos últimos 30 dias, você cheirou algum produto para se sentir "alterado/diferente"?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Se você já cheirou algum produto para se sentir "alterado/diferente", qual você cheirou por último?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar outro";
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Não cheirei')->first()->id;
        $b = Alternative::where('text','=','Loló/Lança')->first()->id;
        $c = Alternative::where('text','=','Cola')->first()->id;
        $d = Alternative::where('text','=','Éter')->first()->id;
        $e = Alternative::where('text','=','Gasolina')->first()->id;
        $f = Alternative::where('text','=','Tíner/Aguarrás/Tinta/Benzina')->first()->id;
        $g = Alternative::where('text','=','Esmalte/Acetona')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e, $f, $g ) );


        $question = new Question;
        $question->text         = 'Que idade você tinha quando cheirou algum desses produtos para se sentir "alterado/diferente" pela primeira vez?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar idade";
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Nunca cheirei')->first()->id;
        $b = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Quando foi a primeira vez que você cheirou algum produto para se sentir "alterado/diferente"?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Nunca cheirei')->first()->id;
        $b = Alternative::where('text','=','Menos de 30 dias')->first()->id;
        $c = Alternative::where('text','=','Mais de 30 dias e menos de um ano')->first()->id;
        $d = Alternative::where('text','=','Mais de um ano')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Se você cheirou algum desses produtos, na última vez que cheirou, onde você os conseguiu?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Nunca cheirei')->first()->id;
        $b = Alternative::where('text','=','Tinha em minha casa')->first()->id;
        $c = Alternative::where('text','=','Ganhei de amigos')->first()->id;
        $d = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Já experimentou maconha (ou haxixe)?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 5;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um ano pra cá, ou seja, nos últimos 12 meses, você usou maconha?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 5;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um mês pra cá, ou seja, nos últimos 30 dias, você usou maconha?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 5;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Que idade você tinha quando experimentou maconha pela primeira vez?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar idade";
        $question->scene = 5;
        $question->save();

        $a = Alternative::where('text','=','Nunca experimentei')->first()->id;
        $b = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Quando foi a primeira vez que você fumou maconha?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 5;
        $question->save();

        $a = Alternative::where('text','=','Nunca fumei')->first()->id;
        $b = Alternative::where('text','=','Menos de 30 dias')->first()->id;
        $c = Alternative::where('text','=','Mais de 30 dias e menos de um ano')->first()->id;
        $d = Alternative::where('text','=','Mais de um ano')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Você já tomou algum remédio para emagrecer ou ficar acordado (ligado) sem receita médica? Exemplos: Anfepramona, Femproporex, Mazindol, Hipofagin, Inibex, Desobesi, Moderine, Absten, Fagolipo, Dualid. (Não vale adoçante, shake, nem chá)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar remédio";
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'De um ano pra cá, ou seja, nos últimos 12 meses, você tomou algum remédio para emagrecer ou ficar acordado (ligado) sem receita médica?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um mês pra cá, ou seja, nos ultimos 30 dias, você tomou algum remédio para emagrecer ou ficar acordado (ligado) sem receita médica?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Que idade você tinha quando tomou algum remédio para emagrecer ou ficar acordado (ligado) sem receita médica pela primeira vez?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar idade";
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Nunca tomei')->first()->id;
        $b = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Você já tomou Holoten, Carpinol ou Medavane para se sentir "alterado/diferente"?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Holoten')->first()->id;
        $c = Alternative::where('text','=','Carpinol')->first()->id;
        $d = Alternative::where('text','=','Medavane')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Você já tomou algum tranquilizante (calmante) sem receita médica? Exemplos: Diazepam, Dienpaz, Valium, Lorax, Rohypnol, Psicosedin, Somalium, Apraz, Rivotril, Alprazolam, Lexotan, Dalmadorm, Dormonid, Bromazepam, Frontal, Olcadil. (Não vale chás, nem produtos naturais como Maracugina)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar tranquilizante";
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'De um ano pra cá, ou seja, nos últimos 12 meses, você tomou algum tranquilizante (calmante) sem receita médica?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um mês pra cá, ou seja, nos últimos 30 dias, você tomou algum tranquilizante (calmante) sem receita médica?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Que idade você tinha quando tomou algum tranquilizante (calmante) sem receita médica pela primeira vez?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar idade";
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Nunca tomei')->first()->id;
        $b = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Você já experimentou cocaína?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 6;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um ano pra cá, ou seja, nos últimos 12 meses, você usou cocaína?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 6;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um mês pra cá, ou seja, nos últimos 30 dias, você usou cocaína?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 6;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Que idade você tinha quando experimentou cocaína pela primeira vez?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar idade";
        $question->scene = 6;
        $question->save();

        $a = Alternative::where('text','=','Nunca experimentei')->first()->id;
        $b = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Quando foi a primeira vez que você cheirou cocaína?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 6;
        $question->save();

        $a = Alternative::where('text','=','Mais de um ano')->first()->id;
        $b = Alternative::where('text','=','Nunca cheirei')->first()->id;
        $c = Alternative::where('text','=','Menos de 30 dias')->first()->id;
        $d = Alternative::where('text','=','Mais de 30 dias e menos de um ano')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Você já experimentou crack ou merla?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 8;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Crack')->first()->id;
        $c = Alternative::where('text','=','Merla')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );


        $question = new Question;
        $question->text         = 'De um ano pra cá, ou seja, nos últimos 12 meses, você usou crack ou merla?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 8;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um mês pra cá, ou seja, nos últimos 30 dias, você usou crack ou merla?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 8;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Que idade você tinha quando experimentou crack ou merla pela primeira vez?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar idade";
        $question->scene = 8;
        $question->save();

        $a = Alternative::where('text','=','Nunca experimentei')->first()->id;
        $b = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Quando foi a primeira vez que você usou crack ou merla?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 8;
        $question->save();

        $a = Alternative::where('text','=','Nunca usei')->first()->id;
        $b = Alternative::where('text','=','Menos de 30 dias')->first()->id;
        $c = Alternative::where('text','=','Mais de 30 dias e menos de um ano')->first()->id;
        $d = Alternative::where('text','=','Mais de um ano')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Você já tomou Artane, Bentyl, Akineton ou Chá de Lírio (saia-branca, véu-de-noiva, trombeteira, zabumba, cartucho) para se sentir "alterado/diferente"?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 7;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Artane')->first()->id;
        $c = Alternative::where('text','=','Bentyl')->first()->id;
        $d = Alternative::where('text','=','Akineton')->first()->id;
        $e = Alternative::where('text','=','Chá de Lírio')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );


        $question = new Question;
        $question->text         = 'De um ano pra cá, ou seja, nos últimos 12 meses, você tomou Artane, Bentyl, Akineton ou Chá de Lírio (saia-branca, véu-de-noiva, trombeteira, zabumba, cartucho) para se sentir "alterado/diferente"?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 7;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'De um mês pra cá, ou seja, nos últimos 30 dias, você tomou Artane, Bentyl, Akineton ou Chá de Lírio (saia-branca, véu-de-noiva, trombeteira, zabumba, cartucho) para se sentir "alterado/diferente"?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 7;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Se você já tomou Artane, Bentyl, Akineton ou Chá de Lírio (saia-branca, véu-de-noiva, trombeteira, zabumba, cartucho), que idade você tinha quando tomou para se sentir "alterado/diferente" primeira vez?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar idade";
        $question->scene = 7;
        $question->save();

        $a = Alternative::where('text','=','Nunca tomei')->first()->id;
        $b = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Você ja experimentou heroína ou ópio?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Heroína')->first()->id;
        $c = Alternative::where('text','=','Ópio')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );


        $question = new Question;
        $question->text         = 'Você já tomou algum dos remédios abaixo para se sentir "alterado/diferente"? Morfina, Tylex, Setux, Sylador, Tramal (Tramadol), Dolantina (Meperidina ou Petidina), Fentanil, Dolosal, Belacodid.';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Morfina')->first()->id;
        $c = Alternative::where('text','=','Tylex')->first()->id;
        $d = Alternative::where('text','=','Setux')->first()->id;
        $e = Alternative::where('text','=','Sylador')->first()->id;
        $f = Alternative::where('text','=','Tramal (Tramadol)')->first()->id;
        $g = Alternative::where('text','=','Dolantina (Meperidina ou Petidina)')->first()->id;
        $h = Alternative::where('text','=','Fentanil')->first()->id;
        $i = Alternative::where('text','=','Dolosal')->first()->id;
        $j = Alternative::where('text','=','Belacodid')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e, $f, $g, $h, $i, $j ) );


        $question = new Question;
        $question->text         = 'Você já tomou LSD (ácido) ou chá de cogumelo?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','LSD')->first()->id;
        $c = Alternative::where('text','=','Chá de Cogumelo')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );


        $question = new Question;
        $question->text         = 'Você já experimentou êxtase?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Você já usou Benflogin para se sentir "alterado/diferente"?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Você já tomou algum medicamento anabolizante para aumentar sua musculatura ou para dar mais força? Exemplos: Anabolex, Androlone, Androviron, Decadurabolin, Durabolin, Durateston, Equipoise, Parabolan, Primobolan.';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 10;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Anabole')->first()->id;
        $c = Alternative::where('text','=','Androlone')->first()->id;
        $d = Alternative::where('text','=','Androviron')->first()->id;
        $e = Alternative::where('text','=','Decadurabolin')->first()->id;
        $f = Alternative::where('text','=','Durabolin')->first()->id;
        $g = Alternative::where('text','=','Durateston')->first()->id;
        $h = Alternative::where('text','=','Equípoise')->first()->id;
        $i = Alternative::where('text','=','Parabolan')->first()->id;
        $j = Alternative::where('text','=','Primobolan')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e, $f, $g, $h, $i, $j ) );


        $question = new Question;
        $question->text         = 'Você já ouviu falar de outras drogas não citadas neste questionário?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text = "Adicionar droga";
        $question->scene = 9;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'Até que grau o chefe (responsável) de sua família estudou?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Nunca estudou')->first()->id;
        $b = Alternative::where('text','=','Fez até a 1ª, 2ª ou 3ª série do ensino fundamental')->first()->id;
        $c = Alternative::where('text','=','Fez até a 4ª, 5ª, 6ª ou 7ª série do ensino fundamental')->first()->id;
        $d = Alternative::where('text','=','Fez até a 8ª série do ensino fundamental')->first()->id;
        $e = Alternative::where('text','=','Fez até o 1ª ou 2ª série do ensino médio (1° ou 2° colegial)')->first()->id;
        $f = Alternative::where('text','=','Terminou o ensino médio (3° colegial)')->first()->id;
        $g = Alternative::where('text','=','Fez faculdade, mas não terminou o curso')->first()->id;
        $h = Alternative::where('text','=','Fez faculdade completa (terminou o curso)')->first()->id;
        $i = Alternative::where('text','=','Não sei')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e, $f, $g, $h, $i ) );


        $question = new Question;
        $question->text         = 'Na sua casa tem televisão em cores? (Não vale quebrada)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar quantidade";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'Na sua casa tem videocassete? (Não vale quebrado)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar quantidade";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'Na sua casa tem aparelho de DVD? (Não vale quebrado)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar quantidade";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'Na sua casa tem rádio? (Não vale quebrado)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar quantidade";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'Na sua casa tem banheiro?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar quantidade";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'Na sua casa tem automóvel? (Não vale moto)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar quantidade";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a) );


        $question = new Question;
        $question->text         = 'Na sua casa tem algum empregado(a) que trabalhe todos os dias para sua família? Exemplo: doméstica, babá, motorista, jardineiro, etc.';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar quantidade";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'Na sua casa tem maquina de lavar (não vale tanquinho)? (Não vale quebrada)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar quantidade";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'Na sua casa tem geladeira? (Não vale quebrada)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar quantidade";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'Na sua casa tem freezer (da geladeira ou independente)? (Não vale quebrado)';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar quantidade";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );


        $question = new Question;
        $question->text         = 'Você já recebeu informações educativas sobre drogas?';
        $question->display_text = '';
        $question->multianswer  = true;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar outros";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, na minha escola')->first()->id;
        $c = Alternative::where('text','=','Sim, na minha família')->first()->id;
        $d = Alternative::where('text','=','Sim, na minha igreja ou grupo religioso')->first()->id;
        $e = Alternative::where('text','=','Sim, através da televisão ou rádio')->first()->id;
        $f = Alternative::where('text','=','Sim, através de livros ou revistas')->first()->id;
        $g = Alternative::where('text','=','Sim, através da internet')->first()->id;
        $h = Alternative::where('text','=','Sim, através de amigos')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e, $f, $g, $h ) );


        $question = new Question;
        $question->text         = 'Se você quisesse procurar alguma informação sobre drogas, o que você faria?';
        $question->display_text = '';
        $question->multianswer  = true;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar outros";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Nada')->first()->id;
        $b = Alternative::where('text','=','Conversaria com algum professor ou funcionário da minha escola')->first()->id;
        $c = Alternative::where('text','=','Conversaria com alguém da minha família')->first()->id;
        $d = Alternative::where('text','=','Conversaria com alguém da minha igreja ou grupo religioso')->first()->id;
        $e = Alternative::where('text','=','Procuraria informações em livros ou revistas')->first()->id;
        $f = Alternative::where('text','=','Procuraria informações na internet')->first()->id;
        $g = Alternative::where('text','=','Conversaria com amigos')->first()->id;
        $h = Alternative::where('text','=','Conversaria com algum profissional da saúde')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e, $f, $g, $h ) );


        $question = new Question;
        $question->text         = 'Com que intensidade você acredita que o seu futuro será melhor?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Nenhuma')->first()->id;
        $b = Alternative::where('text','=','Um pouco')->first()->id;
        $c = Alternative::where('text','=','Mais ou menos')->first()->id;
        $d = Alternative::where('text','=','Muito')->first()->id;
        $e = Alternative::where('text','=','Muitíssimo')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );


        $question = new Question;
        $question->text         = 'Você sabe se sua família recebe algum auxílio do governo, como por exemplo, bolsa família, bolsa escola, auxílio gás ou bolsa alimentação?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não sei')->first()->id;
        $b = Alternative::where('text','=','Não recebe')->first()->id;
        $c = Alternative::where('text','=','Bolsa Família')->first()->id;
        $d = Alternative::where('text','=','Bolsa Escola')->first()->id;
        $e = Alternative::where('text','=','Auxílio Gás')->first()->id;
        $f = Alternative::where('text','=','Bolsa Alimentação')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e, $f ) );


        $question = new Question;
        $question->text         = 'Você ja foi obrigado a cumprir alguma medida sócio-educativa do governo, como por exemplo, liberdade assistida ou prestação de serviços à comunidade?';
        $question->display_text = '';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text  = "Adicionar medida";
        $question->scene = 11;
        $question->save();

        $a = Alternative::where('text','=','Não sei')->first()->id;
        $b = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


    }

}
