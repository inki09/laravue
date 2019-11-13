<?php
/**
 * Created by PhpStorm.
 * User: Allur-11
 * Date: 06/11/2019
 * Time: 10:01
 */

namespace App\Manager;


class PostManager implements PostManagerInterface
{
    public function getAll()
    {
       $post = [
           'title' => 'nothing at all',
            'content' => 'Vazo milay'
       ];
       return $post;
    }

}
