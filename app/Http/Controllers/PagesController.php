<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Receipt;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller {
    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->user=\Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if($this->user->isAdmin()){
            return \Redirect::route('admin.home');
        }
        if($this->user->isBusiness()){
            return \Redirect::route('business.receipts');
        }
        return view('pages.home');
    }

    /**
     * Show user receipts.
     *
     * @return Response
     */
    public function receipts()
    {
        $receipts=$this->user->receipts()->paginate(30);
        return view('pages.receipts', compact('receipts'));
    }

    /**
     * Show user categories.
     * @return Response
     */
    public function categories()
    {
        if($this->user->categories()->count() > 0){
            $categories = $this->user->categories()->paginate(10);
        }else{
            $categories=Category::paginate(10);
        }

        return view('pages.categories', compact('categories'));
    }

    /**
     * Show user receipts of a specific Category.
     *
     * @param  int  $id
     * @return Response
     */
    public function browseCategory($id)
    {

        $receipts = Receipt::whereHas('categories', function ($query) use ($id) {
            $query->where('id', '=', $id);
        })->where('user_id', '=', $this->user->id)->paginate();

        return view('pages.receipts', compact('receipts'))->with('page_title', Category::find($id)->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
