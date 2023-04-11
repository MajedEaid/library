<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with('Category','Author')->orderBy('id' , 'desc')->simplePaginate(5);
        return response()->view('cms.book.index' , compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return response()->view('cms.book.create' , compact('categories' , 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all() ,[

            'title' => 'required|string' ,
            'image'=>"required|image|max:2048|mimes:png,jpg,jpeg,pdf",
            'price' => 'required|numeric' ,
            'short_description' => 'required|string|min:4' ,
            'full_description' => 'required|string|min:4' ,
            'category_id' => 'required' ,
            'author_id' => 'required' ,
        ],[
            'title.required' =>"الرجاء ادخال الايميل ",
            'image.image' => ' الرجاء اضافة صورة  ' ,
            'image.mimes' => ' png,jpg,jpeg,pdf الرجاء ادخال الصورة بامتدادات التالية' ,
            'price.required' =>"الرجاء ادخال السعر ",
            'short_description.required' =>"الرجاء ادخال الوصف المختصر ",
            'full_description.required' =>" الرجاء ادخال  الوصف الكامل ",
            'category_id.required' =>"الرجاء ادخال اسم التصنيف ",
            'author_id.required' =>"الرجاء ادخال الايميل ",
        ]);

        if(! $validator->fails()){
            $books = new Book();
            $books->title = $request->get('title');
            $books->price = $request->get('price');
            $books->short_description = $request->get('short_description');
            $books->full_description = $request->get('full_description');
            $books->category_id = $request->get('category_id');
            $books->author_id = $request->get('author_id');
            
            if(request()->hasFile('image')){
                $image = $request->file('image');
                $imageName = time() . 'image' . $image->getClientOriginalExtension();
                $image->move('storage/images/book' , $imageName);
                $books->image = $imageName;
            }
            $isSaved = $books->save();

            return response()->json(['icon' => $isSaved ? 'success' : 'error' , 'title' => $isSaved ? "Created is Successfully" : "Created is Failed"] , $isSaved ? 200 : 400);

        }

        else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first()] , 400);
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
        $authors = Author::all();
        $categories = Category::all();
        $books = Book::findOrFail($id);
        return response()->view('cms.book.show' , compact('books' , 'authors' , 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Book::findOrFail($id);
        $authors = Author::all();
        $categories = Category::all();
        return response()->view('cms.book.edit' , compact('books' , 'authors' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all() ,[

            'title' => 'required|string' ,
            'image'=>"required|image|max:2048|mimes:png,jpg,jpeg,pdf",
            'price' => 'required|numeric' ,
            'short_description' => 'required|string|min:4' ,
            'full_description' => 'required|string|min:4' ,
            'category_id' => 'required' ,
            'author_id' => 'required' ,
        ],[
            'title.required' =>"الرجاء ادخال الايميل ",
            'image.image' => ' الرجاء اضافة صورة  ' ,
            'image.mimes' => ' png,jpg,jpeg,pdf الرجاء ادخال الصورة بامتدادات التالية' ,
            'price.required' =>"الرجاء ادخال السعر ",
            'short_description.required' =>"الرجاء ادخال الوصف المختصر ",
            'full_description.required' =>" الرجاء ادخال  الوصف الكامل ",
            'category_id.required' =>"الرجاء ادخال اسم التصنيف ",
            'author_id.required' =>"الرجاء ادخال الايميل ",
        ]);

        if(! $validator->fails()){
            $books = new Book();
            $books->title = $request->get('title');

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();
                $image->move('storage/images/book', $imageName);
                $books->image = $imageName;
                }

            $books->price = $request->get('price');
            $books->short_description = $request->get('short_description');
            $books->full_description = $request->get('full_description');
            $books->category_id = $request->get('category_id');
            $books->author_id = $request->get('author_id');

            $isUpdate = $books->save();
            return ['redirect' => route('books.index')];
            return response()->json(['icon' => $isUpdate ? 'success' : 'error' , 'title' => $isUpdate ? "Created is Successfully" : "Created is Failed"] , $isUpdate ? 200 : 400);

        }

        else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first()] , 400);
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
        $cities = Book::destroy($id);
    }
}
