<?php
namespace SimpleQuiz\Tests;

use SimpleQuiz\Utils\Quiz;
/**
 * Description of QuizTest
 *
 * @author elanman
 */
class QuizTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
        \ORM::configure('mysql:host=' . \SimpleQuiz\Utils\Base\Config::$dbhost. ';dbname=' . \SimpleQuiz\Utils\Base\Config::$dbname);
        \ORM::configure('username', \SimpleQuiz\Utils\Base\Config::$dbuser);
        \ORM::configure('password', \SimpleQuiz\Utils\Base\Config::$dbpassword);
        \ORM::configure('return_result_sets', true);
        
        $this->app = new \Slim\Helper\Set(array(
            'debug' => true,
            'log.enabled' => true,
            'templates.path' => '../templates'
        ));
        $this->app->leaderboard = function() {
            return new \SimpleQuiz\Utils\LeaderBoard();
        };
        
        $this->quiz = new Quiz($this->app);
        
    }

    public function testsetId()
    {
        
        $result = $this->quiz->setId('ghj');
        
        $this->assertFalse($result);
    }
}
