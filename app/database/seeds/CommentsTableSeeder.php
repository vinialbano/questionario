<?php

class CommentsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->delete();

        $comments = array(
            array(
                'comment'       => 'Este comentário é muito legal!',
                'created_at'    => '2015-02-05 15:39:11',
                'updated_at'    => '2015-02-05 15:39:11',
            ),
            array(
                'comment'       => 'Este não! =(',
                'created_at'    => '2014-12-05 15:39:11',
                'updated_at'    => '2014-12-05 15:39:11',
            )
        );

        DB::table('comments')->insert( $comments );
    }

}
