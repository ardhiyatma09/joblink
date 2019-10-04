<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseAdminController extends Controller
{
    public function index(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseService.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://joblink-e7c44.firebaseio.com')
            ->create();
        $database = $firebase->getDatabase();

        $ref = $database->getReference('Users');

        $users = $ref->getValue();

        foreach ($users as $user){

            $all_subject[] = $user;
        }

        return view('admin.user',compact('all_subject'));
    }

    public function listJob(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseService.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://joblink-e7c44.firebaseio.com')
            ->create();
        $database = $firebase->getDatabase();

        $ref = $database->getReference('Users');

        $users = $ref->getValue();
        foreach ($users as $key=>$user){
            if($users[$key]["job"] == "null"){

            }else if($users[$key]["job"] != null) {
                $all_jobs[] = $users[$key]["job"];
            }
        }
        return view('admin.jobList',compact('all_jobs'));
    }
}
