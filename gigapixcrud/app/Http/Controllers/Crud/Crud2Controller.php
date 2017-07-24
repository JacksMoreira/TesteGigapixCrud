<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;
class Crud2Controller extends Controller
{
    private $product;


    public function __construct(Product $product) {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();
        return view('Crud.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //O index e o create estão trocados, mas não danifica o codigo apenas um pouco o entendimento
        $products = $this->product->all();
        return view('Crud.lista', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        
        
        
       $dataForm = $request->except('_token');
       $insert = $this->product->insert($dataForm);
       if($insert){
           return redirect()->route('crud.create');
       }else{
           return redirect()->back();
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
         $product = $this->product->find($id);
         return view('Crud.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->product->find($id);
        
        return view('Crud.index', compact('product'));
        
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
        $dataForm = $request->all();
        
        $product = $this->product->find($id);
        
        $update = $product->update($dataForm);
        
        if($update){
            return redirect()->route('crud.create');
        }else{
            return redirect()->route('crud.index',$id)->with(['errors'=>'Falha ao Editar!']);
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
        $product = $this->product->find($id);
        
        $delete = $product->delete();
        
        if($delete){
            return redirect()->route('crud.create');
        }else{
            return redirect()->route('crud.show', $id)->with(['errors' => 'Falha ao deletar!']);
        }
    }
  
}
