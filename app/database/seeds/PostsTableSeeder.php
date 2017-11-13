<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'category_id' => 1,
                'title' => 'Pittsburgh Steelers vs. <b>Kansas City Chiefs</b> Odds, Analysis, NFL Betting Pick',
                'description' => 'The <b>Kansas City Chiefs</b> (5-0) will put their unbeaten record on the line with revenge on their mind against the Pittsburgh Steelers (3-2) on Sunday',
                'url' => 'http://bleacherreport.com/articles/2738255-pittsburgh-steelers-vs-kansas-city-chiefs-odds-analysis-nfl-betting-pick',
                'image' => 'image.jpg'
            ],
            [
                'category_id' => 1,
                'title' => 'Syracuse Football: Amba Etta-Tawo to join undefeated <b>Kansas City Chiefs</b>',
                'description' => 'Over the last few years, the Kansas City Chiefs haven\'t had much success against the Pittsburgh Steelers.',
                'url' => 'http://bleacherreport.com/articles/2738255-pittsburgh-steelers-vs-kansas-city-chiefs-odds-analysis-nfl-betting-pick',
                'image' => 'image.jpg'
            ],
            [
                'category_id' => 1,
                'title' => '<b>Chiefs</b>&#39; Demarcus Robinson eager to team up with friend Tyreek Hill at wideout',
                'description' => 'There\'s a new home for former Syracuse football star Amba Etta-Tawo who has signed on with the Kansas City Chiefs practice squad.',
                'url' => 'http://bleacherreport.com/articles/2738255-pittsburgh-steelers-vs-kansas-city-chiefs-odds-analysis-nfl-betting-pick',
                'image' => 'image.jpg'
            ],
            [
                'category_id' => 1,
                'title' => '<b>Chiefs</b> have overcome injuries, schedule woes in 5-0 start',
                'description' => 'There\'s a new home for former Syracuse football star Amba Etta-Tawo who has signed on with the Kansas City Chiefs practice squad.',
                'url' => 'http://bleacherreport.com/articles/2738255-pittsburgh-steelers-vs-kansas-city-chiefs-odds-analysis-nfl-betting-pick',
                'image' => 'image.jpg'
            ],
            [
                'category_id' => 1,
                'title' => 'LSU quarterback Danny Etling is a poor man&#39;s Alex Smith',
                'description' => 'The <b>Kansas City Chiefs</b> (5-0) will put their unbeaten record on the line with revenge on their mind against the Pittsburgh Steelers (3-2) on Sunday',
                'url' => 'http://bleacherreport.com/articles/2738255-pittsburgh-steelers-vs-kansas-city-chiefs-odds-analysis-nfl-betting-pick',
                'image' => 'image.jpg'
            ],
            [
                'category_id' => 1,
                'title' => 'Travis Kelce and Justin Houston miss first practice leading up to Steelers game',
                'description' => 'The <b>Kansas City Chiefs</b> (5-0) will put their unbeaten record on the line with revenge on their mind against the Pittsburgh Steelers (3-2) on Sunday',
                'url' => 'http://bleacherreport.com/articles/2738255-pittsburgh-steelers-vs-kansas-city-chiefs-odds-analysis-nfl-betting-pick',
                'image' => 'image.jpg'
            ]
        ]);
    }
}
