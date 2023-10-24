<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PostController extends BaseController
{
    public function Ejercicio1()
    {
        $db = \Config\Database::connect();
        $posts = $db->query('select c.category, p.id, p.title, u.username, p.created_at
                            from categories as c right 
                            join posts as p on p.category = c.id 
                            left join users as u on u.id = p.autor where p.created_at between "2023/01/01" and "2023/12/31" ')->getResultArray();
        // dd($posts);
        $data = [
            'posts' => $posts
        ];

        return view ('posts/Ejercicio01', $data);
    }


    public function Ejercicio5 () {
        $db = \Config\Database::connect();
        $totalUsuarios = $db->query('Select count(*) from users')->getResult();
        $totalPosts = $db->query('Select count(*) from posts')->getResult();
        $totalComments = $db->query('select count(*) from comments')->getResult();
        $totalCategorias = $db->query('select count(*) from categories')->getResult();
        // dd($totalCategorias);
        $data = [
            'totalUsuarios' => $totalUsuarios,
            'totalPosts' => $totalPosts,
            'totalComments' => $totalComments,
            'totalCategorias' => $totalCategorias
        ];
        
        return view('posts/Ejercicio05',$data);
    }

    public function Ejercicio6() {
        $db=\Config\Database::connect();

        $postsPorCategoria = $db->query('select p.*, c.category as ccategory, count(*) as ppc from categories as c join posts as p on p.category = c.id group by category order by category ')->getResultArray();
        $postsPorAutor = $db->query('select count(*) as ppa from users')->getResultArray();
        $data = [
            'postsPorCategoria'=>$postsPorCategoria,
            'postsPorAutor'=>$postsPorAutor
        ];
        // dd($data);
        return view('posts/Ejercicio06',$data);
    }

    public function Ejercicio7(){
        $db=\Config\Database::connect();

        $postEscritosPorMujeres = $db->query('select p.*,count(*) as pepm u.*, ui.* from posts as p join users as u on p.autor = u.id join userinfo as ui on u.id = ui.id where ui.gender="f"
        and created_at between "2022/01/01" and "2022/12/31"')->getResultArray();

        $postEscritosPorMujeres2 = $db->query('select p.*,count(*) as pepm u.*, ui.* from posts as p join users as u on p.autor = u.id join userinfo as ui on u.id = ui.id where ui.gender="f"
        and created_at between "2023/01/01" and "2023z/12/31"')->getResultArray();
        
        $data=[
            'postEscritosPorMujeres' => $postEscritosPorMujeres
        ];

        return view (posts/Ejercicio07,$data);
    }
}