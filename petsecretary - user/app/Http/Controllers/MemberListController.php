<?php 
    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\DB; 
    use App\Http\Controllers\Controller; 
    use App\Http\Requests;

class MemberListController extends Controller { 
    public function show() { 
        $members = DB::select('select * from Members'); 
        return
        view('members_view',['members'=>$members]); 
    } 
}