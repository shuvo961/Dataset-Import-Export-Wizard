<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Auth;
use Session;

class DataController extends Controller
{

    public function downloadCSVReport()
    {
        if(Session::get('token')){
            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=users-' . date("Y-m-d-h-i-s") . '.csv');
            $output = fopen('php://output', 'w');

            fputcsv($output, array('Id', 'user_name','country' ,'url'));

            $users = Page::get();

            if (count($users) > 0) {

                foreach ($users as $user) {

                    $user_row = [
                        $user['id'],
                        ucfirst($user['user_name']),
                        $user['country'],
                        $user['url']
                    ];

                    fputcsv($output, $user_row);

                }
            }

            return redirect()->action('PagesController@index');
        }
  else
        {
            return redirect('/registerform');
        }
    }
}
