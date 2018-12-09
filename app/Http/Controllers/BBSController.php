<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BBSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function __construct() {
        this->
    }
    */
    public function index()
    {
        require_once("boardDao.php");
		require_once("tools.php");

		$page = requestValue("page"); 
		if ($page < 1)
			$page = 1;

		$dao = new BoardDao();
		$startRecord = ($page-1)*10; 
		$msgs = $dao->getPageMsgs($startRecord, 10);
        
        $numPageLinks = 10;
        $numMsgs = 10; 
        $startPage = floor(($page-1)/$numPageLinks)*$numPageLinks+1;
        $endPage = $startPage + ($numPageLinks-1);
        $count = $dao->getTotalCount(); 
        $totalPages = ceil($count/$numMsgs); 
        if($endPage > $totalPages) 
            $endPage = $totalPages;
        
         return view('bbs.review')->with('page', $page)
	    		->with('startRecord', $startRecord)
	    		->with('msgs', $msgs)
	    		->with('numPageLinks', $numPageLinks)
	    		->with('numMsgs', $numMsgs)
	    		->with('startPage',$startPage)
	    		->with('endPage', $endPage)
	    		->with('totalPages', $totalPages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bbs.write_petform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        require_once("tools.php");
        require_once("boardDao.php"); 

        $title = requestValue("title");
        $writer = requestValue("writer");
        $content = requestValue("content");

        if ($title && $writer && $content) {
            $dao = new BoardDao();
            $dao->insertMsg($title, $writer, $content);
            return redirect('bbs')->with('message', '새로운 글이 정상적으로 입력되었습니다.');
        }else {
            errorBack("모든 항목이 빈칸 없이 입력되어야 합니다.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        	require_once("tools.php");
            require_once("boardDao.php");
        
            $num = requestValue("num");
            $page = requestValue("page");
            $dao = new boardDao();
            $dao->increaseHits($num); 
            $msg = $dao->getMsg($num); 
        
            return view('bbs.modify_petform')
                        ->with('num', $num)
                        ->with('page', $page)
                        ->with('msg', $msg);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        require_once("boardDao.php");
        require_once("tools.php");

        $content = requestValue("content");
        $title = requestValue("title");
        $num = requestValue("num");
        $writer = requestValue("writer");

        if(content && title && num && writer){ 
            $dao = new BoardDao();
            $dao->updateMsg($num, $title, $writer, $content); 
            return redirect('bbs?page=$page')->with('message', $num . '번 글이 수정되었습니다.');
        }else {
            errorBack("모든 항목이 빈칸 없이 입력되어야 합니다."); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           require_once("tools.php");
           require_once("boardDao.php");

           $num = requestValue("num");
           $page = requestValue("page");

           $dao = new boardDao();

           $dao->deleteMsg($num);

           return redirect('bbs?page=$page')
	    		->with('message', $num . '번 게시글이 삭제되었습니다.');
    }
}
