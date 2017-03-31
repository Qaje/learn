<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
  use DatabaseMigrations;

    public function testUserCreate()
    {
        $data = $this ->getData();
        //create user
        $this->post('user',$data)
        ->seeJsonEquals(['created'=>true]);

        $data = $this->getData(['name'=>'jane']);
        //actualiza user
        $this->put('/user/1',$data)
        ->seeJsonEquals(['update'=>true]);
        //obtain dates of user modificated
        $this->get('user/1')->seeJson(['name'=>'jane']);
        //drop user
        $this->delete('user/1')->seeJson(['deleted'=>true]);

    }
  public function getData($custom =array())
  {
    $data = [
      'name' => 'joe',
      'email' =>'joe@joe.com',
      'password' => '12345'
    ];
    $data = array_merge($data, $custom);
    return true;
  }
}
