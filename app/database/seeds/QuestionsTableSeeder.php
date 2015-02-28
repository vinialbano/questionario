<?php

class QuestionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('questions')->delete();

        $question = new Question;
        $question->text         = 'Qual é o seu sexo?';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 1;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Masculino')->first()->id;
        $b = Alternative::where('text','=','Feminino')->first()->id;
        $question->alternatives()->sync( array($a, $b) );

        $question = new Question;
        $question->text         = 'Quantos anos você tem?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra idade";
        $question->scene        = 1;
        $question->has_jump     = false;
        $question->save();


        $a = Alternative::where('text','=','15 anos')->first()->id;
        $b = Alternative::where('text','=','16 anos')->first()->id;
        $c = Alternative::where('text','=','17 anos')->first()->id;
        $d = Alternative::where('text','=','18 anos')->first()->id;
        $e = Alternative::where('text','=','19 anos')->first()->id;
        $f = Alternative::where('text','=','20 anos')->first()->id;
        $question->alternatives()->sync( array($a, $b, $c, $d, $e, $f) );


        $question = new Question;
        $question->text         = 'Com quem você mora?';
        $question->multianswer  = true;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outros";
        $question->scene        = 2;
        $question->has_jump     = false;
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
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outros";
        $question->scene        = 2;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Vivem juntos')->first()->id;
        $b = Alternative::where('text','=','Vivem separados')->first()->id;
        $c = Alternative::where('text','=','Um deles já morreu (ou os dois)')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c) );

        $question = new Question;
        $question->text         = 'Até que grau o responsável da sua família estudou?';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 3;
        $question->has_jump     = false;
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
        $question->text         = 'Na sua casa tem televisão em cores que funcione?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra quantidade";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, tem 1')->first()->id;
        $c = Alternative::where('text','=','Sim, tem 2')->first()->id;
        $d = Alternative::where('text','=','Sim, tem 3')->first()->id;
        $e = Alternative::where('text','=','Sim, tem 4')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );




        $question = new Question;
        $question->text         = 'Na sua casa tem videocassete que funcione?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra quantidade";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, tem 1')->first()->id;
        $c = Alternative::where('text','=','Sim, tem 2')->first()->id;
        $d = Alternative::where('text','=','Sim, tem 3')->first()->id;
        $e = Alternative::where('text','=','Sim, tem 4')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Na sua casa tem aparelho de DVD que funcione?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra quantidade";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();



        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, tem 1')->first()->id;
        $c = Alternative::where('text','=','Sim, tem 2')->first()->id;
        $d = Alternative::where('text','=','Sim, tem 3')->first()->id;
        $e = Alternative::where('text','=','Sim, tem 4')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Na sua casa tem rádio que funcione?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra quantidade";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();



        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, tem 1')->first()->id;
        $c = Alternative::where('text','=','Sim, tem 2')->first()->id;
        $d = Alternative::where('text','=','Sim, tem 3')->first()->id;
        $e = Alternative::where('text','=','Sim, tem 4')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Na sua casa tem banheiro?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra quantidade";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, tem 1')->first()->id;
        $c = Alternative::where('text','=','Sim, tem 2')->first()->id;
        $d = Alternative::where('text','=','Sim, tem 3')->first()->id;
        $e = Alternative::where('text','=','Sim, tem 4')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Na sua casa tem automóvel que não seja moto?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra quantidade";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, tem 1')->first()->id;
        $c = Alternative::where('text','=','Sim, tem 2')->first()->id;
        $d = Alternative::where('text','=','Sim, tem 3')->first()->id;
        $e = Alternative::where('text','=','Sim, tem 4')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Na sua casa tem algum empregado que trabalhe todos os dias?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra quantidade";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, tem 1')->first()->id;
        $c = Alternative::where('text','=','Sim, tem 2')->first()->id;
        $d = Alternative::where('text','=','Sim, tem 3')->first()->id;
        $e = Alternative::where('text','=','Sim, tem 4')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Na sua casa tem maquina de lavar que funcione, sem considerar tanquinho?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra quantidade";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, tem 1')->first()->id;
        $c = Alternative::where('text','=','Sim, tem 2')->first()->id;
        $d = Alternative::where('text','=','Sim, tem 3')->first()->id;
        $e = Alternative::where('text','=','Sim, tem 4')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Na sua casa tem geladeira que funcione?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra quantidade";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, tem 1')->first()->id;
        $c = Alternative::where('text','=','Sim, tem 2')->first()->id;
        $d = Alternative::where('text','=','Sim, tem 3')->first()->id;
        $e = Alternative::where('text','=','Sim, tem 4')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Na sua casa tem freezer, na geladeira ou fora, que funcione?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra quantidade";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, tem 1')->first()->id;
        $c = Alternative::where('text','=','Sim, tem 2')->first()->id;
        $d = Alternative::where('text','=','Sim, tem 3')->first()->id;
        $e = Alternative::where('text','=','Sim, tem 4')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Você sabe se sua família recebe algum auxílio do governo, como por exemplo, bolsa família, bolsa escola, auxílio-gás ou bolsa alimentação?';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 3;
        $question->has_jump     = false;
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
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outra medida";
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não sei')->first()->id;
        $b = Alternative::where('text','=','Não')->first()->id;
        $c = Alternative::where('text','=','Liberdade Assistida')->first()->id;
        $d = Alternative::where('text','=','Prestação de Serviços à Comunidade')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );


        $question = new Question;
        $question->text         = 'Você já recebeu informações educativas sobre drogas?';
        $question->multianswer  = true;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outros";
        $question->scene        = 3;
        $question->has_jump     = false;
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
        $question->multianswer  = true;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outros";
        $question->scene        = 3;
        $question->has_jump     = false;
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
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 3;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Nenhuma')->first()->id;
        $b = Alternative::where('text','=','Um pouco')->first()->id;
        $c = Alternative::where('text','=','Mais ou menos')->first()->id;
        $d = Alternative::where('text','=','Muito')->first()->id;
        $e = Alternative::where('text','=','Muitíssimo')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Olá, filho, tudo bem? No último mês, quantos dias você faltou às aulas sem minha autorização?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 4;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não faltei')->first()->id;
        $b = Alternative::where('text','=','Faltei de 1 a 3 dias')->first()->id;
        $c = Alternative::where('text','=','Faltei de 4 a 8 dias')->first()->id;
        $d = Alternative::where('text','=','Faltei 9 dias ou mais')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );



        $question = new Question;
        $question->text         = 'Filho, precisamos conversar sobre um assunto muito importante que envolve a vida dos adolescentes, que é a questão do uso de drogas... Você já experimentou alguma bebida alcoólica? Como cerveja, chopp, vinho, pinga, caipirinha, sidra ou outras.';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 4;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Que idade você tinha quando tomou bebida alcoólica pela primeira vez?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar idade";
        $question->scene        = 4;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca tomei')->first())->save();


        $a = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Quando foi a primeira vez que você tomou bebida alcoólica?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 4;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca tomei')->first())->save();


        $a = Alternative::where('text','=','Menos de 30 dias')->first()->id;
        $b = Alternative::where('text','=','Mais de 30 dias e menos de um ano')->first()->id;
        $c = Alternative::where('text','=','Mais de um ano')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );

        $question = new Question;
        $question->text         = 'Nos últimos 12 meses você tomou alguma bebida alcoólica?';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 4;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 30 dias você tomou alguma bebida alcoólica?';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 4;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Você já comprou pessoalmente alguma bebida alcoólica, mesmo que não tenha sido para você?';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 4;
        $question->has_jump     = false;
        $question->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $c = Alternative::where('text','=','Já tentei, mas não consegui')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );

        $question = new Question;
        $question->text         = 'E ai, cara, tudo bem? To aqui tomando um energético para ficar mais animado. Já tomou algum? Como Red bull, Flash Power, Flying Hourse, Bad Boy, Blue Energy, Burn.';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 5;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Alguma vez já misturou a bebida energética com bebida alcoólica?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 5;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca tomei')->first())->save();


        $a = Alternative::where('text','=','Não, nunca misturei com álcool')->first()->id;
        $b = Alternative::where('text','=','Sim, já misturei com álcool')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Daqui a pouco vou comprar um cigarro. Você já fumou cigarro?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 5;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 12 meses você fumou algum cigarro?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 5;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 30 dias você fumou algum cigarro?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 5;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Que idade você tinha quando fumou cigarro pela primeira vez?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar idade";
        $question->scene        = 5;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca fumei')->first())->save();


        $a = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Você fuma sempre? Quanto cigarros você fuma por dia?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 5;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não fumo')->first())->save();


        $a = Alternative::where('text','=','Não fumo')->first()->id;
        $b = Alternative::where('text','=','De 1 a 10 cigarros por dia')->first()->id;
        $c = Alternative::where('text','=','De 11 a 20 cigarros por dia')->first()->id;
        $d = Alternative::where('text','=','Mais de 20 cigarros por dia')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Você já fumou em narguile?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 5;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Já experimentou maconha ou haxixe?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 6;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );


        $question = new Question;
        $question->text         = 'Nos últimos 12 meses você usou maconha?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 6;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 30 dias você usou maconha?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 6;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Que idade você tinha quando experimentou maconha pela primeira vez?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar idade";
        $question->scene        = 6;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca experimentei')->first())->save();


        $a = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Quando foi a primeira vez que você fumou maconha?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 6;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca fumei')->first())->save();


        $a = Alternative::where('text','=','Menos de 30 dias')->first()->id;
        $b = Alternative::where('text','=','Mais de 30 dias e menos de um ano')->first()->id;
        $c = Alternative::where('text','=','Mais de um ano')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );

        $question = new Question;
        $question->text         = 'E aí, você já experimentou cocaína?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 7;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 12 meses você usou cocaína?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 7;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 30 dias você usou cocaína?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 7;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Que idade você tinha quando experimentou cocaína pela primeira vez?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar idade";
        $question->scene        = 7;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca experimentei')->first())->save();


        $a = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Quando foi a primeira vez que você cheirou cocaína?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 7;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca cheirei')->first())->save();


        $a = Alternative::where('text','=','Mais de um ano')->first()->id;
        $b = Alternative::where('text','=','Menos de 30 dias')->first()->id;
        $c = Alternative::where('text','=','Mais de 30 dias e menos de um ano')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );

        $question = new Question;
        $question->text         = 'Você já tomou Artane, Bentyl, Akineton, ou Chá de Lírio para se sentir alterado ou diferente? Este Chá a galera chama de saia-branca, véu-de-noiva,trombeteira,zabumba, ou cartucho.';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 8;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Artane')->first()->id;
        $c = Alternative::where('text','=','Bentyl')->first()->id;
        $d = Alternative::where('text','=','Akineton')->first()->id;
        $e = Alternative::where('text','=','Chá de Lírio')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e ) );

        $question = new Question;
        $question->text         = 'Nos últimos 12 meses você tomou algum desses?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 8;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 30 dias você tomou algum desses"?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 8;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Que idade você tinha quando tomou pela primeira vez?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar idade";
        $question->scene        = 8;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca tomei')->first())->save();


        $a = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Este lugar esta bem deserto... O pessoal tem usado bastante crack ultimamente. Você já experimentou Crack ou Merla?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 9;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Crack')->first()->id;
        $c = Alternative::where('text','=','Merla')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );

        $question = new Question;
        $question->text         = 'Nos últimos 12 meses você usou crack ou merla?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 9;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 30 dias você usou crack ou merla?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 9;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Que idade você tinha quando experimentou crack ou merla pela primeira vez?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar idade";
        $question->scene        = 9;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca experimentei')->first())->save();


        $a = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Quando foi a primeira vez que você usou crack ou merla?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 9;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca usei')->first())->save();


        $b = Alternative::where('text','=','Menos de 30 dias')->first()->id;
        $c = Alternative::where('text','=','Mais de 30 dias e menos de um ano')->first()->id;
        $d = Alternative::where('text','=','Mais de um ano')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Aposto que ainda tem muitas coisas aqui nesta festa. Tipo, você ja cheirou algum produto para se sentir alterado? Não cocaína, mas outros como loló, lança, cola, éter, removedor de tinta, gasolina, benzina, acetona, tíner, esmalte, aguarrás ou tinta?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 10;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 12 meses você cheirou algum desses produtos?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 10;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 30 dias você cheirou algum desses produtos?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 10;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Qual você cheirou por último?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar outro";
        $question->scene        = 10;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não cheirei')->first())->save();


        $a = Alternative::where('text','=','Loló/Lança')->first()->id;
        $b = Alternative::where('text','=','Cola')->first()->id;
        $c = Alternative::where('text','=','Éter')->first()->id;
        $d = Alternative::where('text','=','Gasolina')->first()->id;
        $e = Alternative::where('text','=','Tíner/Aguarrás/Tinta/Benzina')->first()->id;
        $f = Alternative::where('text','=','Esmalte/Acetona')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d, $e, $f ) );

        $question = new Question;
        $question->text         = 'Que idade você tinha quando cheirou algum desses produtos pela primeira vez?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar idade";
        $question->scene        = 10;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca cheirei')->first())->save();


        $a = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Quando foi a primeira vez que você cheirou algum desses produtos?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 10;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca cheirei')->first())->save();


        $a = Alternative::where('text','=','Menos de 30 dias')->first()->id;
        $b = Alternative::where('text','=','Mais de 30 dias e menos de um ano')->first()->id;
        $c = Alternative::where('text','=','Mais de um ano')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );

        $question = new Question;
        $question->text         = 'Onde você conseguiu esse produto na última vez que cheirou?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 10;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca cheirei')->first())->save();


        $a = Alternative::where('text','=','Tinha em minha casa')->first()->id;
        $b = Alternative::where('text','=','Ganhei de amigos')->first()->id;
        $c = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );

        $question = new Question;
        $question->text         = 'Mas aí, você ja experimentou heroína ou ópio?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 10;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Heroína')->first()->id;
        $c = Alternative::where('text','=','Ópio')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );

        $question = new Question;
        $question->text         = 'Acredito que alguém aqui deva ter doce. Você já tomou LSD ou chá de cogumelo ? ';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 10;
        $question->has_jump     = false;
        $question->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','LSD')->first()->id;
        $c = Alternative::where('text','=','Chá de Cogumelo')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c ) );

        $question = new Question;
        $question->text         = 'E êxtase, já experimentou?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 10;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Você já usou Benflogin para se sentir alterado?';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 10;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nossa, perguntamos sobre tantas drogas pra você... Mas aí, você já ouviu falar de outras drogas que não falamos?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar droga";
        $question->scene        = 10;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Você já tomou algum remédio para emagrecer ou ficar acordado sem receita médica? Por exemplo Anfepramona, Femproporex, Mazindol, Hipofagin, Inibex, Desobesi, Moderine, Absten, Fagolipo, Dualid. Não considere adoçante, shake, ou chá.';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar remédio";
        $question->scene        = 11;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Nos últimos 12 meses você tomou algum remédio para emagrecer ou ficar acordado sem receita médica?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 11;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 30 dias você tomou algum remédio para emagrecer ou ficar acordado sem receita médica?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 11;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Que idade você tinha quando tomou algum remédio para emagrecer ou ficar acordado sem receita médica pela primeira vez?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar idade";
        $question->scene        = 11;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca tomei')->first())->save();


        $a = Alternative::where('text','=','Nunca tomei')->first()->id;
        $b = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Você já tomou Holoten, Carpinol ou Medavane para se sentir alterado?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 11;
        $question->has_jump     = false;
        $question->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Holoten')->first()->id;
        $c = Alternative::where('text','=','Carpinol')->first()->id;
        $d = Alternative::where('text','=','Medavane')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Você já tomou algum calmante sem receita médica? Por exemplo o Diazepam, Dienpaz, Valium, Lorax, Rohypnol, Psicosedin, Somalium, Apraz, Rivotril, Alprazolam, Lexotan, Dalmadorm, Dormonid, Bromazepam, Frontal, Olcadil. Não considere chás nem produtos naturais como maracugina.';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar tranquilizante";
        $question->scene        = 11;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Nos últimos 12 meses você tomou algum calmante sem receita médica?';
        $question->multianswer  = false;
        $question->allow_other   = false;
        $question->scene        = 11;
        $question->has_jump     = true;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();


        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim')->first()->id;
        $question->alternatives()->sync( array( $a, $b ) );

        $question = new Question;
        $question->text         = 'Nos últimos 30 dias você tomou algum calmante sem receita médica?';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 11;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Não')->first())->save();

        $a = Alternative::where('text','=','Não')->first()->id;
        $b = Alternative::where('text','=','Sim, de 1 a 5 dias no mês')->first()->id;
        $c = Alternative::where('text','=','Sim, de 6 a 19 dias no mês')->first()->id;
        $d = Alternative::where('text','=','Sim, 20 dias ou mais no mês')->first()->id;
        $question->alternatives()->sync( array( $a, $b, $c, $d ) );

        $question = new Question;
        $question->text         = 'Que idade você tinha quando tomou algum calmante sem receita médica pela primeira vez?';
        $question->multianswer  = false;
        $question->allow_other  = true;
        $question->other_text   = "Adicionar idade";
        $question->scene        = 11;
        $question->has_jump     = false;
        $question->save();
        $question->alternative()->associate(Alternative::where('text','=','Nunca tomei')->first())->save();

        $a = Alternative::where('text','=','Não lembro')->first()->id;
        $question->alternatives()->sync( array( $a ) );

        $question = new Question;
        $question->text         = 'Existem varios remédios que fazem se sentir alterado. Dentre eles estão a Morfina, Tylex, Setux, Sylador, Tramal, Dolantina, Fentanil, Dolosal, Belacodid. Você já tomou algúm desses remédios para se sentir alterado?';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 11;
        $question->has_jump     = false;
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
        $question->text         = 'Você já tomou algum medicamento anabolizante para aumentar sua musculatura ou para dar mais força? Por exemplo, Anabolex, Androlone, Androviron, Decadurabolin, Durabolin, Durateston, Equipoise, Parabolan, Primobolan.';
        $question->multianswer  = false;
        $question->allow_other  = false;
        $question->scene        = 11;
        $question->has_jump     = false;
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



        $question = Question::where('text', '=', 'Filho, precisamos conversar sobre um assunto muito importante que envolve a vida dos adolescentes, que é a questão do uso de drogas... Você já experimentou alguma bebida alcoólica? Como cerveja, chopp, vinho, pinga, caipirinha, sidra ou outras.')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Você já comprou pessoalmente alguma bebida alcoólica, mesmo que não tenha sido para você?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Nos últimos 12 meses você tomou alguma bebida alcoólica?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Você já comprou pessoalmente alguma bebida alcoólica, mesmo que não tenha sido para você?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'E ai, cara, tudo bem? To aqui tomando um energético para ficar mais animado. Já tomou algum? Como Red bull, Flash Power, Flying Hourse, Bad Boy, Blue Energy, Burn.')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Daqui a pouco vou comprar um cigarro. Você já fumou cigarro?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Daqui a pouco vou comprar um cigarro. Você já fumou cigarro?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Você já fumou em narguile?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Nos últimos 12 meses você fumou algum cigarro?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Que idade você tinha quando fumou cigarro pela primeira vez?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Já experimentou maconha ou haxixe?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'E aí, você já experimentou cocaína?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Nos últimos 12 meses você usou maconha?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Que idade você tinha quando experimentou maconha pela primeira vez?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'E aí, você já experimentou cocaína?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Você já tomou Artane, Bentyl, Akineton, ou Chá de Lírio para se sentir alterado ou diferente? Este Chá a galera chama de saia-branca, véu-de-noiva,trombeteira,zabumba, ou cartucho.')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Nos últimos 12 meses você usou cocaína?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Que idade você tinha quando experimentou cocaína pela primeira vez?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Você já tomou Artane, Bentyl, Akineton, ou Chá de Lírio para se sentir alterado ou diferente? Este Chá a galera chama de saia-branca, véu-de-noiva,trombeteira,zabumba, ou cartucho.')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Este lugar esta bem deserto... O pessoal tem usado bastante crack ultimamente. Você já experimentou Crack ou Merla?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Nos últimos 12 meses você tomou algum desses?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Que idade você tinha quando tomou pela primeira vez?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Este lugar esta bem deserto... O pessoal tem usado bastante crack ultimamente. Você já experimentou Crack ou Merla?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Aposto que ainda tem muitas coisas aqui nesta festa. Tipo, você ja cheirou algum produto para se sentir alterado? Não cocaína, mas outros como loló, lança, cola, éter, removedor de tinta, gasolina, benzina, acetona, tíner, esmalte, aguarrás ou tinta?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Aposto que ainda tem muitas coisas aqui nesta festa. Tipo, você ja cheirou algum produto para se sentir alterado? Não cocaína, mas outros como loló, lança, cola, éter, removedor de tinta, gasolina, benzina, acetona, tíner, esmalte, aguarrás ou tinta?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Mas aí, você ja experimentou heroína ou ópio?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Nos últimos 12 meses você cheirou algum desses produtos?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Qual você cheirou por último?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Você já tomou algum remédio para emagrecer ou ficar acordado sem receita médica? Por exemplo Anfepramona, Femproporex, Mazindol, Hipofagin, Inibex, Desobesi, Moderine, Absten, Fagolipo, Dualid. Não considere adoçante, shake, ou chá.')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Você já tomou Holoten, Carpinol ou Medavane para se sentir alterado?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Nos últimos 12 meses você tomou algum remédio para emagrecer ou ficar acordado sem receita médica?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Que idade você tinha quando tomou algum remédio para emagrecer ou ficar acordado sem receita médica pela primeira vez?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Você já tomou algum calmante sem receita médica? Por exemplo o Diazepam, Dienpaz, Valium, Lorax, Rohypnol, Psicosedin, Somalium, Apraz, Rivotril, Alprazolam, Lexotan, Dalmadorm, Dormonid, Bromazepam, Frontal, Olcadil. Não considere chás nem produtos naturais como maracugina.')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Existem varios remédios que fazem se sentir alterado. Dentre eles estão a Morfina, Tylex, Setux, Sylador, Tramal, Dolantina, Fentanil, Dolosal, Belacodid. Você já tomou algúm desses remédios para se sentir alterado?')->first())->save();
        $question->save();

        $question = Question::where('text', '=', 'Nos últimos 12 meses você tomou algum calmante sem receita médica?')->first();
        $question->jumpTo()->associate(Question::where('text', '=', 'Que idade você tinha quando tomou algum calmante sem receita médica pela primeira vez?')->first())->save();
        $question->save();

    }

}
