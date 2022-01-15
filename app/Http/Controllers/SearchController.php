<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Alumni;
use App\Searchkta;


class SearchController extends Controller
{
    public function search_kta(Request $request){
        if($request->ajax()){
            $data=User::where('id','like','%'.$request->search.'%' )
            ->orwhere('nama','like','%'.$request->search.'%')
            ->orwhere('email','like','%'.$request->search.'%')->get();

            $output='';
        if(count($data)>0){

            $output ='
            <table id="myInput" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                       <th scope="col">#</th>
                       <th scope="col">Nama</th>
                       <th scope="col">Usernama</th>
                       <th scope="col">Email</th>
                      </tr>     
                    </thead>
                    <tbody>';

                          
                      foreach ($data as $row) {
                        $output .='
                        <tr>
                         <th scope="row">'.$row->count().'</th>
                         <td>'.$row->nama.'</td>
                         <td>'.$row->username.'</td>
                         <td>'.$row->email.'</td>
                        </tr>
                        ';
                      }

                $output .= '    
                    </tbody>
                </table>';


        }
        else{
            $output .='No Results';
        }
        return $output;
        }
    }
}
