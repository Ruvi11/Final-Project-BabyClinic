<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Growt_Chart;
use Illuminate\Http\Response;
use Illuminate\Http\Request;



class Growt_ChartController extends Controller
{
    protected $grow;
    public function __construct()
    {
        $this->grow = new Growt_Chart();
    }
    public function index()
    {
        $response['growthcharts'] = $this->grow->all();
        return view('growth.grow')->with($response);
    }

    public function store(Request $request)
    {

        $this->grow->create($request->all());
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $response['grow'] = $this->grow->find($id);
        return view('growth.edit')->with($response);
    }
    public function update(Request $request, string $id)
    {
        $grow = $this->grow->find($id);
        $grow->update(array_merge($grow->toArray(), $request->toArray()));
        return redirect('grow');
    }


    public function destroy(string $id)
    {
        $grow = $this->grow->find($id);
        $grow->delete();
        return redirect('grow');
    }
}
    

